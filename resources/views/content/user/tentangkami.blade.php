@extends('layouts.user.master')

@section('title', 'Tentang Kami')

@section('content')
    
@foreach ($tentangkami as $t)
    
<div class="jarallax d-none d-md-block" data-jarallax="" data-speed="0.35">
    <span class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-primary-translucent"></span>
    
    <div class="d-none d-xxl-block" style="height: 700px;"></div>
    <div class="d-none d-md-block d-xxl-none" style="height: 550px;"></div>
  <div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100; clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%);"><div class="jarallax-img" style="background-image: url(&quot;{{ asset($t->foto) }}&quot;); object-fit: cover; object-position: 50% 50%; max-width: none; position: fixed; top: 0px; left: 0px; width: 995px; height: 626.05px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; margin-top: 20.475px; transform: translate3d(0px, 6.125px, 0px);" data-jarallax-original-styles="background-image: url(assets/img/about/cover.jpg);">
    @endforeach
            </div>
        </div>
    </div>



    <!-- About company -->
    <section class="container pb-5 mb-md-2 mb-lg-4">
        @foreach ($tentangkami as $t)
            
        <div class="row pt-3 pt-md-4">
            <div class="text-center col-md-6">
                <h1 class="pb-4">{{ $t->judul }}</h1>
            </div>
            <div class="col-md-6">
                <p class="fs-lg ps-lg-4 mb-1 mb-lg-4">{{ $t->isi }}</p>
            </div>
            <div class="border-bottom">
                
            </div>
        </div>
        @endforeach
    </section>

@endsection