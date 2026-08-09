@extends('website.layouts.main-layout')

@section('content')
    <!-- Detail Hero Header -->
    <div class="detail-hero-banner">
        <div class="container">
            <h1 data-aos="fade-up">Legalitas & Sertifikasi</h1>
            <div class="detail-breadcrumbs" data-aos="fade-up" data-aos-delay="100">
                <a href="{{ route('website.index') }}">Beranda</a>
                <i class="bi bi-chevron-right"></i>
                <span>Legalitas</span>
            </div>
        </div>
    </div>

    <!-- Content Section -->
    <section class="section pt-0 pb-5">
        <div class="container">
            
            <div class="section-title text-start mb-4" data-aos="fade-up">
                <h2>Dokumen Resmi BUMDes</h2>
                <p>Seluruh unit usaha BUMDes Makmur Jaya telah memiliki dasar hukum dan izin operasional resmi.</p>
            </div>

            <div class="legalitas-grid" data-aos="fade-up" data-aos-delay="100">
                @forelse ($legalitasAll as $legal)
                    <div class="legalitas-card">
                        <div class="legalitas-img-box">
                            <img src="{{ Storage::url($legal->gambar) }}" alt="{{ $legal->nama }}" loading="lazy">
                        </div>
                        <h4>{{ $legal->nama }}</h4>
                        <div class="mt-auto pt-2">
                            <a href="{{ $legal->link ?? Storage::url($legal->gambar) }}" target="_blank" class="btn btn-sm btn-outline-success rounded-pill px-3">
                                <i class="bi bi-file-earmark-pdf me-1"></i> Buka Dokumen Lengkap
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center text-muted py-5">Belum ada dokumen legalitas terdaftar.</div>
                @endforelse
            </div>

        </div>
    </section>
@endsection
