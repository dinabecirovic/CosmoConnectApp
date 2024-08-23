<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class TopicController extends Controller
{
    public function showTopics()
    {
        try {
            $topics = Topic::all();
            Log::info('Teme su uspešno učitane.', ['topics' => $topics]);
            return view('auth.moderator', ['topics' => $topics]);
        } catch (\Exception $e) {
            Log::error('Greška prilikom učitavanja tema.', ['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Došlo je do greške prilikom učitavanja tema.');
        }
    }

    public function storeT(Request $request)
    {
        try {
            $loginId = Auth::user()->id;
            $firstName = Auth::user()->first_name;

            $validated = $request->validate([
                'topic_title' => 'required|string|max:255',
                'topic' => 'required|string|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            
            $topic = new Topic();
            $topic->topic_title = $request->topic_title;
            $topic->topic = $request->topic;
            $topic->IdP = $loginId;
            $topic->moderator_name = $firstName;
            $topic->activity = 'open';

            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $topic->image = $imageName;
            }

            $topic->save();
            return redirect()->route('moderator')->with('success', 'Tema je uspešno kreirana.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Došlo je do greške prilikom kreiranja teme: ' . $e->getMessage());
        }
    }

    public function destroyT($id)
    {
        try {
            $topic = Topic::find($id);
            if ($topic) {
                $topic->delete();
                Log::info('Tema je uspešno izbrisana.', ['topic_id' => $id]);
            }
            return redirect()->route('moderator')->with('success', 'Tema je izbrisana.');
        } catch (\Exception $e) {
            Log::error('Greška prilikom brisanja teme.', ['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Došlo je do greške prilikom brisanja teme.');
        }
    }

    public function closeT($id)
    {
        try {
            $topic = Topic::find($id);
            if ($topic) {
                $topic->activity = 'close';
                $topic->save();
                Log::info('Tema je uspešno zatvorena.', ['topic_id' => $id]);
            }
            return redirect()->route('moderator')->with('success', 'Tema je zatvorena.');
        } catch (\Exception $e) {
            Log::error('Greška prilikom zatvaranja teme.', ['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Došlo je do greške prilikom zatvaranja teme.');
        }
    }
}
