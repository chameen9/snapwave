<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - SnapWave</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./image/favicon.ico">
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

    <!-- Section Main Content -->
    <main>
        <!-- Section Banner -->
        <div class="section-banner">
            <div class="banner-layout-wrapper">
                <div class="banner-layout">
                    <div class="d-flex flex-column text-center align-items-center gspace-2">
                        <h2 class="title-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">What We Do</h2>
                        <nav class="breadcrumb">
                            <a href="{{route('index')}}" class="gspace-2">Home</a>
                            <span class="separator-link">/</span>
                            <p class="current-page">Services</p>
                        </nav>    
                    </div>
                    <div class="spacer"></div>
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
                                    <a href="./single_services.html" class="btn btn-accent">
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
                                    <a href="./single_services.html" class="btn btn-accent">
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
                                    <a href="./single_services.html" class="btn btn-accent">
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
                                    <a href="./single_services.html" class="btn btn-accent">
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
                                        Professional videos that tell your brand’s story and engage the audience.<br>&nbsp;
                                    </p>
                                    <a href="./single_services.html" class="btn btn-accent">
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
                                        High-quality images showcasing your brand, products, and services.<br>&nbsp;
                                    </p>
                                    <a href="./single_services.html" class="btn btn-accent">
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
                        <p>Need a custom solution? Let's create a strategy tailored for your business. <a href="{{route('contact')}}">Get a Free Strategy Call</a></p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Section Guide -->
        <div class="section-guide">
            <div class="guide-banner">
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

        <!-- Section Modal Video -->
        <div class="section p-0">
            <div id="modal-overlay" class="modal-overlay">
                <span class="modal-close"><i class="fa-solid fa-xmark"></i></span>
                <div class="video-modal">
                <iframe id="modal-video-frame" class="ifr-video" allowfullscreen></iframe>
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
    <script src="js/video_embedded.js"></script>
</body>
</html>