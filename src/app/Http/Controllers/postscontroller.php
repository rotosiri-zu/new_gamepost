<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class postscontroller extends Controller
{

    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->image = $request->image;
        $post->title = $request->title;
        $post->genre = $request->genre;
        $post->price = $request->price;
        $post->save();
        return redirect()->route('top');
    }
}
