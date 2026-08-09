<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="{{ route('website.index') }}" class="logo d-flex align-items-center">
            @if(!empty($home->gambar))
                <img src="{{ Storage::url($home->gambar) }}" alt="Logo BUMDes">
            @else
                <img src="{{ asset('assets/img/bumdes.png') }}" alt="Logo BUMDes">
            @endif
            <h1 class="sitename">BUMDesa <span>{{ $home->judul ?? 'Makmur Jaya' }}</span></h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('website.index') }}#hero" class="active">Home</a></li>
                <li class="dropdown">
                    <a href="{{ route('website.index') }}#about">
                        <span>Tentang</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
                    </a>
                    <ul>
                        <li><a href="{{ route('tentang.detail') }}">Profil Lengkap</a></li>
                        <li><a href="{{ route('legalitas.detail') }}">Legalitas & Izin</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('website.index') }}#news">Berita</a></li>
                <li><a href="{{ route('website.index') }}#features">Unit Usaha</a></li>
                <li><a href="{{ route('website.index') }}#features-details">Layanan</a></li>
                <li><a href="{{ route('website.index') }}#clients">Klien</a></li>
                <li><a href="{{ route('website.index') }}#services">Galeri</a></li>
                <li><a href="{{ route('website.index') }}#pricing">Biaya</a></li>
                <li><a href="{{ route('website.index') }}#contact">Kontak</a></li>
                <li class="d-none d-lg-block ms-2">
                    <a href="https://wa.me/6281511119337" target="_blank" class="btn-nav-cta">
                        <i class="bi bi-whatsapp me-1"></i> Hubungi Kami
                    </a>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>
