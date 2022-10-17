@extends('layouts.user.master')

@section('title', 'Berita')

@section('content')



<div> 
<!-- Breadcrumb -->
   <nav class="container" aria-label="breadcrumb">
     <ol class="breadcrumb mb-0 pt-5">
       <li class="breadcrumb-item">
         <a href="index-2.html"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
       </li>
       <li class="breadcrumb-item active" aria-current="page">Blog List no Sidebar</li>
     </ol>
   </nav>
<!-- Page content -->
<section class="container mt-4 mb-lg-5 pt-lg-2 pb-5">

        <!-- Page title + Layout switcher + Search form -->
        <div class="row align-items-end gy-3 mb-4 pb-lg-3 pb-1">
          <div class="col-lg-4 col-md-4">
            <h1 class="mb-2 mb-md-0">Berita</h1>
          </div>
          <div class="col-lg-8 col-md-8">
            <div class="row gy-2">
              <div class="col-lg-5 col-sm-6">
                <div class="d-flex align-items-center">
                  <select class="form-select">
                    <option>Semua Kategori</option>
                    <option value="prestasi">Prestasi</option>
                    <option value="event">Event</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-7 col-sm-6">
                <div class="input-group">
                  <input type="text" class="form-control pe-5 rounded" placeholder="Cari Berita...">
                  <i class="bx bx-search position-absolute top-50 end-0 translate-middle-y me-3 zindex-5 fs-lg"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Item -->
        
        @foreach ($beritas as $b)
        <article class="card border-0 shadow-sm overflow-hidden mb-4">
          <div class="row g-0">
            <div class="col-sm-4 position-relative bg-position-center bg-repeat-0 bg-size-cover" style="background-image: url({{ asset($b->foto) }}); min-height: 15rem;">
              <a href="//detail_berita/{{ $b->id }}" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
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
        @endforeach
                    

        <!-- Pagination -->
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
        </nav>
      </section>
</div>

@endsection