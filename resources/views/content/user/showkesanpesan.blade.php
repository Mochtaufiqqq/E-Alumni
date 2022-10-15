@extends('layouts.user.master')

@section('title', 'Semua Alumni')

@section('content')


<section class="container-fluid pt-lg-5 pb-5 mb-2 mb-md-4 mb-lg-5">
    @if (session('success'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Selamat ! </strong>
        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" data-bs-original-title=""
            title=""></button>
        {{ session('success') }}
    </div>
    @endif
    <h2 class="h1 text-center pb-md-1 mb-1 mb-sm-3">Kesan & Pesan</h2>
    @if (Route::has('login'))
    @auth
    <div class="text-center mb-5">
    @if (auth()->user()->kesanpesan == null)
    
    <a class="btn btn-primary" href="#modalKesanPesan" data-bs-toggle="modal"
    data-bs-target="#modalKesanPesan">Tambahkan Kesan Pesan</a>   
    @else
    <a class="btn btn-primary" href="#modalEditKesanPesan/{{ auth()->user()->id }}" data-bs-toggle="modal" data-bs-target="#modalEditKesanPesan">Edit Kesan Pesan</a>
    @endif
    </div>
    
    @endauth 
    @endif

    
    <!-- Modal kesan Pesan -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalKesanPesan">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <!-- Modal header with nav tabs -->
                <div class="modal-header">
                    <h5 class="modal-title">Tambahkan Kesan & Pesan</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal body with tab panes -->
                <div class="modal-body tab-content py-4">

                    <!-- Sign in form -->
                    <form action="/addkesanpesan" method="POST" class="tab-pane fade show active" autocomplete="off"
                        id="signin">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="email1">Isi</label>
                            <input class="form-control" type="text" name="isi" id="email1" placeholder="Isi">
                        </div>
                        <button class="btn btn-primary d-block w-100" type="submit">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
     <!-- Modal edit kesan Pesan -->
     <div class="modal fade" tabindex="-1" role="dialog" id="modalEditKesanPesan">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <!-- Modal header with nav tabs -->
                <div class="modal-header">
                    <h5 class="modal-title">Edit Kesan & Pesan</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal body with tab panes -->
                <div class="modal-body tab-content py-4">

                    <!-- Sign in form -->
                    <form action="/editkesanpesan/{{ $kesanpesan->id }}" method="POST" class="tab-pane fade show active" autocomplete="off"
                        id="signin">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label class="form-label" for="email1">Isi</label>
                            <input class="form-control" type="text" value="{{ old('isi',auth()->user()->isi) }}" name="isi" id="email1" placeholder="Isi">
                        </div>
                        <button class="btn btn-primary d-block w-100" type="submit">Konfirmasi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
                    @if ($k->user->foto_profile == null)
                    <img src="{{ asset('/jikatidadada/user.png') }}" alt="" width="48" class="rounded-circle">
                        
                    @else
                    <img src="{{ asset($k->user->foto_profile) }}" alt=""  width="48" class="rounded-circle">
                        
                    @endif
                    {{-- <img src="{{ asset($k->user->foto_profile) }}" width="48" class="rounded-circle"
                        alt="Jerome Bell"> --}}
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