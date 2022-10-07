@extends('layouts.admin.master')
@section('title','Tambah Berita')
    

@section('content')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-6">
                
                <h3>Tambah Data Berita</h3>
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
                <form action="/tambahberita" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 m-form__group">
                  <label class="form-label" for="image">Judul</label>
                  
                    <img class="img-preview img-fluid mb-3">
                    <input class="form-control @error('judul') is-invalid @enderror" type="text" name="judul" id="judl" placeholder="Judul" required autofocus onchange="previewImage()">
                
                  @error('judul')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
                  <div class="mb-3 m-form__group">
                    <label class="form-label">Isi</label>
                    <div class="input-group">
                      <input class="form-control @error('isi') is-invalid @enderror" type="text" name="isi" placeholder="Isi" required autofocus>
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
                      <input class="form-control @error('tgl') is-invalid @enderror" type="text" name="tgl" placeholder="Tanggal" aria-label="Recipient's username" required autofocus>
                    </div>
                    @error('tgl')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="mb-3 input-group-solid">
                    <label class="form-label">Kategori</label>
                    <select name="kategori" id="" class="form-select form-control" required autofocus>
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
                  <div class="mb-3 input-group-solid">
                    <label class="form-label" for="image">Foto</label>
                  
                    <img class="img-preview img-fluid mb-3">
                    <input class="form-control @error('foto') is-invalid @enderror" type="file" name="foto" id="foto" placeholder="foto" required autofocus onchange="previewImage()">
                
                    @error('foto')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="mb-3 input-group-solid">
                    <label class="form-label" for="image">Foto Kegiatan (Dokumentasi)</label>
                  
                    <img class="img-preview img-fluid mb-3">
                    <input class="form-control @error('foto') is-invalid @enderror" type="file" name="foto" id="foto" placeholder="foto" required autofocus onchange="previewImage()">
                
                    @error('foto')
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