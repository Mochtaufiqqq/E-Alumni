<?php

namespace App\Http\Controllers;

use App\Models\Organisasi;
use Illuminate\Http\Request;
use App\Models\Riwayat_organisasi;
use Illuminate\Support\Facades\Hash;

class OrganisasiController extends Controller
{
    public function index()
    {
        Riwayat_organisasi::all();
        return view('content.user.organisasi');
    }

    public function carousel(Request $request)
    {
        $validatedData = $request->validate([
            'foto_profile' => 'required|mimes:jpg,png,jpeg|max:5000',
            'nisn' => 'required|unique:users',
            'nama' => 'required',
            'alamat' => 'required',
            'jurusan'  => 'required',
            'thn_lulus'  => 'required',
            'email' => 'required|unique:users',
            'role' => 'required',
            'password' => 'required'
        ]);

        $fileName = time().$request->file('foto_profile')->getClientOriginalName();
        $path = $request->file('foto_profile')->storeAs('profile-images2', $fileName. 'public');
        $validatedData['foto_profile'] = '/storage/' .$path;
        $validatedData['password'] = Hash::make($validatedData['password']);

        Riwayat_organisasi::create($validatedData);

        return redirect('/semuauser')->with('success', 'Data Berhasil Ditambahkan');
    }
}
