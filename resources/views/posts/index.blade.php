@extends('layouts.app')

@section('content')
<div class="container">
    @if(count($posts)>0)
    <h2 class="text-center font-weight-light">Latest posts:</h2>
    @endif
        @foreach($posts as $post)
        <div class="row mt-5">
                <div class="col-6 offset-4">
                    <a href="/profile/{{$post->user->id}}">
                        <img src="/storage/{{$post->image}}" alt="" style="height:400px">
                    </a>
                </div>
                </div>

                <div class="row pt-2 pb-4">
                <div class="col-6 offset-4">
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
        @endforeach
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
            <!-- pagination of posts -->
                {{ $posts->links() }}
            </div>
        </div>
        <h2 class="text-center font-weight-light mt-5">Profiles you might start following:</h2>
        @foreach($profiles as $profile)
        <div class="row mt-5">
                <div class="col-2 offset-4">
                    <a href="/profile/{{$profile->user_id}}">
                    @if($profile->image!='')
                        <img src="/storage/{{$profile->image}}" alt="" style="height:100px">
                    @else
                        <img src="/img/noImage.jpeg" alt="" style="height:100px">
                    @endif
                    </a>
                </div><!-- </col-5> -->
                <div class="col-6">
                    <p>                
                        <span class="font-weight-bold">
                            <a href="/profile/{{$profile->user_id}}">
                                <span class="text-dark">{{$profile->title}}</span>
                            </a>
                        </span>
                        {{$profile->description}}
                    </p>
                </div><!-- </col-7> -->
        </div><!--row mt-5-->
        @endforeach
</div><!-- </container> -->
@endsection
