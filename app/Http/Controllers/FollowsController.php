<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function __contruct()
    {
        $this.middleware('auth');
    }

    public function store(\App\Models\User $user){

        //echo 'dupa';
        return auth()->user()->following()->toggle($user->profile); //function toggle do connecting between user - profile
    }
}
