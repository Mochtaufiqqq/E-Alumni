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

    public function organisasiEdit()
    {
        Riwayat_organisasi::all();
        return view('content.admin.organisasiEdit');
    }

    public function show()
    {
        Riwayat_organisasi::all();
        return view('content.admin.showOrganisasi');
    }

    public function carousel(Request $request)
    {
        $validatedData = $request->validate([
            'carousel' => 'required|mimes:jpg,png,jpeg|max:5000',
            'id_organisasi' => 'required|unique:users',
            'id_jabatan' => 'required',
            'peroide' => 'required',
        ]);

        $fileName = time().$request->file('carousel')->getClientOriginalName();
        $path = $request->file('carousel')->storeAs('imgay', $fileName. 'public');
        $validatedData['carousel'] = '/storage/' .$path;
        $validatedData['password'] = Hash::make($validatedData['password']);

        Riwayat_organisasi::create($validatedData);

        return redirect('/showORG')->with('success', 'Data Berhasil Ditambahkan');
    }
}
