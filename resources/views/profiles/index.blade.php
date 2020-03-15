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
                <div class="pr-4"><strong>468</strong> posts</div>
                <div class="pr-4"><strong>195</strong> followers</div>
                <div class="pr-4"><strong>383</strong> following</div>
            </div>
            <div class = "pt-1 ">{{$user -> profile -> title}}</div>
            <div class = "pt-1 ">{{$user -> profile -> description}}</div>
            <div class = "pt-1 font-weight-bold"><a href="https://github.com/nataliereshetnikova">{{$user -> profile -> url}}</a></div>
        </div>
    </div>
    <hr/>
    <div class="row pt-4">
        <div class="col-4">
            <img class="w-100" src="https://instagram.fyhu1-1.fna.fbcdn.net/v/t51.2885-15/e35/89122096_3085003924877286_4631885973139515278_n.jpg?_nc_ht=instagram.fyhu1-1.fna.fbcdn.net&_nc_cat=106&_nc_ohc=ggZSWNSD6AIAX-qDU41&oh=76dea8809a164f5e00d6e17448af7424&oe=5EA63973" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://instagram.fyhu1-1.fna.fbcdn.net/v/t51.2885-15/e35/88153829_197794344620886_3686473676567623170_n.jpg?_nc_ht=instagram.fyhu1-1.fna.fbcdn.net&_nc_cat=106&_nc_ohc=c8tC5ooV8qgAX_LUtK6&oh=7418e78ea00ac9f378fac79916b48d67&oe=5EA2E5B8" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://instagram.fyhu1-1.fna.fbcdn.net/v/t51.2885-15/e35/87765106_1863595600439889_5020659779966487657_n.jpg?_nc_ht=instagram.fyhu1-1.fna.fbcdn.net&_nc_cat=109&_nc_ohc=pSYdn3e27rwAX8AfAxX&oh=46c6bedb4d766bc32214d8a9f59a9967&oe=5EA4BC48" alt=""> 
        </div>
    </div>
</div>
@endsection
