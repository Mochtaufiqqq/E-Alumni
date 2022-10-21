<?php

namespace App\Http\Controllers;

use Pagination;
use App\Models\Logo;
use App\Models\User;
use App\Models\Berita;
use App\Models\Sosmed;
use App\Models\FavIcon;
use App\Models\Carousel;
use App\Models\KesanPesan;
use Illuminate\Http\Request;
use App\Models\Foto_postingan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function addpostingan(Request $request , User $user){

        $image = [];

        if($request->hasFile('images')){
            foreach ($request->file('images') as $file){
                $path = $file->store('postingan_alumni');
                $image[] = $path;
            }
        } 
        
        User::where('id', $user->id)->update([
            'foto_kegiatan' => implode('|', $image)
        ]);   

        return redirect('/profile')->with('success','Foto Kegiatan berhasil ditambahkan');
    }

    public function dokumentasi(){
        return view('content.user.dokumentasi');
    }

    public function detail_berita(Berita $berita){
        $logo = Logo::first();
        $fvicon = FavIcon::first();
        return view('content.user.detail_berita',compact('beritas','fvicon','logo'));
    }

    public function tampil(){
        $logo = Logo::first();
        $fvicon = FavIcon::first();
        $beritas = Berita::all();
        return view('content.user.berita',[
            'beritas' => $beritas,
            'fvicon' => $fvicon
        ],compact('beritas','logo'));
    }

    public function kesanpesan(){
        $logo = Logo::first();
        $fvicon = FavIcon::first();
        $dtkesanpesan = KesanPesan::with('user')->latest()->get();
        return view('content.user.showkesanpesan',[
            'user' => User::all(),
            'fvicon' => $fvicon,
            'kesanpesan' => KesanPesan::all(),
        ], compact('dtkesanpesan','fvicon','logo'));
    
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

    public function semuaalumni (Request $request){

        $logo = Logo::first();
        $fvicon = FavIcon::first();
        $carousel = Carousel::where('halaman','=','Alumni')->get();
        $user = User::where('role_id','=','2')->where('status','=','1')->get();
            
        
        return view('content.user.semuaalumni',[
            
        ],compact('user','fvicon','carousel','logo'));

    }

    public function angkatan1(){
        $logo = Logo::first();
        $fvicon = FavIcon::first();
        $carousel = Carousel::where('id', 1)->get();
        $user = User::where('thn_lulus','=','2015')
        ->where('status','=','1')
        ->where('role_id','=','2')
        ->get();

        return view ('content.user.semuaalumni',compact('user','fvicon','carousel','logo'));
    }

    public function angkatan2(){

        $logo = Logo::first();
        $fvicon = FavIcon::first();
        $carousel = Carousel::where('id', 1)->get();
        $user = User::where('thn_lulus','=','2016')
        ->where('status','=','1')
        ->where('role_id','=','2')
        ->get();

        return view ('content.user.semuaalumni',compact('user','fvicon','carousel','logo'));
    }

    public function detailalumni(User $user) {

        $logo = Logo::first();
        $fvicon = FavIcon::first();
        return view('content.user.detail_alumni',[
           
            'user' => $user,
            'fvicon' => $fvicon,
            'logo'  => $logo
        ]);
    }

    public function profile(User $user)
    {   
        $fvicon = FavIcon::first();
        $user = Auth::user();
        $logo = Logo::first();
        $sosmed = Sosmed::all();
        return view('content.user.detail_profile',[
            'user' => $user,
            'sosmed' => $sosmed,
            'logo' => $logo
        ],compact('user', 'sosmed','fvicon', 'logo'));
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
