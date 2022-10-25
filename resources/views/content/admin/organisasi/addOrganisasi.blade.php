@extends('layouts.admin.master')

@section('title','Tambah Organisasi')

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
                            <form action="/organisasi/store" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="image">Foto</label>
                                        <img class="img-preview img-fluid mb-3" style="max-height: 300px; max-width: 400px;">

                                        <input class="form-control @error('foto') is-invalid @enderror" type="file"
                                            name="foto" id="image" placeholder="foto" required autofocus
                                            onchange="previewImage()" accept="image/*">
                                    @error('foto')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="image">Logo</label>
                                        <img class="img-preview img-fluid mb-3" style="max-height: 300px; max-width: 400px;">

                                        <input class="form-control @error('logo') is-invalid @enderror" type="file"
                                            name="logo" id="image" placeholder="logo" required autofocus
                                            onchange="previewImage()">
                                    @error('logo')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3 input-group-solid">
                                    <label class="form-label">Organisasi</label>
                                    <select name="organisasi" id="" class="form-select form-control" required autofocus>
                                        <option selected>Pilih Organisasi</option>
                                        @foreach ($org as $item)
                                        <option value="{{ $item->id }}">{{ $item->organisasi }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('organisasi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3 input-group-solid">
                                    <label class="form-label" for="periode">Periode</label>

                                    <select name="periode" id="periode" class="form-select form-control" required autofocus>
                                        <option selected>Pilih Periode</option>
                                        <option value="Rekayasa Perangkat Lunak">2040</option>
                                        <option value="2025">2025</option>
                                        <option value="2024">2024</option>
                                        <option value="2023">2023</option>
                                        <option value="2022">2022</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                    </select>
                                    @error('periode')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="image">Deskripsi Organisasi</label>
                                        <textarea class="form-control @error('deskripsi') is-invalid @enderror"
                                            name="deskripsi" id="" placeholder="Deskripsi" required type="text"></textarea>
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
