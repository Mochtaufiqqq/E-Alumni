@extends('layouts.admin.master')

@section('title','Edit Organisasi')

@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-6">

                <h3>Tambah Data Organisasi</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/semuaberita">Semua Berita</a></li>
                    <li class="breadcrumb-item"> <a href="#"></a> Prestasi</li>
                    <li class="breadcrumb-item"><a href="#"></a> Event</li>
                </ol>
            </div>


        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Tambah Berita</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <form action="/organisasi/update/{{ $organisasi->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="image">Logo</label>
                                        <label class="form-label">Foto Profil</label>
                                        @if ($organisasi->logo) 
                                        <img src="{{ asset($organisasi->logo) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                        @else
                                        <img class="img-preview img-fluid mb-3 col-sm-5">
                                        @endif
                                        <img class="img-preview img-fluid mb-3">
                                          <input type="file" name="logo" id="image" class="form-control @error('foto_profile') is-invalid @enderror" onchange="previewImage()">
                                        @error('foto_profile')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    @error('logo')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3 input-group-solid">
                                    <label class="form-label">Organisasi</label>
                                    <input type="text" name="organisasiUser" class="form-control" placeholder="(contoh : Osis (2015-2018) )" value="{{ old('organisasi', $organisasi->organisasi) }}">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="image">Deskripsi Organisasi</label>
                                        <textarea class="form-control @error('deskripsi') is-invalid @enderror"
                                            name="deskripsi" id="" placeholder="Deskripsi" required type="text" value="">{{ old('deskripsi', $organisasi->deskripsi) }}</textarea>
                                    @error('deskripsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3 input-group-solid">
                                    <label class="form-label" for="image">Foto Kegiatan</label>
        
                                            <img class="img-preview img-fluid mb-3">
                                            <input class="form-control @error('foto') is-invalid @enderror" type="file"
                                                name="images[]" placeholder="foto" multiple required autofocus
                                                onchange="previewImage()">
        
                                    @error('foto')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3 input-group-solid">
                                        <label class="form-label" for="image">Foto Struktur</label>
                                        @if ($organisasi->foto_struktur) 
                                        <img src="{{ asset($organisasi->foto_struktur) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                        @else
                                        <img class="img-preview img-fluid mb-3 col-sm-5">
                                        @endif
                                        <img class="img-preview img-fluid mb-3">
                                          <input type="file" name="foto_struktur" id="image" class="form-control @error('foto_struktur') is-invalid @enderror" onchange="previewImage()">
                                        @error('foto_struktur')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
        
                                    @error('foto_struktur')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary m-r-15" type="submit">Submit</button>
                            <button class="btn btn-light" type="submit">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
