<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\News;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AdministratorController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('auth.administrator', compact('news'));
    }

    public function show()
    {  
        $moderatorType = "moderator";
        $userType = "user";
        $moderators = User::where('type', '=', $moderatorType)->get();
        $users = User::where('type', '=', $userType)->get();
        $news = News::all();

        return view('auth.administrator', [
            'users' => $users,
            'moderators' => $moderators,
            'news' => $news
        ]);
    }

    public function destroyUser(User $user)
    {
        $user->delete();
        return redirect('administrator');
    }

    public function destroyNews(News $news)
    {
        $news->delete();
        return redirect('administrator_news');
    }

    public function showNews()
    {
        $news = News::all();
        $news = News::orderBy('created_at', 'desc')->get();
        return view('auth.administrator_news', compact('news'));
    }

    public function storeNews(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'details' => 'required'
        ]);
        

        News::create($request->all());

        return redirect('administrator_news')->with('success');
    }
}