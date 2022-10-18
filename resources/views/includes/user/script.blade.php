 <!-- Theme mode -->
 <script>
    let mode = window.localStorage.getItem('mode'),
          root = document.getElementsByTagName('html')[0];
      if (mode !== null && mode === 'dark') {
        root.classList.add('dark-mode');
      } else {
        root.classList.remove('dark-mode');
      }
</script>

<!-- Page loading scripts -->
<script>
    (function () {
        window.onload = function () {
            const preloader = document.querySelector('.page-loading');
            preloader.classList.remove('active');
            setTimeout(function () {
                preloader.remove();
            }, 1000);
        };
    })();
</script>

<!-- Google Tag Manager -->
<script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WKV3GT5');
</script>


<!-- Vendor Scripts -->
  <script src="{{ asset('user/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('user/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
  <script src="{{ asset('user/vendor/jarallax/dist/jarallax.min.js') }}"></script>
  <script src="{{ asset('user/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('user/vendor/lightgallery/lightgallery.min.js') }}"></script>
  <script src="{{ asset('user/vendor/lightgallery/plugins/fullscreen/lg-fullscreen.min.js') }}"></script>
  <script src="{{ asset('user/vendor/lightgallery/plugins/zoom/lg-zoom.min.js') }}"></script>
  <script src="{{ asset('user/vendor/lightgallery/plugins/video/lg-video.min.js') }}"></script>
  <script src="{{ asset('user/vendor/lightgallery/plugins/thumbnail/lg-thumbnail.min.js') }}"></script>

  <!-- Main Theme Script -->
  <script src="{{ asset('user/js/theme.min.js') }}"></script>