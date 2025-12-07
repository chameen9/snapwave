<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - SnapWave</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./image/favicon.ico">
</head>
<body>
    
    <!-- Section Header -->
    <header>
        <!-- Section Navbar -->
        <div id="header"></div>
    </header>

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
                        <h2 class="title-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">Our Recent Work</h2>
                        <nav class="breadcrumb">
                            <a href="{{route('index')}}" class="gspace-2">Home</a>
                            <span class="separator-link">/</span>
                            <p class="current-page">Portfolio</p>
                        </nav>    
                    </div>
                    <div class="spacer"></div>
                </div>
            </div>
        </div>

        <!-- Section Team -->
       <div class="section">
            <div class="hero-container">
                <div class="team-wrapper">
                    <div class="card team-layout">
                        <div class="d-flex flex-column align-items-center gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                            <div class="sub-heading">
                                <i class="fa-regular fa-circle-dot"></i>
                                <span>Our Recent Work</span>
                            </div>
                            <h2 class="title-heading">Showcasing Creativity and Innovation</h2>
                        </div>
                        <div class="row row-cols-xl-3 row-cols-md-2 row-cols-1 g-4">
                            @foreach($videos as $video)
                                <div class="col">
                                    <div class="d-flex flex-column">
                                        <div class="image-team">
                                            <video src="/videos/{{ $video->name }}" class="img-fluid" autoplay muted loop playsinline controls controlsList="nodownload" preload="metadata"></video>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            
                        </div>
                        <div class="spacer"></div>
                    </div>
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

        <br><br><br>

        
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