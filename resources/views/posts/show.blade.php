@extends('layouts.app')

@section('content')
<div class="container mx-auto col-8">
    <form action="#" method="post">@csrf
    <div class="row">
        <div class="col-lg-8">
            <img src="/storage/{{$post->img}}" class="w-100" alt="">
        </div>
        <div class="col">
            <div class="row">
                {{$post->user->username}}
            </div>
            <div class="row">
                {{$post->caption}}
            </div>
        </div>
    </div>
    </form>
</div>
@endsection
