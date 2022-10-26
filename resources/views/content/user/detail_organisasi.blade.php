@extends('layouts.user.master')

@section('title', 'Detail')

@section('content')
    <section class="bg-secondary py-5">
      <div class="container py-2 py-md-4 py-lg-5">
        <div class="row">
          <div class="col-4">
            <div class="position-relative d-flex" style="height: 400px">
              <div class="position-absolute top-0 start-0 w-100 h-100 rounded-3 bg-size-cover bg-repeat-0 bg-position-center" style="background-image: url({{ $organisasi->logo }});"></div>
            </div>
          </div>  
          <div class="col-8">
            <figure class="card position-relative border-0 shadow-sm py-3 p-0 p-lg-4 mt-4 mb-0 ms-xl-5">
              <span class="btn btn-icon btn-primary btn-lg shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4 ms-lg-5">
                <i class="bx bxs-quote-left"></i>
              </span>
              <div class="card-body mt-2 mb-0">
                <p class="fs-lg">{{ $organisasi->deskripsi }}</p>
              </div>
            </figure>
          </div>
        </div>
      </div>
    </section>

    <section class="container-fluid pt-lg-2 pb-5 mb-2 mb-md-4 mb-lg-5">
      <h2 class="h1 text-center pb-md-1 mb-1 mb-sm-3">Our Leaders</h2>
      <div class="text-center">
        <img src="{{ $organisasi->foto_struktur }}" alt="">
      </div>
  </section>    
@endsection