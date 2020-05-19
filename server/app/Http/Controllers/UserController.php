<?php

namespace App\Http\Controllers;

use App\User;
use App\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{

    public function show(User $user)
    {
        $posts = $user->posts->sortByDesc('created_at');
        $positions = $user->positions;
        $now = date('Ymd');
        $birthday  = $user->birthday;
        $replace_birthday = (int)date('Ymd', strtotime($birthday));
        if($birthday !== null)
        {
            $age = floor(($now - $replace_birthday)/10000);
            return view('users.show', [
                'user' => $user,
                'posts' => $posts,
                'positions' => $positions,
                'age' => $age,
            ]);
        } else {
            return view('users.show', [
                'user' => $user,
                'posts' => $posts,
                'positions' => $positions,
            ]);
        }
    }

    public function edit(User $user)
    {
        $positions = Position::all();
        $checked_positions = $user->positions;
        $unchecked_positions = $positions->diff($checked_positions);
        $merged_positions = $unchecked_positions->merge($checked_positions);

        $sorted_positions = $merged_positions->sortBy('id');
        Log::debug($sorted_positions);
        return view('users.edit', [
            'user' => $user,
            'positions' => $positions,
            'sorted_positions' => $sorted_positions,
        ]);
    }

    public function update(Request $request, User $user)
    {
        $user->fill($request->all());
        $user->save();
        $user->positions()->sync($request->positions);

        return redirect()->route('user.show', [
            'user' => $user,
        ]);
    }

    public function checkedYourself($request, $user) 
    {
        if ($user->id === $request->user()->id)
        {
          return abort('404', 'Cannot follow yourself.');
        }
    }

    public function detachData(Request $request, User $user)
    {
        $request->user()->followings()->detach($user);
    }

    public function followings(User $user)
    {
        $followings = $user->followings->sortByDesc('created_at');

        return view('users.followings', [
            'user' => $user,
            'followings' => $followings,
        ]);
    }

    public function followers(User $user)
    {
        $followers = $user->followers->sortByDesc('created_at');

        return view('users.followers', [
            'user' => $user,
            'followers' => $followers,
        ]);
    }

    public function follow(Request $request, User $user)
    {
        $this->checkedYourself($request, $user);
        $this->detachData($request, $user);
        $request->user()->followings()->attach($user);
        return ['user' => $user];
    }

    public function unfollow(Request $request, User $user)
    {
        $this->checkedYourself($request, $user);
        $this->detachData($request, $user);
        return ['user' => $user];
    }
}
