@extends('layouts.admin.master')

@section('title','Detail User')

@section('content')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-6">

                <h3>Detail User</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/semuauser">Semua User</a></li>
                    <li class="breadcrumb-item"> <a href="/useraktif"></a> User Aktif</li>
                    <li class="breadcrumb-item active"><a href="/usernonaktif"></a> User Nonaktif</li>
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
                                    @if ($users->foto_profile != '')
                                    <img class="img-300 img-fluid rounded-circle" alt=""
                                        src="{{ asset($users->foto_profile) }}">
                                    @else
                                    <img class="img-70 rounded-circle" src="{{ asset('public/jikatidadada/jika.jpg') }}"
                                        alt="">
                                    @endif
                                    <div class="media-body">
                                        <h3 class="mb-1 f-20 txt-primary">{{ $users->nama }}</h3>
                                        <p class="f-12">{{ $users->nisn }}</p>
                                        <div class="mb-3">
                                          <h6 class="form-label">Jurusan : {{ $users->jurusan }}</h6>
                                      </div>
                                      <div class="mb-3">
                                          <h6 class="form-label ">Tahun Lulus : {{ $users->thn_lulus }}</h6>
                                      </div>
                                      <div class="mb-3">
                                          <h6 class="form-label">Email : {{ $users->email }}</h6>
                                      </div>
                                      <div class="mb-3">
                                        <h6 class="form-label">Foto Kegiatan :</h6>
                                    </div>
                                    <div class="mb-3">
                                      <img src="{{ asset($users->foto_profile) }}" height="100" width="200" alt="" >
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        {{-- <div class="mb-3">
                          <h6 class="form-label">Email : {{ $users->email }}</h6>
                    </div> --}}
                    <div class="form-footer text-end">
                        <a href="{{ url('/semuauser') }}"><button class="btn btn-primary btn-block">Kembali</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection