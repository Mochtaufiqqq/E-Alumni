<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Logo;
use App\Models\FavIcon;
use App\Models\Carousel;
use Illuminate\Http\Request;
use App\Models\Lowongan_Kerja;


class KelolaKerjaController extends Controller
{

    public function publikasiloker(){
        $fvicon = FavIcon::first();
        $logo = Logo::first();
        $carousel = Carousel::where('halaman' ,'=','publikasiloker')->first();

        return view ('content.user.publikasiloker',compact('fvicon','logo','carousel'));
    }

    public function show()
    {
       $kerjas = Lowongan_Kerja::all();
        return view('content.admin.lowongan_kerja.showlowongankerja',[
            'kerjas' => Lowongan_Kerja::all()
        ],compact('kerjas'));
        
    }

    public function add() {
        $kerjas = Lowongan_Kerja::all();

        return view ('content.admin.lowongan_kerja.addlowongankerja',[
            'kerjas' => Lowongan_Kerja::all()
        ],compact('kerjas'));
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'foto' => 'required|mimes:jpg,png,jpeg|max:5000',
            'judul' => 'required',
            'dekskripsi' => 'required',
            'kategori' => 'required',
            'tgl'  => 'required',
        ]);

        $fileName = time().$request->file('foto')->getClientOriginalName();
        $path = $request->file('foto')->storeAs('foto-kerja', $fileName. 'public');
        $validatedData['foto'] = '/storage/' .$path;

        Lowongan_Kerja::create($validatedData);

        return redirect('/lowongankerja')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit(Lowongan_Kerja $kerjas) {
        return view('content.admin.lowongan_kerja.editlowongankerja',[
           
            'kerjas' => $kerjas
        ]);
    }
     public function update(Request $request , Lowongan_Kerja $kerjas) {
        $validatedData = $request->validate([
            'foto' => 'mimes:jpg,png,jpeg|max:5000',
            'judul' => 'required',
            'dekskripsi' => 'required',
            'kategori' => 'required',
            'tgl'  => 'required',
        ]);


        if($request->file()) {
            $fileName = time().$request->file('foto')->getClientOriginalName();
            $path = $request->file('foto')->storeAs('foto-berita', $fileName. 'public');
         $validatedData['foto'] = '/storage/' .$path;

        }
        
        
        Lowongan_Kerja::where('id', $kerjas->id)->update($validatedData);

        return redirect('/lowongankerja')->with('success', 'Data berhasil diubah!');
     }
     
     public function delete(Lowongan_Kerja $kerjas) {
        Lowongan_Kerja::destroy($kerjas->id);

        return redirect('/lowongankerja')->with('success', 'Data berhasil dihapus!');
     }
     public function detaillowongankerja(Lowongan_Kerja $kerjas) {
        return view('content.admin.lowongan_kerja.detaillowongankerja',[
           
            'kerjas' => $kerjas
        ]);
    }

    public function reportpdflowongankerja(){
        $kerjas = Lowongan_Kerja::all();

        $pdf = PDF::loadview('content.admin.lowongan_kerja.reportpdfkerja',['kerjas'=> $kerjas])->setOptions(['defaultFont' => 'sans-serif']);;
    	return $pdf->download('report-kerja.pdf');
        return redirect('/lowongankerja');
    }
    
    public function showlokeruser()
    {
       $kerjas = Lowongan_Kerja::all();
        return view('content.user.lowongankerja',[
            'kerjas' => Lowongan_Kerja::all()
        ],compact('kerjas'));
        
    }
}
