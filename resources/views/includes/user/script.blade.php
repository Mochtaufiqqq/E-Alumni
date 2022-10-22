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
  <script src="/user/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/user/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
  <script src="/user/vendor/jarallax/dist/jarallax.min.js"></script>
  <script src="/user/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/user/vendor/lightgallery/lightgallery.min.js"></script>
  <script src="/user/vendor/lightgallery/plugins/fullscreen/lg-fullscreen.min.js"></script>
  <script src="/user/vendor/lightgallery/plugins/zoom/lg-zoom.min.js"></script>
  <script src="/user/vendor/lightgallery/plugins/video/lg-video.min.js"></script>
  <script src="/user/vendor/lightgallery/plugins/thumbnail/lg-thumbnail.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  

  <!-- Main Theme Script -->
  <script src="/user/js/theme.min.js"></script>