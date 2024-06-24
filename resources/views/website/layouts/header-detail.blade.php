<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="" class="logo d-flex align-items-center me-auto">
            <img src="assets/img/bumdes.png" alt="">
            <h1 class="sitename">Bumdes Makmur Jaya</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('website.index') }}#hero" class="">Home</a></li>
                <li class="dropdown"><a href="#about"><span>Tentang Kami</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ route('website.index') }}#featured-services">Legalitas</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('website.index') }}#features">Unit Kami</a></li>
                <li><a href="{{ route('website.index') }}#features-details">Layanan</a></li>
                <li><a href="{{ route('website.index') }}#clients">Klien</a></li>
                <li><a href="{{ route('website.index') }}#pricing">Pricing</a></li>
                <li><a href="{{ route('website.index') }}#contact">Kontak</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>
