@extends('layouts.admin.master')

@section('title','Edit User')
    

@section('content')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Edit Data User</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <form action="/edituser/{{ $users->id }}" method="POST">
                                @method('put')
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Nisn</label>
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="nisn" placeholder="Nis"
                                            aria-label="Recipient's username" value="{{ old('nisn', $users->nisn) }}" required>
                                    </div>
                                    </div>
                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="nama" placeholder="Nama"
                                            aria-label="Recipient's username"value="{{ old('nama', $users->nama) }}" required autofocus>
                                    </div>
                                    </div>
                                    <div class="mb-3 m-form__group">
                                        <label class="form-label">Email</label>
                                        <div class="input-group"><span class="input-group-text">@</span>
                                            <input class="form-control" type="email" name="email" placeholder="Email" value="{{ old('email', $users->email) }}" required>
                                        </div>
                                    </div>
                                    {{-- <div class="mb-3">
                                        <label class="form-label">Pekerjaan</label>
                                        <div class="input-group">
                                            <input class="form-control" type="text" name="pekerjaan" placeholder="Pekerjaan"
                                                aria-label="Recipient's username" value="{{ old('pekerjaan', $users->pekerjaan) }}" required>
                                        </div> --}}
                                        {{-- <div class="mb-3">
                                            <label class="form-label">No Telp</label>
                                            <div class="input-group">
                                                <input class="form-control" type="text" name="no_telp" placeholder="No Telp"
                                                    aria-label="No Telp" value="{{ old('no_telp', $users->no_telp) }}" required>
                                            </div> --}}
                                            <div class="mb-3">
                                                <label class="form-label">Alamat</label>
                                                <div class="input-group">
                                                    <input class="form-control" type="text" name="alamat"
                                                        placeholder="Alamat" aria-label="Recipient's username" value="{{ old('alamat', $users->alamat) }}" required>
                                                </div>
                                                {{-- <div class="mb-3">
                                                    <label class="form-label">Tahun Keluar</label>
                                                    <div class="input-group">
                                                        <input class="form-control" type="text" name="tahun_keluar"
                                                           placeholder="Tahun Keluar" aria-label="Recipient's username" value="{{ old('tahun_keluar', $users->tahun_keluar) }}" required>
                                                    </div> --}}
                                                    <div class="mb-3">
                                                        <label class="form-label">Password</label>
                                                        <div class="input-group">
                                                            <input class="form-control" type="password" name="password" placeholder="Password"aria-label="Recipient's username" value="{{ old('password', $users->password) }}" required>
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
<!-- Container-fluid Ends-->

@endsection