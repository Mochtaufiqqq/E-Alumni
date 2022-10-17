@extends('layouts.user.master')

@section('title', 'Dokumentasi')

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

<!-- Gallery grid with gutters -->
<section class="container">
    <h2 class="text-center">Dokumentasi</h2>
    <div class="gallery row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4" data-video="true">

        <!-- Item -->
        <div class="col">
            <a href="assets/img/portfolio/courses/02.jpg" class="gallery-item rounded-3"
                data-sub-html='<h6 class="fs-sm text-light">Gallery image caption</h6>'>
                <img src="assets/img/portfolio/courses/02.jpg" alt="Gallery thumbnail">
                <div class="gallery-item-caption fs-sm fw-medium">Gallery image caption</div>
            </a>
        </div>

        <!-- Item -->
        <div class="col">
            <a href="https://www.youtube.com/watch?v=8KaJRw-rfn8" class="gallery-item video-item rounded-3"
                data-sub-html='<h6 class="fs-sm text-light">Gallery image caption</h6>'>
                <img src="assets/img/portfolio/courses/01.jpg" alt="Gallery thumbnail">
                <div class="gallery-item-caption fs-sm fw-medium">Gallery video caption</div>
            </a>
        </div>
        <!-- Add as many items as you need -->
    </div>
</section>

@endsection
