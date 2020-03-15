@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="/p" enctype="multipart/form-data" accept-charset="utf-8" name="post" >
        @csrf
        <div class="col-8 offset-2">

        <div class="row">
            <h1>Add New Post</h1>
        </div>
        <div class="row">
            <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
            <input id="caption" type="text" 
            class="form-control @error('caption') is-invalid @enderror" 
            name="caption" 
            value="{{ old('caption') }}" autofocus>

            @error('caption')
                <strong class="text-danger">{{ $message }}</strong>
            @enderror
        </div>

        <div class="row">
            <label for="image" class="col-md-4 col-form-label">Post Image</label>
            <input type="file" class="form-control-file" id="image" name="image">

            @error('image')
                <strong class="text-danger">{{ $message }}</strong>
            @enderror
        </div>

        <div class="row pt-4">
            <button class="btn btn-primary">Add New Post</button>
        </div>
        </div><!--col-8 offset-2-->
    </form>
</div>
@endsection
