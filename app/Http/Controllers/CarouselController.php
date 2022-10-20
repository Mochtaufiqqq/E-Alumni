<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\FavIcon;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public function showcarousel(){
        $fvicon = FavIcon::first();
        $carousel = Carousel::latest()->get();

        return view('content.admin.carousel.show',compact('carousel','fvicon'));
    }

    public function addcarousel(){
        $fvicon = FavIcon::first();
        $carousel = Carousel::all();

        return view('content.admin.carousel.add',compact('fvicon','carousel'));

    }

    public function storecarousel(Request $request){
        $validatedData = $request->validate([
            'foto' => 'required|mimes:jpg,png,jpeg|max:5000',
            'halaman' => 'required',
            'isi' => 'required',
        ]);

            $fileName = time().$request->file('foto')->getClientOriginalName();
            $path = $request->file('foto')->storeAs('caroussel-images', $fileName. 'public');
            $validatedData['foto'] = '/storage/' .$path;

        Carousel::create([
            'foto' => $request->foto,
            'halaman' => $request->halaman,
            'isi' => $request->isi,
        ]);

        return redirect ('/showcarousel')->with('success','Carousel Berhasil Ditambahkan');
    }

    public function editcarousel(){
        $fvicon = FavIcon::first();
        $carousel = Carousel::all();

        return view('content.admin.carousel.edit',compact('fvicon','carousel'));
    }

    public function updatecarousel(Request $request, $id){
        $validatedData = $request->validate([
            'foto' => 'required|mimes:jpg,png,jpeg|max:5000',
            'halaman' => 'required',
            'isi' => 'required',
        ]);

        if($request->file()){
            $fileName = time().$request->file('foto')->getClientOriginalName();
        $path = $request->file('foto')->storeAs('caroussel-images', $fileName. 'public');
        $validatedData['foto'] = '/storage/' .$path;
        }

        Carousel::where('id', $id)->update([
            'halaman' => $request->halaman,
            'isi' => $request->isi,
            'foto' => $request->foto,
        ]);

        return redirect ('/showcarousel')->with('success','Carousel Berhasil Diubah');

    }
}
