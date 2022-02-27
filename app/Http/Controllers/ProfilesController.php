<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index()
    {
        $user = User::find(1);
//        dd($user->profile);
//        $profile = Profile::find(1);
//        dd($profile->user->name);
        return view('home', compact('user'));
    }
}
