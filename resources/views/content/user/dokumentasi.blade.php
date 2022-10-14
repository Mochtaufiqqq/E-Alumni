@extends('layouts.user.master')

@section('title', 'Dokumentasi')

@section('content')

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
