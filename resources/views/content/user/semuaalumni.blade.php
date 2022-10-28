@extends('layouts.user.master')

@section('title', 'Semua Alumni')

@section('content')


<!-- Swiper tabs -->
<div class="position-relative py-lg-4 py-xl-5">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            @foreach ($carousel as $key => $c)
          <div class="carousel-item {{ $key == 0 ? 'active':'' }}" style="background-color: rgba(45,51,57,0.95);">
            @if ($c->foto)
            <img src="{{ asset($c->foto) }}" class="d-block w-100 bg-dark opacity-60" alt="...">    
            @endif
            
            <div class="carousel-caption d-none d-md-block">
              <h5>
                  <span class="animated bounceInDown" style="color: white">{{ ($c->judul) }}</span>
              </h5>
                <a href="#lihatsemuaalumni" class="btn btn-slider">
                  Lihat Semua Alumni
              </a>
          </div>
        </div>
        @endforeach
        
      </div>
      
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
</div>
</div>


<!-- Brands (Carousel) -->
{{-- <section class="container-fluid pt-lg-2 pb-5 mb-2 mb-md-4 mb-lg-5">
    <h2 class="h1 text-center pb-md-1 mb-1 mb-sm-3">Our Leaders</h2>
    <div class="col">
        <div class="row">
             <!-- Team Style 2: Horizontal -->
    <div class="card card-body d-flex flex-row align-items-center card-hover bg-light border-0">
        <img src="assets/img/team/10.jpg" class="d-block rounded-circle" width="162" alt="Darrell Steward">
        <div class="ps-4">
          <h5 class="fw-medium fs-lg mb-1">Darrell Steward</h5>
          <p class="fs-sm mb-3">Lead Developer</p>
          <div class="d-flex">
            <a href="#" class="btn btn-icon btn-outline-secondary btn-facebook btn-sm me-2">
              <i class="bx bxl-facebook"></i>
            </a>
            <a href="#" class="btn btn-icon btn-outline-secondary btn-stack-overflow btn-sm me-2">
              <i class="bx bxl-stack-overflow"></i>
            </a>
            <a href="#" class="btn btn-icon btn-outline-secondary btn-github btn-sm">
              <i class="bx bxl-github"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
</div>
  </section> --}}

<section id="lihatsemuaalumni" class="container-fluid pt-lg-5 pb-5 mb-2 mb-md-4 mb-lg-5">

  
  
    <h2 class="h2 text-center pb-md-1 mb-1 mb-sm-3">Alumni SMKS MAHAPUTRA CERDAS UTAMA</h2>
    
      <ul class="nav nav-tabs justify-content-center mb-lg-2 mb-4 pb-lg-2" role="tablist">
        <li class="nav-item" role="presentation">
          <a href="/semuaalumni" class="btn nav-link text-nowrap">
            <i class="bx bxs-graduation fs-xl opacity-60 me-2"></i>
            Semua
          </a>
        </li>
        <li class="nav-item" role="presentation">
          <a href="{{ route('angkatan1') }}" class="btn nav-link text-nowrap">
            <i class="bx bxs-graduation fs-xl opacity-60 me-2"></i>
            Angkatan 1
          </a>
        </li>
        <li class="nav-item" role="presentation">
          <a href="{{ route('angkatan2') }}" class="btn nav-link text-nowrap">
            <i class="bx bxs-graduation fs-xl opacity-60 me-2"></i>
            Angkatan 2
          </a>
        </li>
        <li class="nav-item" role="presentation">
          <a href="{{ route('angkatan3') }}" class="btn nav-link text-nowrap">
            <i class="bx bxs-graduation fs-xl opacity-60 me-2"></i>
            Angkatan 3
          </a>
        </li>
        <li class="nav-item" role="presentation">
          <a href="{{ route('angkatan4') }}" class="btn nav-link text-nowrap">
            <i class="bx bxs-graduation fs-xl opacity-60 me-2"></i>
            Angkatan 4
          </a>
        </li>
      </ul>

      <div class="text-center">
        <form class="input-group">
          <input type="text" placeholder="Cari data..." class="form-control form-control-sm rounded-3">
          <button type="submit" class="btn btn-icon btn-sm btn-primary rounded-3 ms-3">
            <i class="bx bx-search"></i>
          </button>
        </form>
      </div>


        

        <!-- Item -->
        <div class="row row-cols-1 row-cols-md-3 g-4 pt-2 pt-md-4 pb-lg-2">
          @foreach ($user as $u)
        <div class="col">
            <div class="card card-body d-flex flex-row align-items-center card-hover bg-light border-0">
                @if ($u->foto_profile == null)
                <img src="{{ asset('/default/user.png') }}" class="d-block rounded-circle" width="50" height="50" alt="user">
                @else
                <img src="{{ asset($u->foto_profile) }}" class="d-block rounded-circle" width="50" alt="user">
                @endif

                <div class="ps-4">
                    <h5 class="fw-sm fs-lg mb-1">{{ $u->nama }}</h5>
                    <p class="fs-sm mb-3">Tahun lulus: {{ $u->thn_lulus }}</p>
                    {{-- <p class="fs-sm mb-3">{{ $u->thn_lulus }}</p> --}}
                    <div class="d-flex">
                        <a href="/detailalumni/{{ $u->id }}" class="btn btn-outline-secondary
                        ">Detail</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
      </div>
</section>

@endsection