@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-8">
        <img src="/storage/{{$post->image}}" alt="" style="height:400px">
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center">
                <div class="pr-3">
                <img src="/storage/{{$post->user->profile->image}}" style="max-width:40px" class="rounded-circle w-100">
                </div>
                <div>
                    <div class="font-weight-bold">
                        <a href="/profile/{{$post->user->id}}">
                            <span class="text-dark">{{$post->user->username}}</span>
                        </a>
                    </div>
                </div>
                    <a style = "height:35px" class="btn btn-primary mt-1 ml-5" href="#">Follow</a>
            </div>
            <hr/>
            <p>                
                <span class="font-weight-bold">
                    <a href="/profile/{{$post->user->id}}">
                        <span class="text-dark">{{$post->user->username}}</span>
                    </a>
                </span>
                {{$post->caption}}
            </p>
        </div>
    </div>
</div>
@endsection
