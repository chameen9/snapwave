<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - SnapWave</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./image/favicon.ico">

    <style>
    @media (max-width: 767px) {
        #banner-background-mobile img {
            height: 100vh;
            object-fit: cover;
        }
    }
    </style>
</head>
<body>
    <!-- Section Header -->
    <header>
        @include('partials.header')
    </header>

    <!-- Section Content Edit -->
    <aside>
        @include('partials.sidebar')
    </aside>

    <div>
        @include('partials.search-form')
    </div>

    <aside>
        @include('partials.sidebar')
    </aside>

    <!-- Section Main Content-->
    <main>
        <!-- Section Banner -->
        <div class="section-banner">
            <div class="banner-video-container animate-box animated animate__animated" data-animate="animate__fadeInUp">
                <!-- <div id="banner-video-background"></div> -->

                <div id="banner-background" class="d-none d-md-block"
                    style="position:absolute; inset:0; z-index:-1; border-radius:30px; overflow:hidden; height:900px;">
                    <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($desktopBanners as $key => $banner)
                                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                    <img src="/image/Banners/{{ $banner->image }}"
                                        class="d-block w-100" 
                                        style="object-fit:cover; height:100%;">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div id="banner-background-mobile" class="d-block d-md-none"
                    style="position:absolute; inset:0; z-index:-1; border-radius:30px; overflow:hidden;">
                    <div id="bannerCarouselMobile" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($mobileBanners as $key => $banner)
                                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                    <img src="/image/MobileBanners/{{ $banner->image }}"
                                        class="d-block w-100"
                                        style="object-fit:cover; width:100%;">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="hero-container position-relative">
                    <div class="d-flex flex-column gspace-2">
                        <!-- <h1 class="title-heading-banner animate-box animated animate__animated" data-animate="animate__fadeInLeft">Let your content lead, inspire, and influence</h1> -->
                        <h1 class="title-heading-banner animate-box animated animate__animated" data-animate="animate__fadeInLeft">&nbsp; <br> &nbsp;</h1>
                        <div class="banner-heading">
                              <div class="banner-video-content order-xl-1 order-2 animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="d-flex flex-column flex-xl-row text-xl-start text-center align-items-center gspace-5">
                                    <button class="request-loader" data-video="https://www.facebook.com/share/r/1BnTvC8CPR/"><i class="fa-solid fa-play"></i></button>
                                    <h6>
                                        Experience Snapwave
                                    </h6>
                                </div>
                            </div>
                            <div class="banner-content order-xl-2 order-1  animate-box animated animate__animated" data-animate="animate__fadeInRight">
                                <!-- <p>Snapwave elevates businesses with impactful content, data - backed marketing, and strategies crafted for real results.</p> -->
                                <p>&nbsp;</p>
                                <div class="d-flex flex-md-row flex-column justify-content-center justify-content-xl-start align-self-center align-self-xl-start gspace-3">
                                    <a href="{{route('contact')}}" class="btn btn-accent">
                                        <div class="btn-title">
                                            <span>LET’S CREATE</span>
                                        </div>
                                        <div class="icon-circle">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Expertise -->
        <div class="section">
            <div class="hero-container">
                <div class="d-flex flex-column flex-xl-row gspace-5">
                    <div class="expertise-img-layout">
                        <div class="image-container expertise-img">
                            <img src="image/WhatWeDo.png" alt="WhatWeDo Image" class="img-fluid  animate-box animated animate__animated" data-animate="animate__fadeInUp">
                            <!-- <div class="expertise-layout">
                                <div class="d-flex flex-column">
                                    <div class="card-expertise-wrapper">
                                        <div class="card card-expertise  animate-box animated animate__animated" data-animate="animate__fadeInDown">
                                            <h4>Ready to Elevate Your Digital Presence?</h4>
                                            <p>Let's create a custom strategy that fits your business goals.</p>
                                            <div class="d-flex align-items-center flex-row gspace-2 expertise-link">
                                                <a href="{{route('contact')}}">Get Free Consultation</a>
                                                <i class="fa-solid fa-circle-arrow-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="expertise-spacer"></div>
                                </div>
                                <div class="expertise-spacer"></div>
                            </div> -->
                        </div>
                    </div>
                    <div class="expertise-title">
                        <div class="sub-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">
                            <i class="fa-regular fa-circle-dot"></i>
                            <span>What We Do</span>
                        </div>
                        <h2 class="title-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">Turn IDEAS into DIGITAL IMPACT</h2>
                        <h5>What</h5>
                        <p>We belive every brand has a story worth sharing. Ourrr mission is to turn ideas into visual and strategies that create impact.</p>
                        <h5>We</h5>
                        <p>We are a team of creators, storytellers and marketers passionate about blending creativity with strategy. From capturing authentic moments to building strong brand identities, we bring a mix of art and strategy to everything we do.</p>
                        <h5>Do</h5>
                        <p>Here's what we deliver for our clients:</p>
                        <div class="d-flex flex-column flex-md-row gspace-2">
                            <div class="expertise-list">
                                <ul class="check-list">
                                    <li><a href="./single_services.html">Photography</a></li>
                                    <li><a href="./single_services.html">Videography</a></li>
                                    <li><a href="./single_services.html">Branding</a></li>
                                    <li><a href="./single_services.html">Social Media Management</a></li>
                                    <li><a href="./single_services.html">Digital Marketing</a></li>
                                    <li><a href="./single_services.html">Creative Content Creation</a></li>
                                    <li><a href="./single_services.html">Web Development</a></li>
                                </ul>
                            </div>
                            <!-- <div class="card card-expertise card-expertise-counter animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="d-flex flex-row gspace-2 align-items-center">
                                    <div class="d-flex flex-row align-items-center">
                                        <span class="counter" data-target="21"></span>
                                        <span class="counter-detail">+</span>
                                    </div>
                                    <h6>Years of Experience on Digital Marketing Services</h6>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit in ex ligula varius at rutrum et finibus sed felis qisque.</p>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Modal Video -->
        <div class="section p-0">
            <div id="modal-overlay" class="modal-overlay">
                <span class="my-close"><i class="fa-solid fa-xmark"></i></span>
                <div class="my-modal">
                <iframe id="my-video-frame" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <!-- Section Partner -->
        <div class="section-partner">
            <div class="hero-container">
                <div class="card card-partner  animate-box animated animate__animated" data-animate="animate__fadeInRight">
                    <div class="partner-spacer"></div>
                    <div class="row row-cols-xl-2 row-cols-1 align-items-center px-5 position-relative z-2">
                        <div class="col">
                            <div class="d-flex flex-column justify-content-start pe-xl-3 pe-0">
                                <h3 class="title-heading">The Snapwave Partner Network</h3>
                            </div>
                            </div>
                        <div class="col">
                            <div class="d-flex flex-column ps-xl-3 ps-0">
                                <p>
                                    From storytelling to strategy, these partners join us in creating work that inspires, connects, and delivers results.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiperPartner-layout">
                        <div class="swiperPartner-overlay">
                            <div class="spacer"></div>
                        </div>
                        <div class="swiperPartner-container">
                            <div class="swiper swiperPartner">
                                <div class="swiper-wrapper">
                                    @foreach($brands as $brand)
                                    <div class="swiper-slide">
                                        <a href="{{ $brand->url }}">
                                            <div class="partner-slide">
                                                <img src="/image/Brands/{{ $brand->image }}" alt="Client" class="img-fluid">
                                            </div>
                                        </a>
                                    </div>
                                    @endforeach
                                    @foreach($brands as $brand)
                                    <div class="swiper-slide">
                                        <a href="{{ $brand->url }}">
                                            <div class="partner-slide">
                                                <img src="/image/Brands/{{ $brand->image }}" alt="Client" class="img-fluid">
                                            </div>
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>

        <!-- Section Guide -->
        <div class="section-guide">
            <div class="guide-banner" style="background-image: url('/image/Section_Banner.jpg')">
                <div class="hero-container">
                    <div class="guide-content  animate-box animated animate__animated" data-animate="animate__fadeInUp">
                        <div class="guide-video-container">
                            <button class="request-loader" data-video="https://www.youtube.com/embed/VhBl3dHT5SY?autoplay=1"><i class="fa-solid fa-play"></i></button>
                            <p>
                                See How We Help Brands Grow
                            </p>
                        </div>
                        <div class="d-flex flex-column gspace-2">
                            <h3 class="title-heading">Transform Your Business with SnapWave</h3>
                            <p>From storytelling to strategy, these partners join us in creating work that inspires, connects, and delivers results.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Service -->
        <div class="section">
            <div class="hero-container">
                <div class="d-flex flex-column justify-content-center text-center gspace-5">
                    <div class="d-flex flex-column justify-content-center text-center gspace-2">
                        <div class="sub-heading align-self-center animate-box animated animate__animated" data-animate="animate__fadeInDown">
                            <i class="fa-regular fa-circle-dot"></i>
                            <span>Our Core Services</span>
                        </div>
                        <h2 class="title-heading heading-container heading-container-medium animate-box animated animate__animated" data-animate="animate__fadeInDown">Digital Innovation Designed for Real-World Impact</h2>
                    </div>
                    <div class="card-service-wrapper">
                        <div class="row row-cols-xl-3 row-cols-md-2 row-cols-1 grid-spacer-2">
                            <div class="col">
                                <div class="card card-service animate-box animated slow animate__animated" data-animate="animate__fadeInLeft">
                                    <div class="d-flex flex-row justify-content-between gspace-2 gspace-md-3 align-items-center">
                                        <div>
                                            <div class="service-icon-wrapper">
                                                <div class="service-icon">
                                                    <img src="/image/Services/1.png" alt="Service Icon" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-title">
                                            <h4>Social Media Management</h4>
                                        </div>
                                    </div>
                                    <p>
                                        Unique content that captivates audiences and strengthens the brand.
                                    </p>
                                    <a href="{{route('services')}}" class="btn btn-accent">
                                        <div class="btn-title">
                                            <span>View More</span>
                                        </div>
                                        <div class="icon-circle">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card card-service animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                                    <div class="d-flex flex-row justify-content-between gspace-2 gspace-md-3 align-items-center">
                                        <div>
                                            <div class="service-icon-wrapper">
                                                <div class="service-icon">
                                                    <img src="/image/Services/2.png" alt="Service Icon" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-title">
                                            <h4>Content Creation</h4>
                                        </div>
                                    </div>
                                    <p>
                                        Unique content that captivates audiences and strengthens the brand.
                                    </p>
                                    <a href="{{route('services')}}" class="btn btn-accent">
                                        <div class="btn-title">
                                            <span>View More</span>
                                        </div>
                                        <div class="icon-circle">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card card-service animate-box animated fast animate__animated" data-animate="animate__fadeInLeft">
                                    <div class="d-flex flex-row justify-content-between gspace-2 gspace-md-3 align-items-center">
                                        <div>
                                            <div class="service-icon-wrapper">
                                                <div class="service-icon">
                                                    <img src="/image/Services/3.png" alt="Service Icon" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-title">
                                            <h4>Digital Marketing</h4>
                                        </div>
                                    </div>
                                    <p>
                                        Data-driven strategies that increase reach, visibility, and conversions.
                                    </p>
                                    <a href="{{route('services')}}" class="btn btn-accent">
                                        <div class="btn-title">
                                            <span>View More</span>
                                        </div>
                                        <div class="icon-circle">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card card-service animate-box animated slow animate__animated" data-animate="animate__fadeInLeft">
                                    <div class="d-flex flex-row justify-content-between gspace-2 gspace-md-3 align-items-center">
                                        <div>
                                            <div class="service-icon-wrapper">
                                                <div class="service-icon">
                                                    <img src="/image/Services/4.png" alt="Service Icon" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-title">
                                            <h4 style="text-align: left;">Branding</h4>
                                        </div>
                                    </div>
                                    <p>
                                        A cohesive brand identity that sets the business apart and resonates with the audience.
                                    </p>
                                    <a href="{{route('services')}}" class="btn btn-accent">
                                        <div class="btn-title">
                                            <span>View More</span>
                                        </div>
                                        <div class="icon-circle">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card card-service animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                                    <div class="d-flex flex-row justify-content-between gspace-2 gspace-md-3 align-items-center">
                                        <div>
                                            <div class="service-icon-wrapper">
                                                <div class="service-icon">
                                                    <img src="/image/Services/5.png" alt="Service Icon" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-title">
                                            <h4>Videography</h4>
                                        </div>
                                    </div>
                                    <p>
                                        Professional videos that tell your brand’s story and engage the audience. <br> &nbsp;
                                    </p>
                                    <a href="{{route('services')}}" class="btn btn-accent">
                                        <div class="btn-title">
                                            <span>View More</span>
                                        </div>
                                        <div class="icon-circle">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card card-service animate-box animated fast animate__animated" data-animate="animate__fadeInLeft">
                                    <div class="d-flex flex-row justify-content-between gspace-2 gspace-md-3 align-items-center">
                                        <div>
                                            <div class="service-icon-wrapper">
                                                <div class="service-icon">
                                                    <img src="/image/Services/6.png" alt="Service Icon" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-title">
                                            <h4>Photography</h4>
                                        </div>
                                    </div>
                                    <p>
                                        High-quality images showcasing your brand, products, and services. <br> &nbsp;
                                    </p>
                                    <a href="{{route('services')}}" class="btn btn-accent">
                                        <div class="btn-title">
                                            <span>View More</span>
                                        </div>
                                        <div class="icon-circle">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-link-footer">
                        <p>Need a custom service? Let's create a strategy tailored for your business. <a href="{{route('contact')}}">Get a Free Strategy Call</a></p>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- Section Footer -->
    <footer>
        @include('partials.footer')
    </footer>
    
    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/swiper-script.js"></script>
    <script src="js/submit-form.js"></script>
    <script src="js/vendor/isotope.pkgd.min.js"></script>
    <script src="js/video_embedded.js"></script>
</body>
</html>