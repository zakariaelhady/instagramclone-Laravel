@extends('layouts.app')

@section('content')
<div class="container mx-auto col-8">
    @foreach($posts as $post)
    
        <div class="row">
            <div class="col-lg-7 mx-auto">
                <a href="/profile/{{$post->user->id}}">
                    <img src="/storage/{{$post->img}}"   class="w-100" alt="">
                </a>
            </div>
        </div>
        <div class="row pb-5 pt-1">
            <div class=" d-flex col-lg-7 mx-auto">
                <span class="pr-5 mx-1">
                    <a href="/profile/{{$post->user->id}}" class="text-decoration-none fw-bold text-dark">{{$post->user->username}}</a>
                </span>
                <span class="wrap ">
                    {{$post->caption}}
                </span>
            </div>
        </div>
    @endforeach
    <div class="row px-5 py-5">
        <div class="mx-auto col-lg-3 ">
            {!! $posts->links('pagination::bootstrap-4') !!}
        </div>
    </div>
</div>
@endsection
