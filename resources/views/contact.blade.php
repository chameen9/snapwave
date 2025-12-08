<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - SnapWave</title>
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
                        <h2 class="title-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">Get In Touch</h2>
                        <nav class="breadcrumb">
                            <a href="{{route('index')}}" class="gspace-2">Home</a>
                            <span class="separator-link">/</span>
                            <p class="current-page">Contact</p>
                        </nav>    
                    </div>
                    <div class="spacer"></div>
                </div>
            </div>
        </div>
        
        <!-- Section Contact -->
        <div class="section">
            <div class="hero-container">
                <div class="row row-cols-xl-2 row-cols-1 g-5">
                    <div class="col col-xl-5">
                        <div class="contact-title-wrapper">
                            <div class="card contact-title">
                                <div class="sub-heading">
                                    <i class="fa-regular fa-circle-dot"></i>
                                    <span>Reach out to us</span>
                                </div>
                                <h2 class="title-heading">Get in Touch</h2>
                                <p>Reach out to us for tailored digital solutions that drive results sollicitudin nec.</p>
                                <div class="d-flex flex-column flex-md-row align-items-center text-md-start text-center gspace-2">
                                    <div>
                                        <div class="icon-wrapper">
                                            <div class="icon-box">
                                                <i class="fa-solid fa-phone-volume accent-color"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-grid">
                                        <span>Phone Number</span>
                                        <h5><a href="tel:+94774236981">077 423 6981</a></h5>
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-md-row align-items-center text-md-start text-center gspace-2">
                                    <div>
                                        <div class="icon-wrapper">
                                            <div class="icon-box">
                                                <i class="fa-solid fa-envelope accent-color"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-grid">
                                        <span>Email Address</span>
                                        <h5><a href="mailto:info@snapwave.lk">info@snapwave.lk</a></h5>
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-md-row align-items-center text-md-start text-center gspace-2">
                                    <div>
                                        <div class="icon-wrapper">
                                            <div class="icon-box">
                                                <i class="fa-solid fa-location-dot accent-color"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-grid">
                                        <span>Address</span>
                                        <h5><a href="">Galle, Sri Lanka</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-xl-7">
                        <div id="success-message" class="alert success hidden">
                            <span class="check-icon"><i class="fa-solid fa-2xl fa-check"></i></span>
                            <p>Thank you! Form submitted successfully.</p>
                        </div>
                        
                        <div id="error-message" class="alert error hidden">
                            <span class="cross-icon"><i class="fa-solid fa-2xl fa-xmark"></i></span>
                            <p>Oops! Form submission failed. Please try again.</p>
                        </div>
                        <div class="form-layout-wrapper">
                            <div class="card form-layout">
                                <h3 class="title-heading">Let's Talk About Your Next Project</h3>
                                <form action="{{ route('sendmessage') }}" method="post" id="contactForm" class="form">
                                    @csrf
                                    <div class="row row-cols-md-2 row-cols-1 g-3">
                                        <div class="col">
                                            <input type="text" name="name" id="name" placeholder="Your Name" required>
                                        </div>
                                        <div class="col">
                                            <input type="email" name="email" id="email" placeholder="Email Address" required>
                                        </div>
                                    </div>
                                    <div class="row row-cols-md-2 row-cols-1 g-3">
                                        <div class="col">
                                            <input type="tel" name="contact" id="contact" placeholder="Contact No" required>
                                        </div>
                                        <div class="col">
                                            <input type="date" name="date" id="date" placeholder="Date">
                                        </div>
                                    </div>
                                    <textarea name="message" id="message" rows="5" placeholder="Message"></textarea>
                                    <div class="form-button-container">
                                        <button type="submit" class="btn btn-accent">
                                            <span class="btn-title">
                                                <span>Send a Message</span>
                                            </span>
                                            <span class="icon-circle">
                                              <i class="fa-solid fa-arrow-right"></i>
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Maps -->
        <div class="section pt-0">
            <div class="hero-container">
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31740.421209992994!2d80.19139745129232!3d6.055933837841655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae173bb6932fce3%3A0x4a35b903f9c64c03!2sGalle!5e0!3m2!1sen!2slk!4v1764611247093!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                <iframe loading="lazy" class="maps overflow-hidden"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31740.421209992994!2d80.19139745129232!3d6.055933837841655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae173bb6932fce3%3A0x4a35b903f9c64c03!2sGalle!5e0!3m2!1sen!2slk!4v1764611247093!5m2!1sen!2slk"
                    title="London Eye, London, United Kingdom" aria-label="London Eye, London, United Kingdom">
                </iframe>
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