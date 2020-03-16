@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle" src="https://instagram.fyhu1-1.fna.fbcdn.net/v/t51.2885-19/s150x150/11887092_1020115081366926_108378878_a.jpg?_nc_ht=instagram.fyhu1-1.fna.fbcdn.net&_nc_ohc=rTdRA0px3wwAX-Y45h9&oh=04ed3b94c64aa42c77ede7ebc1274b49&oe=5E93BD55">
        </div>
        <div class="col-9 p-5">
            <div class="d-flex pt-2">
                <h1 class = "pr-2 font-weight-light">{{$user -> username}}</h1>
                <a href="/p/create"style = "height:35px" class="btn btn-primary mt-1">Add New Post</a>
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
            <img class="w-100" src="/storage/{{$post->image}}" alt="">
        </div>
    @endforeach
    </div>
</div>
@endsection
