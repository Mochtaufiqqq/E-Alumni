@extends('layouts.admin.master')

@section('title','Semua User')
    

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
                    <li class="breadcrumb-item"> <a href="/useraktif"></a> User Aktif</li>
                    <li class="breadcrumb-item active"> <a href="/usernonaktif"></a> User Nonaktif</li>
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
                    <h5>Semua Data User</h5><span>Dibawah Ini adalah table semua data user aktif dan user nonaktif kamu bisa mengelolanya. Terdapat Beberapa Button Untuk Mengelola</span>
                </div>
                
                <div class="card-body">
                    <a class="btn btn-primary" href="/tambahuser">Tambah Data</a>
                    <div class="dt-ext table-responsive">
                        <table class="display" id="responsive">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Foto</th>
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
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ asset($u->foto_profile) }}" alt="" width="50" height="50"></td>
                                    <td>{{ $u->nama }}</td>
                                    <td>{{ $u->email }}</td>
                                    <td>{{ $u->alamat }}</td>
                                    <td>
                                        @if($u->status === 0)
                                        <h5><span class="badge bg-opacity-100 bg-danger text-white">Nonaktif</span></h5>
                                        @else($u->status_user_id === 2)
                                        <h5><span class="badge bg-opacity-100 bg-success text-white">Aktif</span></h5>
                                        @endif
                                        
                                    </td>
                                    <td>
                                        @if($u->status === 0)
                                        <a href="/edituser/{{ $u->id }}" class="btn btn-warning">Edit</a>
                                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $u->id }}">Hapus</button>
                                         @endif

                                         {{-- modal delete --}}
                                         <div class="modal fade" id="modalDelete{{ $u->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">Hapus Data User</h5>
                                                  <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Apakah anda yakin ingin menghapus data {{ $u->nama }} ?</p>
                                                </div>
                                                <div class="modal-footer">
                                                  <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                                                  <form action="/hapususer/{{ $u->id }}" method="POST">
                                                    @method('delete')
                                                    @csrf

                                                  <button class="btn btn-primary" type="submit">Yakin</button>
                                                </form>
                                                </div>
                                              </div>
                                            </div>
                                          </div>


                                        

                                        @if($u->status === 0)
                                      <a href="/statususer/{{ $u->id }}/accept" class="btn btn-success">Setujui</a>
                                      <a href="/hapususer/{id}" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalTolak{{ $u->id }}">Tolak</a>
                                      {{-- <a href="/loanrequests/{{ $l->id }}/cancel" class="btn btn-danger" onclick="return confirm('Are you sure want to cancel ?');">Cancel</a> --}}
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