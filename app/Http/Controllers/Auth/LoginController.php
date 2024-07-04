<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
 
    public function store(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required',
         ]);

         $user=User::where('username', '=', $request->username)->first();
         if($user) {
            if(Hash::check($request->password, $user->password)) {
                if($user->type == 'administrator'){
                    $request->session()->put('login_id', $user->id);
                    $request->session()->put('first_name', $user->first_name);
                    return redirect('administrator');
                }
                elseif($user->type == 'moderator') {
                    if($user->request == 'on_hold') {
                        return back()->with('fail','Vaš zahtev za registraciju još uvek nije prihvaćen!');
                    }
                    elseif($user->request == 'rejected'){
                    return back()->with('fail','Vaš zahtev za registraciju je odbijen!');
                    }
                    else {
                    $request->session()->put('login_id',$user->id);
                    $request->session()->put('first_name',$user->first_name);
                    $request->session()->put('lastname',$user->lastname);
                    return redirect('moderator');
                    }
                }
                else {
                    if($user->request == 'on_hold') {
                        return back()->with('fail','Vaš zahtev za registraciju još uvek nije prihvaćen!');
                    }
                    elseif($user->request=='rejected'){
                        return back()->with('fail','Vaš zahtev za registraciju je odbijen!');
                    }
                    else {
                        $request->session()->put('login_id',$user->id);
                        $request->session()->put('first_name',$user->first_name);
                        $request->session()->put('last_name',$user->last_name);
                        return redirect('user');
                    }
                }
            }
            else {
                return back()->with('fail','Neispravno uneta lozinka.');
           }
        }
        else {
            return back()->with('fail','Proverite da li ste ispravno uneli korisničko ime i lozinku.');
        }
    }
    
    /*public function logout(){
        if(session()->has('login_id')){
            session()->pull('login_id');
            return redirect('login');
        }
    }*/
}

