@extends('layouts.admin.master')

@section('title','User Aktif')
    

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
                
                <h3>Semua User</h3>
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
                    <h5>Semua Data User Nonaktif</h5><span>Dibawah Ini adalah table semua data user aktif dan user nonaktif kamu bisa mengelolanya. Terdapat Beberapa Button Untuk Mengelola</span>
                </div>
                <div class="card-body">
                    <a class="btn btn-primary" href="/tambahuser">Tambah Data</a>
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
                                        @if($u->status_user_id === 1)
                                        <h5><span class="badge bg-opacity-100 bg-danger text-white">Nonaktif</span></h5>
                                        @endif
            
                                    </td>
                                    <td>
                                        @if($u->status_user_id === 2)
                                        <a href="/edituser/{{ $u->id }}" class="btn btn-warning">Edit</a>
                                        <a href="/hapususer/{{ $u->id }}" class="btn btn-danger">Hapus</a>
                                         @endif

                                        @if($u->status_user_id === 1)
                                      <a href="/statususer/{{ $u->id }}/accept" class="btn btn-success">Setujui</a>
                                      <a href="/hapususer/{id}" class="btn btn-danger">Tolak</a>
                                      {{-- <a href="/loanrequests/{{ $l->id }}/cancel" class="btn btn-danger" onclick="return confirm('Are you sure want to cancel ?');">Cancel</a> --}}
                                       @endif
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