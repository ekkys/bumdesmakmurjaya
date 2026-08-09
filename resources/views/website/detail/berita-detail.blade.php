@extends('website.layouts.main-layout')

@section('content')
    <!-- Detail Hero Header -->
    <div class="detail-hero-banner">
        <div class="container">
            <h1 data-aos="fade-up" style="font-size: 30px;">{{ $berita->judul }}</h1>
            <div class="detail-breadcrumbs" data-aos="fade-up" data-aos-delay="100">
                <a href="{{ route('website.index') }}">Beranda</a>
                <i class="bi bi-chevron-right"></i>
                <a href="{{ route('berita.public.index') }}">Berita</a>
                <i class="bi bi-chevron-right"></i>
                <span class="text-truncate" style="max-width: 300px;">{{ $berita->judul }}</span>
            </div>
        </div>
    </div>

    <!-- Content Section -->
    <section class="section pt-0 pb-5">
        <div class="container">
            <div class="row gy-4">

                <!-- Main Article Content -->
                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                    <div class="detail-card-box">
                        
                        <!-- Metadata Bar -->
                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 pb-3 mb-4 border-bottom text-muted small">
                            <div class="d-flex align-items-center gap-3">
                                <span><i class="bi bi-person-fill text-success me-1"></i> {{ $berita->penulis }}</span>
                                <span><i class="bi bi-calendar3 text-success me-1"></i> {{ $berita->tanggal_publikasi->format('d F Y') }}</span>
                                <span><i class="bi bi-eye text-success me-1"></i> {{ $berita->views }} kali dibaca</span>
                            </div>
                            <span class="badge bg-success rounded-pill px-3 py-2">
                                {{ $berita->kategori }}
                            </span>
                        </div>

                        <!-- Featured Image -->
                        @if(!empty($berita->gambar))
                            <div class="mb-4 rounded-4 overflow-hidden shadow-sm">
                                <img src="{{ Storage::url($berita->gambar) }}" alt="{{ $berita->judul }}" class="img-fluid w-100" style="max-height: 480px; object-fit: cover;">
                            </div>
                        @endif

                        <!-- Summary Lead -->
                        @if(!empty($berita->ringkasan))
                            <div class="p-3 bg-light rounded-3 border-start border-success border-4 mb-4 fw-medium text-secondary">
                                {{ $berita->ringkasan }}
                            </div>
                        @endif

                        <!-- Body Content -->
                        <div class="article-content leading-relaxed fs-6 text-dark">
                            {!! $berita->isi !!}
                        </div>

                        <!-- Share Buttons -->
                        <div class="d-flex align-items-center justify-content-between pt-4 mt-5 border-top">
                            <span class="fw-semibold text-muted">Bagikan Artikel:</span>
                            <div class="d-flex gap-2">
                                <a href="https://wa.me/?text={{ urlencode($berita->judul . ' ' . url()->current()) }}" target="_blank" class="btn btn-sm btn-success rounded-pill px-3">
                                    <i class="bi bi-whatsapp me-1"></i> WhatsApp
                                </a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" class="btn btn-sm btn-primary rounded-pill px-3">
                                    <i class="bi bi-facebook me-1"></i> Facebook
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    
                    <!-- Quick Contact Widget -->
                    <div class="contact-info-card text-start mb-4">
                        <div class="contact-icon-box ms-0">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Informasi BUMDes</h5>
                        <p class="text-muted small mb-3">Punya pertanyaan atau masukan terkait kegiatan BUMDes Makmur Jaya?</p>
                        <a href="https://wa.me/6281511119337" target="_blank" class="btn btn-success w-100 rounded-pill py-2">
                            <i class="bi bi-whatsapp me-1"></i> Hubungi Kami
                        </a>
                    </div>

                    <!-- Recent News Widget -->
                    <div class="detail-card-box p-4">
                        <h5 class="fw-bold mb-3 border-bottom pb-2">Berita Lainnya</h5>
                        @forelse ($recentBeritas as $recent)
                            <div class="d-flex gap-3 mb-3 pb-3 border-bottom border-light">
                                @if(!empty($recent->gambar))
                                    <img src="{{ Storage::url($recent->gambar) }}" alt="{{ $recent->judul }}" class="rounded-3 shadow-sm" style="width: 70px; height: 60px; object-fit: cover; flex-shrink: 0;">
                                @else
                                    <div class="rounded-3 bg-light border d-flex align-items-center justify-content-center text-muted" style="width: 70px; height: 60px; flex-shrink: 0;">
                                        <i class="bi bi-newspaper"></i>
                                    </div>
                                @endif
                                <div>
                                    <a href="{{ route('berita.public.detail', $recent->slug) }}" class="text-dark fw-semibold text-decoration-none small d-block mb-1" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                        {{ $recent->judul }}
                                    </a>
                                    <small class="text-muted"><i class="bi bi-calendar3 me-1"></i>{{ $recent->tanggal_publikasi->format('d M Y') }}</small>
                                </div>
                            </div>
                        @empty
                            <p class="text-muted small">Tidak ada berita lainnya.</p>
                        @endforelse
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
