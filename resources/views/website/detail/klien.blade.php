@extends('website.layouts.main-layout')

@section('content')
    <!-- Detail Hero Header -->
    <div class="detail-hero-banner">
        <div class="container">
            <h1 data-aos="fade-up">Daftar Klien & Mitra</h1>
            <div class="detail-breadcrumbs" data-aos="fade-up" data-aos-delay="100">
                <a href="{{ route('website.index') }}">Beranda</a>
                <i class="bi bi-chevron-right"></i>
                <span>Klien & Mitra</span>
            </div>
        </div>
    </div>

    <!-- Content Section -->
    <section class="section pt-0 pb-5">
        <div class="container">
            
            <div class="section-title text-start mb-4" data-aos="fade-up">
                <h2>Mitra Kerjasama</h2>
                <p>Perusahaan, instansi pemerintah, dan komunitas yang telah mempercayakan pengolahan lingkungan dan usaha kepada BUMDes Makmur Jaya.</p>
            </div>

            <div class="row g-4" data-aos="fade-up" data-aos-delay="100">
                @forelse ($kliens as $klien)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="client-logo-card flex-column text-center p-3" style="height: 160px;">
                            <img src="{{ Storage::url($klien->gambar) }}" alt="{{ $klien->nama }}" class="mb-2" style="max-height: 70px;">
                            <span class="fw-semibold text-dark small">{{ $klien->nama }}</span>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center text-muted py-5">Belum ada data klien terdaftar.</div>
                @endforelse
            </div>

        </div>
    </section>
@endsection
