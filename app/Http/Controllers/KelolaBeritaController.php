<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\File;

class KelolaBeritaController extends Controller
{
    
    public function show()
    {
       $beritas = Berita::all();
        return view('content.admin.showberita',[
            'beritas' => Berita::all()
        ],compact('beritas'));
        
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
            'dokumentasi' => 'mimes:jpg,png,jpeg|max:5000',
            'judul' => 'required',
            'isi' => 'required',
            'kategori' => 'required',
            'tgl'  => 'required',
        ]);

        $fileName = time().$request->file('foto')->getClientOriginalName();
        $path = $request->file('foto')->storeAs('foto-berita', $fileName. 'public');
        $validatedData['foto'] = '/storage/' .$path;

        if($request->hasFile('dokumentasi')){
            foreach($request->file('dokumentasi') as $key => $file){
                $path = $file->storeAs('foto-dokumentasi');
                $name = $file->getClientOriginalName();

                $insert[$key]['name'] = $name;
                $insert[$key]['path'] = $path;
            }
        }

        File::insert($insert);

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

    public function reportpdfberita(){
        $beritas = Berita::all();

        $pdf = PDF::loadview('content.admin.reportpdfberita',['beritas'=> $beritas])->setOptions(['defaultFont' => 'sans-serif']);;
    	return $pdf->download('report-berita.pdf');
        return redirect('/semuaberita');
    }


    }


