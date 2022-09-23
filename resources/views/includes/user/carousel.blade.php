<!-- Link swiper slides to any content via swiper-tabs. Place outside of any container -->

        <!-- Swiper tabs -->
            <div class="swiper-tabs position-absolute top-0 start-0 w-100 h-100">
                <div id="image-1"
                    class="position-absolute top-0 start-0 w-100 h-100 bg-position-center bg-repeat-0 bg-size-cover swiper-tab active"
                    style="background-image: url({{ asset('user/img/landing/software-company/case-study01.jpg') }});">
                    <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-35"></span>
                </div>
                <div id="image-2"
                    class="position-absolute top-0 start-0 w-100 h-100 bg-position-center bg-repeat-0 bg-size-cover swiper-tab"
                    style="background-image: url({{ asset('user/img/landing/software-company/case-study02.jpg') }});">
                    <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-35"></span>
                </div>
                <div id="image-3"
                    class="position-absolute top-0 start-0 w-100 h-100 bg-position-center bg-repeat-0 bg-size-cover swiper-tab"
                    style="background-image: url({{ asset('user/img/landing/software-company/case-study02.jpg') }});">
                    <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-35"></span>
                </div>
            </div>

            <!-- Swiper slider -->
            <div class="container position-relative zindex-5 py-5">
                <div class="row py-2 py-md-3">
                    <div class="col-xl-5 col-lg-7 col-md-9">

                        <!-- Slider controls (Prev / next) -->
                        
                        <!-- Card -->
                        <div class="swiper" data-swiper-options='{
                            "spaceBetween": 30,
                            "loop": true,
                            "tabs": true,
                            "pagination": {
                              "el": "#case-study-pagination",
                              "clickable": true
                            },
                            "navigation": {
                              "prevEl": "#case-study-prev",
                              "nextEl": "#case-study-next"
                            }
                          }'>
                            <div class="swiper-wrapper">

                                <!-- Item -->
                                <div class="swiper-slide" data-swiper-tab="#image-1">
                                    <img src="{{ asset('user/img/landing/software-company/case-study-logo01.png') }}" class="d-block mb-3"
                                        width="72" alt="Logo">
                                    <h3 class="mb-2">Cashless payment "udy</h3>
                                    <p class="fs-sm text-muted border-bottom pb-3 mb-3">Payment Service Provider Company</p>
                                    <p class="pb-2 pb-lg-3 mb-3">Aenean dolor elit tempus tellus imperdiet. Elementum, ac
                                        convallis morbi sit est feugiat ultrices. Cras tortor maecenas pulvinar nec ac justo.
                                        Massa sem eget semper...</p>
                                    <a href="#" class="btn btn-primary">View "udy</a>
                                </div>

                                <!-- Item -->
                                <div class="swiper-slide" data-swiper-tab="#image-2">
                                    <img src="{{ asset('user/img/landing/software-company/case-study-logo02.png') }}" class="d-block mb-3"
                                        width="72" alt="Logo">
                                    <h3 class="mb-2">Smart tech "udy</h3>
                                    <p class="fs-sm text-muted border-bottom pb-3 mb-3">Data Analytics Company</p>
                                    <p class="pb-2 pb-lg-3 mb-3">Adipiscing quis a at ligula. Gravida gravida diam rhoncus
                                        cursus in. Turpis sagittis tempor gravida phasellus sapien. Faucibus donec consectetur
                                        sed id sit nisl.</p>
                                    <a href="#" class="btn btn-primary">View "udy</a>
                                </div>
                                <!-- item -->
                                <div class="swiper-slide" data-swiper-tab="#image-3">
                                    <img src="{{ asset('user/img/landing/software-company/case-study-logo02.png') }}" class="d-block mb-3"
                                        width="72" alt="Logo">
                                    <h3 class="mb-2">Smart tech "udy</h3>
                                    <p class="fs-sm text-muted border-bottom pb-3 mb-3">Data Analytics Company</p>
                                    <p class="pb-2 pb-lg-3 mb-3">Adipiscing quis a at ligula. Gravida gravida diam rhoncus
                                        cursus in. Turpis sagittis tempor gravida phasellus sapien. Faucibus donec consectetur
                                        sed id sit nisl.</p>
                                    <a href="#" class="btn btn-primary">View "udy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="d-flex justify-content-center justify-content-md-starts pb-3 mb-3">
                    <button type="button" id="case-study-prev" class="btn btn-prev btn-icon btn-sm bg-white me-2">
                        <i class="bx bx-chevron-left"></i>
                    </button>
                    <button type="button" id="case-study-next" class="btn btn-next btn-icon btn-sm bg-white ms-2">
                        <i class="bx bx-chevron-right"></i>
                    </button>
                </div>
                <!-- Pagination (bullets) -->
                <div class="dark-mode pt-4 mt-3">
                    <div id="case-study-pagination" class="swiper-pagination position-relative bottom-0"></div>
                </div>
            </div>
        </div>
    </div>