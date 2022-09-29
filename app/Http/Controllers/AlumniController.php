<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlumniController extends Controller
{
    
    public function index (){

        return view('content.admin.dashboard');
    }
    public function show (){
        $users = User::all();

        return view ('content.admin.show',[
            'users' => User::all()
        ],compact('users'));
    }

    public function useraktif(){
        $users = DB::table('users')
        ->where('status_user_id', '=', '2')->get();
        return view ('content.admin.showuseractive',[
            'users' => $users
        ]);
    }

    public function accept (User $users) {
        User::where("id", $users->id)->update(["status_user_id" => 2]);

        return redirect("/lihatalumni")->with("success", "User Sudah Diaktivasi !");

    }
    

    public function add() {
        $users = User::all();

        return view ('content.admin.add',[
            'users' => User::all()
        ],compact('users'));
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'nisn' => 'required|unique:users',
            'nama' => 'required',
            'alamat' => 'required',
            
            // 'tahun_keluar'  => 'required',
            'email' => 'required|unique:users',
            // 'no_telp' => 'required',
            'password' => 'required'
        ]);

        $validatedData['image'] = $request->file('image')->store('alumni-images');

        User::create($validatedData);

        return redirect('/semuauser')->with('berhasil', 'Data Berhasil Ditambahkan');
    }

    public function edit(User $users) {
        return view('content.admin.edit',[
           
            'users' => $users
        ]);
    }
     public function update(Request $request , User $users) {
        $validatedData = $request->validate([
            'nisn' => 'required',
            'nama' => 'required',
            // 'pekerjaan' => 'required',
            'alamat' => 'required',
            // 'tahun_keluar' => 'required',
            'email' => 'required',
            // 'no_telp' => 'required',
            'password' => 'required',
        ]);

        User::where('id', $users->id)->update($validatedData);

        return redirect('/semuauser')->with('success', 'Data berhasil diubah!');
     }
     
     public function delete(User $users) {
        User::destroy($users->id);

        return redirect('/semuauser')->with('success', 'Data Berhasil Dihapus');
     }
}
