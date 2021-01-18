<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Genre;

class PostsController extends Controller
{
  public function index()
  {
      $posts = Post::orderBy('created_at', 'desc')->get();
      return view('posts.index', ['posts' => $posts]);
  }

  public function create()
  {
    // $list = \App\platform::all();
    // return response()->json(['lists' => $list]);
    $genre = new Genre;
    $genres = $genre->getGenerLists()->prepend('選択してください', '');

    return view('posts.create', ['genres' => $genres]);
  }

  public function store(Request $request)
  {

      $post = new Post;
      $post->image = $request->image;
      $post->title = $request->title;
      $post->price = $request->price;
      $post->text = $request->text;
      $post->genre_id = $request->genre_id;
      // $post->paltform_id = $request->paltform_id;
      $post->save();

      return redirect()->route('top');
  }

  public function show($post_id)
  {
      $post = Post::findOrFail($post_id);
      return view('posts.show', ['post' => $post]);
  }
}
