<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class ProfilesController extends Controller
{
    public function index($user)
    {
        //for debugging
        //dd($user);

        //how to get the actual user from database
        $user = User::find($user);
        return view('home', ['user'=>$user]);
    }
}