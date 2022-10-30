@extends('layouts.admin.master')

@section('title','Tambah Caroussel')


@section('content')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-6">

                <h3>Tambah Carousel</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/showcarousel">Caroussel</a></li>
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
                            <form action="/addcarousel" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 input-group-solid">
                                    <label class="form-label">Halaman</label>
                                    <select name="halaman" id="" class="form-select form-control" required autofocus>
                                        <option selected disabled>Pilih Halaman</option>
                                        <option value="0">Alumni</option>
                                        <option value="1">Berita</option>
                                        <option value="2">Organisasi</option>
                                        <option value="3">Publikasi Loker</option>
                                        <option value="4">Loker</option>
                                        <option value="5">Tentang Kami</option>
                                        <option value="6">Dashboard</option>
                                        <option value="7">Register</option>
                                        <option value="8">Login</option>
                                    </select>
                                    @error('halaman')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3 m-form__group">
                                    <label class="form-label" for="image">Judul</label>
                                    <input class="form-control @error('judul') is-invalid @enderror" type="text"
                                        name="judul" id="judl" placeholder="Judul" required autofocus
                                        onchange="previewImage()">

                                    @error('judul')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                
                                <div class="mb-3 m-form__group">
                                    <label class="form-label">Isi</label>
                                    <div class="input-group">
                                        <textarea class="form-control" name="isi" id="" cols="30" rows="10"></textarea>
                                    </div>
                                    @error('isi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                
                        <div class="mb-3 input-group-solid">
                            <label class="form-label" for="image">Foto</label>

                                    <img class="img-preview img-fluid mb-3">
                                    <input class="form-control @error('foto') is-invalid @enderror" type="file"
                                        name="foto" placeholder="foto" multiple required autofocus
                                        onchange="previewImage()" id="image">

                            @error('foto')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Tambah 
                                <i class="fa fa-arrow-right"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection
