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
        $carousel = Carousel::where('halaman' ,'3')->first();

        return view ('content.user.publikasiloker',compact('fvicon','logo','carousel'));
    }

    public function semualoker()
    {
        $carousel = Carousel::where('halaman','4')->get();
        $fvicon = FavIcon::first();
        $logo = Logo::first();
        $lokers = Lowongan_Kerja::latest()->get();

        return view ('content.user.semualoker',compact('fvicon','logo','lokers','carousel'));
    }

    public function detailloker(Lowongan_Kerja $loker){
        $fvicon = FavIcon::first();
        $logo = Logo::first();

        return view ('content.user.detailloker',[
            'loker'  => $loker
        ],compact('fvicon','logo'));

    }

    public function show()
    {
        $fvicon = FavIcon::first();
        $logo = Logo::first();
       $kerjas = Lowongan_Kerja::latest()->get();
        return view('content.admin.lowongan_kerja.showlowongankerja',[
        ],compact('kerjas','fvicon','logo'));
        
    }

    public function add() {
        $fvicon = FavIcon::first();
        $logo = Logo::first();
        $kerjas = Lowongan_Kerja::latest()->get();

        return view ('content.admin.lowongan_kerja.addlowongankerja',[
        ],compact('kerjas','fvicon','logo'));
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'foto' => 'required|mimes:jpg,png,jpeg|max:5000',
            'judul' => 'required',
            'nama_perusahaan' => 'required',
            'deskripsi' => 'required',
            'tgl'  => 'required',
        ]);

        $fileName = time().$request->file('foto')->getClientOriginalName();
        $path = $request->file('foto')->storeAs('foto-loker', $fileName. 'public');
        $validatedData['foto'] = '/storage/' .$path;

        Lowongan_Kerja::create($validatedData);

        return redirect('/lowongankerja')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit(Lowongan_Kerja $kerjas) {
        $fvicon = FavIcon::first();
        $logo = Logo::first();
        return view('content.admin.lowongan_kerja.editlowongankerja',[
           
            'kerjas' => $kerjas
        ],compact('fvicon','logo'));
    }
     public function update(Request $request , Lowongan_Kerja $kerjas) {
        $validatedData = $request->validate([
            'foto' => 'required|mimes:jpg,png,jpeg|max:5000',
            'judul' => 'required',
            'nama_perusahaan' => 'required',
            'deskripsi' => 'required',
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

        $fvicon = FavIcon::first();
        return view('content.admin.lowongan_kerja.detaillowongankerja',[
           
            'kerjas' => $kerjas
        ],compact('fvicon'));
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
