<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index() {
        return view('auth.login');
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
                Session::flash('message', 'acount not active, please contact admin to active');
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
        Session::flash('message', 'akun belum ada');
        return back();

    }

     // Register
     public function register(){
        return view('auth.register',
        [
            'title' => 'Register'
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
       return redirect('/login')->with('success', 'Registration Succesfully, Pls Login!');
       
    }

    //Logout
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/dashboard');
    }
}
