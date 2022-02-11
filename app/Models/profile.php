<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    use HasFactory;
    protected $guarded=[];
    
    public function profileImg(){
        $path=($this->img)?$this->img:'/img/DGjsahUK8VBExAc8w2ZQJAfhnjFu6Yu0lBJ2sSeQ.png';
        return "/storage/$path";
    }

    public function followers(){
        return $this->belongsToMany(User::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
