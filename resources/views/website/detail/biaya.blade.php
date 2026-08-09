@extends('website.layouts.main-layout')

@section('content')
    <!-- Detail Hero Header -->
    <div class="detail-hero-banner">
        <div class="container">
            <h1 data-aos="fade-up">Daftar Biaya & Retribusi Layanan</h1>
            <div class="detail-breadcrumbs" data-aos="fade-up" data-aos-delay="100">
                <a href="{{ route('website.index') }}">Beranda</a>
                <i class="bi bi-chevron-right"></i>
                <span>Biaya Layanan</span>
            </div>
        </div>
    </div>

    <!-- Content Section -->
    <section class="section pt-0 pb-5">
        <div class="container">
            
            <div class="section-title text-start mb-4" data-aos="fade-up">
                <h2>Pilihan Paket Retribusi</h2>
                <p>Informasi tarif resmi layanan pengelolaan sampah terpadu dan jasa unit BUMDes Makmur Jaya.</p>
            </div>

            <div class="row gy-4 justify-content-center" data-aos="fade-up" data-aos-delay="100">
                @forelse ($biayas as $biaya)
                    @php
                        $isFeatured = (!empty($biaya->keterangan) && $biaya->keterangan != '-');
                        $waText = "Assalamu'alaikum, saya ingin berlangganan/bertanya paket " . urlencode($biaya->nama);
                    @endphp
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-card {{ $isFeatured ? 'featured' : '' }}">
                            @if ($isFeatured)
                                <div class="pricing-ribbon">
                                    <i class="bi bi-star-fill me-1"></i> {{ $biaya->keterangan }}
                                </div>
                            @endif

                            <h3>{{ $biaya->nama }}</h3>
                            
                            <div class="pricing-amount">
                                <span class="currency">Rp</span>
                                <span class="price">{{ $biaya->nominal }}</span>
                                <span class="period">/ {{ $biaya->satuan }}</span>
                            </div>

                            <div class="pricing-features">
                                {!! html_entity_decode($biaya->item_layanan) !!}
                            </div>

                            <div class="mt-auto">
                                <a href="https://wa.me/6281511119337?text={{ $waText }}" target="_blank" class="btn-pricing">
                                    <i class="bi bi-whatsapp"></i> Hubungi Kami
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center text-muted py-5">Belum ada paket biaya layanan yang tersedia.</div>
                @endforelse
            </div>

        </div>
    </section>
@endsection
