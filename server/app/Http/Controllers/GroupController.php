<?php

namespace App\Http\Controllers;

use App\Group;
use App\User;
use App\Http\Requests\GroupRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GroupController extends Controller
{
    public function index()
    {
        return view('groups.index');
    }

    public function create(Group $group)
    {
        return view('groups.create');
    }

    public function store(GroupRequest $request, Group $group)
    {
        $group->fill($request->all());
        $user = $request->user();
        $group->save();
        Log::debug($group);
        $group->users()->attach($user->id);
        
        return redirect()->route('group.index');
    }
}