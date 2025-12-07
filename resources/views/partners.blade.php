<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partners - SnapWave</title>
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
                        <h2 class="title-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">Partners Network</h2>
                        <nav class="breadcrumb">
                            <a href="{{route('index')}}" class="gspace-2">Home</a>
                            <span class="separator-link">/</span>
                            <p class="current-page">Partners</p>
                        </nav>    
                    </div>
                    <div class="spacer"></div>
                </div>
            </div>
        </div>

        <!-- Section Partnrship -->
        <div class="section">
            <div class="hero-container">
                <div class="d-flex flex-column gspace-2">
                    <div class="d-flex flex-column gspace-2 justify-content-center align-items-center">
                        <div class="sub-heading">
                            <i class="fa-regular fa-circle-dot"></i>
                            <span>Client & Partnership</span>
                        </div>
                        <h2 class="title-heading heading-container-wide">The Snapwave Partner Network</h2>
                    </div>
                    <div class="partnership-layout">
                        <div class="partnership-wrapper">
                            <div class="partnership-spacer"></div>
                            <div class="row row-cols-md-4 row-cols-1 g-0">
                                <div class="col partnership-container">
                                    <div class="partnership-item">
                                        <a href="#">
                                            <img src="/image/Brands/1.png" alt="Partner Logo" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="col partnership-container">
                                    <div class="partnership-item">
                                        <a href="#">
                                            <img src="/image/Brands/2.png" alt="Partner Logo" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="col partnership-container">
                                    <div class="partnership-item">
                                        <a href="#">
                                            <img src="/image/Brands/3.png" alt="Partner Logo" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="col partnership-container">
                                    <div class="partnership-item">
                                        <a href="#">
                                            <img src="/image/Brands/4.png" alt="Partner Logo" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="col partnership-container">
                                    <div class="partnership-item">
                                        <a href="#">
                                            <img src="/image/Brands/5.png" alt="Partner Logo" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="col partnership-container">
                                    <div class="partnership-item">
                                        <a href="#">
                                            <img src="/image/Brands/6.png" alt="Partner Logo" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                
                               
                                <div class="col partnership-container">
                                    <div class="partnership-item">
                                        <a href="#">
                                            <img src="./image/Client-7.png" alt="Partner Logo" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="col partnership-container">
                                    <div class="partnership-item">
                                        <a href="#">
                                            <img src="./image/Client-8.png" alt="Partner Logo" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
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

        <!-- Section Testimonial -->
        <div class="section">
            <div class="hero-container">
                <div class="d-flex flex-column gspace-5">
                    <div class="row row-cols-xl-2 row-cols-1 grid-spacer-5">
                        <!-- <div class="col col-xl-4">
                            <div class="testimonial-header-wrapper animate-box animated fast animate__animated" data-animate="animate__fadeInDown">
                                <div class="card card-testimonial-reviewer">
                                    <div class="d-flex flex-column flex-md-row flex-xl-column justify-content-between gspace-3">
                                        <div class="testimonial-reviewer">
                                            <div class="avatar-container">
                                                <img src="./image/dummy-img-400x400.jpg" alt="Testimonial Reviewer" class="avatar">
                                                <img src="./image/dummy-img-400x400.jpg" alt="Testimonial Reviewer" class="avatar">
                                                <img src="./image/dummy-img-400x400.jpg" alt="Testimonial Reviewer" class="avatar">
                                                <img src="./image/dummy-img-400x400.jpg" alt="Testimonial Reviewer" class="avatar">
                                            </div>
                                            <div class="detail">
                                                <h6>2.7k Positive</h6>
                                                <h6>Reviews</h6>
                                            </div>
                                        </div>
                                        <div class="testimonial-rating-container">
                                            <div class="d-flex flex-column justify-content-center align-items-center gspace-1">
                                                 <div class="d-flex flex-row align-items-center">
                                                    <span class="counter" data-target="90"></span>
                                                    <span class="counter-detail">%</span>
                                                </div>
                                                <p>Improved Project</p>
                                            </div>
                                            <div class="underline-vertical"></div>
                                            <div class="d-flex flex-column justify-content-center align-items-center gspace-1">
                                                 <div class="d-flex flex-row align-items-center">
                                                    <span class="counter" data-target="49"></span>
                                                    <span class="counter-detail">%</span>
                                                </div>
                                                <p>New Project</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column flex-md-row flex-xl-column justify-content-center gspace-2">
                                        <div class="testimonial-header-link-wrapper">
                                            <i class="fa-regular fa-circle-check accent-color"></i>
                                            <a href="#">Social Media Growth</a>
                                        </div>
                                        <div class="testimonial-header-link-wrapper">
                                            <i class="fa-regular fa-circle-check accent-color"></i>
                                            <a href="#">Performance Marketing</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="col col-xl-12">
                            <div class="testimonial-header-wrapper-title animate-box animated animate__animated" data-animate="animate__fadeInRight">
                                <div class="card-testimonial-header-title">
                                    <div class="sub-heading">
                                        <i class="fa-regular fa-circle-dot"></i>
                                        <span>What Our Clients Think</span>
                                    </div>
                                    <h2 class="title-heading">What Our Happy Clients Have to Say</h2>
                                    <br>
                                    <p>Witness the impact of Marko’s high-performance digital solutions</p>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="overflow-hidden">
                        <div class="swiper swiperTestimonial">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card card-testimonial">
                                        <div class="stars">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <div class="d-flex flex-row gspace-2">
                                                <div class="testimonial-image">
                                                    <img src="./image/dummy-img-400x400.jpg" alt="Testimonial Person Image" class="img-fluid">
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <span class="profile-name">Emma Richard</span>
                                                    <p class="profile-info">CEO Nexatech</p>
                                                </div>
                                            </div>
                                            <i class="fa-solid fa-3x fa-quote-right accent-color"></i>
                                        </div>
                                        <p class="testimonial-description">
                                            “Marko completely transformed our online presence! Their digital marketing strategies helped us double our revenue in just six months.”
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card-testimonial">
                                        <div class="stars">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <div class="d-flex flex-row gspace-2">
                                                <div class="testimonial-image">
                                                    <img src="./image/dummy-img-400x400.jpg" alt="Testimonial Person Image" class="img-fluid">
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <span class="profile-name">David Mont</span>
                                                    <p class="profile-info">Marketing Director</p>
                                                </div>
                                            </div>
                                            <i class="fa-solid fa-3x fa-quote-right accent-color"></i>
                                        </div>
                                        <p class="testimonial-description">
                                            “We've worked with many agencies before, but Marko stands out. Their data-driven approach and creative solutions gave us an edge over competitors.”
                                        </p>
                                    </div>
                                </div>                             
                                <div class="swiper-slide">
                                    <div class="card card-testimonial">
                                        <div class="stars">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <div class="d-flex flex-row gspace-2">
                                                <div class="testimonial-image">
                                                    <img src="./image/dummy-img-400x400.jpg" alt="Testimonial Person Image" class="img-fluid">
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <span class="profile-name">Sophia Lewis</span>
                                                    <p class="profile-info">Founder</p>
                                                </div>
                                            </div>
                                            <i class="fa-solid fa-3x fa-quote-right accent-color"></i>
                                        </div>
                                        <p class="testimonial-description">
                                            “From SEO to paid ads, Marko nailed every aspect of our campaign. Our website traffic skyrocketed, and lead generation has never been better!”
                                        </p>
                                    </div>
                                </div>                                
                                <div class="swiper-slide">
                                    <div class="card card-testimonial">
                                        <div class="stars">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <div class="d-flex flex-row gspace-2">
                                                <div class="testimonial-image">
                                                    <img src="./image/dummy-img-400x400.jpg" alt="Testimonial Person Image" class="img-fluid">
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <span class="profile-name">James Peterson</span>
                                                    <p class="profile-info">COO, BrightWave</p>
                                                </div>
                                            </div>
                                            <i class="fa-solid fa-3x fa-quote-right accent-color"></i>
                                        </div>
                                        <p class="testimonial-description">
                                            “Highly professional and results-oriented. Marko's expertise in branding and content marketing helped us build a strong online identity.”
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card-testimonial">
                                        <div class="stars">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <div class="d-flex flex-row gspace-2">
                                                <div class="testimonial-image">
                                                    <img src="./image/dummy-img-400x400.jpg" alt="Testimonial Person Image" class="img-fluid">
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <span class="profile-name">Emma Richard</span>
                                                    <p class="profile-info">CEO Nexatech</p>
                                                </div>
                                            </div>
                                            <i class="fa-solid fa-3x fa-quote-right accent-color"></i>
                                        </div>
                                        <p class="testimonial-description">
                                            “Marko completely transformed our online presence! Their digital marketing strategies helped us double our revenue in just six months.”
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card-testimonial">
                                        <div class="stars">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <div class="d-flex flex-row gspace-2">
                                                <div class="testimonial-image">
                                                    <img src="./image/dummy-img-400x400.jpg" alt="Testimonial Person Image" class="img-fluid">
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <span class="profile-name">David Mont</span>
                                                    <p class="profile-info">Marketing Director</p>
                                                </div>
                                            </div>
                                            <i class="fa-solid fa-3x fa-quote-right accent-color"></i>
                                        </div>
                                        <p class="testimonial-description">
                                            “We've worked with many agencies before, but Marko stands out. Their data-driven approach and creative solutions gave us an edge over competitors.”
                                        </p>
                                    </div>
                                </div>                             
                                <div class="swiper-slide">
                                    <div class="card card-testimonial">
                                        <div class="stars">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <div class="d-flex flex-row gspace-2">
                                                <div class="testimonial-image">
                                                    <img src="./image/dummy-img-400x400.jpg" alt="Testimonial Person Image" class="img-fluid">
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <span class="profile-name">Sophia Lewis</span>
                                                    <p class="profile-info">Founder</p>
                                                </div>
                                            </div>
                                            <i class="fa-solid fa-3x fa-quote-right accent-color"></i>
                                        </div>
                                        <p class="testimonial-description">
                                            “From SEO to paid ads, Marko nailed every aspect of our campaign. Our website traffic skyrocketed, and lead generation has never been better!”
                                        </p>
                                    </div>
                                </div>                                
                                <div class="swiper-slide">
                                    <div class="card card-testimonial">
                                        <div class="stars">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <div class="d-flex flex-row gspace-2">
                                                <div class="testimonial-image">
                                                    <img src="./image/dummy-img-400x400.jpg" alt="Testimonial Person Image" class="img-fluid">
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <span class="profile-name">James Peterson</span>
                                                    <p class="profile-info">COO, BrightWave</p>
                                                </div>
                                            </div>
                                            <i class="fa-solid fa-3x fa-quote-right accent-color"></i>
                                        </div>
                                        <p class="testimonial-description">
                                            “Highly professional and results-oriented. Marko's expertise in branding and content marketing helped us build a strong online identity.”
                                        </p>
                                    </div>
                                </div>         
                            </div>
                        </div>
                    </div>
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
    <script src="js/video_embedded.js"></script>
</body>
</html>