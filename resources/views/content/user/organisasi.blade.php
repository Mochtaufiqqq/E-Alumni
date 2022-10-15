@extends('layouts.user.master')

@section('title', 'Organisasi')

@section('content')


<!-- Link swiper slides to any content via swiper-tabs. Place outside of any container -->

<!-- Swiper tabs -->
<div class="position-relative py-lg-4 py-xl-5">
    <div class="swiper-tabs position-absolute top-0 start-0 w-100 h-100">
        @foreach ($organisasi as $item)
        <div id="a{{ $item->id }}"
            class="position-absolute top-0 start-0 w-100 h-100 bg-position-center bg-repeat-0 bg-size-cover swiper-tab active"
            style="background-image: url({{ asset($item->foto) }});">
            <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-35"></span>
        </div>
        @endforeach
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
                                @foreach ($organisasi as $item)
                                <div class="swiper-slide" data-swiper-tab="#a{{ $item->id }}">
                                    <img src="{{ asset($item->logo) }}" class="d-block mb-3" width="72" alt="Logo">
                                    <h3 class="mb-2 text-white">{{ $item->organisasi->organisasi }}</h3>
                                    <p class="fs-sm text-muted border-bottom pb-3 mb-3">Payment Service Provider Company
                                    </p>
                                    <p class="pb-2 pb-lg-3 mb-3 text-white">Aenean dolor elit tempus tellus imperdiet. Elementum,
                                        ac
                                        convallis morbi sit est feugiat ultrices. Cras tortor maecenas pulvinar nec ac
                                        justo.
                                        Massa sem eget semper...</p>
                                    <a href="/organisasi/detail/{{ $item->slug }}" class="btn btn-primary">View "udy</a>
                                </div>
                                @endforeach
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

<!-- Breadcrumb -->
<div class="container py-4 mb-2 my-lg-3">
    <h1 class="border-bottom pb-4">Who We Are</h1>
</div>


<!-- Team (Slider) -->
<section class="container-fluid pt-lg-2 pb-5 mb-2 mb-md-4 mb-lg-5">
    <h2 class="h1 text-center pb-md-1 mb-1 mb-sm-3">Our Leaders</h2>
    <div class="swiper mx-0 mb-md-n2 mb-xxl-n3" data-swiper-options='{
            "slidesPerView": 1,
            "spaceBetween": 8,
            "loop": false,
            "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
            },
            "breakpoints": {
            "480": {
                "slidesPerView": 2
            },
            "700": {
                "slidesPerView": 3
            },
            "900": {
                "slidesPerView": 4
            },
            "1160": {
                "slidesPerView": 5
            },
            "1500": {
                "slidesPerView": 6
            }
            }
        }'>
        <div class="swiper-wrapper">

            <!-- Item -->
            @foreach ($organisasi as $item)
            <div class="swiper-slide py-3">
                <div class="card card-body card-hover bg-light border-0 text-center mx-2">
                    <img src="{{ $item->logo }}" class="d-block rounded-circle mx-auto mb-3" width="162"
                        alt="Ralph Edwards">
                    <h5 class="fw-medium fs-lg mb-1">{{ $item->organisasi->organisasi }}</h5>
                    <p class="fs-sm mb-3">Tentang {{ $item->organisasi->organisasi }}</p>
                    <div class="d-flex justify-content-center">
                        <a href="/organisasi/detail/{{ $item->slug }}" class="btn btn-outline-primary btn-md">
                            <i class="bx bxl-facebook"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination (bullets) -->
        <div class="swiper-pagination position-relative pt-3 mt-3"></div>
    </div>
</section>


