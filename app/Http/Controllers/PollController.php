<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poll;
use App\Models\Topic;

class PollController extends Controller
{
    public function index($topic_id) {
        // Preuzimanje svih anketa za zadati topic_id
        $polls = Poll::where('topic_id', $topic_id)->get();
        $topic = Topic::findOrFail($topic_id);
        
        // Prosleđivanje podataka šablonu
        return view('tests', compact('polls', 'topic', 'topic_id'));
    }
    
    public function store(Request $request)
    {
        // Validacija podataka
        $request->validate([
            'pollQuestion' => 'required|string|max:255',
            'pollOption1' => 'required|string|max:255',
            'pollOption2' => 'required|string|max:255',
            'pollOption3' => 'required|string|max:255',
            'topic_id' => 'required|exists:topics,id',
        ]);

        // Kreiranje nove ankete
        $poll = new Poll;
        $poll->question = $request->pollQuestion;
        $poll->options = [$request->pollOption1, $request->pollOption2, $request->pollOption3];
        $poll->votes = [0, 0, 0];
        $poll->topic_id = $request->topic_id;
        $poll->save();

        return redirect()->route('tests', ['topic_id' => $request->topic_id])->with('success');
    }

    public function vote(Request $request, $id)
    {
        // Pronalaženje ankete po ID-ju
        $poll = Poll::find($id);
        
        $option = $request->input('option');
    
        $votes = $poll->votes; 
    
        if (!isset($votes[$option])) {
            return redirect()->back()->with('error');
        }
    
        // Ažuriranje glasova
        $votes[$option]++;
        $poll->votes = $votes; 
        $poll->save();

        return redirect()->back()->with('success');
    }
    
    

}
