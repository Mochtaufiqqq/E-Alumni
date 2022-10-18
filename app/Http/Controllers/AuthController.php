<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\FavIcon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index() {
        $fvicon = FavIcon::first();
        return view('auth.login',compact('fvicon'));
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'], 
        ]);

        if(Auth::attempt($credentials)){
            // dd(Auth::user()->status);
            $status=Auth::user()->status;
            if ($status == 0) {
            // dd(Auth::user()->status);
                Session::flush();
                Session::flash('status', 'failed');
                Session::flash('message', 'Akun anda belum aktif,Mohon tunggu admin untuk mengaktivasi akun anda');
                return redirect('/login');
            }
            $request->session()->regenerate();
            if (Auth::user()->role_id == 1) {
                return redirect('/dashboard');
            }

            if (Auth::user()->role_id == 2) {
            // dd(Auth::user()->status);
                
                return redirect('/');
            }
        }
        
        Session::flash('status', 'failed'); 
        Session::flash('message', 'Akun belum ada');
        return back();

    }

     // Register
     public function register(){
        $fvicon = FavIcon::first();
        return view('auth.register',
        [
            'title' => 'Register',
            'fvicon' => $fvicon
        ]);
    }

    public function store(Request $request){
       $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|unique:users',
            'nisn' => 'required|unique:users',
            'alamat' => 'required',
            'password' => 'required|min:8',
            'confirmation' => 'required|same:password',
       ]);

       $validatedData['password'] = Hash::make($validatedData['password']);

       User::create([
           'nama' => $validatedData['nama'],
           'email' => $validatedData['email'],
           'nisn' => $validatedData['nisn'],
           'alamat' => $validatedData['alamat'],
           'password' => $validatedData['password'], 
       ]);
       return redirect('/login')->with('success', 'Registrasi Berhasil!');
       
    }

    //Logout
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
