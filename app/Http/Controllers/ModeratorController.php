<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\User;
use App\Models\Follow;

class ModeratorController extends Controller
{
    public function moderator()
    {
        return view('auth.moderator');
    }

    public function trainees(){
        // Preuzimanje svih tema
        $topics = Topic::all();
    
        // Kreiranje niza u kojem će se čuvati korisnici za svaku temu
        $usersPerTopic = [];
    
        foreach ($topics as $topic) {
            // Preuzimanje svih korisnika koji prate ovu temu
            $users = User::whereIn('id', Follow::where('topic_id', $topic->id)->pluck('user_id'))->get();
            // Smeštanje korisnika u niz sa ključem teme
            $usersPerTopic[$topic->id] = $users;
        }
    
        return view('auth.trainees', ['topics' => $topics, 'usersPerTopic' => $usersPerTopic]);
    }
    public function removeUserFromTopic($user_id, $topic_id) {
        // Brisanje zapisa iz tabele 'follows'
        Follow::where('user_id', $user_id)->where('topic_id', $topic_id)->delete();
    
        return redirect()->back()->with('success', 'Korisnik je uspešno uklonjen iz teme.');
    }
    
    
}
