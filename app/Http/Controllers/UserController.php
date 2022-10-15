<?php

namespace App\Http\Controllers;

use Pagination;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\KesanPesan;
use App\Models\Berita;
use App\Models\Foto_postingan;

class UserController extends Controller
{
    public function dokumentasi(Foto_postingan $dokumentasi){
        return view('content.user.dokumentasi',[
            'foto_postingan' => $dokumentasi
        ]);
    }

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

    public function kesanpesan(){
        $dtkesanpesan = KesanPesan::with('user')->latest()->get();
        return view('content.user.showkesanpesan',[
            'user' => User::all(),
            'kesanpesan' => KesanPesan::all(),
        ], compact('dtkesanpesan'));
    
    }

    public function semuaalumni (){
        $user = User::where('role_id', 2)->latest()->get();
        
        return view('content.user.semuaalumni',[
            'user'  => $user
        ],compact('user'));

    }

    public function profile(User $user)
    {
        $user = Auth::user();
        return view('content.user.detail_profile',[
            'user' => $user
        ],compact('user'));
    }

    public function settingprofileuser(Request $request, User $user){
        $validatedData = $request->validate([
            'foto_profile' => 'image|mimes:jpg,png,jpeg|max:5000',
            'nama_panggilan' => 'required',
            
        ]);

        if($request->file()) {
            $fileName = time().$request->file('foto_profile')->getClientOriginalName();
            $path = $request->file('foto_profile')->storeAs('profile-images2', $fileName. 'public');
         $validatedData['foto_profile'] = '/storage/' .$path;

        }

        User::where('id', $user->id)->update($validatedData);
        return redirect('/profile')->with('success', 'Foto Profil Berhasil Ditambahkan!');
    }

    public function addpekerjaan(Request $request, User $user) {

        $validatedData = $request->validate([
            'pekerjaan'      => 'required',
            'jabatan_pekerjaan'    => 'required',
            
        ]);
        User::where('id', $user->id)->update($validatedData);
        return redirect('/profile')->with('success', 'Pekerjaan Berhasil Ditambahkan!');

    }
}
