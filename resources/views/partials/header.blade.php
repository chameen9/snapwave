<div class="navbar-wrapper">
    <nav class="navbar navbar-expand-xl">
        <div class="navbar-container">
            <div class="logo-container">
                <a class="navbar-brand" href="{{route('index')}}"><img src="./image/LOGO.png" class="img-fluid"></a>
            </div>
            <button class="navbar-toggler nav-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars "></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('index')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('services')}}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('about')}}">About Us</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Our Work <i class="fa-solid fa-angle-down accent-color"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('portfolio')}}">Porfolio</a></li>
                            <li><a class="dropdown-item" href="{{route('partners')}}">SnapWave Partner Network</a></li>
                            <li><a class="dropdown-item" href="{{route('gallery')}}">Gallery</a></li>
                        </ul>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('portfolio')}}">Porfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('contact')}}">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- <div class="navbar-action-container" style="padding:0 !important; margin:0 !important; display:flex; align-items:center;">
                <div class="navbar-icon-wrapper" style="display:flex; align-items:center; gap:8px; margin:0 !important; padding:0 !important;">
                    <div class="icon-circle" 
                        style="width:38px; height:38px; border-radius:50%; display:flex; align-items:center; justify-content:center; background:#F5D799; margin:0 !important; padding:0 !important;">
                        <i class="fa-solid fa-phone-volume"></i>
                    </div>
                    <h6 style="white-space:nowrap; margin:0; padding:0;">077 423 6981</h6>
                </div>
            </div> -->
        </div>
    </nav>
</div>