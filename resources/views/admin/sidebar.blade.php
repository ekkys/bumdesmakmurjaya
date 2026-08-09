<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('dashboard') ? '' : 'collapsed' }}" href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-heading">Kelola Konten</li>

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('berita.*') ? '' : 'collapsed' }}" href="{{ route('berita.index') }}">
                <i class="bi bi-newspaper"></i>
                <span>Berita & Artikel</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('home.*') ? '' : 'collapsed' }}" href="{{ route('home.index') }}">
                <i class="bi bi-display"></i>
                <span>Banner Home</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('tentang.*') ? '' : 'collapsed' }}" href="{{ route('tentang.index') }}">
                <i class="bi bi-chat-left-quote"></i>
                <span>Tentang Kami</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('legalitas.*') ? '' : 'collapsed' }}" href="{{ route('legalitas.index') }}">
                <i class="bi bi-shield-check"></i>
                <span>Legalitas</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('unit.*') ? '' : 'collapsed' }}" href="{{ route('unit.index') }}">
                <i class="bi bi-buildings"></i>
                <span>Unit Usaha</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('layanan.*') ? '' : 'collapsed' }}" href="{{ route('layanan.index') }}">
                <i class="bi bi-truck"></i>
                <span>Layanan</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('klien.*') ? '' : 'collapsed' }}" href="{{ route('klien.index') }}">
                <i class="bi bi-people"></i>
                <span>Klien & Mitra</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('galeri.*') ? '' : 'collapsed' }}" href="{{ route('galeri.index') }}">
                <i class="bi bi-images"></i>
                <span>Galeri Foto</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('biaya.*') ? '' : 'collapsed' }}" href="{{ route('biaya.index') }}">
                <i class="bi bi-cash-stack"></i>
                <span>Biaya Layanan</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('kontak.*') ? '' : 'collapsed' }}" href="{{ route('kontak.index') }}">
                <i class="bi bi-telephone"></i>
                <span>Kontak & Lokasi</span>
            </a>
        </li>

        <li class="nav-heading">Akun</li>

        <li class="nav-item">
            <a class="nav-link collapsed text-danger" href="{{ route('actionlogout') }}">
                <i class="bi bi-box-arrow-right text-danger"></i>
                <span>Logout</span>
            </a>
        </li>

    </ul>

</aside>
