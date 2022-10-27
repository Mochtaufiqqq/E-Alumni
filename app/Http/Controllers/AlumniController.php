<?php

namespace App\Http\Controllers;
use PDF;
use App\Models\Logo;
use App\Models\User;
use App\Models\Berita;
use App\Models\Carousel;
use App\Models\FavIcon;
use App\Models\Lowongan_Kerja;
use App\Models\Organisasi;
use App\Models\TentangKami;
use Illuminate\Http\Request;
use App\Models\Riwayat_organisasi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Carbon\Carbon;


class AlumniController extends Controller
{

    public function dashboarduser(){
        $lokers = Lowongan_Kerja::latest()->first();
        $beritas = Berita::all();
        $logo = Logo::first();
        $carousel = Carousel::where('halaman','6')->get();
        $fvicon = FavIcon::first();
        return view('content.user.dashboard',[
        ],compact('carousel','fvicon','logo', 'beritas','lokers'));

    }

    public function index (){

        $chart_options = [
            'chart_title' => 'Statistik Semua User',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\user',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'bar',
        ];

        $logo = Logo::where('id','=','2');
        $beritas = Berita::latest()->get();
        $organisasi = Riwayat_organisasi::all();
        $totalactive = User::where('role_id','=','2')->where('status','=','1')->get();
        $totalnonactive = User::where('role_id','=','2')->where('status','=','0')->get();
        $chart1 = new LaravelChart($chart_options);
        $fvicon = Favicon::first();
        $lokers = Lowongan_Kerja::latest()->get();

        return view('content.admin.dashboard',
        compact('chart1','totalactive','totalnonactive','organisasi','beritas','fvicon','logo','lokers'));
    }

    public function showdtalumni(){
        $fvicon = Favicon::first();
        return view('content.admin.dataalumni',[
            'fvicon' => $fvicon
        ]);
    }

    public function profile()
    {
        $users = User::all();
        $fvicon = FavIcon::first();
        return view('content.user.detail-profile',[
            'users' => $users,
            'fvicon' => $fvicon
        ],compact('users','fvicon'));
    }

    public function tentangkami(){
        $fvicon = FavIcon::first();
        $tentangkami = TentangKami::all();

        return view ('content.user.tentangkami',[
            'tentangkami' => $tentangkami,
            'fvicon' => $fvicon
        ],compact('tentangkami','fvicon'));
    }

    public function show (){
        $fvicon = FavIcon::first();
        $users = User::where('role_id', 2)->latest()->get();
        return view ('content.admin.show',compact('users','fvicon'));
    }

    public function useraktif(){
        $fvicon = FavIcon::first();
        $users = User::where('status', 1)->where('role_id', 2)->latest()->get();
        return view ('content.admin.showuseractive',['users' => $users,'fvicon' => $fvicon]);
    }

    public function usernonaktif(){
        $fvicon = FavIcon::first();
        $users = User::where('status', 0)->where('role_id', 2)->latest()->get();
        return view ('content.admin.showusernonactive',[
            'users' => $users,
            'fvicon' => $fvicon
        ]);
    }

    public function accept ($id) {

        User::where('id', $id)->update(['status' => 1]);
        return redirect("/semuauser")->with("success", "User Sudah Diaktivasi !");
    }
    public function tolak(User $users) {
        User::destroy($users->id);

        return redirect('/semuauser')->with('success', 'User Berhasil Ditolak!');
     }
    

    public function add() {
        $users = User::all();
        $fvicon = FavIcon::first();

        return view ('content.admin.add',[
        ],compact('users','fvicon'));
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'foto_profile' => 'required|mimes:jpg,png,jpeg|max:5000',
            'nisn' => 'required|unique:users',
            'nama' => 'required',
            'alamat' => 'required',
            'jurusan'  => 'required',
            'thn_lulus'  => 'required',
            'email' => 'required|min:8|unique:users',
            'role' => 'required',
            'password' => 'required',
        ]);

            $fileName = time().$request->file('foto_profile')->getClientOriginalName();
            $path = $request->file('foto_profile')->storeAs('profile-images2', $fileName. 'public');
            $validatedData['foto_profile'] = '/storage/' .$path;
            $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect('/semuauser')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit(User $user) {
        $fvicon = FavIcon::first();
        return view('content.admin.edit',[
           
            'user' => $user,
            'fvicon' => $fvicon
        ]);
    }

     public function update(Request $request , User $user) {
        $validatedData = $request->validate([
            'foto_profile' => 'image|mimes:jpg,png,jpeg|max:5000',
            'nisn'      => 'required',
            'nama'        => 'required',
            'thn_lulus'  => 'required',
            'jurusan'    => 'required',
            'alamat'     => 'required',
            'email'     => 'required',
            'password'   => 'required|min:8',
        ]);

        if($request->file()) {
            $fileName = time().$request->file('foto_profile')->getClientOriginalName();
            $path = $request->file('foto_profile')->storeAs('profile-images2', $fileName. 'public');
         $validatedData['foto_profile'] = '/storage/' .$path;

        }
        
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::where('id', $user->id)->update($validatedData);

        return redirect('/semuauser')->with('success', 'Data berhasil diubah!');
     }
     
     public function delete(User $users) {
        User::destroy($users->id);

        return redirect('/semuauser')->with('success', 'Data berhasil dihapus!');
     }
     public function detailuser(User $users) {
        $fvicon = FavIcon::first();
        return view('content.admin.detailuser',[
           'fvicon' => $fvicon,
            'users' => $users
        ]);
    }

    public function reportpdfuser(){
        $fvicon = FavIcon::first();
        $users = User::all();

        $pdf = PDF::loadview('content.admin.reportpdfuser',[
            'users'=> $users,
            'fvicon' => $fvicon
            ])->setOptions(['defaultFont' => 'sans-serif']);;
    	return $pdf->download('report-users.pdf');
        return redirect('/semuauser');
    }

    public function uploadDokumentasi(Request $request){
        $request -> validate([
            'image'=> 'required|image|mimes:jgp,png,jpeg,svg|max:6000',
            'judul'=> 'required',
            'waktu' => 'required'
        ]);

        $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('dokumentasi', $fileName. 'public');
        $validatedData['image'] = '/storage/' .$path;

        User::create($validatedData);
        
        return redirect('/dokumentasi')->with('success','Foto berhasil di upload');
    }

    public function showDokumentasi(){
        $users = User::where('role_id', 2)->latest()->get();
        return view ('content.admin.show',compact('users'));
    }
}
