@extends('website.layouts.main-layout')

@section('content')
    <!-- Detail Hero Header -->
    <div class="detail-hero-banner">
        <div class="container">
            <h1 data-aos="fade-up">Tentang Kami</h1>
            <div class="detail-breadcrumbs" data-aos="fade-up" data-aos-delay="100">
                <a href="{{ route('website.index') }}">Beranda</a>
                <i class="bi bi-chevron-right"></i>
                <span>Tentang Kami</span>
            </div>
        </div>
    </div>

    <!-- Content Section -->
    <section class="section pt-0 pb-5">
        <div class="container">
            <div class="row gy-4">

                <!-- Sidebar Contact -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-info-card text-start">
                        <div class="contact-icon-box ms-0">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h4 class="fw-bold mb-2">Pusat Informasi BUMDes</h4>
                        <p class="text-muted mb-4">Ingin berdiskusi atau bermitra dengan BUMDes Makmur Jaya?</p>
                        <a href="https://wa.me/6281511119337" target="_blank" class="btn btn-success w-100 rounded-pill py-2">
                            <i class="bi bi-whatsapp me-1"></i> Hubungi Pengurus
                        </a>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                    <div class="detail-card-box">
                        @if(!empty($tentang->gambar1))
                            <img src="{{ Storage::url($tentang->gambar1) }}" alt="Tentang BUMDes" class="img-fluid rounded-4 mb-4 w-100 shadow-sm" style="max-height: 400px; object-fit: cover;">
                        @endif

                        <h2 class="fw-bold mb-3">{{ $tentang->judul ?? 'Profil BUMDes Makmur Jaya' }}</h2>
                        
                        <div class="article-content leading-relaxed">
                            {!! html_entity_decode($tentang->deskripsi ?? '') !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
