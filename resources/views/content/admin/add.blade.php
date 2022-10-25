@extends('layouts.admin.master')
@section('title','Tambah User')


@section('content')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-6">

                <h3>Tambah Data User</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/semuauser">Semua User</a></li>
                    <li class="breadcrumb-item"> <a href="/useraktif"></a> User Aktif</li>
                    <li class="breadcrumb-item active"><a href="/usernonaktif"></a> User Nonaktif</li>
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
                            <form action="/tambahuser" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 m-form__group">
                                    <label class="form-label" for="image">Foto Profile</label>

                                    <img class="img-preview img-fluid mb-3">
                                    <input class="form-control @error('foto_profile') is-invalid @enderror" type="file"
                                        name="foto_profile" id="image" placeholder="foto_profile" required autofocus
                                        onchange="previewImage()">

                                    @error('foto_profile')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3 m-form__group">
                                    <label class="form-label">NISN</label>
                                    <div class="input-group">
                                        <input class="form-control @error('nisn') is-invalid @enderror" type="text"
                                            name="nisn" placeholder="NISN" required autofocus>
                                    </div>
                                    @error('nisn')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nama Lengkap</label>
                                    <div class="input-group">
                                        <input class="form-control @error('nama') is-invalid @enderror" type="text"
                                            name="nama" placeholder="Nama Lengkap" aria-label="Recipient's username"
                                            required autofocus>
                                    </div>
                                    @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <div class="input-group">
                                        <input class="form-control @error('email') is-invalid @enderror" name="email"
                                            type="email" aria-label="Amount (to the nearest dollar)" placeholder="Email"
                                            required autofocus>
                                    </div>
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Alamat</label>
                                    <div class="input-group">
                                        <input class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                            type="text" aria-label="Amount (to the nearest dollar)" placeholder="Alamat"
                                            required autofocus>
                                    </div>
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3 input-group-solid">
                                    <label class="form-label">Jurusan</label>
                                    <select name="jurusan" id="" class="form-select form-control" required autofocus>
                                        <option selected disabled>Pilih Jurusan</option>
                                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                        <option value="Multimedia">Multimedia</option>
                                    </select>
                                    @error('jurusan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3 input-group-solid">
                                    <label class="form-label">Tahun Lulus</label>
                                    <select name="thn_lulus" id="" class="form-select form-control" required autofocus>
                                        <option selected disabled>Pilih Tahun Lulus</option>
                                        <option value="2022">2022</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                    </select>
                                    @error('thn_lulus')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3 input-group-square">
                                    <label class="form-label">Role</label>
                                    <select name="role" id="" class="form-select form-control" required autofocus>
                                        <option selected>Pilih Role</option>
                                        <option value="1">Admin</option>
                                        <option value="2">User</option>
                                    </select>
                                    @error('role')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <div class="input-group">
                                        <input class="form-control @error('password') is-invalid @enderror"
                                            name="password" type="password" aria-label="Amount (to the nearest dollar)"
                                            placeholder="Password" required autofocus>
                                    </div>
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
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
        </div>
    </div>
</div>

@endsection
