<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationCodeEmail;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'jmbg' => 'required|unique:users',
        ]);

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $username = str_replace(' ', '', strtolower($request->first_name . $request->last_name . rand(1, 1000)));
        $user->username = $username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->gender = $request->gender;
        $user->country_of_birth = $request->country_of_birth;
        $user->place_of_birth = $request->place_of_birth;
        $user->date_of_birth = $request->date_of_birth;
        $user->jmbg = $request->jmbg;
        $user->mobile_phone = $request->input('mobile_phone');

        $user->type = $request->type;
        if ($request->type == 'user' || $request->type == 'moderator') {
            $user->status = 'sent';
        } else {
            $user->status = 'approved';
        }

        if ($request->hasFile('profile_picture')) {
            $image = $request->file('profile_picture');
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $user->profile_picture = $profileImage;
        }

        $existingUser = User::where('email', $user->email)->first();
        if ($existingUser) {
            return redirect('register')->withErrors(['email' => 'Korisnik sa ovom email adresom već postoji.']);
        }

        session(['verification_email' => $user->email]);
        session(['verification_code' => mt_rand(100000, 999999)]);

        Mail::to($user->email)->send(new VerificationCodeEmail(session('verification_code')));
        $user->save();
        return redirect('verify')->with('success', 'Proverite e-mail poštu. Poslat Vam je verifikacioni kod. Vaše korisničko ime je: ' . $username);
    }

    public function verifyCode(Request $request)
    {
        $request->validate([
            'verification_code' => ['required', 'string'],
        ]);
    
        $input_code = $request->verification_code;
        $saved_code = session('verification_code');
        $verification_email = session('verification_email');
    
        if ($input_code == $saved_code) {
            $user = User::where('email', $verification_email)->first();
    
            if ($user) {
                $user->status = 'approved';
                $user->save();
    
                session()->forget(['verification_code', 'verification_email']);
    
                return redirect()->route('login')->with([
                    'success' => 'Uspešno ste verifikovani i registrovani. Sada se možete prijaviti.',
                    'username' => $user->username,
                ]);
            } else {
                return redirect()->route('login')->withErrors(['verification_code' => 'Greška pri verifikaciji.']);
            }
        } else {
            return back()->withErrors(['verification_code' => 'Verifikacioni kod nije ispravan.']);
        }
    }
    
}
