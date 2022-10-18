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
use App\Models\Riwayat_pendidikan;
use App\Models\Sosmed;

class UserController extends Controller
{
    public function dokumentasi(){
        return view('content.user.dokumentasi');
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
        $social = Sosmed::first();
        $rp = Riwayat_pendidikan::first();

        if($social == TRUE){
            $sosmed = $social;
        }else{
            $sosmed = null;
        }

        return view('content.user.detail_profile',[
            'user' => $user,
            'sosmed' => $sosmed
        ],compact('user', 'sosmed'));
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
        return redirect('/profile')->with('success', 'Berhasil mengubah!');
    }

    public function addpekerjaan(Request $request, User $user) {

        $validatedData = $request->validate([
            'pekerjaan'      => 'required',
            'jabatan_pekerjaan'    => 'required',
            
        ]);
        User::where('id', $user->id)->update($validatedData);
        return redirect('/profile')->with('success', 'Pekerjaan Berhasil Ditambahkan!');

    }

    
    //sosmed
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

       return redirect('/profile')->with('success', 'Berhasil Menambahkan Sosial Media!');
    }

    public function editsosmed(Request $request, $id) {

        Sosmed::with('user');
        $validatedData = $request->validate([
            'instagram'      => 'required',
            'facebook'      => 'required',
            'tiktok'      => 'required',
            'linkedin'      => 'required',
            
       ]);
       $validatedData['id_user'] = auth()->user()->id;
       Sosmed::where('id', $id)->update($validatedData);

       return redirect('/profile')->with('success', 'Berhasil Mengubah Sosial Media!');
    }
    //end sosmed

    //riwayat_pendidikan
    public function addpendidikan(Request $request)
    {
        Riwayat_pendidikan::with('user');
        $validatedData = $request->validate([
            'univ',
            'smk',
            'smp',
        ]);

        $validatedData['id_user'] = auth()->user()->id;
        Riwayat_pendidikan::create($validatedData);

        return redirect('/profile')->with('success', 'Berhasil Menambahkan Pendidikan!');
    }

}
