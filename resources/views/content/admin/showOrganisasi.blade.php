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
                <div class="item"><img src="{{ asset('viho_all/html/assets/images/slider/1.jpg') }}" alt=""></div>
                <div class="item"><img src="{{ asset('viho_all/html/assets/images/slider/2.jpg') }}" alt=""></div>
                <div class="item"><img src="{{ asset('viho_all/html/assets/images/slider/3.jpg') }}" alt=""></div>
                <div class="item"><img src="{{ asset('viho_all/html/assets/images/slider/4.jpg') }}" alt=""></div>
                <div class="item"><img src="{{ asset('viho_all/html/assets/images/slider/5.jpg') }}" alt=""></div>
                <div class="item"><img src="{{ asset('viho_all/html/assets/images/slider/6.jpg') }}" alt=""></div>
                <div class="item"><img src="{{ asset('viho_all/html/assets/images/slider/7.jpg') }}" alt=""></div>
                <div class="item"><img src="{{ asset('viho_all/html/assets/images/slider/8.jpg') }}" alt=""></div>
                <div class="item"><img src="{{ asset('viho_all/html/assets/images/slider/9.jpg') }}" alt=""></div>
                <div class="item"><img src="{{ asset('viho_all/html/assets/images/slider/10.jp') }}g" alt=""></div>
                <div class="item"><img src="{{ asset('viho_all/html/assets/images/slider/11.jp') }}g" alt=""></div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>

@endsection