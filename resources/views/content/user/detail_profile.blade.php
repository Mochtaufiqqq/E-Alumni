@extends('layouts.user.master')

@section('title', 'Profil Saya')
@section('content')

<!-- Page content -->
<section class="container">
    <div class="row">
        <!-- Sidebar (User info + Account menu) -->
        <aside class="col-lg-3 col-md-4 border-end pb-5 mt-n5">
            <div class="position-sticky top-0">
                <div class="text-center pt-5">
                    <div class="d-table position-relative mx-auto mt-2 mt-lg-4 pt-5 mb-3">


                        @if (auth()->user()->foto_profile != '')
                        <img src="{{ asset(auth()->user()->foto_profile) }}" class="d-block rounded-circle" width="120"
                            alt="John Doe">
                        @else
                        <img src="{{ asset('jikatidadada/user.png') }}" class="d-block rounded-circle" width="120"
                            alt="John Doe">
                        @endif
                    </div>
                    <h2 class="h5 mb-1">{{ auth()->user()->nama }} ({{ auth()->user()->nama_panggilan }})</h2>
                    <p class="mb-3 pb-3">{{ auth()->user()->nisn }}</p>
                <button class="btn btn-outline-secondary mb-3" data-bs-toggle="modal"
                    data-bs-target="#modalLengkapi" type="button">
                    <i class="bx bx-plus fs-lg me-2"></i>
                    Lengkapi Profile

                </button>
                    </div>
                   
                </div>
            
    </aside>

        <!-- Modal Lengkapi Profil -->
        <div class="modal fade" tabindex="-1" role="dialog" id="modalLengkapi">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Lengkapi Profil</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @if (auth()->user()->nama_panggilan == null)
                        <a href="#modalNamaPanggilan" data-bs-toggle="modal" data-bs-target="#modalNamaPanggilan"
                        style="text-decoration: none; color:black">
                        <p>Tambahkan nama panggilan</p>
                        </a>
                        @else
                        <a href="#modalEditNamaPanggilan" data-bs-toggle="modal" data-bs-target="#modalEditNamaPanggilan"
                        style="text-decoration: none; color:black">
                        <p>Edit nama panggilan</p>
                        </a>
                        @endif
                       
                        <hr>
                        @if (auth()->user()->foto_profile == null)
                        <a href="#modalfotoProfil" data-bs-toggle="modal" data-bs-target="#modalfotoProfil"
                        style="text-decoration: none; color:black">
                        <p class="mt-4">Tambahkan foto profil</p>
                        </a>
                        @else
                        <a href="#modalEditFotoProfil" data-bs-toggle="modal" data-bs-target="#modalEditFotoProfil"
                            style="text-decoration: none; color:black">
                            <p class="mt-4">Edit foto profil</p>
                        </a>
                        @endif
                        <hr>
                        <a href="#modalPekerjaan" data-bs-toggle="modal" data-bs-target="#modalPekerjaan"
                            style="text-decoration: none; color:black">
                            <p class="mt-4">Tambahkan pekerjaan</p>
                        </a>
                        <hr>
                        <a href="#modalRP" data-bs-toggle="modal" data-bs-target="#modalRP"
                            style="text-decoration: none; color:black">
                            <p class="mt-4">Tambahkan riwayat pendidikan</p>
                        </a>
                        <hr>
                        <a href="#modalOrganisasi" data-bs-toggle="modal" data-bs-target="#modalOrganisasi"
                            style="text-decoration: none; color:black">
                            <p class="mt-4">Tambahkan riwayat organisasi</p>
                        </a>
                        <hr>
                        <a href="#modalKeahlian" data-bs-toggle="modal" data-bs-target="#modalKeahlian"
                            style="text-decoration: none; color:black">
                            <p class="mt-4">Tambahkan keahlian</p>
                        </a>
                        <hr>
                        <a href="#modalSosmed" data-bs-toggle="modal" data-bs-target="#modalSosmed"
                            style="text-decoration: none; color:black">
                            <p class="mt-4">Tambahkan sosial media</p>
                        </a>
                        <hr>
                        <a href="#modalFotoKegiatan" data-bs-toggle="modal" data-bs-target="#modalFotoKegiatan"
                            style="text-decoration: none; color:black">
                            <p class="mt-4">Tambahkan dokumentasi</p>
                        </a>
                        <hr>
                        <a href="#modalKarya" data-bs-toggle="modal" data-bs-target="#modalKarya"
                            style="text-decoration: none; color:black">
                            <p class="mt-4">Tambahkan karya</p>
                        </a>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal nama panggilan -->
        <div class="modal fade" tabindex="-1" role="dialog" id="modalNamaPanggilan">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <!-- Modal header with nav tabs -->
                    <div class="modal-header">
                        <h5 class="modal-title">Tambahkan nama panggilan</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- Modal body with tab panes -->
                    <div class="modal-body tab-content py-4">

                        <!-- Sign in form -->
                        <form action="/updateprofile/{{ auth()->user()->id }}" method="POST" class="tab-pane fade show active" autocomplete="off" id="signin">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label" for="email1">Nama Panggilan</label>
                                <input class="form-control" type="text" name="nama_panggilan" id="email1"
                                    placeholder="Nama Panggilan">
                            </div>
                            <button class="btn btn-primary d-block w-100" type="submit">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

          <!-- Modal edit nama panggilan -->
          <div class="modal fade" tabindex="-1" role="dialog" id="modalEditNamaPanggilan">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <!-- Modal header with nav tabs -->
                    <div class="modal-header">
                        <h5 class="modal-title">Edit nama panggilan</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- Modal body with tab panes -->
                    <div class="modal-body tab-content py-4">

                        <!-- Sign in form -->
                        <form action="/updateprofile/{{ auth()->user()->id }}" method="POST" class="tab-pane fade show active" autocomplete="off" id="signin">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label" for="email1">Nama Panggilan</label>
                                <input class="form-control" type="text" name="nama_panggilan" value="{{ old('nama_panggilan',auth()->user()->nama_panggilan) }}" id="email1"
                                    placeholder="Nama Panggilan">
                            </div>
                            <button class="btn btn-primary d-block w-100" type="submit">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

         <div class="modal fade" tabindex="-1" role="dialog" id="modalNamaPanggilan">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <!-- Modal header with nav tabs -->
                    <div class="modal-header">
                        <h5 class="modal-title">Tambahkan nama panggilan</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- Modal body with tab panes -->
                    <div class="modal-body tab-content py-4">

                        <!-- Sign in form -->
                        <form action="/updateprofile/{{ auth()->user()->id }}" method="POST" class="tab-pane fade show active" autocomplete="off" id="signin">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label" for="email1">Nama Panggilan</label>
                                <input class="form-control" type="text" name="nama_panggilan" id="email1"
                                    placeholder="Nama Panggilan">
                            </div>
                            <button class="btn btn-primary d-block w-100" type="submit">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for foto profil -->
        <div class="modal fade" tabindex="-1" role="dialog" id="modalfotoProfil">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <!-- Modal header with nav tabs -->
                    <div class="modal-header">
                        <h5 class="modal-title">Tambahkan foto profil</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- Modal body with tab panes -->
                    <div class="modal-body tab-content py-4">

                        <!-- Sign in form -->
                        <form action="/updateprofile/{{ auth()->user()->id }}" method="POST"
                            enctype="multipart/form-data" class="tab-pane fade show active" autocomplete="off"
                            id="signin">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label" for="email1">Foto Profil</label>
                                @if (auth()->user()->foto_profile)

                                <img src="{{ asset(auth()->user()->foto_profile) }}"
                                    class="img-preview img-fluid mb-3 col-sm-5 d-block">

                                @else

                                <img class="img-preview img-fluid mb-3 col-sm-5">

                                @endif
                                <img class="img-preview img-fluid mb-3">
                                <input type="file" value="{{ old('foto_profile',auth()->user()->foto_profile) }}" name="foto_profile" id="image"
                                    class="form-control @error('foto_profile') is-invalid @enderror"
                                    onchange="previewImage()">
                                @error('foto_profile')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <button class="btn btn-primary d-block w-100" type="submit">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

          <!-- Modal edit for foto profil -->
          <div class="modal fade" tabindex="-1" role="dialog" id="modalEditFotoProfil">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <!-- Modal header with nav tabs -->
                    <div class="modal-header">
                        <h5 class="modal-title">Edit foto profil</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- Modal body with tab panes -->
                    <div class="modal-body tab-content py-4">

                        <!-- Sign in form -->
                        <form action="/updateprofile/{{ auth()->user()->id }}" method="POST"
                            enctype="multipart/form-data" class="tab-pane fade show active" autocomplete="off"
                            id="signin">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label" for="email1">Foto Profil</label>
                                @if (auth()->user()->foto_profile)

                                <img src="{{ asset(auth()->user()->foto_profile) }}"
                                    class="img-preview img-fluid mb-3 col-sm-5 d-block">

                                @else

                                <img class="img-preview img-fluid mb-3 col-sm-5">

                                @endif
                                <img class="img-preview img-fluid mb-3">
                                <input type="file" value="{{ old('foto_profile',auth()->user()->foto_profile) }}" name="foto_profile" id="image"
                                    class="form-control @error('foto_profile') is-invalid @enderror"
                                    onchange="previewImage()">
                                @error('foto_profile')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <button class="btn btn-primary d-block w-100" type="submit">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal pekerjaan -->
        <div class="modal fade" tabindex="-1" role="dialog" id="modalPekerjaan">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <!-- Modal header with nav tabs -->
                    <div class="modal-header">
                        <h5 class="modal-title">Tambahkan Pekerjaan</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- Modal body with tab panes -->
                    <div class="modal-body tab-content py-4">

                        <!-- Sign in form -->
                        <form action="/addpekerjaan/{{ auth()->user()->id }}" method="POST" class="tab-pane fade show active" autocomplete="off" id="signin" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label" for="email1">Nama Perusahaan</label>
                                <input class="form-control" type="text" name="pekerjaan" id="email1"
                                    placeholder="Nama Perusahaan">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="email1">Jabatan</label>
                                <input class="form-control" type="text" name="jabatan_pekerjaan" id="email1"
                                    placeholder="Sebagai">
                            </div>
                            <button class="btn btn-primary d-block w-100" type="submit">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal RIWAYAT PENDIDIKAN -->
        <div class="modal fade" tabindex="-1" role="dialog" id="modalRP">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">

                    <!-- Modal header with nav tabs -->
                    <div class="modal-header">
                        <h5 class="modal-title">Tambahkan riwayat pendidikan</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- Modal body with tab panes -->
                    <div class="modal-body tab-content py-4">

                        <!-- Sign in form -->

                        <form class="tab-pane fade show active" autocomplete="off" id="signin">
                            <h2 class="h5 text-dark mb-4">Perguruan Tinggi</h2>
                            <div class="mb-3">
                                <label class="form-label" for="email1">Nama Universitas</label>
                                <input class="form-control" type="text" name="nama_perusahaan" id="email1"
                                    placeholder="Nama Perusahaan">
                            </div>
                            <div class="col mb-3">
                                <label class="form-label" for="email1">Tahun Mulai</label>
                                <select id="country" class="form-select form-select-lg" required>
                                    <option value="" disabled>Choose country</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="USA">USA</option>
                                </select>
                                <div class="invalid-feedback">Please choose your country!</div>
                            </div>
                            <div class="col mb-3">
                                <label class="form-label" for="email1">Tahun Akhir</label>
                                <select id="country" class="form-select form-select-lg" required>
                                    <option value="" disabled>Choose country</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="USA" selected>USA</option>
                                </select>
                                <div class="invalid-feedback">Please choose your country!</div>
                            </div>
                            <h2 class="h5 text-dark mb-4">SMA / SMK</h2>
                            <div class="mb-3">
                                <label class="form-label" for="email1">Nama Sekolah</label>
                                <input class="form-control" type="text" name="nama_perusahaan" id="email1"
                                    placeholder="Nama SMA/SMK">
                            </div>
                            <div class="col mb-3">
                                <label class="form-label" for="email1">Tahun Mulai</label>
                                <select id="country" class="form-select form-select-lg" required>
                                    <option value="" disabled>Choose country</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="USA">USA</option>
                                </select>
                                <div class="invalid-feedback">Please choose your country!</div>
                            </div>
                            <div class="col mb-3">
                                <label class="form-label" for="email1">Tahun Akhir</label>
                                <select id="country" class="form-select form-select-lg" required>
                                    <option value="" disabled>Choose country</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="USA" selected>USA</option>
                                </select>
                                <div class="invalid-feedback">Please choose your country!</div>
                            </div>
                            <h2 class="h5 text-dark mb-4">Sekolah Menengah Pertama</h2>
                            <div class="mb-3">
                                <label class="form-label" for="email1">Nama Sekolah</label>
                                <input class="form-control" type="text" name="nama_perusahaan" id="email1"
                                    placeholder="Nama SMA/SMK">
                            </div>
                            <div class="col mb-3">
                                <label class="form-label" for="email1">Tahun Mulai</label>
                                <select id="country" class="form-select form-select-lg" required>
                                    <option value="" disabled>Choose country</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="USA">USA</option>
                                </select>
                                <div class="invalid-feedback">Please choose your country!</div>
                            </div>
                            <div class="col mb-3">
                                <label class="form-label" for="email1">Tahun Akhir</label>
                                <select id="country" class="form-select form-select-lg" required>
                                    <option value="" disabled>Choose country</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="USA" selected>USA</option>
                                </select>
                                <div class="invalid-feedback">Please choose your country!</div>
                            </div>
                            <button class="btn btn-primary d-block w-100" type="submit">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <!-- Modal ORGANISASI -->
        <div class="modal fade" tabindex="-1" role="dialog" id="modalOrganisasi">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">

                    <!-- Modal header with nav tabs -->
                    <div class="modal-header">
                        <h5 class="modal-title">Tambahkan riwayat organisasi</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- Modal body with tab panes -->
                    <div class="modal-body tab-content py-4">

                        <!-- Sign in form -->

                        <form class="tab-pane fade show active" autocomplete="off" id="signin">
                            <div class="mb-3">
                                <label class="form-label" for="email1">Nama Organisasi</label>
                                <select id="country" class="form-select form-select-lg" required>
                                    <option value="" disabled>Choose country</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="USA">USA</option>
                                </select>
                            </div>
                            <div class="col mb-3">
                                <label class="form-label" for="email1">Jabatan</label>
                                <select id="country" class="form-select form-select-lg" required>
                                    <option value="" disabled>Choose country</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="USA">USA</option>
                                </select>
                                <div class="invalid-feedback">Please choose your country!</div>
                            </div>
                            <div class="col mb-3">
                                <label class="form-label" for="email1">Periode</label>
                                <select id="country" class="form-select form-select-lg" required>
                                    <option value="" disabled>Choose country</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="USA" selected>USA</option>
                                </select>
                                <div class="invalid-feedback">Please choose your country!</div>
                            </div>
                            <button class="btn btn-primary d-block w-100" type="submit">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Keahlian -->
        <div class="modal fade" tabindex="-1" role="dialog" id="modalKeahlian">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <!-- Modal header with nav tabs -->
                    <div class="modal-header">
                        <h5 class="modal-title">Tambahkan Keahlian</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- Modal body with tab panes -->
                    <div class="modal-body tab-content py-4">

                        <!-- Sign in form -->
                        <form class="tab-pane fade show active" autocomplete="off" id="signin">
                            <div class="mb-3">
                                <label class="form-label" for="email1">Keahlian</label>
                                <input class="form-control" type="text" name="nama_panggilan" id="email1"
                                    placeholder="contoh:desain,melukis,dll">
                            </div>
                            <button class="btn btn-primary d-block w-100" type="submit">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal sosial media -->
        <div class="modal fade" tabindex="-1" role="dialog" id="modalSosmed">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <!-- Modal header with nav tabs -->
                    <div class="modal-header">
                        <h5 class="modal-title">Tambahkan sosial media</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- Modal body with tab panes -->
                    <div class="modal-body tab-content py-4">

                        <!-- Sign in form -->
                        <form class="tab-pane fade show active" autocomplete="off" id="signin">
                            <div class="mb-3">
                                <label class="form-label" for="email1">Instagram</label>
                                <input class="form-control" type="text" name="nama_panggilan" id="email1"
                                    placeholder="@example">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="email1">Facebook</label>
                                <input class="form-control" type="text" name="nama_panggilan" id="email1"
                                    placeholder="Facebook">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="email1">Tiktok</label>
                                <input class="form-control" type="text" name="nama_panggilan" id="email1"
                                    placeholder="@example">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="email1">Linkedin</label>
                                <input class="form-control" type="text" name="nama_panggilan" id="email1"
                                    placeholder="Linkedin">
                            </div>
                            <button class="btn btn-primary d-block w-100" type="submit">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for foto kegiatan -->
        <div class="modal fade" tabindex="-1" role="dialog" id="modalFotoKegiatan">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <!-- Modal header with nav tabs -->
                    <div class="modal-header">
                        <h5 class="modal-title">Tambahkan foto Kegiatan</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- Modal body with tab panes -->
                    <div class="modal-body tab-content py-4">

                        <!-- Sign in form -->
                        <form class="tab-pane fade show active" autocomplete="off" id="signin">
                            <div class="mb-3">
                                <label class="form-label" for="email1">Foto Kegiatan</label>
                                <input class="form-control" type="file" name="foto_profile" id="image"
                                    placeholder="Foto Kegiatan">
                            </div>
                            <button class="btn btn-primary d-block w-100" type="submit">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for karya -->
        <div class="modal fade" tabindex="-1" role="dialog" id="modalKarya">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <!-- Modal header with nav tabs -->
                    <div class="modal-header">
                        <h5 class="modal-title">Tambahkan karya</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- Modal body with tab panes -->
                    <div class="modal-body tab-content py-4">

                        <!-- Sign in form -->
                        <form class="tab-pane fade show active" autocomplete="off" id="signin">
                            <div class="mb-3">
                                <label class="form-label" for="email1">Karya</label>
                                <input class="form-control" type="text" name="nama_panggilan" id="email1"
                                    placeholder="Tambahkan karyamu berupa link">
                            </div>
                            <button class="btn btn-primary d-block w-100" type="submit">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- Account details -->
        <div class="col-md-8 offset-lg-1 pb-5 mb-2 mb-lg-4 pt-md-5 mt-n3 mt-md-0">
            <div class="ps-md-3 ps-lg-0 mt-md-2 py-md-4">
                @if (session('success'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Selamat ! </strong>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"
                        data-bs-original-title="" title=""></button>
                    {{ session('success') }}
                </div>
                @endif
                <h1 class="h2 pt-xl-1 pb-3">Profil Saya</h1>

                <!-- Basic info -->
                <h2 class="h5 text-primary mb-4">Basic info</h2>
                <form class="needs-validation border-bottom pb-3 pb-lg-4" novalidate>
                    <div class="row pb-2">
                        <div class="col-sm-6 mb-4">
                            <label for="fn" class="form-label fs-base">Email</label>
                            <p>{{ auth()->user()->email }}</p>

                            <div class="col-sm-6 mb-4">
                                <label for="sn" class="form-label fs-base">Alamat</label>
                                <p>{{ auth()->user()->alamat }}</p>
                            </div>
                            <div class="col-sm-6 mb-4">
                                <label for="email" class="form-label fs-base">Pekerjaan</label>
                                <p>Bekerja di {{ auth()->user()->pekerjaan }}</p>
                                <p>Sebagai {{ auth()->user()->jabatan_pekerjaan }}</p>
                            </div>
                            <div class="col-sm-6 mb-4">
                                <label for="phone" class="form-label fs-base">Phone <small
                                        class="text-muted">(optional)</small></label>
                                <input type="text" id="phone" class="form-control form-control-lg"
                                    data-format='{"numericOnly": true, "delimiters": ["+1 ", " ", " "], "blocks": [0, 3, 3, 2]}'
                                    placeholder="+1 ___ ___ __">
                            </div>
                            <div class="col-12 mb-4">
                                <label for="bio" class="form-label fs-base">Bio <small
                                        class="text-muted">(optional)</small></label>
                                <textarea id="bio" class="form-control form-control-lg" rows="4"
                                    placeholder="Add a short bio..."></textarea>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <button type="reset" class="btn btn-secondary me-3">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                </form>

                <!-- Address -->
                <h2 class="h5 text-primary pt-1 pt-lg-3 my-4">Address</h2>
                <form class="needs-validation border-bottom pb-2 pb-lg-4" novalidate>
                    <div class="row pb-2">
                        <div class="col-sm-6 mb-4">
                            <label for="country" class="form-label fs-base">Country</label>
                            <select id="country" class="form-select form-select-lg" required>
                                <option value="" disabled>Choose country</option>
                                <option value="Australia">Australia</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Canada">Canada</option>
                                <option value="Denmark">Denmark</option>
                                <option value="USA" selected>USA</option>
                            </select>
                            <div class="invalid-feedback">Please choose your country!</div>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <label for="state" class="form-label fs-base">State</label>
                            <select id="state" class="form-select form-select-lg" required>
                                <option value="" disabled>Choose state</option>
                                <option value="Arizona">Arizona</option>
                                <option value="California">California</option>
                                <option value="Iowa">Iowa</option>
                                <option value="Florida" selected>Florida</option>
                                <option value="Michigan">Michigan</option>
                                <option value="Texas">Texas</option>
                            </select>
                            <div class="invalid-feedback">Please choose your state!</div>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <label for="city" class="form-label fs-base">City</label>
                            <select id="city" class="form-select form-select-lg" required>
                                <option value="" disabled>Choose city</option>
                                <option value="Boston">Boston</option>
                                <option value="Chicago">Chicago</option>
                                <option value="Los Angeles">Los Angeles</option>
                                <option value="Miami" selected>Miami</option>
                                <option value="New York">New York</option>
                                <option value="Philadelphia">Philadelphia</option>
                            </select>
                            <div class="invalid-feedback">Please choose your city!</div>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <label for="zip" class="form-label fs-base">ZIP code</label>
                            <input type="text" id="zip" class="form-control form-control-lg" required>
                            <div class="invalid-feedback">Please enter your ZIP code!</div>
                        </div>
                        <div class="col-12 mb-4">
                            <label for="address1" class="form-label fs-base">Address line 1</label>
                            <input id="address1" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-12 mb-4">
                            <label for="address2" class="form-label fs-base">Address line 2 <small
                                    class="text-muted">(optional)</small></label>
                            <input id="address2" class="form-control form-control-lg">
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <button type="reset" class="btn btn-secondary me-3">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>

                <!-- Delete account -->
                <h2 class="h5 text-primary pt-1 pt-lg-3 mt-4">Delete account</h2>
                <p>When you delete your account, your public profile will be deactivated immediately. If you change
                    your mind before the 14 days are up, sign in with your email and password, and we’ll send you a
                    link to reactivate your account.</p>
                <div class="form-check mb-4">
                    <input type="checkbox" id="delete-account" class="form-check-input">
                    <label for="delete-account" class="form-check-label fs-base">Yes, I want to delete my
                        account</label>
                    <button class="btn btn-outline-secondary mb-3" type="button">
                        <i class="bx bx-plus fs-lg me-2"></i>
                        Lengkapi Profile
                    </button>
                    <a href="/post_postingan"><button class="btn btn-outline-secondary mb-3" type="button">
                            <i class="bx bx-plus fs-lg me-2"></i>
                            Post Foto
                        </button></a>
                    <button type="button" class="btn btn-secondary w-100 d-md-none mt-n2 mb-3" data-bs-toggle="collapse"
                        data-bs-target="#account-menu">
                        <i class="bx bxs-user-detail fs-xl me-2"></i>
                        Account menu
                        <i class="bx bx-chevron-down fs-lg ms-1"></i>
                    </button>

                </div>
                <button type="button" class="btn btn-danger">Delete</button>
            </div>
    </div>
</div>

</section>
@endsection



