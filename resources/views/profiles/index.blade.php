@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle w-100" src="{{$user ->profile-> profileImage()}}">
        </div>
        <div class="col-9 p-5">
            <div class="d-flex pt-2">
                <h1 class = "pr-2 font-weight-light">{{$user -> username}}</h1>
                @can('update', $user->profile)
                <a href="/p/create"style = "height:35px" class="btn btn-primary mt-1 ml-5">Add New Post</a>
                <a href="/profile/{{$user->id}}/edit"style = "height:35px" class="btn btn-primary mt-1 ml-3">Edit Profile</a>
                @endcan
            </div>

            <div class="d-flex">
                <div class="pr-4"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-4"><strong>195</strong> followers</div>
                <div class="pr-4"><strong>383</strong> following</div>
            </div>
            <div class = "pt-1 ">{{$user -> profile -> title}}</div>
            <div class = "pt-1 ">{{$user -> profile -> description}}</div>
            <div class = "pt-1 font-weight-bold"><a href="https://github.com/nataliereshetnikova">{{$user -> profile -> url}}</a></div>
        </div>
    </div>
    <hr/>
    <div class="row pt-5">
    @foreach($user ->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}"><img class="w-100" src="/storage/{{$post->image}}" alt=""></a>
        </div>
    @endforeach
    </div>
</div>
@endsection
