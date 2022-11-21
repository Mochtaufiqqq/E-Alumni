@extends('layouts.admin.master')

@section('title','Detail Lowongan Kerja')

@section('content')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-6">

                <h3>Detail Berita</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/semuaberita">Semua Berita</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<div class="container-fluid">
    <div class="edit-profile">
        <div class="row">
            <div class="col-xl">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title mb-0">Detail Berita</h4>
                        <div class="card-options"><a class="card-options-collapse" href="#"
                                data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                                class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                    class="fe fe-x"></i></a></div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-2 px-5">
                            <div class="profile-title">
                                <div class="media">
                                    <div class="media-body">
                                        <h5>Thumbnail</h5>
                                        <img src="{{ asset($berita->foto) }}" alt="" width="400">
                                        <p>Kategori: {{ $berita->kategori }}</p>
                                        <p class="text-muted">Tanggal: {{ $berita->tgl }}</p>
                                        <h3>Judul: {{ $berita->judul }}</h3>
                                        <p>Isi: {{ $berita->isi }}</p>

                                        <h5>Dokumentasi</h5>
                                        
                                        
                                            <div class="col">

                                        @foreach (explode('|', $berita->dokumentasi) as $img)

                                        <img src="/storage/{{ $img }}" alt="" width="400">
                                            
                                        @endforeach

                                    
                                    </div>
                                        {{-- <div class="mb-3">
                                          <h6 class="form-label txt-primary">Nama Perusahaan : {{ $kerjas->nama_perusahaan }}</h6>
                                      </div> --}}
                                      {{-- <div class="mb-3">
                                          <h6 class="form-label txt-primary">Di publish pada : {{ $kerjas->tgl }}</h6>
                                      </div>
                                      <div class="mb-3">
                                        <h6 class="form-label">Foto :</h6>
                                    </div>
                                    <div class="mb-3">
                                      <img src="{{ asset($kerjas->foto) }}" width="250" alt="" >
                                    </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="form-footer text-end">
                        <a href="{{ url('/semuaberita') }}"><button class="btn btn-primary btn-block">Kembali</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection