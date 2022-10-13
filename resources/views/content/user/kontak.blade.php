@extends('layouts.user.master')
@section('title' , 'Detail Alumni')

@section('content')
{{-- <section class="bg-size-cover bg-position-bottom-center bg-repeat-0 py-5" style="background-image: url(assets/img/contacts/bg.svg);"> --}}
    <div class="container pt-5 pb-lg-4 pb-xl-5">

      <div class="row pt-md-2 pt-lg-5 pb-2 pb-md-4">
        <div class="col-xxl-4 col-xl-5 col-lg-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.0960872393644!2d107.57723101436818!3d-6.9979649704816715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9681a28859f%3A0x48f4d9cf5a8ab783!2sSMKS%20Mahaputra%20Cerdas%20Utama!5e0!3m2!1sid!2sid!4v1665633289544!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-lg-6 offset-xl-1 offset-xxl-2">
          <form class="needs-validation" action="/kontak" method="post">
            @csrf
            <div class="row g-4">
              <div class="col-sm-6">
                <label for="fn" class="form-label fs-base">Full name</label>
                <input type="text" class="form-control form-control-lg" id="fn" required name="name">
                <div class="invalid-feedback">Please enter your full name!</div>
              </div>
              <div class="col-sm-6">
                <label for="email" class="form-label fs-base">Email</label>
                <input type="email" class="form-control form-control-lg" id="email" required name="email">
                <div class="invalid-feedback">Please provide a valid email address!</div>
              </div>
              <div class="col-12">
                <label for="email" class="form-label fs-base">No Tlp</label>
                <input type="number" class="form-control form-control-lg" id="email" required name="no_tlp">
                <div class="invalid-feedback">Please provide a valid email address!</div>
              </div>
              <div class="col-12 pb-2">
                <label for="message" class="form-label fs-base">Message</label>
                <textarea class="form-control form-control-lg" id="message" rows="3" required name="subject"></textarea>
                <div class="invalid-feedback">Please provide a valid email address!</div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-lg btn-primary w-100 w-sm-auto">Contact Us</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  {{-- </section> --}}
@endsection