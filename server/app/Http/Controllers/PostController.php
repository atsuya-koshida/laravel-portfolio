<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(PostRequest $request, Post $post)
    {
        $post->fill($request->all());
        $post->user_id = $request->user()->id;
        $post->save();
        return redirect()->route('home');
    }
}