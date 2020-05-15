<?php

namespace App\Http\Controllers;

use App\Group;
use App\User;
use App\Http\Requests\GroupRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $groups = $user->groups->sortByDesc('created_at');
        return view('groups.index', [
            'groups' => $groups,
        ]);
    }

    public function show(Group $group)
    {
        $user = Auth::user();
        $groups = $user->groups->sortByDesc('created_at');
        return view('groups.show', [
            'group' => $group,
            'groups' => $groups,
        ]);
    }

    public function create()
    {
        $user = Auth::user();
        $followings = $user->followings;
        return view('groups.create', ['followings' => $followings]);
    }

    public function store(GroupRequest $request, Group $group)
    {
        $group->fill($request->all());
        $users = $request->users;
        $group->save();
        foreach ($users as $key => $user) {
            $group->users()->attach($user);
        }
        $group->users()->attach(Auth::user());
        return redirect()->route('group.index');
    }

    public function edit(Group $group)
    {
        return view('groups.edit', ['group' => $group]);
    }

    public function update(GroupRequest $request, Group $group)
    {
        $group->fill($request->all());
        $group->save();
        return redirect()->route('group.show', ['group' => $group]);
    }
}
