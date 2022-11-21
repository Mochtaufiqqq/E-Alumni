<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\User;
use App\Models\FavIcon;
use App\Models\Jabatan;
use App\Models\Carousel;
use App\Models\Organisasi;
use Illuminate\Http\Request;
use App\Models\Organisasiuser;
use App\Models\Riwayat_prestasi;
use App\Models\Riwayat_organisasi;
use Illuminate\Contracts\Support\ValidatedData;
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
        $carousel = Carousel::where('halaman', '2')->get();
        $org = Organisasi::all();
        $jab = Jabatan::all();
        return view('content.user.organisasi', compact('organisasi', 'org', 'jab','fvicon', 'logo', 'carousel'));
    }

    
    public function show()
    {
        $fvicon = FavIcon::first();
        $organisasi = Riwayat_organisasi::with('organisasi')->get();
        $org = Organisasi::all();
        $jab = Jabatan::all();
        // dd($organisasi);
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
            // 'organisasi_id' => 'required',
            'images.*' => 'required|mimes:jpg,png,jpeg|max:5000',
            'logo' => 'required|mimes:jpg,png,jpeg|max:5000',
            'deskripsi' => 'required'
        ]);
        
        $fileName = time().$request->file('logo')->getClientOriginalName();
        $path = $request->file('logo')->storeAs('organisasi-logo', $fileName);
        $logo = '/storage/' .$path;

        $fileName = time().$request->file('foto_struktur')->getClientOriginalName();
        $path = $request->file('foto_struktur')->storeAs('organisasi-struktur', $fileName);
        $foto_struktur = '/storage/' .$path;

        $image = [];
        
        if($request->hasFile('images')){
            foreach ($request->file('images') as $file){
                $path = $file->store('dokumentasi_organisasi');
                $image[] = $path;
            }
        }

        Riwayat_organisasi::create([
            // 'id_organisasi' => $request->organisasi,
            // 'organisasi' => $request->organisasiUser,
            'dokumentasi' => implode('|', $image),
            'logo' => $logo,
            'deskripsi' =>$request->deskripsi,
            'foto_struktur' =>$foto_struktur,
            'organisasi_id' => $request->organisasi
        ]);     
        
        // dd($request);
        return redirect('/organisasi/show')->with('berhasil', 'berhasil menambahkan'); 
    }

    public function addadminorganisasi(Request $request)
    {
        Organisasi::create([
            'organisasi' =>$request->organisasi
        ]);

        return redirect('/organisasi/add')->with('berhasil', 'berhasil menambahkan'); 
    }

    public function details(Riwayat_organisasi $organisasi)
    {
        $fvicon = FavIcon::first();
        $logo = Logo::first();
        // $organisasi = Riwayat_organisasi::where('id', $id)->first();
        // $orUser = Organisasiuser::with(['user'])->where('riwayat_organisasi_id',$id)->get();
        // $user = User::all()->first();
        // $org = Organisasi::all();
        // $jab = Jabatan::all();
        // dd($organisasi);
        return view('content.user.detail_organisasi',[
            'organisasi' => $organisasi
        ], compact('fvicon', 'logo'));
    }

    public function edit()
    {
        $fvicon = FavIcon::first();
        $organisasi = Riwayat_organisasi::all()->first();
        $org = Organisasi::all();
        $jab = Jabatan::all();
        return view('content.admin.organisasi.editOrganisasi', compact('organisasi', 'org', 'jab','fvicon'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            // 'organisasi' => 'required',
            // 'images.*' => 'required|mimes:jpg,png,jpeg|max:5000',
            'foto_struktur' => 'required|mimes:jpg,png,jpeg|max:5000',
            'logo' => 'required|mimes:jpg,png,jpeg|max:5000',
            'deskripsi' => 'required'
        ]);
        
        $fileName = time().$request->file('logo')->getClientOriginalName();
        $path = $request->file('logo')->storeAs('organisasi-logo', $fileName);
        $logo = '/storage/' .$path;
        
        $fileName = time().$request->file('foto_struktur')->getClientOriginalName();
        $path = $request->file('foto_struktur')->storeAs('organisasi-struktur', $fileName);
        $foto_struktur = '/storage/' .$path;

        $image = [];
        
        if($request->hasFile('images')){
            foreach ($request->file('images') as $file){
                $path = $file->store('dokumentasi_organisasi');
                $image[] = $path;
            }
        }

        Riwayat_organisasi::where('id', $id)->update([
            'dokumentasi' => implode('|', $image),
            'logo' =>$logo,
            'deskripsi' =>$request->deskripsi,
            'foto_struktur'=>$foto_struktur,
            'organisasi_id' => $request->organisasi,
        ]);
        
        // dd($request);
        return redirect('/organisasi/show')->with('berhasil', 'berhasil mengubah');
    }
    
    public function addorganisasi(Request $request)
    {
        $validatedData = $request->validated([
            'organisasi' => 'required'
        ]);

        Organisasi::create($validatedData);

        return redirect('/organisasi/show')->with('berhasil', 'berhasil menambahkan');
    }
}
