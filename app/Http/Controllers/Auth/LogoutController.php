<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function store()
    {
        if(session()->has('login_id')){
            session()->forget('login_id'); // Možete koristiti 'pull' ili 'forget' metodu za uklanjanje sesije
            return redirect()->route('login'); // Redirekcija na stranicu za prijavu
        } else {
            return redirect()->route('login'); // U slučaju da korisnik nije prijavljen, takođe ga preusmerite na stranicu za prijavu
        }
    }
}
