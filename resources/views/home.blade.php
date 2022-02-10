@extends('layouts.app')

@section('content')
<div class="container mx-auto col-8">
    <div class="row mx-auto">
        <div class="col-3 px-5 pt-3 mx-2">
            <img src="/img/post1.jpeg " class="rounded-circle" style="width: 155px; height: 155px;">
        </div>
        <div class="col-8 pt-3">
            <div>
                <h2>{{$user->username}}</h2>
            </div>
            <div class="row">
                <div class="col-2"><strong class="p-1">23</strong>posts</div>
                <div class="col-2"><strong class="p-1">203</strong>followers</div>
                <div class="col-2"><strong class="p-1">63</strong>following</div>
            </div>
            <div class="pt-4 fs-6"><strong>{{$user->name}}</strong> </div>
            <div class="row">
                <div class=" text-muted fs-5 " >{{$user->profile->category ?? 'N/A'}}</div>
                <div class="fw-normal fs-6">{{$user->profile->desc ?? 'N/A'}}</div>               
            </div>
            <div class="row">
                <a class="text-decoration-none text-primary " href="https://www.instagram.com/zakariaelhady">www.instagram.com/zakariaelhady</a>
            </div>
        </div>
    </div>
    <div class="row pt-4 "> <hr></div>
    <div class="row ">
        <div class="col-4 pb-1">
            <img src="/img/post2.png" class="rounded" style="width:300px;" href="#">
        </div>
        <div class="col-4 pb-1">
            <img src="/img/profile2.png" class="rounded" style="width:300px;" href="#">
        </div>
        <div class="col-4 pb-1">
            <img src="/img/post2.png" class="rounded" style="width:300px;" href="#">
        </div>
        <div class="col-4 pb-1">
            <img src="/img/profile2.png" class="rounded" style="width:300px;" href="#">
        </div>
        
    </div>
</div>
@endsection
