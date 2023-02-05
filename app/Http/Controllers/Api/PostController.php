<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Response;

class PostController extends Controller
{
    public function getPosts()
    {
        $posts = Post::all();
        
        return Response::json($posts, 201);
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|numeric|exists:users,id',
            'title' => 'required|max:50',
            'quote' => 'required|unique:posts,quote|max:500',
        ]);
       
        $post = new Post();
        $post->user_id = $request->user_id;
        $post->title = $request->title;
        $post->quote = $request->quote;
        $post->save();

        return Response::json(['status' => true], 201);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'post_id' => 'required|numeric|exists:posts,id',
            'title' => 'required|max:50',
            'quote' => 'required|max:500|unique:posts,quote,' . $request->post_id,
        ]);
        $post = Post::where('id', $request->post_id)->first();
        if (!empty($post)) {
            $post->title = $request->title;
            $post->quote = $request->quote;
            $post->save();
        }

        return redirect()->back();
    }
}
