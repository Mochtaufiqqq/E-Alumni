<footer class="footer dark-mode bg-dark border-top border-light pt-5 pb-4 pb-lg-5">
    <div class="container pt-xl-4">
      <div class="row pb-5">
        <div class="col-lg-4 col-md-6">
          <div class="navbar-brand text-dark p-0 me-0 mb-3 mb-lg-4">
            @if ($logo == null)
                <img src="{{ asset('imagenull/logo.png') }}" width="47" alt="Silicon">
            @else
                <img src="{{ asset($logo->foto) }}" width="47" alt="Silicon">    
            @endif

            @if ($logo == null)
                TRACER STUDY
            @else
                {{ $logo->isi }}
            @endif
            
          </div>
            <h6 class="mb-2">Kontak Kami</h6>
            <a href="mailto:smkmahaputracerdasutama@gmail.com" class="fw-medium"></a>
            <p> 0895-6304-68373 </p>
            <p>smksmahaputra@gmail.com</p>
            <p>Jl. Katapang Andir No.Km 4, Sukamukti, Kec. Katapang, Kabupaten Bandung, Jawa Barat 40921</p> 
            <a href="" <box-icon type='logo' name='facebook-circle'></box-icon></a>
        </div>
        <div class="col-xl-6 col-lg-7 col-md-5 offset-xl-2 offset-md-1 pt-4 pt-md-1 pt-lg-0">
          <div id="footer-links" class="row">
            <div class="col-lg-4">
              <h6 class="mb-2">
                <a href="#useful-links" class="d-block text-dark dropdown-toggle d-lg-none py-2" data-bs-toggle="collapse">Links</a>
              </h6>
              <div id="useful-links" class="collapse d-lg-block" data-bs-parent="#footer-links">
                <ul class="nav flex-column pb-lg-1 mb-lg-3">
                  <li class="nav-item"><a href="/" class="nav-link d-inline-block px-0 pt-1 pb-2">Home</a></li>
                  <li class="nav-item"><a href="/tentangkami" class="nav-link d-inline-block px-0 pt-1 pb-2">Tentang Kami</a></li>
                  <li class="nav-item"><a href="/semuaalumni" class="nav-link d-inline-block px-0 pt-1 pb-2">Alumni</a></li>
                  <li class="nav-item"><a href="/semuaberita" class="nav-link d-inline-block px-0 pt-1 pb-2">Berita & Event</a></li>
                  <li class="nav-item"><a href="/lowonganpekerjaan" class="nav-link d-inline-block px-0 pt-1 pb-2"> Lowongan Pekerjaan</a></li>
                </ul>
              
              </div>
            </div>
            <div class="col-xl-4 col-lg-3">
              <h6 class="mb-2">
                <a href="#social-links" class="d-block text-dark dropdown-toggle d-lg-none py-2" data-bs-toggle="collapse"></a>
              </h6>
              <div id="social-links" class="collapse d-lg-block" data-bs-parent="#footer-links">
                <ul class="nav flex-column mb-2 mb-lg-0">
                  <li class="nav-item"><a href="/publikasiloker" class="nav-link d-inline-block px-0 pt-1 pb-2">Publikasi Lowongan Pekerjaan</a></li>
                  <li class="nav-item"><a href="/kesanpesan" class="nav-link d-inline-block px-0 pt-1 pb-2">Kesan & Pesan</a></li>
                  <li class="nav-item"><a href="/kontak" class="nav-link d-inline-block px-0 pt-1 pb-2">Kontak Kami</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 pt-2 pt-lg-0">
              
            </div>
          </div>
        </div>
      </div>
      <p class="nav d-block fs-xs text-center text-md-start pb-2 pb-lg-0 mb-0">
        <span class="text-light opacity-50">&copy; @smkmahaputracerdasutama 2022 Design By </span>
        <a class="nav-link d-inline-block p-0" href="https://createx.studio/" target="_blank" rel="noopener">Createx Studio</a>
      </p>
    </div>
  </footer>