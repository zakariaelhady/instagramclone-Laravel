<?php

namespace App\Http\Controllers;

use App\Models\post;

class postcontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        return view('posts/create');
    }

    public function store(){
        $data=request()->validate([
            'caption'=>'required',
            'img'=>'required|image']
        );

        $user=auth()->User();
        $posts=$user->posts();

        $posts->create([
            'caption'=>$data['caption'],
            'img'=>$data['img']->store('img','public'),
        ]);

        return redirect("/profile/$user->id");
    }

    public function show(post $post){
        return view('posts.show',[
            'post'=>$post
        ]);
    }
    public function index(){
        $users=auth()->user()->following()->pluck('profiles.user_id');
        $posts=post::whereIn('user_id',$users)->latest()->paginate(5);
        return view('posts.index',compact('posts'));
    }
}
