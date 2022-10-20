@extends('layouts.admin.master')

@section('title' , 'Ubah Logo & Favicon')
@section('content')
    
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-6">
                
                <h3>Ubah Favicon</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Ubah Favicon</a></li>
                    
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
            <h5>Edit Favicon</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <form action="/updatefavicon/{{ $fvicon->id }}" method="POST" enctype="multipart/form-data">        
                @csrf
                <div class="mb-3 m-form__group">
                  <label class="form-label">Favicon</label>
                  @if ($fvicon->favicon) 
                  <img src="{{ asset($fvicon->favicon) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                  @else
                  <img class="img-preview img-fluid mb-3 col-sm-5">
                  @endif
                  <img class="img-preview img-fluid mb-3">
                    <input type="file" name="favicon" id="image" class="form-control @error('favicon') is-invalid @enderror" onchange="previewImage()">
                  @error('favicon')
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