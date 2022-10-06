@extends('layouts.admin.master')
@section('title','Edit Berita')
    

@section('content')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-6">
                
                <h3>Edit Data Berita</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/semuauser">Semua User</a></li>
                    <li class="breadcrumb-item"> <a href="#"></a> Prestasi </li>
                    <li class="breadcrumb-item"> <a href="#"></a> Event]</li>
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
            <h5>Edit Berita</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <form action="/editberita/{{ $beritas->id }}" method="POST" enctype="multipart/form-data">
                @method('put')    
                @csrf
                <div class="mb-3 m-form__group">
                  <label class="form-label">Foto</label>
                  @if ($beritas->foto)
                            
                  <img src="{{ asset($beritas->foto) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">

                  @else
                  
                  <img class="img-preview img-fluid mb-3 col-sm-5">
                      
                  @endif
                  <img class="img-preview img-fluid mb-3">
                    <input type="file" name="foto" id="foto" class="form-control @error('foto') is-invalid @enderror" onchange="previewImage()">
                  @error('foto')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
                  <div class="mb-3 m-form__group">
                    <label class="form-label">Judul</label>
                    <div class="input-group">
                      <input class="form-control @error('judul') is-invalid @enderror" type="text" name="judul" placeholder="Judul" value="{{ old('judul', $beritas->judul) }}" required autofocus>
                    </div>
                    @error('judul')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Isi </label>
                    <div class="input-group">
                      <input class="form-control @error('isi') is-invalid @enderror" type="text" name="isi" placeholder="Isi" value="{{ old('isi', $beritas->isi) }}"required autofocus>
                    </div>
                    @error('isi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Tgl</label>
                    <div class="input-group">
                      <input class="form-control @error('tgl') is-invalid @enderror" name="tgl" type="tgl"  value="{{ old('tgl', $beritas->tgl) }}" placeholder="Tgl" required autofocus>
                    </div>
                    @error('tgl')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="mb-3 input-group-solid">
                    <label class="form-label">Kategori</label>
                    <select name="kategori" id="kategori"  value="{{ old('kategori', $beritas->kategori) }}" class="form-select form-control" required autofocus>
                        <option selected>Pilih Kategori</option>
                        <option value="Prestasi">Prestasi</option>
                        <option value="Event">Event</option>
                    </select>
                    @error('kategori')
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

@endsection