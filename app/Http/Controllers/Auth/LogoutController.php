<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function store()
    {
        if(session()->has('login_id')){
            session()->forget('login_id'); 
            return redirect()->route('login'); 
        } else {
            return redirect()->route('login'); 
        }
    }
}
