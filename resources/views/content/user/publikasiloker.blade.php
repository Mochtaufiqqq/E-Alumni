@extends('layouts.user.master')

@section('title', 'Publikasi Lowongan Pekerjaan')

@section('content')

<div class="jarallax d-none d-md-block" data-jarallax="" data-speed="0.35">
    <span class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-primary-translucent"></span>

    <div class="d-none d-xxl-block" style="height: 700px;"></div>
    <div class="d-none d-md-block d-xxl-none" style="height: 550px;"></div>
    <div id="jarallax-container-0"
        style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100; clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%);">
        <div class="jarallax-img"
            style="background-image: url(&quot;{{ asset($carousel->foto) }}&quot;); object-fit: cover; object-position: 50% 50%; max-width: none; position: fixed; top: 0px; left: 0px; width: 995px; height: 626.05px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; margin-top: 20.475px; transform: translate3d(0px, 6.125px, 0px);"
            data-jarallax-original-styles="background-image: url(assets/img/about/cover.jpg);">
        </div>
    </div>
</div>

{{-- <section class="container py-5 my-1 my-md-4 my-lg-5">
        <div class="row">
          <div class="col-lg-7 mb-4 mb-lg-0">
            <div class="pe-lg-4 me-lg-3 pe-xl-0 me-xl-0">
              <h2 class="h1 mb-4 text-center">About</h2>
              <p class="fs-lg mb-0">Lacinia pulvinar at diam, urna, non blandit. Cras id enim tortor nascetur. Cursus ante eu nam ut non vestibulum sem. Ullamcorper quis varius eu, vel. Sagittis ut suspendisse et, nec. Parturient eu iaculis sit dolor, erat mauris. Leo at egestas aliquet duis pellentesque amet. Proin mattis ac ornare malesuada sed. Diam libero tortor suspendisse molestie non duis enim. Lectus pulvinar euismod et risus egestas. Cursus porttitor id faucibus eu vestibulum. Eu blandit faucibus nulla adipiscing amet ullamcorper.</p>
            </div>
          </div>
        </div>
      </section> --}}
<section class="container py-2 mt-2 mt-md-4 mt-lg-5 mb-xl-3">
    <h2 class="h1 text-center pt-2 pt-md-3 pb-4 mb-2 mb-lg-3">PUBLIKASI LOWONGAN PEKERJAAN</h2>

    <div class="text-center">
        <p class="h5 text-primary" style="text-align: left">Berikut adalah kelengkapan yang diperlukan untuk melakukan kerja sama publikasi
            lowongan pekerjaan di SMKS MAHAPUTRA CERDAS UTAMA:</p>
        <p style="text-align: left">1. Surat Permohonan Publikasi Informasi Lowongan Pekerjaan ditujukan kepada Ketua
            Umum Pengurus Pusat SMKS MAHAPUTRA CERDAS UTAMA.</p>

        <p style="text-align: left">2. Detail Pekerjaan,
            meliputi: job description, position title, employment type, work location, valid thru
            (masa berlaku lowongan pekerjaan). </p>
        <p style="text-align: left">3. Persyaratan Pekerjaan,
            meliputi: educational level, program study, year(s) of experience, skills, language. </p>
        <p style="text-align: left">4. Profil dan Kontak Perusahaan,
            meliputi: profil perusahaan singkat, nomor telepon perusahaan, alamat email resmi
            perusahaan, website resmi perusahaan. </p>
            <p style="text-align: left">5. Informasi lain yang diperlukan oleh perusahaan untuk diunggah. </p> 
            <p style="text-align: left">Kelengkapan tersebut diatas dapat dikirimkan ke email smksmahaputra@gmail.com dengan subjek “Informasi Lowongan Pekerjaan” dalam format gambar (.jpg, .png) atau dalam format dokumen (.doc, .pdf). </p>    
    </div>

</section>

@endsection