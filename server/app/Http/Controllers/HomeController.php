<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::all()->sortByDesc('created_at');

        return view('home', ['posts' => $posts]);
    }
}
