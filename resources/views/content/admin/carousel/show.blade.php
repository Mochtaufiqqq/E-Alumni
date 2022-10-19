@extends('layouts.admin.master')

@section('title','Caroussel')


@section('content')

<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            @if (session('berhasil'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Selamat ! </strong>
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"
                    data-bs-original-title="" title=""></button>
                {{ session('berhasil') }}
            </div>
            @endif
            @if (session('success'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Selamat ! </strong>
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"
                    data-bs-original-title="" title=""></button>
                {{ session('success') }}
            </div>
            @endif
            <div class="col-sm-6">

                <h3>Caroussel</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/showcarousel">Caroussel</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Caroussel</h5><span>Dibawah Ini adalah table Caroussel kamu bisa mengelolanya. Terdapat Beberapa
                        Button Untuk Mengelola</span>
                </div>

                <div class="card-body">
                    <a class="btn btn-primary mb-3" href="/addcarousel">Tambah Caroussel</a>
                    <div class="dt-ext table-responsive">
                        <table class="table table-bordered" id="basic-row-reorder">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Foto</th>
                                    <th>Halaman</th>
                                    <th>Isi</th>
                                    <th>Opsi</th>
                                </tr>
                                @foreach ($carousel as $c)
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset($c->foto) }}" alt="" width="50" height="50">
                                    </td>
                                    <td>{{ $c->halaman }}</td>
                                    <td>{{ $c->isi }}</td>
                                    <td>
                                        <a href="/editcarousel/{{ $c->id }}" class="btn btn-warning"><i data-feather="edit"></i></a>
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