@extends('layouts.admin.master')

@section('title','Detail Lowongan Kerja')

@section('content')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-6">

                <h3>Detail Lowongan Kerja</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/lowongankerja">Semua Lowongan Kerja</a></li>
                    <li class="breadcrumb-item"> <a href="/Develover"></a>Develover </li>
                    <li class="breadcrumb-item active"><a href="/Designer"></a>Designer </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<div class="container-fluid">
    <div class="edit-profile">
        <div class="row">
            <div class="col-xl">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title mb-0">Detail User</h4>
                        <div class="card-options"><a class="card-options-collapse" href="#"
                                data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                                class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                    class="fe fe-x"></i></a></div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-2 px-5">
                            <div class="profile-title">
                                <div class="media">
                                    @if ($kerjas->foto != '')
                                    <img class="img-300 img-fluid rounded-circle" alt=""
                                        src="{{ asset($kerjas->foto) }}">
                                    @else
                                    <img class="img-70 rounded-circle" src="{{ asset('public/jikatidadada/jika.jpg') }}"
                                        alt="">
                                    @endif
                                    <div class="media-body">
                                        <h3 class="mb-1 f-20 txt-primary">{{ $kerjas->judul }}</h3>
                                        <div class="mb-3">
                                          <h6 class="form-label txt-primary">Jurusan : {{ $kerjas->dekskripsi }}</h6>
                                      </div>
                                      <div class="mb-3">
                                          <h6 class="form-label txt-primary">Tanggal : {{ $kerjas->tgl }}</h6>
                                      </div>
                                      <div class="mb-3">
                                        <h6 class="form-label">Foto :</h6>
                                    </div>
                                    <div class="mb-3">
                                      <img src="{{ asset($kerjas->foto) }}" height="100" width="200" alt="" >
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="form-footer text-end">
                        <a href="{{ url('/lowongankerja') }}"><button class="btn btn-primary btn-block">Kembali</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection