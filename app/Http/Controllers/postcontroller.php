<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postcontroller extends Controller
{
    public function create(){
        return view('posts/create');
    }
}
