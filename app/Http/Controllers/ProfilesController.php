<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    public function index($user)
    {
        //for debugging
        //dd($user);

        //get the actual user from database
        //if there is no user, ot will return 404
        $user = User::findOrFail($user);
        $follows = (auth()->user()) ? auth()->user()->following->contains($user): false;
        
        $postCount = Cache::remember(
            'count.posts'.$user->id, 
            now()->addSeconds(30), 
            function() use ($user){
            return $user->posts->count();
        });

        $followersCount = Cache::remember(
            'count.followers'.$user->id, 
            now()->addSeconds(30), 
            function() use ($user){
            return $user->profile->followers->count();
        });

        
        $followersCount = Cache::remember(
            'count.following'.$user->id, 
            now()->addSeconds(30), 
            function() use ($user){
            return $user->following->count();
        });

        return view('profiles.index', compac('user', 'follows', 'postCount', 'followersCount', 'followingCount'));
    }
    //another way to get user info from db
    public function edit(User $user){
        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);

        if (request('image')) {
            $imagePath = request('image')->store('profile', 'public');

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();

            $imageArray = ['image' => $imagePath];
        }

        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));

        return redirect("/profile/{$user->id}");
    }
}