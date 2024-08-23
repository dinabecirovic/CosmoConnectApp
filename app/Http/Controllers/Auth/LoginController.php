<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('username', $request->username)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('login_id', $user->id);
                $request->session()->put('first_name', $user->first_name);
                $request->session()->put('last_name', $user->last_name);

                if ($user->type == 'administrator') {
                    return redirect('administrator');
                } elseif ($user->type == 'moderator') {
                    if ($user->request == 'on_hold') {
                        return back()->with('fail', 'Vaš zahtev za registraciju još uvek nije prihvaćen!');
                    } elseif ($user->request == 'rejected') {
                        return back()->with('fail', 'Vaš zahtev za registraciju je odbijen!');
                    } else {
                        return redirect('moderator');
                    }
                } else {
                    if ($user->request == 'on_hold') {
                        return back()->with('fail', 'Vaš zahtev za registraciju još uvek nije prihvaćen!');
                    } elseif ($user->request == 'rejected') {
                        return back()->with('fail', 'Vaš zahtev za registraciju je odbijen!');
                    } else {
                        return redirect('user');
                    }
                }
            } else {
                return back()->with('fail', 'Neispravno uneta lozinka.');
            }
        } else {
            return back()->with('fail', 'Proverite da li ste ispravno uneli korisničko ime i lozinku.');
        }
    }

    public function login_user(Request $request)
    {
        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            return view('home');
        }

        return back();
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return view('home');
    }
}
