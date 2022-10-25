<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\User;
use App\Models\FavIcon;
use App\Models\Jabatan;
use App\Models\Organisasi;
use Illuminate\Http\Request;
use App\Models\Organisasiuser;
use App\Models\Riwayat_prestasi;
use App\Models\Riwayat_organisasi;
use Illuminate\Support\Facades\Auth;
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
            'images.*' => 'required|mimes:jpg,png,jpeg|max:5000',
            'logo' => 'required|mimes:jpg,png,jpeg|max:5000',
            'deskripsi' => 'required'
        ]);

        $fileName = time().$request->file('foto')->getClientOriginalName();
        $path = $request->file('foto')->storeAs('organisasi-img', $fileName);
        $foto = '/storage/' .$path;
        
        $fileName = time().$request->file('logo')->getClientOriginalName();
        $path = $request->file('logo')->storeAs('organisasi-logo', $fileName);
        $logo = '/storage/' .$path;

        $image = [];
        
        if($request->hasFile('images')){
            foreach ($request->file('images') as $file){
                $path = $file->store('dokumentasi_organisasi');
                $image[] = $path;
            }
        }

        Riwayat_organisasi::create([
            'id_organisasi' => $request->organisasi,
            'periode' => $request->periode,
            'foto' => $foto,
            'dokumentasi' => implode('|', $image),
            'logo' => $logo,
            'deskripsi' =>$request->deskripsi
        ]);
        
        return redirect('/organisasi/show')->with('berhasil', 'berhasil menambahkan'); 
    }

    public function details($id)
    {
        $fvicon = FavIcon::first();
        $logo = Logo::first();
        $organisasi = Riwayat_organisasi::where('id_organisasi', $id)->first();
        $orUser = Organisasiuser::with(['user'])->where('riwayat_organisasi_id',$id)->get();
        $user = User::all()->first();
        $org = Organisasi::all();
        $jab = Jabatan::all();
        
        return view('content.user.detail_organisasi', compact('organisasi', 'org', 'jab','fvicon', 'logo','orUser'));
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
            'periode' => $request->periode,
            'foto' => $foto,
            'logo' => $logo,
            'deskripsi' => $request->deskripsi
        ]);
        
        return redirect('/organisasi/show')->with('berhasil', 'berhasil menambahkan');
    }

    //USER
    
    public function struktur(Request $request)
    {
        
    }
}
