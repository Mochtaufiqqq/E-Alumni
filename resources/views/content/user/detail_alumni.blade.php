@extends('layouts.user.master')
@section('title' , 'Detail Alumni')

@section('content')
    

<section class="container pt-1">
    <div class="row">


      <!-- Sidebar (User info + Account menu) -->
      <aside class="col-lg-3 col-md-4 border-end pb-5 mt-n5">
        <div class="position-sticky top-0">
          <div class="text-center pt-5">
            <div class="d-table position-relative mx-auto mt-2 mt-lg-4 pt-5 mb-3">
              @if ($user->foto_profile == null)
              <img src="{{ asset('/default/user.png') }}" class="d-block rounded-circle" width="120" height="120" alt="John Doe"> 
              @else
              <img src="{{ asset($user->foto_profile) }}" class="d-block rounded-circle" width="120" alt="John Doe"> 
                  
              @endif
              
            </div>
            <h2 class="h5 mb-1">Riwayat Organisasi</h2>
            <div class="flex-row align-items-center">
                  <img src="{{ asset('jikatidadada/user.png') }}" class="rounded-circle me-3" width="48" alt="Avatar">
                  <img src="{{ asset('jikatidadada/user.png') }}" class="rounded-circle me-3" width="48" alt="Avatar">
                  <img src="{{ asset('jikatidadada/user.png') }}" class="rounded-circle me-3" width="48" alt="Avatar">
              </div>
              <div class="flex-row align-items-center">
                <p>2020-2021</p>
            </div>

            <h2 class="h5 mb-1">Prestasi Selama Sekolah</h2>
            <li class="mb-3"> Juara 1 Lomba Agustus</li>
            
          </div>
        </div>
      </aside>


      <!-- Account details -->
      <div class="col-md-8 offset-lg-1 pb-5 mb-2 mb-lg-4 pt-md-5 mt-n3 mt-md-0">
        <div class="ps-md-3 ps-lg-0 mt-md-2 py-md-4">
          <h1 class="h2 pt-xl-1 pb-3">Account Details</h1>

              <div class="col-sm-6 mb-4">
                <label for="fn" class="form-label fs-base">Nama Lengkap: {{ $user->nama }}</label>
              </div>
              <div class="col-sm-6 mb-4">
                <label for="email" class="form-label fs-base">Nama Panggilan: {{ $user->nama_panggilan }}</label>
              </div>
              <div class="col-sm-6 mb-4">
                <label for="phone" class="form-label fs-base">Jurusan: {{ $user->jurusan }}</label>
                
              </div>
              <div class="col-12 mb-4">
                <label for="bio" class="form-label fs-base">Tahun Lulus: {{ $user->thn_lulus }}</label>
                
              </div>
              <div class="col-12 mb-4">
                <label for="bio" class="form-label fs-base">No tlp: {{ $user->no_telp }}</label>
                
              </div>
              <div class="col-12 mb-4">
                <label for="bio" class="form-label fs-base">Alamat: {{ $user->alamat }}</label>
                
              </div>
              <div class="col-12 mb-4">
                <label for="bio" class="form-label fs-base">Email: {{ $user->email }}</label>
                
              </div>
              <div class="col-12 mb-4">
                <label for="bio" class="form-label fs-base">Riwayat Pendidikan </label>
                <li>Universitas </li>
                <li>Universitas </li>
                <li>Universitas </li>
                
              </div>
              <div class="col-12 mb-4">
                <label for="bio" class="form-label fs-base">Keahlian: </label>
              </div>
              <div class="col-12 mb-4">
                <label for="bio" class="form-label fs-base">Pekerjaan </label>
                <p>Bekerja di :</p>
                <p>Sebagai :</p>
                
              </div>
              <div class="col-12 mb-4">
                <label for="bio" class="form-label fs-base">Sosial Media </label>
                <p>Facebook :</p>
                <p>Instagram :</p>
                <p>Tiktok :</p>
                <p>Linkedin :</p>
                
              </div>
              <div class="col-12 mb-4">
                <label for="bio" class="form-label fs-base">Karya:</label>
                
              </div>
              <div class="col-12 mb-4">
                <label for="bio" class="form-label fs-base">Foto Kegiatan:</label>
                
              </div>
          
        <a href="/semuaalumni" style="text-decoration: none"><h6 class="text-md text-primary"> << Kembali ke halaman sebelumnya</h1></a>
        </div>
      </div>
    </div>
  </section>
    
@endsection