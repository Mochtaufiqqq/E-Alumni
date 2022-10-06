@extends('layouts.user.master')

@section('title', 'Semua Alumni')

@section('content')


<!-- Link swiper slides to any content via swiper-tabs. Place outside of any container -->

<!-- Swiper tabs -->
<div class="position-relative py-lg-4 py-xl-5">
    <div class="swiper-tabs position-absolute top-0 start-0 w-100 h-100">
        <div id="image-1"
            class="position-absolute top-0 start-0 w-100 h-100 bg-position-center bg-repeat-0 bg-size-cover swiper-tab active"
            style="background-image: url({{ asset('user/img/landing/software-company/case-study01.jpg') }});">
            <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-35"></span>
        </div>
        <div id="image-2"
            class="position-absolute top-0 start-0 w-100 h-100 bg-position-center bg-repeat-0 bg-size-cover swiper-tab"
            style="background-image: url({{ asset('user/img/landing/software-company/case-study02.jpg') }});">
            <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-35"></span>
        </div>
        <div id="image-3"
            class="position-absolute top-0 start-0 w-100 h-100 bg-position-center bg-repeat-0 bg-size-cover swiper-tab"
            style="background-image: url({{ asset('user/img/landing/software-company/case-study02.jpg') }});">
            <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-35"></span>
        </div>
    </div>

    <!-- Swiper slider -->
    <div class="container position-relative zindex-5 py-5">
        <div class="row py-2 py-md-3">
            <div class="col-xl-5 col-lg-7 col-md-9">

                <!-- Slider controls (Prev / next) -->

                <!-- Card -->
                <div class="swiper" data-swiper-options='{
                "spaceBetween": 30,
                        "loop": true,
                        "tabs": true,
                        "pagination": {
                          "el": "#case-study-pagination",
                          "clickable": true
                        },
                        "navigation": {
                          "prevEl": "#case-study-prev",
                          "nextEl": "#case-study-next"
                        }
                      }'>
                    <div class="swiper-wrapper">

                        <!-- Item -->
                        <div class="swiper-slide" data-swiper-tab="#image-1">
                            <img src="{{ asset('user/img/landing/software-company/case-study-logo01.png') }}"
                                class="d-block mb-3" width="72" alt="Logo">
                            <h3 class="mb-2">Cashless payment "udy</h3>
                            <p class="fs-sm text-muted border-bottom pb-3 mb-3">Payment Service Provider Company</p>
                            <p class="pb-2 pb-lg-3 mb-3">Aenean dolor elit tempus tellus imperdiet. Elementum, ac
                                convallis morbi sit est feugiat ultrices. Cras tortor maecenas pulvinar nec ac justo.
                                Massa sem eget semper...</p>
                            <a href="#" class="btn btn-primary">View "udy</a>
                        </div>

                        <!-- Item -->
                        <div class="swiper-slide" data-swiper-tab="#image-2">
                            <img src="{{ asset('user/img/landing/software-company/case-study-logo02.png') }}"
                                class="d-block mb-3" width="72" alt="Logo">
                            <h3 class="mb-2">Smart tech "udy</h3>
                            <p class="fs-sm text-muted border-bottom pb-3 mb-3">Data Analytics Company</p>
                            <p class="pb-2 pb-lg-3 mb-3">Adipiscing quis a at ligula. Gravida gravida diam rhoncus
                                cursus in. Turpis sagittis tempor gravida phasellus sapien. Faucibus donec consectetur
                                sed id sit nisl.</p>
                            <a href="#" class="btn btn-primary">View "udy</a>
                        </div>
                        <!-- item -->
                        <div class="swiper-slide" data-swiper-tab="#image-3">
                            <img src="{{ asset('user/img/landing/software-company/case-study-logo02.png') }}"
                                class="d-block mb-3" width="72" alt="Logo">
                            <h3 class="mb-2">Smart tech "udy</h3>
                            <p class="fs-sm text-muted border-bottom pb-3 mb-3">Data Analytics Company</p>
                            <p class="pb-2 pb-lg-3 mb-3">Adipiscing quis a at ligula. Gravida gravida diam rhoncus
                                cursus in. Turpis sagittis tempor gravida phasellus sapien. Faucibus donec consectetur
                                sed id sit nisl.</p>
                            <a href="#" class="btn btn-primary">View "udy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center justify-content-md-starts pb-3 mb-3">
            <button type="button" id="case-study-prev" class="btn btn-prev btn-icon btn-sm bg-white me-2">
                <i class="bx bx-chevron-left"></i>
            </button>
            <button type="button" id="case-study-next" class="btn btn-next btn-icon btn-sm bg-white ms-2">
                <i class="bx bx-chevron-right"></i>
            </button>
        </div>
        <!-- Pagination (bullets) -->
        <div class="dark-mode pt-4 mt-3">
            <div id="case-study-pagination" class="swiper-pagination position-relative bottom-0"></div>
        </div>
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

  <section class="container-fluid pt-lg-5 pb-5 mb-2 mb-md-4 mb-lg-5">
    <h2 class="h1 text-center pb-md-1 mb-1 mb-sm-3">Semua Alumni</h2>
          <div class="row">
            @foreach ($users as $u)
                
            <!-- Item -->
            <div class="col-5 col-md-6 col-sm-6 col-xs-12 col-lg-3">
                <div class="card card-body d-flex flex-row align-items-center card-hover bg-light border-0">
                    <img src="{{ asset($u->foto_profile) }}" class="d-block rounded-circle" width="50" alt="Darrell Steward">
                    <div class="ps-4">
                      <h5 class="fw-sm fs-lg mb-1">{{ $u->nama }}</h5>
                      <p class="fs-sm mb-3">Bekerja di PT.Nasa Sebagai Manager</p>
                      <p class="fs-sm mb-3">{{ $u->thn_lulus }}</p>
                      <div class="d-flex">
                        <button class="btn btn-outline-secondary" type="button" data-bs-toggle="modal" data-bs-target="#modalEdit" >
                            Detail
                          </button>
                         
             
                      </div>
                  </div>
              </div>
            </div>

            @endforeach
          </div>

    <div class="flex">
    <nav aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item">
        <a href="#" class="page-link">
          <i class="bx bx-chevron-left ms-n1 me-1"></i>
          Prev
        </a>
      </li>
      <li class="page-item disabled d-sm-none">
        <span class="page-link text-body">2 / 5</span>
      </li>
      <li class="page-item d-none d-sm-block">
        <a href="#" class="page-link">1</a>
      </li>
      <li class="page-item active d-none d-sm-block" aria-current="page">
        <span class="page-link">
          2
          <span class="visually-hidden">(current)</span>
        </span>
      </li>
      <li class="page-item d-none d-sm-block">
        <a href="#" class="page-link">3</a>
      </li>
      <li class="page-item d-none d-sm-block">
        <a href="#" class="page-link">4</a>
      </li>
      <li class="page-item d-none d-sm-block">
        <a href="#" class="page-link">5</a>
      </li>
      <li class="page-item">
        <a href="#" class="page-link">
          Next
          <i class="bx bx-chevron-right me-n1 ms-1"></i>
        </a>
      </li>
    </ul>
  </nav>
</div>

  </section>


@endsection
