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
        $organisasi = Riwayat_organisasi::all();
        $org = Organisasi::all();

        return view('content.user.organisasi', compact('organisasi', 'org'));
    }

    public function edit()
    {
        $organisasi = Riwayat_organisasi::all();
        $org = Organisasi::all();

        return view('content.admin.organisasi.organisasiEdit', compact('organisasi', 'org'));
    }

    public function show()
    {
        $organisasi = Riwayat_organisasi::all();
        $org = Organisasi::all();
        return view('content.admin.organisasi.showOrganisasi', compact('organisasi', 'org'));
    }

    public function tambah()
    {
        $organisasi = Riwayat_organisasi::all();
        $org = Organisasi::all();
        return view('content.admin.organisasi.addOrganisasi', compact('organisasi', 'org'));
    }

    public function carousel(Request $request)
    {

        dd($request->id_organisasi);
        // $organisasi = Riwayat_organisasi::all();

        $validatedData = $request->validate([
            'id_organisasi' => 'required',
            'id_jabatan' => 'required',
            'peroide' => 'required',
            'carousel' => 'required|mimes:jpg,png,jpeg|max:5000',
        ]);


        $fileName = time().$request->file('carousel')->getClientOriginalName();
        $path = $request->file('carousel')->storeAs('img-carousel', $fileName. 'public');
        $validatedData['carousel'] = '/storage/' .$path;
        // $validatedData['password'] = Hash::make($validatedData['password']);

        Riwayat_organisasi::create($validatedData);

        return redirect('/organisasi')->with('success', 'Data Berhasil Ditambahkan');
    }
}
