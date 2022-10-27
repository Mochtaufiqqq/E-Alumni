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
    let div_counter = document.querySelector('#div_counter');
    let counters = document.querySelectorAll('.counter-item .counter');

// Scroll Animation

let CounterObserver = new IntersectionObserver(
  (entries, observer) => {
    let [entry] = entries;
    if (!entry.isIntersecting) return;

    let speed = 200;
    counters.forEach((counter, index) => {
      function UpdateCounter() {
        const targetNumber = +counter.dataset.target;
        const initialNumber = +counter.innerText;
        const incPerCount = targetNumber / speed;
        if (initialNumber < targetNumber) {
          counter.innerText = Math.ceil(initialNumber + incPerCount);
          setTimeout(UpdateCounter, 40);
        }
        else {
          counter.innerText = targetNumber;
        }
      }
      UpdateCounter();

      if (counter.parentElement.style.animation) {
        counter.parentElement.style.animation = '';
      } else {
        counter.parentElement.style.animation = `slide-up 0.3s ease forwards ${
          index / counters.length + 0.5
        }s`;
      }
    });
    observer.unobserve(section_counter);
  },
  {
    root: null,
    threshold: window.innerWidth > 768 ? 0.4 : 0.3,
  }
);

CounterObserver.observe(div_counter);

</script>

<script>
  $(function(){  // $(document).ready shorthand
  $('.fade').fadeIn('slow');
});

$(document).ready(function() {
    
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.hideme').each( function(i){
            
            var bottom_of_object = $(this).position().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},1500);
                    
            }
            
        }); 
    
    });
    
});
</script>
{{-- <script>
// Get the container element
var btnContainer = document.getElementById("myDIV");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("btn");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script> --}}

{{-- <script>
    document.querySelectorAll(".nav-item").forEach((ele) =>
  ele.addEventListener("click", function (event) {
    event.preventDefault();
    document
      .querySelectorAll(".nav-item")
      .forEach((ele) => ele.classList.remove("active"));
    this.classList.add("active")
  })
);
</script> --}}



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
  
  {{-- <script>
    (function($) {
    "use strict";
    if (Modernizr.csstransforms3d) {
        window.sr = ScrollReveal();
        sr.reveal('.reveal', {
            duration: 800,
            delay: 400,
            reset: true,
            easing: 'linear',
            scale: 1
        });
    }
    })(jQuery);
  </script> --}}
  

  <!-- Main Theme Script -->
  <script src="/user/js/theme.min.js"></script>