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
use App\Models\Sosmed;
use App\Models\FavIcon;

class UserController extends Controller
{
    public function dokumentasi(){
        return view('content.user.dokumentasi');
    }

    public function detail_berita(Berita $berita){
        $fvicon = FavIcon::first();
        return view('content.user.detail_berita',[
            'berita' => $berita,
            'fvicon' => $fvicon
        ]);
    }

    public function tampil(){
        $fvicon = FavIcon::first();
        $beritas = Berita::all();
        return view('content.user.berita',[
            'beritas' => $beritas,
            'fvicon' => $fvicon
        ],compact('beritas'));
    }

    public function kesanpesan(){
        $fvicon = FavIcon::first();
        $dtkesanpesan = KesanPesan::with('user')->latest()->get();
        return view('content.user.showkesanpesan',[
            'user' => User::all(),
            'fvicon' => $fvicon,
            'kesanpesan' => KesanPesan::all(),
        ], compact('dtkesanpesan','fvicon'));
    
    }

    public function addkesanpesan(Request $request){

        KesanPesan::with('user');
        $validatedData = $request->validate([
            'isi' => 'required',

        ]);

        $validatedData["user_id"] = auth()->user()->id;
        KesanPesan::create($validatedData);

        return redirect('/kesanpesan')->with('success' ,'Berhasil menambahkan kesan & pesan');

    }

    public function editkesanpesan(KesanPesan $kesanpesan, Request $request){
        KesanPesan::with('user');
        $validatedData = $request->validate([
            'isi' => 'required',

        ]);

        $validatedData["user_id"] = auth()->user()->id;
        KesanPesan::where('id', $kesanpesan->id)->update($validatedData);

        return redirect('/kesanpesan')->with('success' ,'Berhasil mengedit kesan & pesan');
        
    }

    public function semuaalumni (){

        $fvicon = FavIcon::first();
        $user = User::where('role_id', 2)->latest()->get();
        
        return view('content.user.semuaalumni',[
            'user'  => $user,
            'fvicon' => $fvicon
        ],compact('user','fvicon'));

    }
    public function detailalumni(User $user) {
        $fvicon = FavIcon::first();
        return view('content.user.detail_alumni',[
           
            'user' => $user,
            'fvicon' => $fvicon
        ]);
    }

    public function profile(User $user)
    {   
        $fvicon = FavIcon::first();
        $user = Auth::user();
        $sosmed = Sosmed::all();
        return view('content.user.detail_profile',[
            'user' => $user,
            'sosmed' => $sosmed
        ],compact('user', 'sosmed','fvicon'));
    }

    public function settingprofileuser(Request $request, User $user){
        $validatedData = $request->validate([
            'foto_profile' => 'image|mimes:jpg,png,jpeg|max:5000',
            // 'nama_panggilan' => 'required',
            
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
    
    public function addsosmed(Request $request) {

        Sosmed::with('user');
        $validatedData = $request->validate([
            'instagram'      => 'required',
            'facebook'      => 'required',
            'tiktok'      => 'required',
            'linkedin'      => 'required',
            
       ]);
       $validatedData['id_user'] = auth()->user()->id;
       Sosmed::create($validatedData);

       return redirect('/profile')->with('success', 'Pekerjaan Berhasil Ditambahkan!');
    }
}
