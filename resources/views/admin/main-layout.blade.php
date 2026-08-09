<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Admin Dashboard - BUMDes Makmur Jaya</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets_nice/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets_nice/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets_nice/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_nice/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_nice/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_nice/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_nice/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_nice/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_nice/vendor/simple-datatables/style.css') }}" rel="stylesheet">
    <link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
    
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets_nice/css/style.css') }}" rel="stylesheet">
    
    @yield('css')
    <style>
        .logo-text {
            font-size: 15px;
            font-weight: 700;
            padding: 0 5px;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ route('dashboard') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('assets_nice/img/bumdes.png') }}" alt="Logo BUMDes">
                <span class="d-none d-sm-block logo-text">BUMDes Makmur Jaya</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->
        
        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item me-3">
                    <a href="{{ route('website.index') }}" target="_blank" class="btn btn-sm btn-outline-success rounded-pill px-3">
                        <i class="bi bi-box-arrow-up-right me-1"></i> Lihat Website
                    </a>
                </li>

                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="{{ asset('assets_nice/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name ?? 'Administrator' }}</span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>{{ Auth::user()->name ?? 'Admin' }}</h6>
                            <span>{{ Auth::user()->email ?? '' }}</span>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center text-danger" href="{{ route('actionlogout') }}">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('admin.sidebar')
    <!-- End Sidebar-->

    <main id="main" class="main">
        <section class="section dashboard">
            <div class="row">
                @yield('content')
            </div>
        </section>
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>BUMDes Makmur Jaya</span></strong>. All Rights Reserved
        </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets_nice/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets_nice/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets_nice/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets_nice/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets_nice/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('assets_nice/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets_nice/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets_nice/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets_nice/js/main.js') }}"></script>
    <script src="https://cdn.quilljs.com/1.3.7/quill.js"></script>
    @yield('scripts')
</body>

</html>
