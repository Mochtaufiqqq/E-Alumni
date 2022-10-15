<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LowonganPekerjaan;

class LokerController extends Controller
{
    public function showloker() {
        $loker = LowonganPekerjaan::all();
        return view('content.admin.loker.show',[
            'loker' => $loker
        ],compact('loker'));
    }

    public function addloker(){
        $loker = LowonganPekerjaan::all();
        return view('content.admin.loker.add',[
            'loker' => $loker
        ],compact('loker'));
    }
    
    public function storeloker(Request $request){

        $validatedData = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            // 'loker_image.*' => 'required|mimes:jpg,png,jpeg|max:5000',
        ]);

        $image = [];

        if($request->hasfile('images'))
        {
            foreach($request->file('images') as $file)
            {
                $path = $file->store('loker-images');

                $image[] = $path;
            }
        }

        LowonganPekerjaan::create([
            "judul" => $request->judul,
            "deskripsi" => $request->deskripsi,
            "loker_image" => implode('|', $image),
        ]);

        return redirect('/lokershow')->with('success','Lowongan Pekerjaan Berhasil Ditambahkan');
    }

    public function editloker(LowonganPekerjaan $loker){
        $loker = LowonganPekerjaan::all();
        return view('content.admin.loker.add',[
            'loker' => $loker
        ],compact('loker'));
    }

    public function updateloker(LowonganPekerjaan $loker, Request $request) {
        $validatedData = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            // 'loker_image.*' => 'required|mimes:jpg,png,jpeg|max:5000',
        ]);

        $image = [];

        if($request->hasfile('images'))
        {
            foreach($request->file('images') as $file)
            {
                $path = $file->store('loker-images');

                $image[] = $path;
            }
        }
        
    }
}
