@extends('layouts.admin.master')

@section('title','Semua Berita')
    

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
              
                <h3>Berita</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/semuaberita">Semua Berita</a></li>
                    <li class="breadcrumb-item"> <a href="#"></a>Prestasi  </li>
                    <li class="breadcrumb-item"> <a href="#"></a>Event  </li>
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
                    <h5>Semua Data Berita</h5><span>Dibawah Ini adalah table semua data user aktif dan user nonaktif kamu bisa mengelolanya. Terdapat Beberapa Button Untuk Mengelola</span>
                </div>
                
                <div class="card-body">
                  <a class="btn btn-primary mb-3" href="/tambahberita">Tambah Data Berita</a>
                  <a class="btn btn-secondary text-dark mb-3" href="{{ url('/reportpdfberita') }}">Export PDF</a>
                    <div class="dt-ext table-responsive">
                        <table class="display" id="responsive">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Foto</th>
                                    <th>Judul</th>
                                    <th>Isi</th>
                                    <th>Tanggal</th>
                                    <th>Kategori</th>
                                    <th>Foto Kegiatan</th>
                                    <th>Opsi</th>
                                </tr>
                                @foreach ($beritas as $b)
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                      @if ($b->foto != '')
                                      <img src="{{ asset($b->foto) }}" alt="" width="50" height="50">

                                      @else
                                      <img src="{{ asset('jikatidadada/jika.jpg') }}" alt="" width="50" height="50">
                                      @endif
                                     </td>
                                    <td>{{ $b->judul }}</td>
                                    <td>{{ $b->isi }}</td>
                                    <td>{{ $b->tgl }}</td>
                                    <td>{{ $b->kategori }}</td>
                                    <td>
                                      @if ($b->foto != '')
                                      <img src="{{ asset($b->foto) }}" alt="" width="50" height="50">

                                      @else
                                      <img src="{{ asset('jikatidadada/jika.jpg') }}" alt="" width="50" height="50">
                                      @endif
                                     </td>
                                    <td>
                                      <a href="/detailberita/{{ $b->id }}" class="btn btn-primary"><i data-feather="eye"></i></a>
                                      <a href="/editberita/{{ $b->id }}" class="btn btn-warning"><i data-feather="edit"></i></a>
                                      <a href="/hapusberita/{{ $b->id }}" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $b->id }}"><i data-feather="trash-2"></i></a>
                                       
                                         {{-- modal delete --}}
                                         <div class="modal fade" id="modalDelete{{ $b->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">Hapus Data Berita</h5>
                                                  <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Apakah anda yakin ingin menghapus data {{ $b->judul }} ?</p>
                                                </div>
                                                <div class="modal-footer">
                                                  <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                                                  <form action="/hapusberita/{{ $b->id }}" method="POST">
                                                    @method('delete')
                                                    @csrf

                                                  <button class="btn btn-primary" type="submit">Yakin</button>
                                                </form>
                                                </div>
                                              </div>
                                            </div>
                                          </div>

                                      @if($b->status === 0)
                                      <a href="/statusberita/{{ $b->id }}/accept" class="btn btn-success">Setujui</a>
                                      <a href="/hapusberita/{id}" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalTolak{{ $b->id }}">Tolak</a>
                                       @endif

                                        {{-- modal tolak --}}
                                        <div class="modal fade" id="modalTolak{{ $b->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-body">
                                                    <p>Apakah anda yakin ingin menolak {{ $b->judul }} ?</p>
                                                </div>
                                                <div class="modal-footer">
                                                  <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                                                  <form action="/tolakuser/{{ $b->id }}" method="POST">
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