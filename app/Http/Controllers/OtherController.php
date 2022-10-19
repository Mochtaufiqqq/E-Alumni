<?php

namespace App\Http\Controllers;

use App\Models\FavIcon;
use Illuminate\Http\Request;
use App\Models\TentangKami;
use App\Models\Logo;

class OtherController extends Controller
{

    public function index (){
        $logo = Logo::all();
        $fvicon = FavIcon::first();
        $icon = FavIcon::all();
        return view('content.admin.faviconlogo',[
        ],compact('fvicon','icon','logo'));
    }

    // For favicon
    public function editfavicon(FavIcon $fvicon) {

        return view('content.admin.ubahfavicon',[
           
            'fvicon' => $fvicon
        ]);
    }
        
    public function updatefavicon(Request $request, FavIcon $fvicon) {
        $validatedData = $request->validate([
            'favicon' => 'required'
        ]);

        if($request->file()) {
            $fileName = time().$request->file('favicon')->getClientOriginalName();
            $path = $request->file('favicon')->storeAs('fav-icon', $fileName. 'public');
         $validatedData['favicon'] = '/storage/' .$path;
        }

        FavIcon::where('id', $fvicon->id)->update($validatedData);

        return redirect('/faviconlogo')->with('success','Favicon Berhasil Diubah !');
    }

    // public function show(FavIcon $fvicon){
    //     return view('layouts.admin.master',[
    //         'fvicon' => $fvicon
    //     ]);
    // }

    // For tentang kami
    public function tentangkami(){

        $logo = Logo::first();
        $fvicon = FavIcon::first();
        $tentangkami = TentangKami::all();

        return view ('content.user.tentangkami',[
            'tentangkami' => TentangKami::all()
        ],compact('tentangkami','fvicon','logo'));
    }
    
    public function showttgkami(){

        $logo = Logo::first();
        $fvicon = FavIcon::first();
        $tentangkami = TentangKami::all();

        return view ('content.admin.showttgkami',[
            'tentangkami' => TentangKami::all()
        ],compact('tentangkami','fvicon','logo'));
    }

    public function editttgkami(TentangKami $ttgkami){
        $fvicon = FavIcon::first();
        return view('content.admin.editttgkami',[
           
            'ttgkami' => $ttgkami,
            'fvicon' => $fvicon
        ]);
    }


    public function updatettgkami(Request $request, TentangKami $ttgkami){
        $validatedData = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'foto' => 'required|image|mimes:jpg,png,jpeg',
        ]);
        
        if($request->file()) {
            $fileName = time().$request->file('foto')->getClientOriginalName();
            $path = $request->file('foto')->storeAs('ttg-kami', $fileName. 'public');
         $validatedData['foto'] = '/storage/' .$path;
        }
        TentangKami::where('id', $ttgkami->id)->update($validatedData);

        return redirect('/showttgkami')->with('success','Tentang Kami Berhasil Diubah !');
    }


    // For Logo
    public function editlogo(Logo $logo) {

        $fvicon = FavIcon::first();
        return view('content.admin.editlogo',[
           
            'logo' => $logo,
            'fvicon' => $fvicon
        ]);
    }

    public function updatelogo(Request $request, Logo $logo) {
        $validatedData = $request->validate([
            'isi' => 'required',
            'foto' => 'required|image|mimes:jpg,png,jpeg|max:5000'
        ]);

        if($request->file()) {
            $fileName = time().$request->file('foto')->getClientOriginalName();
            $path = $request->file('foto')->storeAs('logo-image', $fileName. 'public');
         $validatedData['foto'] = '/storage/' .$path;
        }

        Logo::where('id', $logo->id)->update($validatedData);

        return redirect('/faviconlogo')->with('success','Logo Berhasil Diubah !');
    }
}
