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
            <h5>Edit User</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <form action="/edituser/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                @method('put')    
                @csrf
                <div class="mb-3 m-form__group">
                  <label class="form-label">Foto Profil</label>
                  @if ($user->foto_profile)
                            
                  <img src="{{ asset($user->foto_profile) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">

                  @else
                  
                  <img class="img-preview img-fluid mb-3 col-sm-5">
                      
                  @endif
                  <img class="img-preview img-fluid mb-3">
                    <input type="file" name="foto_profile" id="image" class="form-control @error('foto_profile') is-invalid @enderror" onchange="previewImage()">
                  @error('foto_profile')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
                  <div class="mb-3 m-form__group">
                    <label class="form-label">NISN</label>
                    <div class="input-group">
                      <input class="form-control @error('nisn') is-invalid @enderror" type="text" name="nisn" placeholder="NISN" value="{{ old('nisn', $user->nisn) }}" required autofocus>
                    </div>
                    @error('nisn')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <div class="input-group">
                      <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" placeholder="Nama Lengkap" value="{{ old('nama', $user->nama) }}" aria-label="Recipient's username" required autofocus>
                    </div>
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Email</label>
                    <div class="input-group">
                      <input class="form-control @error('email') is-invalid @enderror" name="email" type="email"  value="{{ old('email', $user->email) }}" aria-label="Amount (to the nearest dollar)" placeholder="Email" required autofocus>
                    </div>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <div class="input-group">
                      <input class="form-control @error('alamat') is-invalid @enderror" name="alamat" type="text"  value="{{ old('alamat', $user->alamat) }}" aria-label="Amount (to the nearest dollar)" placeholder="Alamat" required autofocus>
                    </div>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="mb-3 input-group-solid">
                    <label class="form-label">Jurusan</label>
                    <select name="jurusan" id=""  value="{{ old('jurusan', $user->jurusan) }}" class="form-select form-control" required autofocus>
                        <option selected>Pilih Jurusan</option>
                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                        <option value="Multimedia">Multimedia</option>
                    </select>
                    @error('jurusan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="mb-3 input-group-solid">
                    <label class="form-label">Tahun Lulus</label>
                    <select name="thn_lulus" id=""  value="{{ old('thn_lulus', $user->thn_lulus) }}" class="form-select form-control" required autofocus >
                        <option selected>Pilih Tahun Lulus</option>
                        <option value="Rekayasa Perangkat Lunak">2040</option>
                        <option value="2039">2039</option>
                        <option value="2038">2038</option>
                        <option value="2037">2037</option>
                        <option value="2036">2036</option>
                        <option value="2035">2035</option>
                        <option value="2034">2034</option>
                        <option value="2033">2033</option>
                        <option value="2032">2032</option>
                        <option value="2031">2031</option>
                        <option value="2030">2030</option>
                        <option value="2029">2029</option>
                        <option value="2028">2028</option>
                        <option value="2027">2027</option>
                        <option value="2026">2026</option>
                        <option value="2025">2025</option>
                        <option value="2024">2024</option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                    </select>
                    @error('thn_lulus')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="mb-3 input-group-square">
                    <label class="form-label">Role</label>
                    <select name="role" id=""  value="{{ old('role', $user->role) }}" class="form-select form-control" required autofocus >
                        <option selected>Pilih Role</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                    @error('role')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Password</label>
                    <div class="input-group">
                      <input class="form-control @error('password') is-invalid @enderror" name="password" type="password"  value="{{ old('password', $user->password) }}" aria-label="Amount (to the nearest dollar)" placeholder="Password" required autofocus>
                    </div>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button class="btn btn-primary m-r-15" type="submit">Submit</button>
            <button class="btn btn-light" type="submit">Cancel</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>

@endsection