<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AlumniController extends Controller
{

    public function dashboarduser(){
        return view('content.user.dashboard');
    }

    public function index (){

        return view('content.admin.dashboard');
    }

    public function profile()
    {
        return view('content.user.detail_profile');
    }
    public function show (){
        //di ubah (akun admin tidak nampil)
        $users = User::where('role_id', 2)->get();
        return view ('content.admin.show',compact('users'));
    }

    public function useraktif(){
        $users = User::where('status', 1)->where('role_id', 2)->get();
        return view ('content.admin.showuseractive',['users' => $users]);
    }

    // public function usernonaktif(){
    //     $users = DB::table('users')
    //     ->where('status_user_id','=', '1')->get();

    //     return view('content.admin.showusernonactive',[
    //         'users' => $users
    //     ]);
    // }

    public function accept (User $users) {
        $user = User::where("id", $users->id)->update(['status' => 0]);
        return redirect("/semuauser", compact('user'))->with("success", "User Sudah Diaktivasi !");
    }
    // public function tolak(User $users) {
    //     User::destroy($users->id);

    //     return redirect('/semuauser')->with('success', 'User Berhasil Ditolak!');
    //  }
    

    public function add() {
        $users = User::all();

        return view ('content.admin.add',[
            'users' => User::all()
        ],compact('users'));
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            // 'foto_profile' => 'required',
            'nisn' => 'required|unique:users',
            'nama' => 'required',
            'alamat' => 'required',
            'jurusan'  => 'required',
            'thn_lulus'  => 'required',
            'email' => 'required|unique:users',
            'role' => 'required',
            'password' => 'required'
        ]);

        // $fileName = time().$request->file('foto_profile')->getClientOriginalName();
        // $path = $request->file('foto_profile')->storeAs('images', $fileName. 'public');
        // $validatedData['foto_profile'] = '/storage/' .$path;
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/semuauser')->with('success', 'Data Berhasil Ditambahkan');
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

        $validatedData['password'] = Hash::make($validatedData['password']);
        User::where('id', $users->id)->update($validatedData);

        return redirect('/semuauser')->with('success', 'Data berhasil diubah!');
     }
     
     public function delete(User $users) {
        User::destroy($users->id);

        return redirect('/semuauser')->with('success', 'Data berhasil dihapus!');
     }
}
