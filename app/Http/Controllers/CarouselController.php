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
            'judul',
            'isi',
        ]);

            $fileName = time().$request->file('foto')->getClientOriginalName();
            $path = $request->file('foto')->storeAs('caroussel-images', $fileName. 'public');
            $carousel = '/storage/' .$path;

        Carousel::create([
            'foto' => $carousel,
            'halaman' => $request->halaman,
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        return redirect ('/showcarousel')->with('success','Carousel Berhasil Ditambahkan');
    }

    public function editcarousel(Carousel $carousel){
        $fvicon = FavIcon::first();

        return view('content.admin.carousel.edit',[
            'carousel'  => $carousel,
            'fvicon'  => $fvicon
        ]);
    }



    public function updatecarousel(Request $request, Carousel $carousel){
        $validatedData = $request->validate([
            'foto' => 'image|mimes:jpg,png,jpeg|max:5000',
            'halaman' => 'required',
            'judul',
            'isi',
        ]);

        if($request->file()){
            $fileName = time().$request->file('foto')->getClientOriginalName();
        $path = $request->file('foto')->storeAs('caroussel-images', $fileName. 'public');
        $validatedData['foto'] = '/storage/' .$path;
        }

        Carousel::where('id', $carousel->id)->update($validatedData);

        return redirect ('/showcarousel')->with('success','Carousel Berhasil Diubah');

    }
}
