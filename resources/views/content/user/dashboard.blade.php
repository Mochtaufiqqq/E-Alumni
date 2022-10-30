@extends('layouts.user.master')

@section('title', 'Dashboard')

@section('content')


<!-- Swiper tabs -->
<div class="position-relative py-lg-4 py-xl-5">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            @foreach ($carousel as $key => $c)

            <div class="carousel-item {{ $key == 0 ? 'active':'' }}"  style="background-color: rgba(45,51,57,0.95);">
                @if ($c->foto)
                <img src="{{ asset($c->foto) }}"  class="d-block w-100 bg-dark opacity-60" alt="...">
                @endif

                <div class="carousel-caption d-none d-md-block">
                    <h5>
                        <span style="color: white">{{ ($c->judul) }}</span>
                    </h5>
                    <div>
                    </div>
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

{{-- berita --}}

<section class="bg-secondary rounded container pb-5 mb-2 mb-lg-4">
    <h2 class="h1 pb-3 pb-lg-4">Berita Terbaru</h2>
    <div class="row">
      <div class="col-md-4 d-none d-md-block">

        <!-- Swiper tabs (Author images) -->
        <div class="swiper-tabs">

          <!-- Author 1 image -->
          @foreach ($beritas as $key => $b)
              
          <div id="author{{ $b->id }}" class="card bg-transparent border-0 swiper-tab {{ $key == 0 ? 'active':'' }}">
            <div class="card-body p-0 rounded-3 bg-size-cover bg-repeat-0 bg-position-top-center" style="background-image: url({{ asset($b->foto) }});">
            </div>
          </div>
          @endforeach

        </div>
      </div>
      <div class="col-md-8">
        <div class="position-relative ms-xxl-5">
          <div class="d-none d-dark-mode-block bg-dark position-absolute top-0 start-0 w-100 h-100 rounded-3"></div>
          <div class="card border-light shadow-sm zindex-2 mt-4 pt-5 p-4 p-xxl-5">
            <span
            class="btn btn-icon btn-primary btn-lg shadow-primary pe-none position-absolute top-0 translate-middle-y">
            <i class="bx bxs-news"></i>
            </span>

            
            <!-- Slider -->
            <div class="swiper mx-0 mb-md-n2 mb-xxl-n3 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden" data-swiper-options="{
              &quot;spaceBetween&quot;: 24,
              &quot;loop&quot;: true,
              &quot;tabs&quot;: true,
              &quot;navigation&quot;: {
                &quot;prevEl&quot;: &quot;#prev&quot;,
                &quot;nextEl&quot;: &quot;#next&quot;
              }
            }">
              <div class="swiper-wrapper" id="swiper-wrapper-875195cffe256b6b" aria-live="polite" style="transform: translate3d(-2392px, 0px, 0px); transition-duration: 0ms;">

                <!-- Item -->
                @foreach ($beritas as $key => $b)

                <div class="swiper-slide h-auto swiper-slide-duplicate-next swiper-slide-duplicate-prev {{ $key == 0 ? 'active':'' }}"
                    data-swiper-tab="#author{{ $b->id }}" data-swiper-slide-index="0" role="group"
                    aria-label="1 / 3" style="width: 468px; margin-right: 24px;">
                    <figure class="card h-100 position-relative border-0 bg-transparent">
                        <blockquote class="card-body p-0 mb-0">
                            <h5>{{ $b->judul }}</h5>
                            <p class="fs-lg mb-0">
                                {{ Str::limit($b->isi,200) }}
                            </p>
                        </blockquote>
                        <div>
                            <a href="/detail_berita" style="text-decoration: none"><h6 class="text-md text-primary"> >> Baca Selengkapnya</h1></a>
                        </div>
                    </figure>
                </div>
                @endforeach
              
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>        
          </div>
        </div>
      </div>
    </div>

    <!-- Slider Prev / Next buttons -->
    <div class="d-flex justify-content-center justify-content-md-start pt-3 mt-2 mt-md-3">
      <button type="button" id="prev" class="btn btn-prev btn-icon btn-sm me-2" tabindex="0" aria-label="Previous slide" aria-controls="swiper-wrapper-875195cffe256b6b">
        <i class="bx bx-chevron-left"></i>
      </button>
      <button type="button" id="next" class="btn btn-next btn-icon btn-sm ms-2" tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-875195cffe256b6b">
        <i class="bx bx-chevron-right"></i>
      </button>
    </div>
    
  </section>


  <section class="container pb-5 mb-2 mb-md-4 mb-lg-5">
    <h2 class="h1 text-center pt-1 pt-xl-2 mb-4">Jumlah Alumni</h2>
    <p class="fs-lg text-muted text-center pb-4 mb-2 mb-lg-3">Jumlah alumni SMKS MAHAPUTRA CERDAS UTAMA dari tahun 2015 - 2022</p>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 pb-xl-3">
      <div class="col text-center border-end">
        <h3 class="h5 mb-3">Angkatan 1</h3>
        <div class="sta card-body fs-lg fw-semibold text-center" data-max="400">0</div>
      </div>
      <div class="col text-center border-end">
        <h3 class="h5 mb-3">Angkatan 2</h3>
        <div class="sta card-body fs-lg fw-semibold text-center" data-max="213">0</div>
      </div>
      <div class="col text-center border-end">
        <h3 class="h5 mb-3">Angkatan 3</h3>
        <div class="sta card-body fs-lg fw-semibold text-center" data-max="125">0</div>
      </div>
      <div class="col text-center border-end">
        <h3 class="h5 mb-3">Angkatan 4</h3>
        <div class="sta card-body fs-lg fw-semibold text-center" data-max="300">0</div>
      </div>
    </div>
  </section>


  <div class="bg-secondary my-2 my-md-4 my-lg-5 py-5 px-3 px-md-0">
    <div class="row align-items-center">
      <div class="col-md-5 offset-lg-1 text-center text-md-start ps-md-5 ps-lg-0 ps-xl-5 pb-2 pb-md-0 mb-4 mb-md-0">
        <p class="lead mb-3">Informasi Lowongan Pekerjaan</p>
        <h2 class="h1 pb-2 pb-md-4">Dapatkan informasi <span class="text-primary"> lowongan </span> pekerjaan&nbsp;menarik</h2>
        <a href="/lowonganpekerjaan" class="btn btn-primary btn-lg">Lihat lowongan pekerjaan</a>
      </div>
      <div class="col-lg-6 col-md-7">
        <div class="d-table mx-auto">
          <img src="/user/img/landing/online-courses/steps/04-dark.svg" class="d-dark-mode-none" width="380" alt="Illustration">
          <img src="assets/img/landing/online-courses/steps/04-light.svg" class="d-none d-dark-mode-block" width="380" alt="Illustration">
        </div>
      </div>
    </div>
  </div>

  <section class="container py-5 my-md-2 my-lg-4 my-xl-5">
    <div class="row justify-content-center pt-1 pb-1 mb-2 mb-md-3 mb-lg-4">
      <div class="col-lg-8 col-md-9 text-center">
        <h2 class="h1 mb-4">Organisasi</h2>
        <p class="fs-lg text-muted mb-0">Organisasi yang ada di SMKS MAHAPUTRA CERDAS UTAMA</p>
      </div>
    </div>
    <div class="swiper swiper-nav-onhover mx-n2 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden" data-swiper-options="{
      &quot;slidesPerView&quot;: 2,
      &quot;spaceBetween&quot;: 8,
      &quot;pagination&quot;: {
        &quot;el&quot;: &quot;.swiper-pagination&quot;,
        &quot;clickable&quot;: true
      },
      &quot;breakpoints&quot;: {
        &quot;500&quot;: {
          &quot;slidesPerView&quot;: 3
        },
        &quot;600&quot;: {
          &quot;slidesPerView&quot;: 4
        },
        &quot;768&quot;: {
          &quot;slidesPerView&quot;: 5
        },
        &quot;850&quot;: {
          &quot;slidesPerView&quot;: 6
        },
        &quot;1000&quot;: {
          &quot;slidesPerView&quot;: 7
        },
        &quot;1200&quot;: {
          &quot;slidesPerView&quot;: 8
        }
      }
    }">
      <div class="swiper-wrapper" id="swiper-wrapper-d988ade310104d34f" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">

        <!-- Item -->
        @foreach ($org as $item)
            
        
        <div class="swiper-slide py-3 swiper-slide-active" role="group" aria-label="1 / 8" style="width: 147.4px; margin-right: 8px;">
          <a href="/organisasi/detail{{ $item->id }}" class="card card-hover border-0 shadow-sm py-3 mx-2">
            <div class="card-body">
              <img src="{{ asset($item->logo) }}" class="d-block mx-auto" alt="Google">
            </div>
          </a>
        </div>
        @endforeach

      
      </div>

      <!-- Pagination (bullets) -->
      <div class="swiper-pagination position-relative pt-3 mt-4 swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span></div>
    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
    <div class="text-center my-3 mt-xl-n2">
      <a href="/organisasi" class="btn btn-primary">Lihat Semua Organisasi</a>
    </div>
  </section>

{{-- Lowongan Pekerjaan --}}

{{-- <section class="container pb-5 mb-2 mb-md-4 mb-lg-5 mt-n2">
    <article class="card border-0 bg-transparent">
        <h2 class="h1 pb-3 pb-lg-4 text-center">Lowongan Pekerjaan </h2>
        <div class="row g-0">
            <div class="col-8">
                <div class="card-body py-5 pt-sm-0 ps-sm-4 pb-0 pb-sm-4">
                    <p
                    class="badge fs-sm text-white bg-warning shadow-warning text-decoration-none mb-3">{{ $lokers->nama_perusahaan }}</p>
                    <h3 class="h4">
                        <a href="/lowonganpekerjaan">{{ $lokers->judul }}</a>
                    </h3>
                    <p class="mb-4">{{ $lokers->deskripsi }}</p>
                    <div class="d-flex align-items-center text-muted">
                        <a href="/lowonganpekerjaan" class="btn btn-outline-primary">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="position-relative bg-position-center bg-repeat-0 bg-size-cover rounded-3" style="background-image: url({{ asset($lokers->foto) }}); min-height: 15rem;"></div>
            </div>
        </div>
    </article>
</section> --}} 


@endsection
