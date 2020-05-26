<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{ 
    public function __construct()
    {
        $this->middleware(['auth','verified']); // For Email verification   
    }


    public function store(User $user)
    {
        return auth()->user()->following()->toggle($user->profile);
    }
}