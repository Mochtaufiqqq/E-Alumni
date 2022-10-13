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
                  <a class="btn btn-primary mb-3" href="/tambahuser">Tambah Data</a>
                  <a class="btn btn-secondary text-dark mb-3" href="{{ url('/reportpdfuser') }}">Export PDF</a>
                    <div class="dt-ext table-responsive">
                      <table id="responsive" class="display">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Foto Profil</th>
                                <th scope="col">Nama</th>
                                <th scope="col">NISN</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Tahun Lulus</th>
                                <th scope="col">Email</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Status</th>
                                <th scope="col">Opsi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $u)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>
                                  @if ($u->foto_profile != '')
                                  <img src="{{ asset($u->foto_profile) }}" alt="" width="50" height="50">

                                  @else
                                  <img src="{{ asset('jikatidadada/jika.jpg') }}" alt="" width="50" height="50">
                                  @endif
                                </td>
                                <td>{{ $u->nama }}</td>
                                <td>{{ $u->nisn }}</td>
                                <td>{{ $u->jurusan }}</td>
                                <td>{{ $u->thn_lulus }}</td>
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
                                @if($u->status === 1)
                                <a href="/detailuser/{{ $u->id }}" class="btn btn-primary mb-3"><i data-feather="eye"></i></a>
                                <a href="/edituser/{{ $u->id }}" class="btn btn-warning mb-3"><i data-feather="edit"></i></a>
                                <a href="/hapususer/{{ $u->id }}" class="btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $u->id }}"><i data-feather="trash-2"></i></a>
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
                                <a href="/statususer/{{ $u->id }}/accept" class="btn btn-success mb-3">Setujui</a>
                                <a href="/hapususer/{id}" class="btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#modalTolak{{ $u->id }}">Tolak</a>
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