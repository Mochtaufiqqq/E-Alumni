<!DOCTYPE html>
<html lang="en">
@include('includes.user.head')

<body>
    @include('includes.user.load')

    <main class="page-wrapper">
        <header class="header navbar navbar-expand-lg bg-light navbar-sticky">
            @include('includes.user.navbar')
        </header>

        <div class="position-relative py-lg-4 py-xl-5">
            @include('includes.user.carousel')
        </div>

        @yield('konten')
    </main>
    @include('includes.user.footer')

    @include('includes.user.script')
</body>

</html>
