@extends('layouts.admin.master')

@section('title','Edit User')

@section('content')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-6">

                <h3>Edit Data User</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/semuauser">Semua User</a></li>
                    <li class="breadcrumb-item"> <a href="/useraktif"></a> User Aktif</li>
                    <li class="breadcrumb-item active"> <a href="/usernonaktif"></a> User Nonaktif</li>
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
                    <h5>Auto Play Example</h5>
                </div>
                <div class="card-body">
                    <div class="owl-carousel owl-theme" id="owl-carousel-13">
                        @foreach ($organisasi as $item)
                        <div class="item">
                            <img src="{{ asset('public') }}" alt="">
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="mb-3 text-end px-4">
                    <button class="btn btn-primary">button</button>
                </div>
            </div>
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Tambah User</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <form action="/organisasi/tambah" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 m-form__group">
                                    <label class="form-label" for="image">Foto Profile</label>

                                    <img class="img-preview img-fluid mb-3">
                                    <input class="form-control @error('carousel') is-invalid @enderror" type="file"
                                        name="carousel" id="image" placeholder="carousel" required autofocus
                                        onchange="previewImage()">

                                    @error('carousel')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3 input-group-solid">
                                    <label class="form-label">Periode</label>
                                    <select name="periode" id="" class="form-select form-control" required autofocus>
                                        <option selected>Periode</option>
                                        <option value="2039">2039</option>
                                        <option value="2038">2038</option>
                                        <option value="2037">2037</option>
                                        <option value="2036">2036</option>
                                        <option value="2035">2035</option>
                                        <option value="2034">2034</option>
                                        <option value="2033">2033</option>
                                        <option value="2032">2032</option>
                                        <option value="2031">2031</option>
                                        <option value="2030">2030</option>
                                        <option value="2029">2029</option>
                                        <option value="2028">2028</option>
                                        <option value="2027">2027</option>
                                        <option value="2026">2026</option>
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
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                    </select>
                                    @error('periode')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3 input-group-solid">
                                    <label class="form-label">Tahun Lulus</label>
                                    <select name="nama_organisasi" id="" class="form-select form-control" required
                                        autofocus>
                                        <option selected>Pilih organisasi</option>
                                        @foreach ($org as $item)
                                        <option value="{{ $item->nama_organisasi }}">{{ $item->nama_organisasi }}</option>
                                        @endforeach
                                    </select>
                                    @error('nama_organisasi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary m-r-15" type="submit">Tambah</button>
                    <button class="btn btn-light" type="submit">Batal</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
