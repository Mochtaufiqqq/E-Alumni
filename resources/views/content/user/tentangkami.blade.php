@extends('layouts.user.master')

@section('title', 'Dashboard')

@section('content')
    
    <!-- Breadcrumb -->
    <nav class="container py-4 mb-2 my-lg-3" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="index-2.html"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">About v.2</li>
        </ol>
    </nav>


    <!-- About company -->
    <section class="container pb-5 mb-md-2 mb-lg-4">
        @foreach ($tentangkami as $t)
            
        <div class="row pt-3 pt-md-4">
            <div class="col-md-6">
                <h1 class="border-bottom pb-4">{{ $t->judul }}</h1>
            </div>
            <div class="col-md-6">
                <p class="fs-lg ps-lg-4 mb-1 mb-lg-4">{{ $t->isi }}</p>
            </div>
        </div>
        @endforeach
    </section>


    <!-- Stats -->


    <!-- Gallery -->



    <!-- Brands (Carousel) -->


    <!-- Testimonials (Slider) -->


    <!-- Team (Slider) -->


    <!-- Contact form -->
@endsection