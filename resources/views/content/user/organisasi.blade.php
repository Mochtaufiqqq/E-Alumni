@extends('layouts.user.master')

@section('title', 'Organisasi')

@section('content')


<!-- Link swiper slides to any content via swiper-tabs. Place outside of any container -->

<!-- Swiper tabs -->
<div class="position-relative py-lg-4 py-xl-5">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            @foreach ($carousel as $key => $c)
            
          <div class="carousel-item {{ $key == 0 ? 'active':'' }}">
            @if ($c->foto)
            <img src="{{ asset($c->foto) }}" class="d-block w-100" alt="...">    
            @endif
            
            <div class="carousel-caption d-none d-md-block">
                    <h5>
                        <div class="text-start">{{ ($c->judul) }}</div>
                    </h5>
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

<!-- Breadcrumb -->
<div class="container py-4 mb-2 my-lg-3">
    <h1 class="border-bottom pb-4">Organisasi</h1>
</div>


<!-- Team (Slider) -->
<section class="container-fluid pt-lg-2 pb-5 mb-2 mb-md-4 mb-lg-5">
    <h2 class="h1 text-center pb-md-1 mb-1 mb-sm-3">Our Leaders</h2>
    <div class="swiper mx-0 mb-md-n2 mb-xxl-n3" data-swiper-options='{
            "slidesPerView": 1,
            "spaceBetween": 8,
            "loop": false,
            "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
            },
            "breakpoints": {
            "480": {
                "slidesPerView": 2
            },
            "700": {
                "slidesPerView": 3
            },
            "900": {
                "slidesPerView": 4
            },
            "1160": {
                "slidesPerView": 5
            },
            "1500": {
                "slidesPerView": 6
            }
            }
        }'>
        <div class="swiper-wrapper">

            <!-- Item -->
            @foreach ($organisasi as $item)
            <div class="swiper-slide py-3">
                <div class="card card-body card-hover bg-light border-0 text-center mx-2">
                    <img src="{{ $item->logo }}" class="d-block rounded-circle mx-auto mb-3" width="162"
                        alt="Ralph Edwards">
                    <h5 class="fw-medium fs-lg mb-1">{{ $item->organisasi->organisasi }}</h5>
                    <div class="d-flex justify-content-center">
                        <a href="/organisasi/detail/{{ $item->id }}" class="btn btn-outline-primary btn-md">
                            <i class="bx bxl-facebook"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination (bullets) -->
        <div class="swiper-pagination position-relative pt-3 mt-3"></div>
    </div>
</section>
@endsection
