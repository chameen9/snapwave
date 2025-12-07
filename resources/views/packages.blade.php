<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages - SnapWave</title>
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
                        <h2 class="title-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">Pricing Plans</h2>
                        <nav class="breadcrumb">
                            <a href="{{route('index')}}" class="gspace-2">Home</a>
                            <span class="separator-link">/</span>
                            <p class="current-page">Packages</p>
                        </nav>    
                    </div>
                    <div class="spacer"></div>
                </div>
            </div>
        </div>
        
        <!-- Section Pricing -->
        <div class="section">
            <div class="hero-container">
                <div class="d-flex flex-column justify-content-center text-center gspace-5">
                    <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp">
                        <div class="sub-heading align-self-center">
                            <i class="fa-regular fa-circle-dot"></i>
                            <span>Our Core Services</span>
                        </div>
                        <h2 class="title-heading heading-container heading-container-short">Flexible Pricing Plans for Every Business</h2>
                    </div>
                    <div class="row row-cols-xl-3 row-cols-1 grid-spacer-2">
                        <div class="col">
                            <div class="pricing-container">
                                <div class="card card-pricing-title animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                                    <div class="spacer"></div>
                                    <div class="content">
                                        <h3 class="title-heading">Let's Find the Right Strategy for You!</h3>
                                        <div class="link-wrapper">
                                            <a href=".contact.html">Book a Free Consultation</a>
                                            <i class="fa-solid fa-arrow-circle-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-pricing animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                    <h4>Starter</h4>
                                    <p>Perfect for startups & small businesses</p>
                                    <div class="d-flex flex-row gspace-1 align-items-center h-100">
                                        <h3>
                                            $99
                                        </h3>
                                        <p>/Month</p>
                                    </div>
                                    <a href="#" class="btn btn-accent">
                                        <div class="btn-title">
                                            <span>View Details</span>
                                        </div>
                                        <div class="icon-circle">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </div>
                                    </a>
                                    <ul class="check-list">
                                        <li><a href="./single_services.html">Basic SEO & Marketing</a></li>
                                        <li><a href="./single_services.html">Social Media Management (1 Platform)</a></li>
                                        <li><a href="./single_services.html">Monthly Performance Report</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-pricing pricing-highlight animate-box animated slow animate__animated" data-animate="animate__fadeInUp">
                                <div class="spacer"></div>
                                <h4>Enterprise</h4>
                                <p>Full scale marketing for maximum impact</p>
                                <div class="d-flex flex-row gspace-1 align-items-center">
                                    <h3>
                                        $399
                                    </h3>
                                    <p>/Month</p>
                                </div>
                                <a href="#" class="btn btn-accent">
                                    <div class="btn-title">
                                        <span>View Details</span>
                                    </div>
                                    <div class="icon-circle">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </a>
                                <div class="core-benefits">
                                    <div class="benefit">
                                        <i class="fa-solid fa-brain"></i>
                                        <a href="#">Dedicated Account Manager</a>
                                    </div>
                                    <div class="benefit">
                                        <i class="fa-brands fa-accessible-icon"></i>
                                        <a href="#">Priority Support 24/7</a>
                                    </div>
                                    <div class="benefit">
                                        <i class="fa-solid fa-bug"></i>
                                        <a href="#">Customized Growth Strength</a>
                                    </div>
                                </div>
                                <ul class="check-list">
                                    <li><a href="#">Complate Digital Marketing Suite</a></li>
                                    <li><a href="#">Paid Ads Management</a></li>
                                    <li><a href="#">Dedicated Account Manager</a></li>
                                    <li><a href="#">Email Marketing & Automation</a></li>
                                    <li><a href="#">Dedicated Account Manager</a></li>
                                    <li><a href="#">Weekly Performance insights</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <div class="pricing-container">
                                <div class="card pricing-highlight-box animate-box animated animate__animated" data-animate="animate__fadeInRight">
                                    <div class="d-flex flex-column gspace-2 w-100">
                                        <h5>Your Growth, Our Priority!</h5>
                                        <div class="d-flex flex-column gspace-2">
                                            <div class="pricing-highlights">
                                                <a href="#">Data-Driven Digital Marketing</a>
                                                <i class="fa-solid fa-arrow-circle-right"></i>
                                            </div>
                                            <div class="pricing-highlights">
                                                <a href="#">Proven Strategies for Higher</a>
                                                <i class="fa-solid fa-arrow-circle-right"></i>
                                            </div>
                                            <div class="pricing-highlights">
                                                <a href="#">Scalable Solution for Every Business</a>
                                                <i class="fa-solid fa-arrow-circle-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="spacer"></div>
                                </div>
                                <div class="card card-pricing animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                    <h4>Growth</h4>
                                    <p>Best for growing businesses ready</p>
                                    <div class="d-flex flex-row gspace-1 align-items-center h-100">
                                        <h3>
                                            $299
                                        </h3>
                                        <p>/Month</p>
                                    </div>
                                    <a href="#" class="btn btn-accent">
                                        <div class="btn-title">
                                            <span>View Details</span>
                                        </div>
                                        <div class="icon-circle">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </div>
                                    </a>
                                    <ul class="check-list">
                                        <li><a href="./single_services.html">Basic SEO & Marketing</a></li>
                                        <li><a href="./single_services.html">Social Media Management (1 Platform)</a></li>
                                        <li><a href="./single_services.html">Monthly Performance Report</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Digital Process -->
        <div class="section-wrapper-digital-process">
            <div class="section digital-process-banner">
                <div class="hero-container">
                    <div class="digital-process-content">
                        <div class="row row-cols-xl-2 row-cols-1 grid-spacer-5">
                            <div class="col">
                                <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInDown">
                                    <div class="sub-heading">
                                    <i class="fa-regular fa-circle-dot"></i>
                                        <span>How it Works</span>
                                    </div>
                                    <h2 class="title-heading">Start Something Extraordinary</h2>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column gspace-2 justify-content-end h-100  animate-box animated fast animate__animated" data-animate="animate__fadeInDown">
                                    <p>
                                        Let’s Make It Ofﬁcial! Reserve your spot and kickstart your project.
                                    </p>
                                    <div class="link-wrapper">
                                        <a href="{{route('contact')}}">Get Started Now</a>
                                        <i class="fa-solid fa-arrow-circle-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="digital-process-steps-wrapper">
                            <div class="digital-process-steps">
                                <div class="row row-cols-xl-4 row-cols-md-2 row-cols-1">
                                    <div class="col">
                                        <div class="digital-process-step animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <img src="./image/digital-marketing-icons-N952ZWA.png" alt="Digital Process Icon" class="process-icon">
                                                </div>
                                                <span>01</span>
                                            </div>
                                            <div class="d-flex flex-column gspace-2">
                                                <h5>Explore & Understand</h5>
                                                <p>
                                                    We begin by diving deep into your brand, audience, and goals to uncover opportunities and deﬁne what success looks like.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex flex-md-row flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInDown">
                                            <div class="step-spacer"></div>
                                            <div class="digital-process-step">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <img src="./image/Icon-11.png" alt="Digital Process Icon" class="process-icon">
                                                    </div>
                                                    <span>02</span>
                                                </div>
                                                <div class="d-flex flex-column gspace-2">
                                                    <h5>Plan & Strategize</h5>
                                                    <p>
                                                        Based on insights, we craft a tailored strategy and roadmap that ensures every step is purposeful and aligned with your objectives.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex flex-md-row flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                            <div class="step-spacer"></div>     
                                            <div class="digital-process-step">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <img src="./image/Icon-10.png" alt="Digital Process Icon" class="process-icon">
                                                    </div>
                                                    <span>03</span>
                                                </div>
                                                <div class="d-flex flex-column gspace-2">
                                                    <h5>Create & Implement</h5>
                                                    <p>
                                                        We bring the plan to life with creative content, campaigns, and optimized executions designed to deliver measurable impact.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex flex-md-row flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInDown">
                                            <div class="step-spacer"></div>
                                            <div class="digital-process-step">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <img src="./image/Icon-12.png" alt="Digital Process Icon" class="process-icon">
                                                    </div>
                                                    <span>04</span>
                                                </div>
                                                <div class="d-flex flex-column gspace-2">
                                                    <h5>Measure & Grow</h5>
                                                    <p>
                                                        Results are tracked and analyzed continuously, allowing us to reﬁne strategies and drive sustainable growth for your brand.
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
            </div>
            <div class="spacer"></div>
        </div>

        <!-- Section Why Choose Us -->
        <div class="section">
            <div class="hero-container">
                <div class="row row-cols-xl-2 row-cols-1 grid-spacer-5">
                    <div class="col order-md-1 order-2">
                        <div class="d-flex flex-column gspace-2">
                            <div class="card card-chooseus animate-box animated fast animate__animated" data-animate="animate__fadeInLeft">
                                <div class="chooseus-icon-wrapper">
                                    <div class="chooseus-spacer above"></div>
                                    <div class="chooseus-icon-layout">
                                        <div class="chooseus-icon">
                                            <img src="./image/Icon-2.png" alt="Why Choose Us Icon" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="chooseus-spacer below"></div>
                                </div>
                                <div class="chooseus-content">
                                    <h4 class="chooseus-title">Personalized Strategy</h4>
                                    <p>We craft strategies that fit your brand - clean, precise, and uniquely yours</p>
                                    <div class="link-wrapper">
                                        <a href="#">Read More</a>
                                        <i class="fa-solid fa-arrow-circle-right accent-color"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-chooseus  animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                                <div class="chooseus-icon-wrapper">
                                    <div class="chooseus-spacer above"></div>
                                    <div class="chooseus-icon-layout">
                                        <div class="chooseus-icon">
                                            <img src="./image/icon-1.png" alt="Why Choose Us Icon" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="chooseus-spacer below"></div>
                                </div>
                                <div class="chooseus-content">
                                    <h4 class="chooseus-title">Authentic Growth</h4>
                                    <p>We grow your brand naturally by highlighting what makes it genuinely stand out</p>
                                    <div class="link-wrapper">
                                        <a href="#">Read More</a>
                                        <i class="fa-solid fa-arrow-circle-right accent-color"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-chooseus  animate-box animated slow animate__animated" data-animate="animate__fadeInLeft">
                                <div class="chooseus-icon-wrapper">
                                    <div class="chooseus-spacer above"></div>
                                    <div class="chooseus-icon-layout">
                                        <div class="chooseus-icon">
                                            <img src="./image/Icon-3.png" alt="Why Choose Us Icon" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="chooseus-spacer below"></div>
                                </div>
                                <div class="chooseus-content">
                                    <h4 class="chooseus-title">Creative Craftmanship</h4>
                                    <p>Our team delivers refined, high-quality content that elevates your brand's presence</p>
                                    <div class="link-wrapper">
                                        <a href="#">Read More</a>
                                        <i class="fa-solid fa-arrow-circle-right accent-color"></i>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col order-md-2 order-1">
                        <div class="d-flex flex-column gspace-5">
                            <div class="d-flex flex-column gspace-2">
                                <div class="sub-heading  animate-box animated animate__animated" data-animate="animate__fadeInDown">
                                    <i class="fa-regular fa-circle-dot"></i>
                                    <span>Why Choose Us</span>
                                </div>
                                <h2 class="title-heading  animate-box animated animate__animated" data-animate="animate__fadeInDown">Your Wins Are Our Purpose</h2>
                                <p class="mb-0 animate-box animated animate__animated" data-animate="animate__fadeInDown">
                                    Step into a smarter era of digital marketing. By merging data, proven brand expertise, and extensive market research, we deliver powerful, performance-focused results for our clients.
                                </p>
                            </div>
                            <div class="image-container">
                                <img src="./image/dummy-img-600x400.jpg" alt="Why Choose Us Image" class="chooseus-img">
                                <div class="card-chooseus-cta-layout">
                                    <div class="chooseus-cta-spacer"></div>
                                    <div class="d-flex flex-column align-items-end">
                                        <div class="chooseus-cta-spacer"></div>    
                                        <div class="card-chooseus-cta-wrapper">
                                            <div class="card card-chooseus-cta animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                                <h5>Partner with Snapwave & take your brand to the next level.</h5>
                                                <div class="link-wrapper">
                                                    <a href="{{route('contact')}}">Let's Talk</a>
                                                    <i class="fa-solid fa-circle-arrow-right"></i>
                                                </div>
                                            </div>
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