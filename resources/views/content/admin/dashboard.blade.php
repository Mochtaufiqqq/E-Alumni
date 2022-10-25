@extends('layouts.admin.master')

@section('content')

@section('title', 'Dashboard')
    

<div class="container-fluid dashboard-default-sec">
  <div class="row">
    <div class="col-xl-5 box-col-12 des-xl-100"> 
      <div class="row">
        <div class="col-xl-12 col-md-6 box-col-6 des-xl-50">
          <div class="card profile-greeting">
            <div class="card-header">
              <div class="header-top">
               
              </div>
            </div>
            <div class="card-body text-center p-t-0">
              <h3 class="font-light">Wellcome Back, {{ auth()->user()->nama }}!!</h3>
              <p>Selamat datang kembali admin, anda bisa mengelola kembali data-data website tracer study SMKS MAHAPUTRA CERDAS UTAMA.</p>
              {{-- <button class="btn btn-light">Update</button> --}}
            </div>


            <div class="confetti">
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
            </div>
          </div>
        </div>

        
        <div class="col-xl-6 col-md-3 col-sm-6 box-col-3 des-xl-25 rate-sec">
          <div class="card income-card card-primary">                                 
            <div class="card-body text-center">                                  
              <div class="round-box">
                <i data-feather="user"></i>
              </div>
              <p>User Aktif</p><a class="btn-arrow arrow-primary" href="javascript:void(0)"></a>
              <h5 class="counter">{{ $totalactive->count() }}</h5>
              <a class="btn-arrow arrow-secondary" href="/useraktif"><i class="toprightarrow-secondary fa fa-arrow-up me-2"></i>Lihat </a>
            </div>
          </div>
        </div>


        <div class="col-xl-6 col-md-3 col-sm-6 box-col-3 des-xl-25 rate-sec">
          <div class="card income-card card-secondary">                                    
            <div class="card-body text-center">
              <div class="round-box">
                <i data-feather="user"></i>
              </div>
             
              <p>User Nonaktif</p>
              <h5 class="counter">{{ $totalnonactive->count() }}</h5>
              <a class="btn-arrow arrow-secondary" href="/usernonaktif"><i class="toprightarrow-secondary fa fa-arrow-up me-2"></i>Lihat </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="col-xl-7 box-col-12 des-xl-100 dashboard-sec">
      <div class="row">
      <div class="card income-card">
        <div class="card-header">
          <div class="header-top d-sm-flex align-items-center">
            <h5>{{ $chart1->options['chart_title'] }}</h5>
            <div class="center-content">
              {!! $chart1->renderHtml() !!}
            </div>
            <div class="setting-list">
              <ul class="list-unstyled setting-option">
                <li>
                  <div class="setting-primary"><i class="icon-settings"></i></div>
                </li>
                <li><i class="view-html fa fa-code font-primary"></i></li>
                <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                <li><i class="icofont icofont-error close-card font-primary"></i></li>
              </ul>
            </div>
          </div>
        </div>
        {{-- <div class="card-body p-0">
          
        </div> --}}
      </div>

      <div class="card latest-update-sec">
        <div class="card-header">
          <div class="header-top d-sm-flex align-items-center">
            <h5>Organisasi</h5>
            <div class="center-content">
            </div>
            <div class="setting-list">
              <ul class="list-unstyled setting-option">
                <li>
                  <div class="setting-primary"><i class="icon-settings"></i></div>
                </li>
                <li><i class="view-html fa fa-code font-primary"></i></li>
                <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                <li><i class="icofont icofont-error close-card font-primary">                                </i></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordernone">
              <tbody>
                @foreach ($organisasi as $o)
                    
                
                <tr>
                  <td>
                    <div class="media">

                      <img src="{{ asset($o->logo) }}" alt="" width="50" height="50">
                     
                      <div class="media-body"><span>{{ $o->organisasi->organisasi }}</span>
                      </div>
                    </div>
                  </td>
                  <td><a href="/organisasi/edit{{ $o->id }}" target="_blank">Edit</a></td>
                  <td><a href="index.html" target="_blank">Delete</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    </div>

        
        <div class="col-xl-12 recent-order-sec">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <h5>Berita</h5>
                <table class="table table-bordernone">                                         
                  <thead>
                    <tr>                                        
                      <th>Foto</th>
                      <th>Isi</th>
                      <th>Kategori</th>
                      <th>Tanggal</th>
                      <th>
                        <div class="setting-list">
                          <ul class="list-unstyled setting-option">
                            <li>
                              <div class="setting-primary"><i class="icon-settings">                                      </i></div>
                            </li>
                            <li><i class="view-html fa fa-code font-primary"></i></li>
                            <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                            <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                            <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                            <li><i class="icofont icofont-error close-card font-primary"></i></li>
                          </ul>
                        </div>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($beritas as $b)
                        
                    
                    <tr>
                      <td>
                        <div class="media"><img class="img-fluid rounded-circle" src="{{ asset($b->foto) }}" alt="" data-original-title="" title="" width="50" height="50">
                          <div class="media-body"><a href="/detailberita/{{ $b->id }}"><span>{{ $b->judul }}</span></a></div>
                        </div>
                      </td>
                      <td>
                        <p>{{ $b->isi }}</p>
                      </td>
                      <td>
                        <p>{{ $b->kategori }}</p>
                      </td>
                      <td>
                        <p>{{ $b->tgl }}</p>
                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-12 recent-order-sec">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <h5>Lowongan Pekerjaan</h5>
                <table class="table table-bordernone">                                         
                  <thead>
                    <tr>                                        
                      <th>Foto</th>
                      <th>Deskripsi</th>
                      <th>Tanggal</th>
                      <th>
                        <div class="setting-list">
                          <ul class="list-unstyled setting-option">
                            <li>
                              <div class="setting-primary"><i class="icon-settings">                                      </i></div>
                            </li>
                            <li><i class="view-html fa fa-code font-primary"></i></li>
                            <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                            <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                            <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                            <li><i class="icofont icofont-error close-card font-primary"></i></li>
                          </ul>
                        </div>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($lokers as $l)
                    <tr>
                      <td>
                        <div class="media"><img class="img-fluid rounded-circle" src="{{ asset($l->foto) }}" alt="" data-original-title="" title="" width="50" height="50">
                          <div class="media-body"><a href="/detailloker/{{ $l->id }}"><span>{{ $l->judul }} | {{ $l->nama_perusahaan }}</span></a></div>
                        </div>
                      </td>
                      <td>
                        <p>{{ $l->deskripsi }}</p>
                      </td>
                      <td>
                        <p>{{ $l->tgl }}</p>
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

@section('javascript')
{!! $chart1->renderChartJsLibrary() !!}
{!! $chart1->renderJs() !!}
@endsection