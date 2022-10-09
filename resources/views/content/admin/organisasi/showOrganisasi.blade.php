@extends('layouts.admin.master')

@section('title','Edit User')

@section('content')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-6">

                <h3>Edit Data User</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/semuauser">Semua User</a></li>
                    <li class="breadcrumb-item"> <a href="/useraktif"></a> User Aktif</li>
                    <li class="breadcrumb-item active"> <a href="/usernonaktif"></a> User Nonaktif</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Auto Play Example</h5>
                </div>
                <div class="card-body">
                    <div class="owl-carousel owl-theme" id="owl-carousel-13">
                        @foreach ($organisasi as $item)
                        <div class="item">
                            <img src="{{ asset('public') }}" alt="">
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="mb-3 text-end px-4">
                    <a href="/organisasi/edit" class="btn btn-primary">Edit</a>
                    <a href="/organisasi/add" class="btn btn-primary">tambah foto</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
