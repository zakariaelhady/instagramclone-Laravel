@extends('layouts.app')

@section('content')
<div class="container mx-auto col-8">
    <form action="#" method="post">@csrf
    <div class="row">
        <div class="col-lg-8">
            <img src="/storage/{{$post->img}}" class="w-100" alt="">
        </div>
        <div class="col-lg-4">
            <div class="row align-items-center">
                <div class="col-lg-2 px-1 pt-1 mx-2">
                    <img src="/storage/{{$post->user->profile->img}}" class="rounded-circle" style="width: 50px; height: 50px;">
                </div>
                <div class="col-lg-2 px-1 pl-3">
                    <p class="col-lg-2 fw-bold fs-6">
                        <a href="/profile/{{$post->user->id}}" class="text-decoration-none text-dark">{{$post->user->username}}</a>
                    </p>
                </div>
                <div class="col-lg-1 px-1 pl-3 mx-5">
                    <p class="col-lg-2 fw-bold fs-6">
                        <a href="#" class="text-decoration-none text-info">Follow</a>
                    </p>
                </div>
            </div>
            <hr>
            <div class=" d-flex">
                <span class="pr-5 mx-1">
                    <a href="/profile/{{$post->user->id}}" class="text-decoration-none fw-bold text-dark">{{$post->user->username}}</a>
                </span>
                <span class="wrap ">
                    {{$post->caption}}
                </span>
            </div>
        </div>
    </div>
    </form>
</div>
@endsection