<!-- Stats -->
<section class="container pb-5 mb-2 mb-md-4 mb-lg-5">
    <div class="bg-secondary rounded-3 py-5 px-3 px-md-0">
        <div class="row justify-content-center mb-2 py-md-2 py-lg-4">
            <div class="col-lg-10 col-md-11">
                <h2 class="pb-3">Overpass by Numbers</h2>
                <div class="row row-cols-1 row-cols-md-2 g-4">

                    <!-- Item -->
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm p-md-2 p-lg-4">
                            <div class="card-body d-flex align-items-center">
                                <div class="bg-primary shadow-primary rounded-3 flex-shrink-0 p-3">
                                    <img src="{{ asset('user/img/about/icons/headset-light.svg') }}" class="d-block m-1"
                                        width="40" alt="Icon">
                                </div>
                                <div class="ps-4 ms-lg-3">
                                    <h3 class="display-5 mb-1">2,480</h3>
                                    <p class="mb-0"><span class="fw-semibold">Remote</span> Professionals</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm p-md-2 p-lg-4">
                            <div class="card-body d-flex align-items-center">
                                <div class="bg-primary shadow-primary rounded-3 flex-shrink-0 p-3">
                                    <img src="{{ asset('user/img/about/icons/chat-light.svg" c') }}lass=" d-block m-1"
                                        width="40" alt="Icon">
                                </div>
                                <div class="ps-4 ms-lg-3">
                                    <h3 class="display-5 mb-1">1,200</h3>
                                    <p class="mb-0"><span class="fw-semibold">Requests</span> per Week</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm p-md-2 p-lg-4">
                            <div class="card-body d-flex align-items-center">
                                <div class="bg-primary shadow-primary rounded-3 flex-shrink-0 p-3">
                                    <img src="{{ asset('user/img/about/icons/add-group-light.sv') }}g"
                                        class="d-block m-1" width="40" alt="Icon">
                                </div>
                                <div class="ps-4 ms-lg-3">
                                    <h3 class="display-5 mb-1">760</h3>
                                    <p class="mb-0"><span class="fw-semibold">New Clients</span> per Month</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm p-md-2 p-lg-4">
                            <div class="card-body d-flex align-items-center">
                                <div class="bg-primary shadow-primary rounded-3 flex-shrink-0 p-3">
                                    <img src="{{ asset('user/img/about/icons/location-light.svg') }}"
                                        class="d-block m-1" width="40" alt="Icon">
                                </div>
                                <div class="ps-4 ms-lg-3">
                                    <h3 class="display-5 mb-1">58</h3>
                                    <p class="mb-0"><span class="fw-semibold">Countries</span> Using Our Product</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Gallery -->
<section class="container pb-5 mb-2 mb-md-4 mb-lg-5 mt-n2">
    <div class="d-flex align-items-center justify-content-between pb-4 mb-2">
        <h2 class="h1 mb-0">We are Powerful</h2>
        <a href="#" class="btn btn-outline-primary btn-lg">
            <i class="bx bx-images fs-4 lh-1 me-2"></i>
            See all photos
        </a>
    </div>
    <div class="gallery row g-4" data-video="true" data-thumbnails="true">
        <div class="col-md-5">
            <a href="https://www.youtube.com/watch?v=zPo5ZaH6sW8" class="gallery-item video-item is-hovered rounded-3"
                data-sub-html='<h6 class="fs-sm text-light">Silicon Inc. Showreel by Marvin McKinney</h6>'>
                <img src="assets/img/about/gallery/01.jpg" alt="Gallery thumbnail">
                <div class="gallery-item-caption p-4">
                    <h4 class="text-light mb-1">Silicon Inc.</h4>
                    <p class="mb-0">Showreel by Marvin McKinney</p>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-5">
            <a href="assets/img/about/gallery/02.jpg" class="gallery-item rounded-3 mb-4"
                data-sub-html='<h6 class="fs-sm text-light">Program for apprentices</h6>'>
                <img src="assets/img/about/gallery/02.jpg" alt="Gallery thumbnail">
                <div class="gallery-item-caption fs-sm fw-medium">Program for apprentices</div>
            </a>
            <a href="assets/img/about/gallery/03.jpg" class="gallery-item rounded-3"
                data-sub-html='<h6 class="fs-sm text-light">Modern bright offices</h6>'>
                <img src="assets/img/about/gallery/03.jpg" alt="Gallery thumbnail">
                <div class="gallery-item-caption fs-sm fw-medium">Modern bright offices</div>
            </a>
        </div>
        <div class="col-md-4 col-sm-7">
            <a href="assets/img/about/gallery/04.jpg" class="gallery-item rounded-3 mb-4"
                data-sub-html='<h6 class="fs-sm text-light">Friendly professional team</h6>'>
                <img src="assets/img/about/gallery/04.jpg" alt="Gallery thumbnail">
                <div class="gallery-item-caption fs-sm fw-medium">Friendly professional team</div>
            </a>
            <a href="assets/img/about/gallery/05.jpg" class="gallery-item rounded-3"
                data-sub-html='<h6 class="fs-sm text-light">Efficient project management</h6>'>
                <img src="assets/img/about/gallery/05.jpg" alt="Gallery thumbnail">
                <div class="gallery-item-caption fs-sm fw-medium">Efficient project management</div>
            </a>
        </div>
    </div>
</section>


