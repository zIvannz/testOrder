<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use Auth;

class PostController extends Controller
{
    public function create(PostRequest $request)
    {
        $post = new Post();
        $post->user_id = Auth::user()->id;
        $post->title = $request->title;
        $post->quote = $request->quote;
        $post->save();

        return redirect()->back();
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'post_id' => 'required|numeric|exists:users,id',
            'title' => 'required|max:50',
            'quote' => 'required|max:500|unique:posts,quote,' . $request->post_id,
        ]);
        $post = Post::where('id', $request->post_id)->where('user_id', Auth::user()->id)->first();
        if (!empty($post)) {
            $post->user_id = Auth::user()->id;
            $post->title = $request->title;
            $post->quote = $request->quote;
            $post->save();
        }

        return redirect()->back();
    }
}   
