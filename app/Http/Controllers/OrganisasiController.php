<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Organisasi;
use Illuminate\Http\Request;
use App\Models\Riwayat_organisasi;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class OrganisasiController extends Controller
{
    public function index()
    {
        $organisasi = Riwayat_organisasi::all();
        $org = Organisasi::all();
        $jab = Jabatan::all();
        return view('content.user.organisasi', compact('organisasi', 'org', 'jab'));
    }

    public function edit()
    {
        $organisasi = Riwayat_organisasi::all();
        $org = Organisasi::all();
        $jab = Jabatan::all();
        return view('content.admin.organisasi.organisasiEdit', compact('organisasi', 'org', 'jab'));
    }

    public function show()
    {
        $organisasi = Riwayat_organisasi::all();
        $org = Organisasi::all();
        $jab = Jabatan::all();
        return view('content.admin.organisasi.showOrganisasi', compact('organisasi', 'org', 'jab'));
    }

    public function tambah()
    {
        $organisasi = Riwayat_organisasi::all();
        $org = Organisasi::all();
        $jab = Jabatan::all();
        return view('content.admin.organisasi.addOrganisasi', compact('organisasi', 'org', 'jab'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'periode' => 'required',
            'foto' => 'required|mimes:jpg,png,jpeg|max:5000',
        ]);

        $fileName = time().$request->file('foto')->getClientOriginalName();
        $path = $request->file('foto')->storeAs('organisasi-img', $fileName);
        $foto = '/storage/' .$path;
        
        Riwayat_organisasi::create([
            'id_organisasi' => $request->organisasi,
            'id_jabatan' => $request->jabatan,
            'periode' => $request->periode,
            'foto' => $foto
        ]);
        
        return redirect('/organisasi/show')->with('berhasil', 'berhasil menambahkan organisasi'); 
    }
}
