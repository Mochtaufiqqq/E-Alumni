@extends('layouts\admin.master')

@section('content')

<div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-sm-6">
          <h3>Lihat Semua Alumni</h3>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Base</li>
            <li class="breadcrumb-item active">Accordion</li>
          </ol>
        </div>
        <div class="col-sm-6">
          <!-- Bookmark Start-->
          <div class="bookmark">
            <ul>
              <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
              <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
              <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
              <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
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
            <h5>Data Alumni</h5><span>The Responsive extension for DataTables can be applied to a DataTable in one of two ways; with a specific class name on the table, or using the DataTables initialisation options. This method shows the latter, with the responsive option being set to the boolean value true.</span>
          </div>
          <div class="card-body">
            <div class="dt-ext table-responsive">
              <table class="display" id="responsive">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Pekerjaan</th>
                    <th>No Telp</th>
                    <th>Tahun Keluar</th>
                    <th>Opsi</th>
                  </tr>
                  @foreach ($alumnis as $a)
                </thead>
                <tbody>
                  <tr>
                    <td>{{ $a->nama }}</td>
                    <td>{{ $a->email }}</td>
                    <td>{{ $a->alamat }}</td>
                    <td>{{ $a->pekerjaan }}</td>
                    <td>{{ $a->no_telp }}</td>
                    <td>{{ $a->tahun_keluar }}</td>
                    <td><a href="/editalumni/{{ $a->id }}" class="btn btn-pill btn-warning btn-lg" >Edit</a>
                    <a href="/deletealumni/{{ $a->id }}" class="btn btn-danger btn-pill btn-lg" >Hapus</a>
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