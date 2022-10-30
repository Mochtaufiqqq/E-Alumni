@extends('layouts.admin.master')

@section('title','Semua Lowongan Kerja')
    

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
              
                <h3>Lowongan Kerja</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/lowongankerja">Semua Lowongan Kerja</a></li>
                    <li class="breadcrumb-item"> <a href="#"></a>Develover  </li>
                    <li class="breadcrumb-item"> <a href="#"></a>Designer  </li>
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
                    <h5>Semua Data Lowongan Kerja</h5><span>Dibawah Ini adalah table semua data user aktif dan user nonaktif kamu bisa mengelolanya. Terdapat Beberapa Button Untuk Mengelola</span>
                </div>
                
                <div class="card-body">
                  <a class="btn btn-primary mb-3" href="/addlowongankerja">Tambah Lowongan Pekerjaan</a>
                  <a class="btn btn-secondary text-dark mb-3" href="{{ url('/reportpdflowongankerja') }}">Export PDF</a>
                    <div class="dt-ext table-responsive">
                        <table class="table table-bordered" id="basic-row-reorder">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Foto</th>
                                    <th>Judul</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Deskripsi</th>
                                    <th>Tanggal</th>
                                    <th>Opsi</th>
                                </tr>
                                @foreach ($kerjas as $k)
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                      @if ($k->foto != '')
                                      <img src="{{ asset($k->foto) }}" alt="" width="50" height="50">

                                      @else
                                      <img src="{{ asset('jikatidadada/jika.jpg') }}" alt="" width="50" height="50">
                                      @endif
                                     </td>
                                    <td>{{ $k->judul }}</td>
                                    <td>{{ $k->nama_perusahaan }}</td>
                                    <td>{{ $k->deskripsi }}</td>
                                    <td>{{ $k->tgl }}</td>
                                    
                                    <td>
                                      <a href="/detaillowongankerja/{{ $k->id }}" class="btn btn-primary mb-3"><i data-feather="eye"></i></a>
                                      <a href="/editlowongankerja/{{ $k->id }}" class="btn btn-warning mb-3"><i data-feather="edit"></i></a>
                                      <a href="/hapuslowongankerja/{{ $k->id }}" class="btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $k->id }}"><i data-feather="trash-2"></i></a>
                                       
                                         {{-- modal delete --}}
                                         <div class="modal fade" id="modalDelete{{ $k->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">Hapus Data Lowongan Kerja</h5>
                                                  <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Apakah anda yakin ingin menghapus data {{ $k->judul }} ?</p>
                                                </div>
                                                <div class="modal-footer">
                                                  <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                                                  <form action="/hapuslowongankerja/{{ $k->id }}" method="POST">
                                                    @method('delete')
                                                    @csrf

                                                  <button class="btn btn-primary" type="submit">Yakin</button>
                                                </form>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                     
                                        {{-- modal tolak --}}
                                        <div class="modal fade" id="modalTolak{{ $k->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-footer">
                                                  <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                                                  <form action="/tolakuser/{{ $k->id }}" method="POST">
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