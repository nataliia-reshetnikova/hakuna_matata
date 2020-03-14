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

        //get the actual user from database
        //if there is no user, ot will return 404
        $user = User::findOrFail($user);
        return view('home', ['user'=>$user]);
    }
}