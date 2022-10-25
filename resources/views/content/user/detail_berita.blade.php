@extends('layouts.user.master')

@section('title', 'Detail Berita')

@section('content')

<!-- Breadcrumb -->
<nav class="container mt-lg-4 pt-5" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0 pt-4 pb-5">
        <li class="breadcrumb-item">
            <a href="/"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="/tampilberita">Semua Berita</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Detail Berita</li>
    </ol>
</nav>



<!-- Hero image (Parallax) -->
<section class="jarallax" data-jarallax data-speed="0.4">
    <div class="jarallax-img" style="background-image: url({{ asset($beritas->foto) }});"></div>
    <div class="d-none d-xxl-block" style="height: 800px;"></div>
    <div class="d-none d-lg-block d-xxl-none" style="height: 600px;"></div>
    <div class="d-none d-md-block d-lg-none" style="height: 450px;"></div>
    <div class="d-md-none" style="height: 400px;"></div>
</section>

<!-- Page title -->
<section class="container pt-4 mb-0 mb-lg-0">
    <h1>{{ $beritas->judul }}</h1>
    <p class="text-muted mb-0">{{ $beritas->tgl }}</p>
</section>

<!-- About project -->
<section class="container py-5 my-1 my-md-4 my-lg-5">
    <div class="row">
        <div class="col-lg-12 mb-4 mb-lg-0">
            <div class="pe-lg-4 me-lg-3 pe-xl-0 me-xl-0">
                <p class="fs-lg mb-0">{{ $beritas->isi }}</p>
            </div>
        </div>
    </div>
</section>

<!-- Gallery grid with gutters -->
<h2 class="text-center">Dokumentasi</h2>
<div class="gallery row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 px-5 mb-5" data-video="true">
    <!-- Item -->
    @foreach (explode('|', $beritas->dokumentasi) as $img)
        <div class="col-4">
            <a href="/storage/{{ $img }}" class="gallery-item rounded-3 width="200px" height="150px""
                data-sub-html='<h6 class="fs-sm text-light">Gallery image caption</h6>'>
                <img src="/storage/{{ $img }}" alt="Gallery thumbnail" width="200px" height="150px">
                <div class="gallery-item-caption fs-sm fw-medium">Gallery image caption</div>
            </a>
        </div>
    @endforeach
    
</div>
@endsection
