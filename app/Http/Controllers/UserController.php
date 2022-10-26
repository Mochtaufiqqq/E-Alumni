<?php

namespace App\Http\Controllers;

use Pagination;
use App\Models\Logo;
use App\Models\User;
use App\Models\Berita;
use App\Models\Sosmed;
use App\Models\FavIcon;
use App\Models\Jabatan;
use App\Models\Carousel;
use App\Models\KesanPesan;
use App\Models\Organisasi;
use Illuminate\Http\Request;
// use App\Models\Foto_postingan;
use App\Models\Organisasiuser;
use App\Models\Riwayat_organisasi;
use App\Models\Riwayat_pendidikan;
use App\Models\Riwayat_prestasi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

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
        $dtkesanpesan = KesanPesan::all();
        // $kesanpesan = KesanPesan::where('user_id', auth()->user()->id)->first();
        return view('content.user.showkesanpesan',[
            // 'kesanpesan' => KesanPesan::all(),
            // 'user' => User::all(),
            
        ], compact('fvicon','logo','dtkesanpesan'));
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

        return redirect('/kesanpesan')->with('success' ,'Berhasil mengubah kesan & pesan');
        
    }

    public function semuaalumni (Request $request){

        $logo = Logo::first();
        $fvicon = FavIcon::first();
        $carousel = Carousel::where('halaman','0')->get();
        $user = User::where('role_id','=','2')->where('status','=','1')->get();
            
        return view('content.user.semuaalumni',[
            
        ],compact('user','fvicon','carousel','logo'));

    }

    public function angkatan1(){
        $logo = Logo::first();
        $fvicon = FavIcon::first();
        $carousel = Carousel::where('halaman','0')->get();
        $user = User::where('thn_lulus','=','2019')
        ->where('status','=','1')
        ->where('role_id','=','2')
        ->get();

        return view ('content.user.semuaalumni',compact('user','fvicon','carousel','logo'));
    }

    public function angkatan2(){

        $logo = Logo::first();
        $fvicon = FavIcon::first();
        $carousel = Carousel::where('halaman','0')->get();
        $user = User::where('thn_lulus','=','2020')
        ->where('status','=','1')
        ->where('role_id','=','2')
        ->get();

        return view ('content.user.semuaalumni',compact('user','fvicon','carousel','logo'));
    }
    public function angkatan3(){

        $logo = Logo::first();
        $fvicon = FavIcon::first();
        $carousel = Carousel::where('halaman','0')->get();
        $user = User::where('thn_lulus','=','2021')
        ->where('status','=','1')
        ->where('role_id','=','2')
        ->get();

        return view ('content.user.semuaalumni',compact('user','fvicon','carousel','logo'));
    }

    public function angkatan4(){

        $logo = Logo::first();
        $fvicon = FavIcon::first();
        $carousel = Carousel::where('halaman','0')->get();
        $user = User::where('thn_lulus','=','2022')
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
        $logo = Logo::first();
        $fvicon = FavIcon::first();
        $logo = Logo::first();
        $user = Auth::user();
        $org = Organisasi::all();
        $jab = Jabatan::all();
        $ro = Organisasi::where('user_id', Auth()->User()->id)->first();
        $sosmed = Sosmed::where('user_id', Auth()->User()->id)->first();
        $rp = Riwayat_pendidikan::where('user_id', Auth()->User()->id)->first();
        return view('content.user.detail_profile',[
            'user' => $user,
            'sosmed' => $sosmed
        ],compact('user', 'sosmed','fvicon', 'rp', 'logo', 'jab', 'org', 'ro'));
    }

    public function settingprofileuser(Request $request, User $user){
        // dd($request);
        $validatedData = $request->validate([
            'foto_profile' => 'image|mimes:jpg,png,jpeg|max:5000',
        ]);
        
        if ($request->file()) {
            $fileName = time().$request->file('foto_profile')->getClientOriginalName();
            $path = $request->file('foto_profile')->storeAs('profile-images2', $fileName);
            $validatedData['foto_profile'] = '/storage/' .$path;
        }

        User::where('id', $user->id)->update($validatedData);
        return redirect('/profile')->with('success', 'Berhasil mengubah!');
    }

    public function addnamapanggilan(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'nama_panggilan' => 'required',        
        ]);

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
        
       $request["user_id"] = auth()->user()->id;
       Sosmed::create([
        'instagram'=> $request->instagram,
        'facebook' => $request->facebook,
        'tiktok'=> $request->tiktok,
        'linkedin'=> $request->linkedin,
        'user_id' => auth()->user()->id
       ]);

       return redirect('/profile')->with('success', 'Berhasil Menambahkan Sosial Media!');
    }

    public function editsosmed(Request $request) {

        Sosmed::with('user');

       $request["user_id"] = auth()->user()->id;
       Sosmed::where('user_id', Auth()->User()->id)->update([
        'instagram'      => $request->instagram,
        'facebook'      => $request->facebook,
        'tiktok'      => $request->tiktok,
        'linkedin'      => $request->linkedin,
       ]);

       return redirect('/profile')->with('success', 'Berhasil Mengubah Sosial Media!');
    }
    //end sosmed

    //riwayat_pendidikan
    public function addpendidikan(Request $request)
    {
        // dd($request);
        Riwayat_pendidikan::with('user');
        $validatedData = $request->validate([
            'nama_sekolah',
            'tahun_mulai',
            'tahun_akhir',
            'rp_id'
        ]);

        $validatedData["user_id"] = auth()->user()->id;
        Riwayat_pendidikan::create([
            'nama_sekolah_univ' => $request->nama_sekolah_univ,
            'tahun_mulai_univ' => $request->tahun_mulai_univ,
            'tahun_akhir_univ' => $request->tahun_akhir_univ,
            'nama_sekolah_smk' => $request->nama_sekolah_smk,
            'tahun_akhir_smk' => $request->tahun_akhir_smk,
            'tahun_mulai_smk' => $request->tahun_mulai_smk,
            'nama_sekolah_smp' => $request->nama_sekolah_smp,
            'tahun_mulai_smp' => $request->tahun_mulai_smp,
            'tahun_akhir_smp' => $request->tahun_akhir_smp,
            'user_id' => Auth()->User()->id
        ]);
        

        return redirect('/profile')->with('success', 'Berhasil Menambahkan Pendidikan!');
    }

    public function editpendidikan(Request $request)
    {
        // dd($request);
        Riwayat_pendidikan::with('user');
        $validatedData = $request->validate([
            'nama_sekolah',
            'tahun_mulai',
            'tahun_akhir',
            'rp_id'
        ]);

        $validatedData["user_id"] = auth()->user()->id;
        Riwayat_pendidikan::where('user_id', Auth()->User()->id)->update([
            'nama_sekolah_univ' => $request->nama_sekolah_univ,
            'tahun_mulai_univ' => $request->tahun_mulai_univ,
            'tahun_akhir_univ' => $request->tahun_akhir_univ,
            'nama_sekolah_smk' => $request->nama_sekolah_smk,
            'tahun_akhir_smk' => $request->tahun_akhir_smk,
            'tahun_mulai_smk' => $request->tahun_mulai_smk,
            'nama_sekolah_smp' => $request->nama_sekolah_smp,
            'tahun_mulai_smp' => $request->tahun_mulai_smp,
            'tahun_akhir_smp' => $request->tahun_akhir_smp,
            'user_id' => Auth()->User()->id
        ]);
        

        return redirect('/profile')->with('success', 'Berhasil Mengubah Pendidikan!');
    }

    public function addkarya(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'karya' => 'required',        
        ]);

        User::where('id', $user->id)->update($validatedData);
        return redirect('/profile')->with('success', 'Berhasil mengubah!');
    }
    
    public function addorganisasi(Request $request)
    {   
        Organisasi::with('user')->update([
            'organisasi_1' =>$request->organisasi_1,
            'organisasi_2' =>$request->organisasi_2,
            'organisasi_3' =>$request->organisasi_3,
            'user_id' => Auth()->User()->id
        ]);
        
        
        return redirect('/profile')->with('success', 'Berhasil mengubah!');
        
    }
    
    public function addkeahlian(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'keahlian' => 'required',        
        ]);
    
        User::where('id', $user->id)->update($validatedData);
        return redirect('/profile')->with('success', 'Berhasil mengubah!');
    }

    public function addfotokegiatan(User $user, Request $request)
    {
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
}
