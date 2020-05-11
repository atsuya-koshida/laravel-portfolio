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

    public function follow(Request $request, User $user)
    {
        if ($user->id === $request->user()->id)
        {
            return abort('404', 'Cannot follow yourself.');
        }

        $request->user()->followings()->detach($user);
        $request->user()->followings()->attach($user);

        return ['user' => $user];
    }

    public function unfollow(Request $request, User $user)
    {
        if ($user->id === $request->user()->id)
        {
            return abort('404', 'Cannot follow yourself.');
        }

        $request->user()->followings()->detach($user);
        
        return ['user' => $user];
    }
}
