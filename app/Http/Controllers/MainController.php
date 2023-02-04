<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class MainController extends Controller
{
    public function home()
    {
        $posts = Post::all();
        
        return view('welcome', compact('posts'));
    }
}
