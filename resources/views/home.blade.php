@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://www.seekpng.com/png/small/52-526178_logo-clipart-camera-camera-png-for-logo.png" 
            style="height: 100px;"
            class="rounded-circle"
            alt="camera-logo">        
        </div>
        <div class="col-9 p-5">
            <div><h1>FreeCodeCamp</h1></div>
            <div class="d-flex">
                <div class="pe-5"><strong>153</strong> posts</div>
                <div class="pe-5"><strong>23k</strong> followers</div>
                <div class="pe-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-2 fw-bold">freeCodeCamp.org</div>
            <div>Description about that consist FreeCodeCamp </div>
            <div><a href="#">www.freecodecamp.org</a></div>
        </div>
    </div>
    <div class="row p-5">
        <div class="col-4">
            <img src="https://discourse-user-assets.s3.amazonaws.com/original/2X/f/f9165819dd1e91941cd3c7481d28adba04c9ccaf.png" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://discourse-user-assets.s3.amazonaws.com/original/2X/f/f9165819dd1e91941cd3c7481d28adba04c9ccaf.png" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://discourse-user-assets.s3.amazonaws.com/original/2X/f/f9165819dd1e91941cd3c7481d28adba04c9ccaf.png" class="w-100">
        </div>
    </div>
</div>
@endsection
