<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Pagination;

class UserController extends Controller
{
    public function semuaalumni (){
        $users = User::where('role_id', 2)->latest()->get();
        
        return view('content.user.semuaalumni',[
            'users'  => $users
        ],compact('users'));

    }
}
