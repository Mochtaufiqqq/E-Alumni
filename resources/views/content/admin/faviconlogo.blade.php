@extends('layouts.admin.master')

@section('title','FavIcon & Logo')
    

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
              
                <h3>Favicon & Logo</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/faviconlogo">Favicon</a></li>
                    <li class="breadcrumb-item"><a href="/faviconlogo">Logo</a></li>
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
                    <h5>Favicon</h5><span>Dibawah Ini adalah table favicon kamu bisa mengelolanya. Terdapat Beberapa Button Untuk Mengelola</span>
                </div>
                
                <div class="card-body">
                 
                    <div class="dt-ext table-responsive">
                        <table class="display" id="responsive">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Favicon</th>
                                    <th>Opsi</th>
                                </tr>
                                @foreach ($icon as $f)
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                      <img src="{{ asset($f->favicon) }}" alt="" width="50" height="50">
                                     </td>
                                    <td>
                                      <a href="/editfavicon/{{ $f->id }}" class="btn btn-warning"><i data-feather="edit"></i></a>
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

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Logo</h5><span>Dibawah Ini adalah table logo kamu bisa mengelolanya. Terdapat Button Untuk Mengelola</span>
                </div>
                
                <div class="card-body">
                 
                    <div class="dt-ext table-responsive">
                        <table class="display" id="responsive">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Isi</th>
                                    <th>Logo</th>
                                    <th>Opsi</th>
                                </tr>
                                @foreach ($logo as $l)
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $l->isi }}</td>
                                    <td>
                                      @if ($l->foto == null)
                                      <img src="{{ asset('/imagenull/logo.png') }}" alt="" width="150" height="100">
                                          
                                      @else
                                      <img src="{{ asset($l->foto) }}" alt="" width="150" height="100">
                                          
                                      @endif
                                     </td>
                                   
                                    <td>
                                     
                                      <a href="/editlogo/{{ $l->id }}" class="btn btn-warning"><i data-feather="edit"></i></a>
                                      
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