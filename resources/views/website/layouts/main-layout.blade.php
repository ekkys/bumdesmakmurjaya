<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <!-- Primary Meta Tags -->
    <title>@yield('title', 'BUMDes Makmur Jaya - Desa Sidomojo Krian Sidoarjo')</title>
    <meta name="title" content="@yield('title', 'BUMDes Makmur Jaya - Desa Sidomojo Krian Sidoarjo')">
    <meta name="description" content="@yield('meta_description', 'Website Resmi BUMDes Makmur Jaya Desa Sidomojo, Krian, Sidoarjo. Layanan Pengolahan Sampah TPS3R, Ketahanan Pangan, Simpan Pinjam, dan Toko Desa.')">
    <meta name="keywords" content="bumdes makmur jaya, bumdes sidomojo, tps 3r sidomojo, pengolahan sampah krian sidoarjo, bumdes krian, desa sidomojo">
    <meta name="robots" content="index, follow">
    <meta name="author" content="BUMDes Makmur Jaya">

    <!-- Open Graph / Facebook / WhatsApp Preview -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'BUMDes Makmur Jaya - Desa Sidomojo')">
    <meta property="og:description" content="@yield('meta_description', 'Website Resmi BUMDes Makmur Jaya Desa Sidomojo. Layanan TPS3R, Pangan, Pinjaman, dan Toko Desa.')">
    <meta property="og:image" content="{{ asset('assets/img/hero-bg-light.webp') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('title', 'BUMDes Makmur Jaya - Desa Sidomojo')">
    <meta property="twitter:description" content="@yield('meta_description', 'Website Resmi BUMDes Makmur Jaya Desa Sidomojo.')">
    <meta property="twitter:image" content="{{ asset('assets/img/hero-bg-light.webp') }}">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main & Custom CSS Files -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom-modern.css') }}" rel="stylesheet">

    <!-- Schema.org JSON-LD Structured Data for Google Ranking -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "BUMDes Makmur Jaya Desa Sidomojo",
      "image": "{{ asset('assets/img/hero-bg-light.webp') }}",
      "description": "Badan Usaha Milik Desa Makmur Jaya Sidomojo melayani Pengolahan Sampah TPS3R, Toko Desa, Pinjaman Usaha, dan Distribusi Pangan.",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Dusun Tundungan",
        "addressLocality": "Sidomojo, Krian",
        "addressRegion": "Jawa Timur",
        "postalCode": "61262",
        "addressCountry": "ID"
      },
      "telephone": "+6281511119337"
    }
    </script>

    @yield('css')
</head>

<body class="index-page">

    @include('website.layouts.header')

    <main class="main">
        @yield('content')
    </main>

    @include('website.layouts.footer')

    <!-- WhatsApp Floating Action Button -->
    <a href="https://wa.me/6281511119337" class="whatsapp-float-btn" target="_blank" title="Chat WhatsApp Customer Care">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @yield('js')
</body>

</html>
