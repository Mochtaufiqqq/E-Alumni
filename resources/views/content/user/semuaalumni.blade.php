@extends('layouts.user.master')

@section('title', 'Dashboard')

@section('content')

<!-- Team Style 2: Horizontal -->
<section class="container-fluid">
    <!-- Team Style 2: Horizontal -->
<div class="card card-body d-flex flex-row align-items-center card-hover bg-light border-0">
    <img src="/silicon.createx.studio/assets/img/team/10.jpg" class="d-block rounded-circle" width="162" alt="Darrell Steward">
    <div class="ps-4">
      <h5 class="fw-medium fs-lg mb-1">Darrell Steward</h5>
      <p class="fs-sm mb-3">Lead Developer</p>
      <div class="d-flex">
        <a href="#" class="btn btn-icon btn-outline-secondary btn-facebook btn-sm me-2">
          <i class="bx bxl-facebook"></i>
        </a>
        <a href="#" class="btn btn-icon btn-outline-secondary btn-stack-overflow btn-sm me-2">
          <i class="bx bxl-stack-overflow"></i>
        </a>
        <a href="#" class="btn btn-icon btn-outline-secondary btn-github btn-sm">
          <i class="bx bxl-github"></i>
        </a>
      </div>
    </div>
  </div>
</section>

@endsection