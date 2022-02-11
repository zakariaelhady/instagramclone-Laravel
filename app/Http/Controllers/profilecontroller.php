<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Fascades\Image;



class profilecontroller extends Controller
{
    public function index(User $user)
    {
        $follows=(auth()->user())?auth()->user()->following->contains($user):false;
        return view('profiles/index',compact('user','follows'));
    }

    public function edit($user)
    {
        $user=User::findOrFail($user);
        $this->authorize($user->profile);
        return view('profiles/edit',['user'=> $user,]);
    }

    public function update(User $user)
    {
        $this->authorize($user->profile);
        $data=request()->validate(
            [
                'category'=>'required',
                'desc'=>'required',
                'img'=>''
            ]
            );
        if(request('img')){
            $imgpath=$data['img']->store('img','public');
            // $image=Image::make(public_path("/storage/$imgpath"));  
            $user->profile->img=$imgpath;
            $user->profile->save();
            auth()->user()->profile->update(array_merge(
                $data,
                ['img'=>$imgpath ]
            ));
        }
        else{
            auth()->user()->profile->update($data);
        }

        return redirect("profile/$user->id");
    }
}
