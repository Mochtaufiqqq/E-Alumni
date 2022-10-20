@extends('layouts.admin.master')

@section('title','Semua Lowongan Pekerjaan')
    

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
              
                <h3>Lowongan Pekerjaan</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/semuaberita">Semua Lowongan Pekerjaan</a></li>
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
                    <h5>Semua Data Lowongan Pekerjaan</h5><span>Dibawah Ini adalah table semua data user aktif dan user nonaktif kamu bisa mengelolanya. Terdapat Beberapa Button Untuk Mengelola</span>
                </div>
                
                <div class="card-body">
                  <a class="btn btn-primary mb-3" href="/addloker">Tambah Lowongan Pekerjaan</a>
                  <a class="btn btn-secondary text-dark mb-3" href="{{ url('/reportpdfberita') }}">Export PDF</a>
                    <div class="dt-ext table-responsive">
                        <table class="display" id="responsive">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Foto</th>
                                    <th>Opsi</th>
                                </tr>
                                @foreach ($loker as $l)
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    
                                    <td>{{ $l->judul }}</td>
                                    <td>{{ $l->deskripsi }}</td>
                                    <td>@foreach (explode('|', $l->loker_image) as $img)
                                        
                                        <img src="/storage/{{ $img }}" alt="" width="150" height="150">
                                        
                                    @endforeach</td>
                                    <td>
                                      <a href="/detailloker/{{ $l->id }}" class="btn btn-primary"><i data-feather="eye"></i></a>
                                      <a href="/editloker/{{ $l->id }}" class="btn btn-warning"><i data-feather="edit"></i></a>
                                      <a href="/hapusloker/{{ $l->id }}" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $l->id }}"><i data-feather="trash-2"></i></a>
                                       
                                         {{-- modal delete --}}
                                         <div class="modal fade" id="modalDelete{{ $l->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">Hapus Data Berita</h5>
                                                  <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Apakah anda yakin ingin menghapus data {{ $l->judul }} ?</p>
                                                </div>
                                                <div class="modal-footer">
                                                  <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                                                  <form action="/hapusberita/{{ $l->id }}" method="POST">
                                                    @method('delete')
                                                    @csrf

                                                  <button class="btn btn-primary" type="submit">Yakin</button>
                                                </form>
                                                </div>
                                              </div>
                                            </div>
                                          </div>

                                        @if($l->status === 0)
                                      <a href="/statusberita/{{ $l->id }}/accept" class="btn btn-success">Setujui</a>
                                      <a href="/hapusberita/{id}" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalTolak{{ $l->id }}">Tolak</a>
                                       @endif

                                        {{-- modal tolak --}}
                                        <div class="modal fade" id="modalTolak{{ $l->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-body">
                                                    <p>Apakah anda yakin ingin menolak {{ $l->judul }} ?</p>
                                                </div>
                                                <div class="modal-footer">
                                                  <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                                                  <form action="/tolakuser/{{ $l->id }}" method="POST">
                                                    @method('delete')
                                                    @csrf

                                                  <button class="btn btn-primary" type="submit">Yakin</button>
                                                </form>
                                                </div>
                                              </div>
                                            </div>
                                          </div>


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