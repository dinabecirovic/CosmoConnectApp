<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Session\SessionManager; // Dodajte ovu liniju
use App\Models\Post;

class MyPostController extends Controller
{
    protected $session; // Dodajte ovo polje

    public function __construct(SessionManager $session) // Dodajte ovo u konstruktor
    {
        $this->session = $session;
    }
  
    public function index()
    {
        $loginId = $this->session->get('login_id'); // Koristite $this->session umesto Session
        // Prikazuje sve postove samo za trenutno prijavljenog korisnika
        $myposts = Post::where('user_id', $loginId)->latest()->get();  
        return view('posts.create', compact('myposts'));
    }
}
