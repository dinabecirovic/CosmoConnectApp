<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('')->except('logout');
    }*/

    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->user_id = $request->user_id;
        $post->like = $request->like;
        $post->comment = $request->comment;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $post->image = $postImage;
        }

        $post->save();
        

        return redirect('posts');
    }
    public function like($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return redirect()->route('posts')->with('error', 'Post nije pronađen.');
        }

        $post->likes++;
        $post->save();

        return redirect()->route('posts')->with('success', 'Lajkovanje uspešno.');
    }

   
}
