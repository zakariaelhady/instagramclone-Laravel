<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class followcontrolle extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(User $user){
        return auth()->user()->following()->toggle($user->profile);
    }
}
