<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
  public function index()
  {
      $posts = Post::orderBy('created_at', 'desc')->get();
      return view('posts.index', ['posts' => $posts]);
  }

  public function create()
  {
    $list = \App\platform::all();
    return response()->json(['lists' => $list]);
    return view('posts.create');
  }

  public function store(Request $request)
  {
      $post = new Post;
      $post->image = $request->image;
      $post->title = $request->title;
      $post->genre = $request->genre;
      $post->price = $request->price;
      $post->text = $request->text;
      $post->save();
      return redirect()->route('top');
  }

  public function show($post_id)
  {
      $post = Post::findOrFail($post_id);
      return view('posts.show', ['post' => $post]);
  }
}
