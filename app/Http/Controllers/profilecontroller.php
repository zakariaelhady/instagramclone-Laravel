<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class profilecontroller extends Controller
{
    public function index($user)
    {
        $user=User::findOrFail($user);
        return view('profiles/index',['user'=> $user,]);
    }

    public function edit($user)
    {
        $user=User::findOrFail($user);
        return view('profiles/edit',['user'=> $user,]);
    }

    public function update()
    {
        $data=request()->validate(
            [
                'category'=>'required',
                'desc'=>'required',
                'img'=>'required|image'
            ]
            );
        dd($data);
    }
}
