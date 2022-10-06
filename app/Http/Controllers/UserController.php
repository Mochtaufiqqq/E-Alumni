<?php

namespace App\Http\Controllers;

use Pagination;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function semuaalumni (){
        $users = User::where('role_id', 2)->latest()->get();
        
        return view('content.user.semuaalumni',[
            'users'  => $users
        ],compact('users'));

    }

    public function profile(User $user)
    {
        $user = Auth::user();
        return view('content.user.detail_profile',[
            'user' => $user
        ],compact('user'));
    }

    public function settingprofileuser(Request $request, User $user){
        $validatedData = $request->validate([
            'foto_profile' => 'image|mimes:jpg,png,jpeg|max:5000',
            
        ]);

        if($request->file()) {
            $fileName = time().$request->file('foto_profile')->getClientOriginalName();
            $path = $request->file('foto_profile')->storeAs('profile-images2', $fileName. 'public');
         $validatedData['foto_profile'] = '/storage/' .$path;

        }

        User::where('id', $user->id)->update($validatedData);
        return redirect('/profile')->with('success', 'Foto Profil Berhasil Ditambahkan!');
    }
}
