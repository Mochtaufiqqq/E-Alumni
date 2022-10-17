@extends('layouts.admin.master')
@section('title','Lowongan Pekerjaan')


@section('content')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-6">

                <h3>Tambah Lowongan Pekerjaan</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/lokershow">Semua Loker</a></li>
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
                            <form action="/addloker" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 m-form__group">
                                    <label class="form-label" for="image">Judul</label>

                                    <img class="img-preview img-fluid mb-3">
                                                                        
                                    <input class="form-control @error('judul') is-invalid @enderror" type="text"
                                        name="judul" id="judul" placeholder="Judul" required onchange="previewImage()">

                                    @error('judul')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3 m-form__group">
                                    <label class="form-label">Deskripsi</label>
                                    <div class="input-group">
                                        <input class="form-control @error('deskripsi') is-invalid @enderror" type="text" name="deskripsi" placeholder="Deskripsi" required>
                                    </div>
                                    @error('deskripsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Foto</label>
                                    <div class="input-group">
                                        <input class="form-control @error('images[]') is-invalid @enderror" type="file" name="images[]" multiple>
                                    </div>
                                    @error('loker_image[]')
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
