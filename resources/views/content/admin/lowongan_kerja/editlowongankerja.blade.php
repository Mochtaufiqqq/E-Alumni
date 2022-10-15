@extends('layouts.admin.master')
@section('title','Edit Lowongan Kerja')
    

@section('content')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-6">
                
                <h3>Edit Data Lowongan Kerja</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/lowongankerja">Semua Lowongan Kerja</a></li>
                    <li class="breadcrumb-item"> <a href="/Develover"></a> Develover </li>
                    <li class="breadcrumb-item"> <a href="/Designer"></a> Designer</li>
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
            <h5>Edit Lowongan Kerja</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <form action="/editlowongankerja/{{ $kerjas->id }}" method="POST" enctype="multipart/form-data">
                @method('put')    
                @csrf
                <div class="mb-3 m-form__group">
                  <label class="form-label">Foto</label>
                  @if ($kerjas->foto)
                            
                  <img src="{{ asset($kerjas->foto) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">

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
                      <input class="form-control @error('judul') is-invalid @enderror" type="text" name="judul" placeholder="Judul" value="{{ old('judul', $kerjas->judul) }}" required autofocus>
                    </div>
                    @error('judul')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Dekskripsi </label>
                    <div class="input-group">
                      <input class="form-control @error('dekskripsi') is-invalid @enderror" type="text" name="dekskripsi" placeholder="Isi" value="{{ old('dekskripsi', $kerjas->isi) }}"required autofocus>
                    </div>
                    @error('deskrpsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Tgl</label>
                    <div class="input-group">
                      <input class="form-control @error('tgl') is-invalid @enderror" name="tgl" type="tgl"  value="{{ old('tgl', $kerjas->tgl) }}" placeholder="Tgl" required autofocus>
                    </div>
                    @error('tgl')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="mb-3 input-group-solid">
                    <label class="form-label">Kategori</label>
                    <select name="kategori" id="kategori"  value="{{ old('kategori', $kerjas->kategori) }}" class="form-select form-control" required autofocus>
                        <option selected>Pilih Kategori</option>
                        <option value="Develover">Develover</option>
                        <option value="Designer">Designer</option>
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