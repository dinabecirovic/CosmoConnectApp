<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Follow;
use App\Models\Topic;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showFollowedTopics()
    {
        $loginId = Auth::user()->id;

        // Dobijanje ID-ova zapraćenih tema
        $followedTopicIds = Follow::where('user_id', $loginId)->pluck('topic_id')->toArray();

        // Dobijanje zapraćenih tema
        $followedTopics = Topic::whereIn('id', $followedTopicIds)->get();

        return view('auth.my_topics2', [
            'followedTopics' => $followedTopics
        ]);
    }

    public function showNotFollowedTopics()
    {
        $loginId = Auth::user()->id;

        // Dobijanje ID-ova zapraćenih tema
        $followedTopicIds = Follow::where('user_id', $loginId)->pluck('topic_id')->toArray();

        // Dobijanje nezapraćenih tema
        $notFollowedTopics = Topic::whereNotIn('id', $followedTopicIds)->get();

        return view('auth.my_topics', [
            'notFollowedTopics' => $notFollowedTopics
        ]);
    }

    public function follow(Request $request)
    {
        $loginId = Auth::user()->id;

        try {
            $follow = Follow::create(['user_id' => $loginId, 'topic_id' => $request->topic_id]);

            if ($follow) {
                return redirect()->back()->with('success', 'Tema je uspešno zapraćena.');
            } else {
                return redirect()->back()->with('error', 'Došlo je do greške pri zapraćivanju teme.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Došlo je do greške: ' . $e->getMessage());
        }
    }
}
