<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Berita;
use App\Models\Foto_postingan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\File;
use App\Models\FavIcon;
use App\Models\Logo;

// use Barryvdh\DomPDF\Facade\Pdf;

class KelolaBeritaController extends Controller
{

    
    public function show()
    {
        $fvicon = FavIcon::first();
        $beritas = Berita::orderBy('updated_at', 'DESC')->get();
        return view('content.admin.showberita',compact('beritas','fvicon'));
        
    }

    public function add() {
        $fvicon = FavIcon::first();
        $beritas = Berita::all();

        return view ('content.admin.tambahberita',[
        ],compact('beritas','fvicon'));
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'foto' => 'required|mimes:jpg,png,jpeg|max:5000',
            'images.*' => 'required|mimes:jpg,png,jpeg|max:5000',
            'judul' => 'required',
            'isi' => 'required',
            'kategori' => 'required',
            'tgl'  => 'required',
        ]);

        if($request->file()){
            $fileName = time().$request->file('foto')->getClientOriginalName();
        $path = $request->file('foto')->storeAs('foto-berita', $fileName. 'public');
        $foto = '/storage/' .$path;
        }
        
        $image = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = $file->store('foto-dokumentasi');
                $image[] = $path;
            }
        }
        
        Berita::create([
            'dokumentasi' => implode('|', $image),
            'foto' => $foto,
            'judul' => $request->judul,
            'isi' => $request->isi,
            'kategori' => $request->kategori,
            'tgl' => $request->tgl,
        ]);

        return redirect('/semuaberita')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit(Berita $beritas) {

        $fvicon = FavIcon::first();
        return view('content.admin.editberita',[
           
            'beritas' => $beritas,
            'fvicon' => $fvicon
        ]);
    }
     public function update(Request $request , Berita $beritas) {
        $validatedData = $request->validate([
            'foto' => 'mimes:jpg,png,jpeg|max:5000',
            'judul' => 'required',
            'isi' => 'required',
            'kategori' => 'required',
            'tgl'  => 'required',
        ]);


        if($request->file()) {
            $fileName = time().$request->file('foto')->getClientOriginalName();
            $path = $request->file('foto')->storeAs('foto-berita', $fileName. 'public');
         $validatedData['foto'] = '/storage/' .$path;

        }
        
        $image = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = $file->store('foto-dokumentasi');
                $image[] = $path;
            }
        }
        
        Berita::where('id', $beritas->id)->update($validatedData);

        return redirect('/semuaberita')->with('success', 'Data berhasil diubah!');
     }
     
     public function delete(Berita $beritas) {
        Berita::destroy($beritas->id);

        return redirect('/semuaberita')->with('success', 'Data berhasil dihapus!');
     }

     public function detailberitaadm(Berita $berita){
        $fvicon = FavIcon::first();

        return view ('content.admin.detailberita',[
            'berita' => $berita
        ],compact('fvicon'));
     }

     public function detailberita($id) {
        $fvicon = FavIcon::first();
        $logo = Logo::first();
        $beritas = Berita::where('id', $id)->first();
        return view('content.user.detail_berita',[
            'beritas'=> $beritas,
        ], compact('fvicon', 'logo', 'beritas'));
    }
    
    public function reportpdfberita(){
        $fvicon = FavIcon::first();
        $beritas = Berita::all();

        $pdf = PDF::loadview('content.admin.reportpdfberita',[
        'beritas'=> $beritas,
        'fvicon' => $fvicon])->setOptions(['defaultFont' => 'sans-serif']);
    	return $pdf->download('report-berita.pdf');
        return redirect('/semuaberita');
    }



}


 