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
                                @foreach ($fvicon as $f)
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                      @if ($f->favicon != '')
                                      <img src="{{ asset($f->favicon) }}" alt="" width="50" height="50">

                                      @else
                                      <img src="{{ asset('jikatidadada/jika.jpg') }}" alt="" width="50" height="50">
                                      @endif
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



@endsection