<!-- Brands (Carousel) -->
<section class="container pb-3 pb-lg-5 mb-3">
    <h2 class="text-center pb-md-2">Trusted by Leading Companies</h2>
    <div class="swiper mx-n2" data-swiper-options='{
            "slidesPerView": 2,
            "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
            },
            "breakpoints": {
            "500": {
                "slidesPerView": 3,
                "spaceBetween": 8
            },
            "650": {
                "slidesPerView": 4,
                "spaceBetween": 8
            },
            "900": {
                "slidesPerView": 5,
                "spaceBetween": 8
            },
            "1100": {
                "slidesPerView": 6,
                "spaceBetween": 8
            }
            }
        }'>
        <div class="swiper-wrapper">

            <!-- Item -->
            <div class="swiper-slide py-3">
                <a href="#" class="card card-body card-hover px-2 mx-2">
                    <img src="assets/img/brands/01.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
                </a>
            </div>
        </div>

        <!-- Pagination (bullets) -->
        <div class="swiper-pagination position-relative pt-2 mt-4"></div>
    </div>
</section>


<!-- Testimonials (Slider) -->
<section class="container pb-5 mb-2 mb-md-4 mb-xl-5">
    <div class="row">
        <div class="col-md-5 mb-4 mb-md-0">
            <div class="card justify-content-center bg-dark h-100 p-4 p-lg-5">
                <div class="p-2">
                    <h3 class="display-4 text-primary mb-1">200+</h3>
                    <h2 class="text-light pb-5 mb-2">Clients Already Served</h2>
                    <a href="#" class="d-inline-flex align-items-center rounded-3 text-decoration-none py-3 px-4"
                        style="background-color: #3e4265;">
                        <div class="pe-3">
                            <div class="fs-xs text-light text-uppercase opaciy-70 mb-2">Reviewed on</div>
                            <img src="assets/img/about/clutch-logo.svg" width="97" alt="Clutch">
                        </div>
                        <div class="ps-1">
                            <div class="text-nowrap mb-2">
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star text-warning"></i>
                            </div>
                            <div class="text-light opacity-70">49 reviews</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card border-0 shadow-sm p-4 p-xxl-5">

                <!-- Slider prev/next buttons + Quotation mark -->
                <div class="d-flex justify-content-between pb-4 mb-2">
                    <span class="btn btn-icon btn-primary btn-lg shadow-primary pe-none">
                        <i class="bx bxs-quote-left"></i>
                    </span>
                    <div class="d-flex">
                        <button type="button" id="prev" class="btn btn-prev btn-icon btn-sm me-2">
                            <i class="bx bx-chevron-left"></i>
                        </button>
                        <button type="button" id="next" class="btn btn-next btn-icon btn-sm ms-2">
                            <i class="bx bx-chevron-right"></i>
                        </button>
                    </div>
                </div>

                <!-- Slider -->
                <div class="swiper mx-0 mb-md-n2 mb-xxl-n3" data-swiper-options='{
                "spaceBetween": 24,
                "loop": true,
                "pagination": {
                    "el": ".swiper-pagination",
                    "clickable": true
                },
                "navigation": {
                    "prevEl": "#prev",
                    "nextEl": "#next"
                }
                }'>
                    <div class="swiper-wrapper">

                        <!-- Item -->
                        <div class="swiper-slide h-auto" data-swiper-tab="#author-1">
                            <figure class="card h-100 position-relative border-0 bg-transparent">
                                <blockquote class="card-body p-0 mb-0">
                                    <p class="fs-lg mb-0">Dolor, a eget elementum, integer nulla volutpat, nunc, sit.
                                        Quam iaculis varius mauris magna sem. Egestas sed sed suscipit dolor faucibus
                                        dui imperdiet at eget. Tincidunt imperdiet quis hendrerit aliquam feugiat neque
                                        cras sed. Dictum quam integer volutpat tellus, faucibus platea. Pulvinar turpis
                                        proin faucibus at mauris. Sagittis gravida vitae porta enim.</p>
                                </blockquote>
                                <figcaption class="card-footer border-0 d-flex align-items-center w-100 pb-2">
                                    <img src="assets/img/avatar/05.jpg" width="48" class="rounded-circle"
                                        alt="Ralph Edwards">
                                    <div class="ps-3">
                                        <h5 class="fw-semibold lh-base mb-0">Ralph Edwards</h5>
                                        <span class="fs-sm text-muted">Head of Marketing at Lorem Company</span>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>

                        <!-- Item -->
                        <div class="swiper-slide h-auto" data-swiper-tab="#author-2">
                            <figure class="card h-100 position-relative border-0 bg-transparent">
                                <blockquote class="card-body p-0 mb-0">
                                    <p class="fs-lg mb-0">Mi semper risus ultricies orci pulvinar in at enim orci. Quis
                                        facilisis nunc pellentesque in ullamcorper sit. Lorem blandit arcu sapien,
                                        senectus libero, amet dapibus cursus quam. Eget pellentesque eu purus volutpat
                                        adipiscing malesuada. Purus nisi, tortor vel lacus. Donec diam molestie ultrices
                                        vitae eget pulvinar fames. Velit lacus mi purus velit justo, amet.</p>
                                </blockquote>
                                <figcaption class="card-footer border-0 d-flex align-items-center w-100 pb-2">
                                    <img src="assets/img/avatar/06.jpg" width="48" class="rounded-circle"
                                        alt="Annette Black">
                                    <div class="ps-3">
                                        <h5 class="fw-semibold lh-base mb-0">Annette Black</h5>
                                        <span class="fs-sm text-muted">Strategic Advisor at Ipsum Ltd.</span>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>

                        <!-- Item -->
                        <div class="swiper-slide h-auto" data-swiper-tab="#author-3">
                            <figure class="card h-100 position-relative border-0 bg-transparent">
                                <blockquote class="card-body p-0 mb-0">
                                    <p class="fs-lg mb-0">Ac at sed sit senectus massa. Massa ante amet ultrices magna
                                        porta tempor. Aliquet diam in et magna ultricies mi at. Lectus enim, vel enim
                                        egestas nam pellentesque et leo. Elit mi faucibus laoreet aliquam pellentesque
                                        sed aliquet integer massa. Orci leo tortor ornare id mattis auctor aliquam
                                        volutpat aliquet. Odio lectus viverra eu blandit nunc malesuada vitae eleifend
                                        pulvinar.</p>
                                </blockquote>
                                <figcaption class="card-footer border-0 d-flex align-items-center w-100 pb-2">
                                    <img src="assets/img/avatar/01.jpg" width="48" class="rounded-circle"
                                        alt="Darrell Steward">
                                    <div class="ps-3">
                                        <h5 class="fw-semibold lh-base mb-0">Darrell Steward</h5>
                                        <span class="fs-sm text-muted">Project Manager at Company Ltd.</span>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    <!-- Pagination (bullets) -->
                    <div class="swiper-pagination position-relative pt-3 mt-4"></div>
                </div>
            </div>
        </div>
    </div>
