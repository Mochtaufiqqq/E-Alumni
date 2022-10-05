<!DOCTYPE html>
<html lang="en">
@include('includes.user.head')

<body>
    @include('includes.user.load')

    <main class="page-wrapper">
        
            @include('includes.user.navbar')

        @yield('content')
    </main>
    @include('includes.user.footer')

    @include('includes.user.script')
</body>

</html>
