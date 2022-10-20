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
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 448.057 448.057" style="enable-background:new 0 0 448.057 448.057;" xml:space="preserve">
                  <g>
                    <g>
                      <path d="M404.562,7.468c-0.021-0.017-0.041-0.034-0.062-0.051c-13.577-11.314-33.755-9.479-45.069,4.099                                            c-0.017,0.02-0.034,0.041-0.051,0.062l-135.36,162.56L88.66,11.577C77.35-2.031,57.149-3.894,43.54,7.417                                            c-13.608,11.311-15.471,31.512-4.16,45.12l129.6,155.52h-40.96c-17.673,0-32,14.327-32,32s14.327,32,32,32h64v144                                            c0,17.673,14.327,32,32,32c17.673,0,32-14.327,32-32v-180.48l152.64-183.04C419.974,38.96,418.139,18.782,404.562,7.468z"></path>
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M320.02,208.057h-16c-17.673,0-32,14.327-32,32s14.327,32,32,32h16c17.673,0,32-14.327,32-32                                            S337.694,208.057,320.02,208.057z"></path>
                    </g>
                  </g>
                </svg>
              </div>
              <p>User Aktif</p><a class="btn-arrow arrow-primary" href="javascript:void(0)"></a>
              <h5>{{ $totalactive->count() }}</h5>
              <a class="btn-arrow arrow-secondary" href="/useraktif"><i class="toprightarrow-secondary fa fa-arrow-up me-2"></i>Lihat </a>
              
              <div class="parrten">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 448.057 448.057" style="enable-background:new 0 0 448.057 448.057;" xml:space="preserve">
                  <g>
                    <g>
                      <path d="M404.562,7.468c-0.021-0.017-0.041-0.034-0.062-0.051c-13.577-11.314-33.755-9.479-45.069,4.099                                            c-0.017,0.02-0.034,0.041-0.051,0.062l-135.36,162.56L88.66,11.577C77.35-2.031,57.149-3.894,43.54,7.417                                            c-13.608,11.311-15.471,31.512-4.16,45.12l129.6,155.52h-40.96c-17.673,0-32,14.327-32,32s14.327,32,32,32h64v144                                            c0,17.673,14.327,32,32,32c17.673,0,32-14.327,32-32v-180.48l152.64-183.04C419.974,38.96,418.139,18.782,404.562,7.468z"></path>
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M320.02,208.057h-16c-17.673,0-32,14.327-32,32s14.327,32,32,32h16c17.673,0,32-14.327,32-32                                            S337.694,208.057,320.02,208.057z">                                  </path>
                    </g>
                  </g>
                </svg>
              </div>
            </div>
          </div>
        </div>


        <div class="col-xl-6 col-md-3 col-sm-6 box-col-3 des-xl-25 rate-sec">
          <div class="card income-card card-secondary">                                    
            <div class="card-body text-center">
              <div class="round-box">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                  <g>
                    <g>
                      <path d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256S397.385,0,256,0z M96,100.16                                            c50.315,35.939,80.124,94.008,80,155.84c0.151,61.839-29.664,119.919-80,155.84C11.45,325.148,11.45,186.851,96,100.16z M256,480                                            c-49.143,0.007-96.907-16.252-135.84-46.24C175.636,391.51,208.14,325.732,208,256c0.077-69.709-32.489-135.434-88-177.6                                            c80.1-61.905,191.9-61.905,272,0c-98.174,75.276-116.737,215.885-41.461,314.059c11.944,15.577,25.884,29.517,41.461,41.461                                            C353.003,463.884,305.179,480.088,256,480z M416,412v-0.16c-86.068-61.18-106.244-180.548-45.064-266.616                                            c12.395-17.437,27.627-32.669,45.064-45.064C500.654,186.871,500.654,325.289,416,412z"></path>
                    </g>
                  </g>
                </svg>
              </div>
             
              <p>User Nonaktif</p>
              <h5>{{ $totalnonactive->count() }}</h5>
              <a class="btn-arrow arrow-secondary" href="/usernonaktif"><i class="toprightarrow-secondary fa fa-arrow-up me-2"></i>Lihat </a>
              <div class="parrten">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                  <g>
                    <g>
                      <path d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256S397.385,0,256,0z M96,100.16                                            c50.315,35.939,80.124,94.008,80,155.84c0.151,61.839-29.664,119.919-80,155.84C11.45,325.148,11.45,186.851,96,100.16z M256,480                                            c-49.143,0.007-96.907-16.252-135.84-46.24C175.636,391.51,208.14,325.732,208,256c0.077-69.709-32.489-135.434-88-177.6                                            c80.1-61.905,191.9-61.905,272,0c-98.174,75.276-116.737,215.885-41.461,314.059c11.944,15.577,25.884,29.517,41.461,41.461                                            C353.003,463.884,305.179,480.088,256,480z M416,412v-0.16c-86.068-61.18-106.244-180.548-45.064-266.616                                            c12.395-17.437,27.627-32.669,45.064-45.064C500.654,186.871,500.654,325.289,416,412z"></path>
                    </g>
                  </g>
                </svg>
              </div>
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
      </div>
    </div>

@endsection

@section('javascript')
{!! $chart1->renderChartJsLibrary() !!}
{!! $chart1->renderJs() !!}
@endsection