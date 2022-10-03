@extends('layouts.admin.master')

@section('title','User Nonaktif')
    

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
                
                <h3>User Nonaktif</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item">User Aktif</li>
                    <li class="breadcrumb-item active">User Nonaktif</li>
                </ol>
            </div>
            
            <div class="col-sm-6">
                <!-- Bookmark Start-->
                <div class="bookmark">
                    <ul>
                        <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover"
                                data-placement="top" title="" data-original-title="Tables"><i
                                    data-feather="inbox"></i></a></li>
                        <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover"
                                data-placement="top" title="" data-original-title="Chat"><i
                                    data-feather="message-square"></i></a></li>
                        <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover"
                                data-placement="top" title="" data-original-title="Icons"><i
                                    data-feather="command"></i></a></li>
                        <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover"
                                data-placement="top" title="" data-original-title="Learning"><i
                                    data-feather="layers"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                            <form class="form-inline search-form">
                                <div class="form-group form-control-search">
                                    <input type="text" placeholder="Search..">
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- Bookmark Ends-->
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Semua Data User Nonaktif</h5><span>Dibawah Ini adalah semua data user yang belum diaktivasi !</span>
                </div>
                <div class="card-body">
                    <a class="btn btn-primary mb-3" href="/tambahuser">Tambah Data</a>
                    <div class="dt-ext table-responsive">
                        <table class="display" id="responsive">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>Status User</th>
                                    <th>Opsi</th>
                                </tr>
                                @foreach ($users as $u)
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $u->nama }}</td>
                                    <td>{{ $u->email }}</td>
                                    <td>{{ $u->alamat }}</td>
                                    <td>
                                        @if($u->status === 0)
                                        <h5><span class="badge bg-opacity-100 bg-danger text-white">Nonaktif</span></h5>
                                        @endif
            
                                    </td>
                                    <td>
                                        @if($u->status === 0)
                                      <a href="/statususer/{{ $u->id }}/accept" class="btn btn-success">Setujui</a>
                                      <a href="/hapususer/{id}" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalTolak{{ $u->id }}">Tolak</a>
                                       @endif

                                         {{-- modal tolak --}}
                                         <div class="modal fade" id="modalTolak{{ $u->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">Tolak User</h5>
                                                  <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Apakah anda yakin ingin menolak {{ $u->nama }} ?</p>
                                                </div>
                                                <div class="modal-footer">
                                                  <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                                                  <form action="/tolakuser/{{ $u->id }}" method="POST">
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