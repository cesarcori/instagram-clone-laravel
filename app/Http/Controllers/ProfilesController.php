<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        /*dd(User::find($user));*/
        //$user = User::findOrFail($user);

        //return view('profiles.index', [
            //'user' => $user,
        //]);
        return view('profiles.index', compact('user'))
    }

    public function edit(User $user)
    {
        return view('profiles.edit', compact('user'))
    }
}
