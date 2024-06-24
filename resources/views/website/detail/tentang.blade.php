@extends('website.detail.detail-main-layout')

@section('content')
    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">
        <!-- WhatsApp Float Button -->
        <a href="https://wa.me/6281234567890" class="whatsapp-float" target="_blank">
            <img src="{{ url('assets\img\whatsapp.png') }}" alt="WhatsApp">
        </a>
        <div class="container mt-3">
            <div class="row">
                <!-- Page Title -->
                <div class="page-title" data-aos="fade">
                    <div class="container d-lg-flex justify-content-between align-items-center">
                        <h1 class="mb-2 mb-lg-0">Tentang Kami</h1>
                        <nav class="breadcrumbs">
                            <ol>
                                <li><a href="index.html">Home</a></li>
                                <li class="current">Tentang Kami</li>
                            </ol>
                        </nav>
                    </div>
                </div><!-- End Page Title -->
            </div>

            <div class="row gy-5">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">



                    <div class="help-box d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-headset help-icon"></i>
                        <h4>Ingin bertanya langsung?</h4>
                        <a href="https://wa.me/62895632210577">
                            <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>
                                    +62 895-632-210-577 </span></p>
                        </a>
                    </div>

                </div>

                <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <img src="assets/img/services.jpg" alt="" class="img-fluid services-img">
                    <h3>
                        <h3>BUMDES Makmur Jaya <span>SIDOMOJO</span></h3>
                    </h3>
                    <p>
                        Bumdes Makmur Jaya Sidomojo adalah sebuah badan usaha milik desa yang bergerak dalam berbagai sektor
                        ekonomi untuk meningkatkan kesejahteraan masyarakat desa. Dibentuk dengan tujuan utama untuk
                        menciptakan lapangan kerja dan mengoptimalkan potensi lokal, Bumdes Makmur Jaya Sidomojo berhasil
                        menjalankan berbagai program unggulan.Program tersebut meliputi :
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Pengelolaan sampah.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Persewaan toko.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Penyediaan layanan keuangan mikro.</span></li>
                    </ul>
                    <p>
                        Melalui kerja keras dan kolaborasi dengan masyarakat, Bumdes ini mampu meningkatkan pendapatan desa
                        dan kesejahteraan
                        penduduknya. Inisiatif seperti pengolahan hasil pertanian dan pengembangan pariwisata lokal menjadi
                        fokus utama yang mendorong pertumbuhan ekonomi secara berkelanjutan di Sidomojo.
                    </p>

                </div>

            </div>

        </div>

    </section><!-- /Service Details Section -->
@endsection
