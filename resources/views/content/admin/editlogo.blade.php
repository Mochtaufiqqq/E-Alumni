@extends('layouts.admin.master')

@section('title' , 'Edit Logo')
@section('content')
    
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-6">
                
                <h3>Ubah Logo</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Ubah Logo</a></li>
                    
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
            <h5>Edit Logo</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <form action="/updatelogo/{{ $logo->id }}" method="POST" enctype="multipart/form-data">        
                @csrf

                <div class="mb-3">
                    <label class="form-label">Isi </label>
                    <div class="input-group">
                      <input class="form-control @error('isi') is-invalid @enderror" type="text" name="isi" placeholder="Isi" value="{{ old('isi', $logo->isi) }}"required autofocus>
                    </div>
                    @error('isi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>

                <div class="mb-3 m-form__group">
                  <label class="form-label"></label>
                  @if ($logo->foto) 
                  <img src="{{ asset($logo->foto) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                  @else
                  <img class="img-preview img-fluid mb-3 col-sm-5">
                  @endif
                  <img class="img-preview img-fluid mb-3">
                    <input type="file" name="foto" id="image" class="form-control @error('foto') is-invalid @enderror" onchange="previewImage()">
                  @error('foto')
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