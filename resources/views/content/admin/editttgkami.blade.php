@extends('layouts.admin.master')

@section('title' , 'Edit Tentang Kami')
@section('content')
    
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-6">
                
                <h3>Edit Tentang Kami</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Edit Tentang Kami</a></li>
                    
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
            <h5>Lengkapi Form</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <form action="/updatettgkami/{{ $ttgkami->id }}" method="POST" enctype="multipart/form-data">        
                @csrf
                <div class="mb-3 m-form__group">
                  <label class="form-label">Foto</label>
                  @if ($ttgkami->foto) 
                  <img src="{{ asset($ttgkami->foto) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                  @else
                  <img class="img-preview img-fluid mb-3 col-sm-5">
                  @endif
                  <img class="img-preview img-fluid mb-3">
                    <input type="file" name="foto" id="image" class="form-control @error('favicon') is-invalid @enderror" onchange="previewImage()">
                  @error('favicon')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="mb-3 m-form__group">
                    <label class="form-label">Judul</label>
                    <div class="input-group">
                      <input class="form-control @error('judul') is-invalid @enderror" type="text" name="judul" placeholder="Judul" value="{{ old('judul', $ttgkami->judul) }}" readonly required>
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
                      <textarea class="form-control" name="isi" id="" cols="30" rows="10" value="{{ old('isi', $ttgkami->isi) }}" required ></textarea>
                    </div>
                    @error('isi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
            
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