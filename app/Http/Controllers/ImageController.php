<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class ImageController extends Controller
{
    public function index(){
        return view('content.admin.image');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'image'=> 'required|image|mimes:jgp,png,jpeg,svg|max:2048'
        ]);
        $name = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->store('public/image');

        $save = new Photo;

        $save->name = $name;
        $save->path = $path;

        $save->save();

        return redirect('image-upload2')->with('status','Image has been upload')-> with('image',$name);
    }
}
