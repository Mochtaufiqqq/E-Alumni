@extends('layouts.user.master')

@section('title', 'Dashboard')

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
                        <span>{{ ($c->judul) }}</span>
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
<section class="container pb-5 mb-2 mb-lg-4 mt-5" style="margin-top: -228px;">
    <h2 class="h1 pb-3 pb-lg-4 text-center">Berita Terbaru</h2>
    <div class="row">
        <div class="col-md-4 d-none d-md-block">

            <!-- Swiper tabs (Author images) -->
            <div class="swiper-tabs">

                @foreach ($beritas as $b)
                <!-- Author 1 image -->
                <div id="author{{ $b->id }}" class="card bg-transparent border-0 swiper-tab">
                    <div class="card-body p-0 rounded-3 bg-size-cover bg-repeat-0 bg-position-top-center"
                        style="background-image: url({{ asset($b->foto) }});"></div>
                </div>
                @endforeach

            </div>
        </div>
        <div class="col-md-8">
            <div class="position-relative ms-xxl-5">
                <div class="d-none d-dark-mode-block bg-dark position-absolute top-0 start-0 w-100 h-100 rounded-3">
                </div>
                <div class="card border-light shadow-sm zindex-2 mt-4 pt-5 p-4 p-xxl-5">
                    <span
                        class="btn btn-icon btn-primary btn-lg shadow-primary pe-none position-absolute top-0 translate-middle-y">
                        <i class="bx bxs-news"></i>
                    </span>


                    <!-- Slider -->
                    <div class="swiper mx-0 mb-md-n2 mb-xxl-n3 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden"
                        data-swiper-options="{
              &quot;spaceBetween&quot;: 24,
              &quot;loop&quot;: true,
              &quot;tabs&quot;: true,
              &quot;navigation&quot;: {
                &quot;prevEl&quot;: &quot;#prev&quot;,
                &quot;nextEl&quot;: &quot;#next&quot;
              }
            }">
                        <div class="swiper-wrapper" id="swiper-wrapper-be350a4305ea49ea" aria-live="polite"
                            style="transform: translate3d(-1476px, 0px, 0px); transition-duration: 0ms;">
                            <div class="swiper-slide h-auto swiper-slide-duplicate swiper-slide-duplicate-active"
                                data-swiper-tab="#author-3" data-swiper-slide-index="2" role="group" aria-label="3 / 3"
                                style="width: 468px; margin-right: 24px;">
                                
                            </div>

                            <!-- Item -->

                            @foreach ($beritas as $b)

                            <div class="swiper-slide h-auto swiper-slide-duplicate-next"
                                data-swiper-tab="#author{{ $b->id }}" data-swiper-slide-index="0" role="group"
                                aria-label="1 / 3" style="width: 468px; margin-right: 24px;">
                                <figure class="card h-100 position-relative border-0 bg-transparent">
                                    <blockquote class="card-body p-0 mb-0">
                                        <p class="fs-lg mb-0">
                                            {{ Str::limit($b->isi,200) }}
                                        </p>
                                    </blockquote>
                                    <div>
                                        <a href="/detail_berita/{{ $b->id }}" class="btn btn-outline-primary">Lihat Selengkapnya</a>
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
        <button type="button" id="prev" class="btn btn-prev btn-icon btn-sm me-2" tabindex="0"
            aria-label="Previous slide" aria-controls="swiper-wrapper-be350a4305ea49ea">
            <i class="bx bx-chevron-left"></i>
        </button>
        <button type="button" id="next" class="btn btn-next btn-icon btn-sm ms-2" tabindex="0" aria-label="Next slide"
            aria-controls="swiper-wrapper-be350a4305ea49ea">
            <i class="bx bx-chevron-right"></i>
        </button>
    </div>
</section>



{{-- Lowongan Pekerjaan --}}

<section class="container pb-5 mb-2 mb-md-4 mb-lg-5 mt-n2">
    <article class="card border-0 bg-transparent">
        <h2 class="h1 pb-3 pb-lg-4 text-center">Lowongan Pekerjaan </h2>
        <div class="row g-0">
            <div class="col-8">
                <div class="card-body py-5 pt-sm-0 ps-sm-4 pb-0 pb-sm-4">
                    <p
                    class="badge fs-sm text-white bg-warning shadow-warning text-decoration-none mb-3">{{ $lokers->nama_perusahaan ?? 'tidak ada' }}</p>
                    <h3 class="h4">
                        <a href="/lowonganpekerjaan">{{ $lokers->judul ?? 'tidak ada'}}</a>
                    </h3>
                    <p class="mb-4">{{ $lokers->deskripsi ?? 'tidak ada'}}</p>
                    <div class="d-flex align-items-center text-muted">
                        <a href="/lowonganpekerjaan" class="btn btn-outline-primary">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="position-relative bg-position-center bg-repeat-0 bg-size-cover rounded-3" style="background-image: url({{ asset($lokers->foto ?? 'tidak ada') }}); min-height: 15rem;"></div>
            </div>
        </div>
    </article>
</section>


<!-- Gallery -->



<!-- Brands (Carousel) -->



<!-- Testimonials (Slider) -->



<!-- Team (Slider) -->



<!-- Contact form -->

@endsection
