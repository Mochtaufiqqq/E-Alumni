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
                @if (session('berhasil'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Selamat ! </strong>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"
                        data-bs-original-title="" title=""></button>
                    {{ session('berhasil') }}
                </div>
                @endif
                <div class="card-body">
                    <a class="btn btn-primary mb-3" href="/tambahuser">Tambah Data</a>
                    <a class="btn btn-secondary text-dark mb-3" href="{{ url('/reportpdfuser') }}">Export PDF</a>
                      <div class="dt-ext table-responsive">
                          <table class="display" id="responsive">
                              <thead>
                                  <tr>
                                      <th>No</th>
                                      <th>Foto</th>
                                      <th>Organisasi</th>
                                      <th>Jabatan</th>
                                      <th>Periode</th>
                                      <th>Opsi</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($organisasi as $o)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                          <img src="{{ asset($o->foto) }}" alt="" width="50" height="50">
                                         </td>
                                        <td>
                                          <img src="{{ asset($o->logo) }}" alt="" width="50" height="50">
                                         </td>
                                        <td>{{ $o->organisasi->organisasi }}</td>
                                        <td>{{ $o->jabatan->jabatan }}</td>
                                        <td>{{ $o->periode }}</td>
                                    </tr>
                                    @endforeach
                              </tbody>
                          </table>
                      </div>
                  </div>
                <div class="mb-3 text-end px-4">
                    <a href="/organisasi/edit" class="btn btn-primary">Edit</a>
                    <a href="/organisasi/add" class="btn btn-primary">tambah foto</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
