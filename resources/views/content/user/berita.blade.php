@extends('layouts.user.master')

@section('title', 'Berita')

@section('content')



<div> 
<!-- Breadcrumb -->
   <nav class="container mt-lg-4 pt-5" aria-label="breadcrumb">
     <ol class="breadcrumb mb-0 pt-5">
       <li class="breadcrumb-item">
         <a href="/"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
       </li>
       <li class="breadcrumb-item active" aria-current="page">Semua Berita</li>
     </ol>
   </nav>
<!-- Page content -->
<section class="container mt-4 mb-lg-5 pt-lg-2 pb-5">

        <!-- Item -->
        
        @foreach ($beritas as $b)
        <article class="card border-0 shadow-sm overflow-hidden mb-4">
          <div class="row g-0">
            <div class="col-sm-4 position-relative bg-position-center bg-repeat-0 bg-size-cover" style="background-image: url({{ asset($b->foto) }}); min-height: 15rem;">
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
        @endforeach
      </section>
</div>

@endsection