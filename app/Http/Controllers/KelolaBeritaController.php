<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Berita;
use App\Models\Foto_postingan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\File;

class KelolaBeritaController extends Controller
{
    public function detail_berita(Berita $berita){
        return view('content.user.detail_berita',[
            'berita' => $berita
        ]);
    }

    public function tampil(){
        $beritas = Berita::all();
        return view('content.user.berita',[
            'beritas' => Berita::all()
        ],compact('beritas'));
    }
    
    public function show()
    {
       $beritas = Berita::orderBy('updated_at', 'DESC')->get();
        return view('content.admin.showberita',compact('beritas'));
        
    }

    public function add() {
        $beritas = Berita::all();

        return view ('content.admin.tambahberita',[
            'beritas' => Berita::all()
        ],compact('beritas'));
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'foto' => 'required|mimes:jpg,png,jpeg|max:5000',
            // 'dokumentasi' => 'mimes:jpg,png,jpeg|max:5000',
            'judul' => 'required',
            'isi' => 'required',
            'kategori' => 'required',
            'tgl'  => 'required',
        ]);

        if($request->file()){
            $fileName = time().$request->file('foto')->getClientOriginalName();
        $path = $request->file('foto')->storeAs('foto-berita', $fileName. 'public');
        $validatedData['foto'] = '/storage/' .$path;
        }

        if($request->has('foto-dokumen')){
            foreach ($request->file('foto-dokumen') as $images) {
                $fileName = time().$request->file('foto-dokumen')->getClientOriginalName();
                $images->file('foto-dokumen')->storeAs('foto-dokumentasi', $fileName. 'public');
                // $validatedData['foto'] = '/storage/' . $images;
                Foto_postingan::create([
                    'nama_file' => $fileName,
                ]);
            }
        }

        Berita::create($validatedData);

        return redirect('/semuaberita')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit(Berita $beritas) {
        return view('content.admin.editberita',[
           
            'beritas' => $beritas
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
        
        Berita::where('id', $beritas->id)->update($validatedData);

        return redirect('/semuaberita')->with('success', 'Data berhasil diubah!');
     }
     
     public function delete(Berita $beritas) {
        Berita::destroy($beritas->id);

        return redirect('/semuaberita')->with('success', 'Data berhasil dihapus!');
     }
     public function detailberita(Berita $beritas) {
        return view('content.admin.detailberita',[
           
            'beritas' => $beritas
        ]);
    }

    public function dokumentasi(){
        return view('content.user.dokumentasi');
    }

    public function reportpdfberita(){
        $beritas = Berita::all();

        $pdf = PDF::loadview('content.admin.reportpdfberita',['beritas'=> $beritas])->setOptions(['defaultFont' => 'sans-serif']);;
    	return $pdf->download('report-berita.pdf');
        return redirect('/semuaberita');
    }


    }


