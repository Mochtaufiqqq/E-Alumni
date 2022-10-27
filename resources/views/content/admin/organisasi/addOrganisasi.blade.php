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

                                <label class="form-label" for="organisasi">Organisasi</label>
                                <div class="mb-3 input-group">
                                    <select type="text" class="form-control" placeholder="" id="organisasi" aria-label="Example text with button addon" aria-describedby="button-addon1" name="organisasi">
                                            <option value="" selected>Pilih organisasi</option>
                                        @foreach ($org as $item)
                                            <option value="{{ $item->id ?? 'none'}}">{{ $item->organisasi ?? 'none'}}</option>
                                        @endforeach
                                    </select>
                                    <button class="btn btn-outline-primary" type="button" id="button-addon1" data-bs-toggle="modal" data-bs-target="#modalOrganisasi">tambah organisasi</button>
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

                                <div class="mb-3 input-group-solid">
                                    <label class="form-label" for="image">Foto Struktur</label>
                                    <img class="img-preview img-fluid mb-3" style="max-height: 300px; max-width: 400px;">

                                    <input class="form-control @error('logo') is-invalid @enderror" type="file"
                                        name="foto_struktur" id="image" placeholder="logo" required autofocus
                                        onchange="previewImage()">
        
                                    @error('foto_struktur')
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
                    <div class="modal fade" id="modalOrganisasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Hapus Data User</h5>
                              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form action="/organisasi/addadminorganisasi" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="organisasi" placeholder="contoh : Osis (2021-2023)">
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-primary" type="submit">Yakin</button>
                                </div>
                            </form>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
