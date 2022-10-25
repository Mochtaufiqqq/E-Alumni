@extends('layouts.user.master')

@section('title', 'Lowongan Pekerjaan')

@section('content')


<div class="position-relative py-lg-4 py-xl-5">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            @foreach ($carousel as $key => $c)
            
          <div class="carousel-item {{ $key == 0 ? 'active':'' }}">
            @if ($c->foto)
            <img src="{{ asset($c->foto) }}" class="d-block w-100" alt="...">    
            @endif
            
            <div class="carousel-caption d-none d-md-block">
                <div class="custom-carousel-content">
                    <h1 style="margin-bottom :30">
                        <span>{{ ($c->judul) }}</span>
                    </h1>
                    <div>
                        <a href="#lihatsemualoker" class="btn btn-slider" style="margin-bottom: 50%">
                            Lihat Semua Lowongan
                        </a>
                    </div>
                </div>
            </div>
          </div>
          @endforeach

        </div>

        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>
</div>


<section id="lihatsemualoker" class="container mt-4 mb-lg-5 pt-lg-2 pb-5">

    <!-- Page title + Layout switcher + Search form -->
    <div class="row align-items-end gy-3 mb-4 pb-lg-3 pb-1">
      <div class="col-lg-5 col-md-4">
        <h1 class="mb-2 mb-md-0">Lowongan Pekerjaan</h1>
      </div>
      <div class="col-lg-7 col-md-8">
        <div class="row gy-2">
          <div class="col-lg-5 col-sm-6">
          </div>
          <div class="col-lg-7 col-sm-6">
            <div class="input-group">
              <input type="text" class="form-control pe-5 rounded" placeholder="Search the blog...">
              <i class="bx bx-search position-absolute top-50 end-0 translate-middle-y me-3 zindex-5 fs-lg"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Item -->
    @foreach ($lokers as $l)
    <article class="card border-0 shadow-sm overflow-hidden mb-4">
      <div class="row g-0">
        <div class="col-sm-8">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <span class="fs-sm text-muted border-start ps-3 ms-3">{{ $l->tgl }}</span>
            </div>
            <h3 class="h4">
              <a href="/detaillowonganpekerjaan/{{ $l->id }}">{{ $l->judul }} | {{ $l->nama_perusahaan }}</a>
            </h3>
            <p>Tellus sagittis dolor pellentesque vel porttitor magna aliquet arcu. Interdum risus mauris pulvinar et vel. Morbi tellus, scelerisque vel metus. Scelerisque arcu egestas ac commodo, ac nibh. Pretium ac elit sed nulla nec.</p>
          </div>
        </div>
      </div>
    </article>
    @endforeach

  </section>

        <!-- Item -->
        
        {{-- @foreach ($lokers as $l)
        <article class="card border-0 shadow-sm overflow-hidden mb-4">
          <div class="row g-0">
            <div class="col-sm-4 position-relative bg-position-center bg-repeat-0 bg-size-cover" style="background-image: url({{ asset($l->foto) }}); min-height: 15rem;">
              <a href="/detail_berita/{{ $b->id }}" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
            </div>
            <div class="col-sm-8">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">{{ $b->kategori }}</a>
                  <span class="fs-sm text-muted border-start ps-3 ms-3">{{ $b->tgl }}</span>
                </div>
                <h3 class="h4">
                  <a href="/detail_berita/{{ $b->id }}">{{ $b->judul }}</a>
                </h3>
                <p>{{ Str::limit($b->isi,200) }}</p>
                <div class="d-flex align-items-center justify-content-between">
                    <a href="/detail_berita/{{ $b->id }}" class="btn btn-outline-primary">View more</a>
                </div>
              </div>
            </div>
           </div>
        </article>
        @endforeach --}}
                    

        {{-- <!-- Pagination -->
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
        </nav> --}}
      </section>
</div>

@endsection