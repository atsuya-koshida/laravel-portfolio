<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Post::class, 'post');
    }

    public function index()
    {
        $posts = Post::all()->sortByDesc('created_at');
        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        $comments = $post->comments;
        return view('posts.show', [
            'post' => $post,
            'comments' => $comments,
        ]);
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

        $request->tags->each(function ($tag_name) use ($post) {
            $tag = Tag::firstOrCreate(['name' => $tag_name]);
            $post->tags()->attach($tag);
        });

        return redirect()->route('home');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(PostRequest $request, Post $post)
    {
        $post->fill($request->all())->save();
        return redirect()->route('home');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('home');
    }
}