<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboarduser (){
        $users = User::all();
        return view('content.user.dashboard',[
            'users'  => User::all()
        ],compact('users'));

    }
}
