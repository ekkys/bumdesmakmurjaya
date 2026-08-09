@extends('website.layouts.main-layout')

@section('content')
    @php
        $layanan = $layananTps->first();
        $title = $layanan->nama ?? 'Pembelian Anfalan & Barang Bekas';
    @endphp

    <!-- Detail Hero Header -->
    <div class="detail-hero-banner">
        <div class="container">
            <h1 data-aos="fade-up">{{ $title }}</h1>
            <div class="detail-breadcrumbs" data-aos="fade-up" data-aos-delay="100">
                <a href="{{ route('website.index') }}">Beranda</a>
                <i class="bi bi-chevron-right"></i>
                <a href="{{ route('website.index') }}#features-details">Layanan</a>
                <i class="bi bi-chevron-right"></i>
                <span>{{ $title }}</span>
            </div>
        </div>
    </div>

    <!-- Content Section -->
    <section class="section pt-0 pb-5">
        <div class="container">
            @foreach ($layananTps as $item)
                <div class="row gy-4 mb-5">

                    <!-- Sidebar Contact -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="contact-info-card text-start mb-4">
                            <div class="contact-icon-box ms-0">
                                <i class="bi bi-recycle"></i>
                            </div>
                            <h4 class="fw-bold mb-2">Jual Anfalan & Rongsok</h4>
                            <p class="text-muted mb-4">Menerima pembelian barang bekas, kardus, plastik, logam, dan anfalan dengan harga kompetitif.</p>
                            <a href="https://wa.me/6281511119337?text=Assalamu'alaikum%2C%20saya%20ingin%20menawarkan%20anfalan%2Fbarang%20bekas" target="_blank" class="btn btn-success w-100 rounded-pill py-2">
                                <i class="bi bi-whatsapp me-1"></i> Hubungi Pembelian
                            </a>
                        </div>
                    </div>

                    <!-- Main Content -->
                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                        <div class="detail-card-box">
                            @if(!empty($item->gambar))
                                <img src="{{ Storage::url($item->gambar) }}" alt="{{ $item->nama }}" class="img-fluid rounded-4 mb-4 w-100 shadow-sm" style="max-height: 420px; object-fit: cover;">
                            @endif

                            <h2 class="fw-bold mb-3">{{ $item->nama }}</h2>

                            @if(!empty($item->ringkasan))
                                <div class="p-3 bg-light rounded-3 border-start border-success border-4 mb-4 text-secondary">
                                    {{ $item->ringkasan }}
                                </div>
                            @endif
                            
                            <div class="article-content leading-relaxed">
                                {!! html_entity_decode($item->deskripsi ?? '') !!}
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </section>
@endsection
