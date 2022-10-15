@extends('layouts.user.master')

@section('title', 'Berita')

@section('content')



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
<!-- Page content -->
<section class="container mt-4 mb-lg-5 pt-lg-2 pb-5">

        <!-- Page title + Layout switcher + Search form -->
        <div class="row align-items-end gy-3 mb-4 pb-lg-3 pb-1">
          <div class="col-lg-4 col-md-4">
            <h1 class="mb-2 mb-md-0">Lowongan Kerja</h1>
          </div>
          <div class="col-lg-8 col-md-8">
            <div class="row gy-2">
              <div class="col-lg-5 col-sm-6">
                <div class="d-flex align-items-center">
                  <select class="form-select">
                    <option>Semua Kategori</option>
                    <option value="Develover">Develover</option>
                    <option value="Designer">Designer</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-7 col-sm-6">
                <div class="input-group">
                  <input type="text" class="form-control pe-5 rounded" placeholder="Cari Berita...">
                  <i class="bx bx-search position-absolute top-50 end-0 translate-middle-y me-3 zindex-5 fs-lg"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Item -->
        
        @foreach ($kerjas as $k)
        <article class="card border-0 shadow-sm overflow-hidden mb-4">
          <div class="row g-0">
            <div class="col-sm-4 position-relative bg-position-center bg-repeat-0 bg-size-cover" style="background-image: url({{ asset($k->foto) }}); min-height: 15rem;">
              <a href="//{{ $k->id }}" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
            </div>
            <div class="col-sm-8">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">{{ $k->kategori }}</a>
                  <span class="fs-sm text-muted border-start ps-3 ms-3">{{ $k->tgl }}</span>
                </div>
                <h3 class="h4">
                  <a href="/detail_berita/{{ $k->id }}">{{ $k->judul }}</a>
                </h3>
                <p>{{ Str::limit($k->deksripsi,200) }}</p>
                <div class="d-flex align-items-center justify-content-between">
                    <a href="/detail_berita/{{ $k->id }}" class="btn btn-outline-primary">View more</a>
                </div>
              </div>
            </div>
           </div>
        </article>
        @endforeach
                    

        <!-- Pagination -->
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center pt-lg-3 pt-1">
            <li class="page-item">
              <a href="#" class="page-link">
                <i class="bx bx-chevron-left mx-n1"></i>
              </a>
            </li>
            <li class="page-item disabled d-sm-none">
              <span class="page-link text-body">2 / 4</span>
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
            <li class="page-item">
              <a href="#" class="page-link">
                <i class="bx bx-chevron-right mx-n1"></i>
              </a>
            </li>
          </ul>
        </nav>
      </section>
</div>

@endsection