</section>





<!-- Contact form -->
<section class="container pb-5 mb-2 mb-md-4 mb-lg-5">
    <div class="position-relative bg-secondary rounded-3 py-5 mb-2">
        <div class="row pb-2 py-md-3 py-lg-5 px-4 px-lg-0 position-relative zindex-3">
            <div class="col-xl-3 col-lg-4 col-md-5 offset-lg-1">
                <p class="lead mb-2 mb-md-3">Ready to get started?</p>
                <h2 class="h1 pb-3">Don’t Hesitate to Contact Us</h2>
            </div>
            <form class="col-lg-6 col-md-7 offset-xl-1 needs-validation" novalidate>
                <div class="row">
                    <div class="col-sm-6 mb-4">
                        <label for="name" class="form-label fs-base">Full name</label>
                        <input type="text" id="name" class="form-control form-control-lg" required>
                        <div class="invalid-feedback">Please enter your name!</div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <label for="email" class="form-label fs-base">Email</label>
                        <input type="email" id="email" class="form-control form-control-lg" required>
                        <div class="invalid-feedback">Please provide a valid email address!</div>
                    </div>
                    <div class="col-12 pb-2 mb-4">
                        <label for="message" class="form-label fs-base">Message</label>
                        <textarea id="message" class="form-control form-control-lg" rows="4" required></textarea>
                        <div class="invalid-feedback">Please enter your message!</div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary shadow-primary btn-lg">Send request</button>
            </form>
        </div>

        <!-- Pattern -->
        <div class="position-absolute end-0 bottom-0 text-primary">
            <svg width="416" height="444" viewBox="0 0 416 444" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd"
                    d="M240.875 615.746C389.471 695.311 562.783 640.474 631.69 504.818C700.597 369.163 645.201 191.864 496.604 112.299C348.007 32.7335 174.696 87.5709 105.789 223.227C36.8815 358.882 92.278 536.18 240.875 615.746ZM208.043 680.381C388.035 776.757 605.894 713.247 694.644 538.527C783.394 363.807 709.428 144.04 529.436 47.6636C349.443 -48.7125 131.584 14.7978 42.8343 189.518C-45.916 364.238 28.0504 584.005 208.043 680.381Z"
                    fill="currentColor" />
                <path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd"
                    d="M262.68 572.818C382.909 637.194 526.686 594.13 584.805 479.713C642.924 365.295 595.028 219.601 474.799 155.224C354.57 90.8479 210.793 133.912 152.674 248.33C94.5545 362.747 142.45 508.442 262.68 572.818ZM253.924 590.054C382.526 658.913 538.182 613.536 601.593 488.702C665.004 363.867 612.156 206.847 483.554 137.988C354.953 69.129 199.296 114.506 135.886 239.341C72.4752 364.175 125.323 521.195 253.924 590.054Z"
                    fill="currentColor" /></svg>
        </div>
    </div>
</section>
@endsection
