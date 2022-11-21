@extends('layouts.admin.master')

@section('title','Organisasi')

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
                <div class="card-header">
                    <h5>Organisasi</h5><span>Dibawah Ini adalah table semua data organisasi kamu bisa mengelolanya. Terdapat Beberapa Button Untuk Mengelola</span>
                </div>
                @if (session('berhasil'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Selamat ! </strong>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"
                        data-bs-original-title="" title=""></button>
                    {{ session('berhasil') }}
                </div>
                @endif
                <div class="card-body">
                    <a class="btn btn-primary mb-3" href="/organisasi/add">Tambah Data</a>
                      <div class="dt-ext table-responsive">
                          <table class="table table-bordered" id="basic-row-reorder">
                              <thead>
                                  <tr>
                                      <th scope="col">No</th>
                                      <th scope="col">Logo</th>
                                      <th scope="col">Organisasi</th>
                                      <th scope="col">Dokumentasi</th>
                                      <th scope="col">Deskripsi</th>
                                      <th scope="col">Foto Struktur</th>
                                      <th scope="col">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($organisasi as $o)
                                    <tr>
                                        <td scope="row">{{ $loop->iteration }}</td>
                                        <td>
                                          <img src="{{ asset($o->logo) }}" alt="" style="max-width: 100px; max-height: 80px;">
                                         </td>
                                        <td>{{ $o->organisasi->organisasi }}</td>

                                        <td>@foreach (explode('|', $o->dokumentasi) as $img)
                                            <img src="/storage/{{ $img }}" alt="" width="50" height="50">
                                          @endforeach
                                        </td>
                                        <td>{{ $o->deskripsi }}</td>
                                        <td>
                                            <img src="{{ asset($o->foto_struktur) }}" alt="" style="max-width: 100px; max-height: 80px;">
                                           </td>
                                        <td>
                                            <a href="/organisasi/edit/{{ $o->id }}" class="btn btn-primary btn-sm">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a href="/organisasi/delete{{ $o->id }}" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                              </tbody>
                          </table>
                      </div>
                  </div>
            </div>
        </div>
    </div>
</div>

@endsection
