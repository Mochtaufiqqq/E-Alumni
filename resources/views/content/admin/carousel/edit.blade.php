@extends('layouts.admin.master')
@section('title','Edit Caroussel')


@section('content')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-6">

                <h3>Edit Carousel</h3>
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
                            <form action="/carousel/update/{{ $carousel->id }}" method="POST" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="mb-3 input-group-solid">
                                    <label class="form-label">Halaman</label>
                                    <select name="halaman" id="" class="form-select form-control" required autofocus>
                                        <option selected value="{{ old('halaman',$carousel->halaman) }}">
                                            @if ($carousel->halaman == 0)
                                                Alumni
                                            @elseif($carousel->halaman == 1)
                                                Berita
                                             @elseif($carousel->halaman == 2)
                                                Organisasi
                                                @elseif($carousel->halaman == 3)
                                                Publikasi Loker
                                                @elseif($carousel->halaman == 4)
                                                Loker
                                                @elseif($carousel->halaman == 5)
                                                Tentang Kami
                                                @elseif($carousel->halaman == 6)
                                                Dashboard
                                                @elseif($carousel->halaman == 7)
                                                Register
                                                @elseif($carousel->halaman == 8)
                                                Login
                                            @endif
                                        </option>
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
                                    <label class="form-label">Judul</label>
                                    <div class="input-group">
                                      <input class="form-control @error('judul') is-invalid @enderror" type="text" name="judul" placeholder="Judul" value="{{ old('judul', $carousel->judul) }}" required autofocus>
                                    </div>
                                    @error('judul')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                  </div>

                                <div class="mb-3 m-form__group">
                                    <label class="form-label">Isi</label>
                                    <div class="input-group">
                                        <textarea class="form-control" name="isi" id="" cols="30" rows="10">{{ old('isi', $carousel->isi) }}</textarea>
                                    </div>
                                    @error('isi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                
                                <div class="mb-3 m-form__group">
                                    <label class="form-label">Foto Caroussel</label>
                                    @if ($carousel->foto) 
                                    <img src="{{ asset($carousel->foto) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
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

                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Edit 
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
