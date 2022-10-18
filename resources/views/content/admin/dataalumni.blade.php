@extends('layouts.admin.master')

@section('title', 'Semua Data Alumni')
@section('content')
    


<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            @if (session('berhasil'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Selamat ! </strong>
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" data-bs-original-title="" title=""></button>
                {{ session('berhasil') }}
              </div>
              @endif
            @if (session('success'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Selamat ! </strong>
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" data-bs-original-title="" title=""></button>
                {{ session('success') }}
              </div>
              @endif
            <div class="col-sm-6">
              
                <h3>Semua Data Alumni</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    {{-- <li class="breadcrumb-item"> <a href="/useraktif"></a> User Aktif</li>
                    <li class="breadcrumb-item active"> <a href="/usernonaktif"></a> User Nonaktif</li> --}}
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
                    <h5>Semua Data Alumni</h5><span>Dibawah Ini adalah semua data alumni</span>
                </div>
                
                <div class="card-body">
                  {{-- <a class="btn btn-primary mb-3" href="/tambahuser">Tambah Data</a> --}}
                  <a class="btn btn-secondary text-dark mb-3" href="{{ url('/importexcell') }}">Import Excell</a>
                    <div class="dt-ext table-responsive">
                      <table class="table table-bordered" id="basic-row-reorder">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                {{-- <th scope="col">Foto Profil</th> --}}
                                <th scope="col">Nama</th>
                                <th scope="col">NISN</th>
                                <th scope="col">Jurusan</th>
                                {{-- <th scope="col">Tahun Lulus</th> --}}
                                {{-- <th scope="col">Email</th> --}}
                                <th scope="col">Alamat</th>
                                {{-- <th scope="col">Status</th>
                                <th scope="col">Opsi</th> --}}

                            </tr>
                        </thead>
                        <tbody>
                           
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection