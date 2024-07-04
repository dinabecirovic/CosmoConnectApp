<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TopicController extends Controller
{
    public function storeTs(Request $request)
    {
        $request->validate([
            'topic_title' => 'required',
            'topic' => 'required',
            'moderator_name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $t = new Topic();
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        $t::create($input);

        return redirect('/moderator')
                        ->with('success', 'Nova tema je postavljena.');
    }

    public function CloseT(Request $request)
    {
        $data = Topic::find($request->id);
        $data->activity = 'close';
        $data->save();

        return redirect('/moderator');
    }

    public function showTopics()
    {
        $datat = Topic::all();
        //dd($datat);
        $dat = Material::all();
    return view('auth.moderator', ['topics' => $datat, 'material' => $dat]);
    }

    public function destroyT(Topic $topic)
    {
        $topics->delete();
        return redirect('moderator');
    }
}
