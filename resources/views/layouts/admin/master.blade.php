<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css"> --}}
    @if ($fvicon == null)
    <link rel="shortcut icon" href="{{ asset('/favicon/tracerstudy.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('/favicon/tracerstudy.ico') }}" type="image/x-icon">     
    @else
    <link rel="shortcut icon" href="{{ asset($fvicon->favicon) }}" type="image/x-icon">
    <link rel="icon" href="{{ asset($fvicon->favicon) }}" type="image/x-icon">    
    @endif
    
    
    <title>Tracer Study |  @yield('title')</title>
    <!-- Google font-->
    @include('includes.admin.style')
  </head>
  <body>
    <!-- Loader starts-->
   @include('includes.admin.loader')
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      @include('includes.admin.navbar')
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
        @include('includes.admin.sidebar')
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <!-- Container-fluid starts-->
         @yield('content')
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        @include('includes.admin.footer')
      </div>
    </div>
    @include('includes.admin.script')
    
    {{-- <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script> --}}

    @yield('script')
    @yield('javascript')
  </body>
</html>
