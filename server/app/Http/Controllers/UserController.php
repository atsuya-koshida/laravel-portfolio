<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function show(User $user)
    {
        $posts = $user->posts->sortByDesc('created_at');
        return view('users.show', [
            'user' => $user,
            'posts' => $posts,
        ]);
    }

    public function edit()
    {
        return view('users.edit');
    }
}
