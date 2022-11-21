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

            @if ($riwayat_organisasi == null)
    
            @else
            <h2 class="h5 mb-1">Riwayat Organisasi</h2>
            <div class="flex-row align-items-center">

                  <img src="{{ asset($riwayat_organisasi->logo) ?? 'none' }}" class="rounded-circle me-3" width="48" alt="Avatar">
              </div>
              <div class="flex-row align-items-center">
                <p>{{ $riwayat_organisasi->organisasi->organisasi ?? 'none' }}</p>
            </div>
            @endif
    
            <h2 class="h5 mb-1">Prestasi Selama Sekolah</h2>
            <li class="mb-3"> Juara 1 Lomba Agustus</li>
          </div>
        </div>
      </aside>

      <!-- Account details -->
      <div class="col-md-8 offset-lg-1 pb-5 mb-2 mb-lg-4 pt-md-5 mt-n3 mt-md-0">
        <div class="ps-md-3 ps-lg-0 mt-md-2 py-md-4">
          <h1 class="h2 pt-xl-1 pb-3">Detail Profil</h1>

              <div class="col-sm-6 mb-4">
                <label for="fn" class="form-label fs-base">Nama Lengkap: <span class="text-muted"> {{ $user->nama }}</span></label>
              </div>
              <div class="col-sm-6 mb-4">
                @if ($user->nama_panggilan === null)
                    
                @else
                <label for="email" class="form-label fs-base">Nama Panggilan: <span class="text-muted"> {{ $user->nama_panggilan }}</span></label>  
                @endif
              </div>
              <div class="col-sm-6 mb-4">
                <label for="phone" class="form-label fs-base">Jurusan: <span class="text-muted">{{ $user->jurusan }}</span></label>
                
              </div>
              <div class="col-12 mb-4">
                <label for="bio" class="form-label fs-base">Tahun Lulus: <span class="text-muted"> {{ $user->thn_lulus }}</span></label>
                
              </div>
              <div class="col-12 mb-4">
                <label for="bio" class="form-label fs-base">No tlp: <span class="text-muted"> {{ $user->no_telp }}</span></label>
                
              </div>
              <div class="col-12 mb-4">
                <label for="bio" class="form-label fs-base">Alamat: <span class="text-muted"> {{ $user->alamat }}</span></label>
                
              </div>
              <div class="col-12 mb-4">
                <label for="bio" class="form-label fs-base">Email: <span class="text-muted">{{ $user->email }}</label>
                
              </div>
              <div class="col-12 mb-4">
                @if ($rp == null)
                    
                @else
                <label for="bio" class="form-label fs-base"> Riwayat Pendidikan </label>
                <li>&nbsp;  {{ $rp->nama_sekolah_univ }} ({{ $rp->tahun_mulai_univ }} - {{ $rp->tahun_akhir_univ }})</li>
                <li>&nbsp;{{ $rp->nama_sekolah_smk }} ({{ $rp->tahun_mulai_smk }} - {{ $rp->tahun_akhir_smk }})</li>
                <li>&nbsp; {{ $rp->nama_sekolah_smp }} ({{ $rp->tahun_mulai_smp }} - {{ $rp->tahun_akhir_smp }})</li> 
                @endif
                
                
              </div>
              <div class="col-12 mb-4">
                @if ($user->keahlian == null)
                    
                @else
                <label for="bio" class="form-label fs-base">Keahlian: <span class="text-muted"> {{ $user->keahlian }}</span> </label>  
                @endif
                
              </div>
              @if ($user->pekerjaan == null)
              @elseif($user->tmpt_pekerjaan == null)   
              @else
              <div class="col-12 mb-4">
                <label for="bio" class="form-label fs-base">Pekerjaan </label>
                <p>Pekerjaan : {{ $user->pekerjaan }}</p>
                <p>Tempat Pekerjaan: {{ $user->tmpt_pekerjaan }}</p>
                
              </div>
              @endif
              
              <div class="col-12 mb-4">
                @if ($sosmed == null)
                    
                @else
                <label for="bio" class="form-label fs-base">Sosial Media </label>
                <div><i class="bx bxl-instagram-alt"></i> {{ $sosmed->instagram }}</div>
                <div><i class="bx bxl-facebook"></i> {{ $sosmed->facebook }}</div>
                <div><i class="bx bxl-tiktok"></i> {{ $sosmed->tiktok }}</div>
                <div><i class="bx bxl-linkedin"></i> {{ $sosmed->linkedin }}</div>   
                @endif
                
                
              </div>
              <div class="col-12 mb-4">
                <label for="bio" class="form-label fs-base">Karya:
                  <div><a href="https://{{ $user->karya }}">{{ $user->karya }}</a></div>
                </label>
                
              </div>
              <div class="col-12 mb-4">
                @if ($user->foto_kegiatan == null)

                @else
                <label for="bio" class="form-label fs-base text-center mb-3">Dokumentasi
                  <div class="gallery row row-cols-1 row-cols-sm-2 g-4 px-5 mt-3" data-video="true">

                    @foreach (explode('|', $user->foto_kegiatan) as $img)
                    <div class="col-2">
                        <a href="/storage/{{ $img }}" class="gallery-item rounded-3"
                            data-sub-html='Dokumentasi' class="fs-sm text-light">
                            <img src="/storage/{{ $img }}" alt="Gallery thumbnail" style="max-width:500px; max-heigth: 400px; ">
                            <div class="gallery-item-caption fs-sm fw-medium">Dokumentasi</div>
                        </a>
                    </div>
                    @endforeach
                </div>
                </label> 
                @endif
              
                
              </div>
          
        <a href="/semuaalumni" style="text-decoration: none"><h6 class="text-md text-primary"> << Kembali ke halaman sebelumnya</h1></a>
        </div>
      </div>
    </div>
  </section>
    
@endsection