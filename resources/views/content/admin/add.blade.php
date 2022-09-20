@extends('layouts.admin.master')
@section('content')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Basic Input groups</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <form action="/tambahalumni" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Nis</label>
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="nis" placeholder="Nis"
                                            aria-label="Recipient's username">
                                    </div>
                                    </div>
                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="nama" placeholder="Nama"
                                            aria-label="Recipient's username">
                                    </div>
                                    </div>
                                    <div class="mb-3 m-form__group">
                                        <label class="form-label">Email</label>
                                        <div class="input-group"><span class="input-group-text">@</span>
                                            <input class="form-control" type="email" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Pekerjaan</label>
                                        <div class="input-group">
                                            <input class="form-control" type="text" name="pekerjaan" placeholder="Pekerjaan"
                                                aria-label="Recipient's username">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">No Telp</label>
                                            <div class="input-group">
                                                <input class="form-control" type="text" name="no_telp" placeholder="No Telp"
                                                    aria-label="No Telp">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Alamat</label>
                                                <div class="input-group">
                                                    <input class="form-control" type="text" name="alamat"
                                                        placeholder="Alamat" aria-label="Recipient's username">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Tahun Keluar</label>
                                                    <div class="input-group">
                                                        <input class="form-control" type="text" name="tahun_keluar"
                                                           placeholder="Tahun Keluar" aria-label="Recipient's username">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Password</label>
                                                        <div class="input-group">
                                                            <input class="form-control" type="password" name="password" placeholder="Password"aria-label="Recipient's username">
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary m-r-15" type="submit">Submit</button>
                    <button class="btn btn-light" type="submit">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

@endsection