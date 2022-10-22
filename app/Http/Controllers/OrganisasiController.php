<?php

namespace App\Http\Controllers;

use App\Models\FavIcon;
use App\Models\Jabatan;
use App\Models\Organisasi;
use App\Models\Logo;
use Illuminate\Http\Request;
use App\Models\Riwayat_organisasi;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class OrganisasiController extends Controller
{
    public function index()
    {
        $fvicon = FavIcon::first();
        $logo = Logo::first();
        $organisasi = Riwayat_organisasi::all();
        $org = Organisasi::all();
        $jab = Jabatan::all();
        return view('content.user.organisasi', compact('organisasi', 'org', 'jab','fvicon', 'logo'));
    }

    public function show()
    {
        $fvicon = FavIcon::first();
        $organisasi = Riwayat_organisasi::all();
        $org = Organisasi::all();
        $jab = Jabatan::all();
        return view('content.admin.organisasi.showOrganisasi', compact('organisasi', 'org', 'jab','fvicon'));
    }

    public function tambah()
    {
        $fvicon = FavIcon::first();
        $organisasi = Riwayat_organisasi::all();
        $org = Organisasi::all();
        $jab = Jabatan::all();
        return view('content.admin.organisasi.addOrganisasi', compact('organisasi', 'org', 'jab','fvicon'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'periode' => 'required',
            'foto' => 'required|mimes:jpg,png,jpeg|max:5000',
            'logo' => 'required|mimes:jpg,png,jpeg|max:5000',
            'deskripsi' => 'required'
        ]);

        $fileName = time().$request->file('foto')->getClientOriginalName();
        $path = $request->file('foto')->storeAs('organisasi-img', $fileName);
        $foto = '/storage/' .$path;
        
        $fileName = time().$request->file('logo')->getClientOriginalName();
        $path = $request->file('logo')->storeAs('organisasi-logo', $fileName);
        $logo = '/storage/' .$path;

        Riwayat_organisasi::create([
            'id_organisasi' => $request->organisasi,
            'id_jabatan' => $request->jabatan,
            'periode' => $request->periode,
            'foto' => $foto,
            'logo' => $logo,
            'deskripsi' =>$request
        ]);
        
        return redirect('/organisasi/show')->with('berhasil', 'berhasil menambahkan'); 
    }

    public function details()
    {
        $fvicon = FavIcon::first();
        $logo = Logo::first();
        $organisasi = Riwayat_organisasi::all()->first();
        $org = Organisasi::all();
        $jab = Jabatan::all();
        return view('content.user.detail_organisasi', compact('organisasi', 'org', 'jab','fvicon', 'logo'));
    }

    public function edit()
    {
        $fvicon = FavIcon::first();
        $organisasi = Riwayat_organisasi::all()->first();
        $org = Organisasi::all();
        $jab = Jabatan::all();
        return view('content.admin.organisasi.organisasiEdit', compact('organisasi', 'org', 'jab','fvicon'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'periode' => 'required',
            'foto' => 'required|mimes:jpg,png,jpeg|max:5000',
            'logo' => 'required|mimes:jpg,png,jpeg|max:5000',
            'deskripsi' => 'required'
        ]);

        $fileName = time().$request->file('foto')->getClientOriginalName();
        $path = $request->file('foto')->storeAs('organisasi-img', $fileName);
        $foto = '/storage/' .$path;
        
        $fileName = time().$request->file('logo')->getClientOriginalName();
        $path = $request->file('logo')->storeAs('organisasi-logo', $fileName);
        $logo = '/storage/' .$path;

        Riwayat_organisasi::where('id', $id)->update([
            'id_organisasi' => $request->organisasi,
            'id_jabatan' => $request->jabatan,
            'periode' => $request->periode,
            'foto' => $foto,
            'logo' => $logo,
            'deskripsi' => $request->deskripsi
        ]);
        
        return redirect('/organisasi/show')->with('berhasil', 'berhasil menambahkan');
    }
}
