@extends('layouts.user.master')

@section('title', 'Detail')

@section('content')
    <section class="bg-secondary py-5">
      <div class="container py-2 py-md-4 py-lg-5">
        <div class="row">
          <div class="col-md-4">
            <div class="position-relative d-flex h-100">
              <div class="position-absolute top-0 start-0 w-100 h-100 rounded-3 bg-size-cover bg-repeat-0 bg-position-center" style="background-image: url({{ $organisasi->logo }});"></div>
            </div>
          </div>
          <div class="col-md-8">
            <figure class="card position-relative border-0 shadow-sm py-3 p-0 p-lg-4 mt-4 mb-0 ms-xl-5">
              <span class="btn btn-icon btn-primary btn-lg shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4 ms-lg-5">
                <i class="bx bxs-quote-left"></i>
              </span>
              <blockquote class="card-body mt-2 mb-0">
                <p class="fs-lg">Dolor, a eget elementum, integer nulla volutpat, nunc, sit. Quam iaculis varius mauris magna sem. Egestas sed sed suscipit dolor faucibus dui imperdiet at eget. Tincidunt imperdiet quis hendrerit aliquam feugiat neque cras sed. Dictum quam integer volutpat tellus, faucibus platea. Pulvinar turpis proin faucibus at mauris.</p>
              </blockquote>
            </figure>
          </div>
        </div>
      </div>
    </section>

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
              @foreach ($orUser as $item)
              <div class="swiper-slide py-3">
                  <div class="card card-body card-hover bg-light border-0 text-center mx-2">
                      <img src="{{ $item->user->foto_profile }}" class="d-block rounded-circle mx-auto mb-3" width="162"
                      alt="Ralph Edwards">
                      <h5 class="fw-medium fs-lg mb-1">{{ $item->organisasi->organisasi}}</h5>
                      <p class="fs-sm mb-3">{{ $item->jabatan->jabatan }}</p>
                      <div class="d-flex justify-content-center">

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