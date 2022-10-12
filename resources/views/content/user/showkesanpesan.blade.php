@extends('layouts.user.master')

@section('title', 'Semua Alumni')

@section('content')




<section class="container-fluid pt-lg-5 pb-5 mb-2 mb-md-4 mb-lg-5">
    <h2 class="h1 text-center pb-md-1 mb-1 mb-sm-3">Kesan & Pesan</h2>
    <div class="row">
        <!-- Testimonial: Style 1 -->
        @foreach ($dtkesanpesan as $k)


        <div class="col-5 col-md-6 col-sm-6 col-xs-12 col-lg-3">
        <figure class="card h-100 position-relative border-0 shadow-sm pt-4 mt-4">
            <span
                class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                <i class="bx bxs-quote-left"></i>
            </span>
            <blockquote class="card-body mb-0">
                <p class="mb-0">{{ $k->isi }}</p>
            </blockquote>
            <figcaption class="card-footer border-0 d-flex align-items-center pt-0">
                <img src="/viho_all/html/assets/img/avatar/10.jpg" width="48" class="rounded-circle" alt="Jerome Bell">
                <div class="ps-3">
                    <h6 class="fw-semibold lh-base mb-0">{{ $k->user->nama }}</h6>
                    <span class="fs-sm text-muted">Co-founder of Lorem Company</span>
                </div>
            </figcaption>
        </figure>
    </div>
    @endforeach
        
    </div>


</section>


@endsection