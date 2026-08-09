@extends('website.layouts.main-layout')

@section('content')
    <!-- Detail Hero Header -->
    <div class="detail-hero-banner">
        <div class="container">
            <h1 data-aos="fade-up">Berita & Informasi BUMDes</h1>
            <div class="detail-breadcrumbs" data-aos="fade-up" data-aos-delay="100">
                <a href="{{ route('website.index') }}">Beranda</a>
                <i class="bi bi-chevron-right"></i>
                <span>Berita</span>
            </div>
        </div>
    </div>

    <!-- Content Section -->
    <section class="section pt-0 pb-5">
        <div class="container">
            <div class="row gy-4">

                <!-- News Grid List -->
                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                    
                    <!-- Search and Filter Bar -->
                    <div class="bg-light p-3 rounded-4 border mb-4">
                        <form method="GET" action="{{ route('berita.public.index') }}" class="row g-2">
                            <div class="col-md-7">
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0"><i class="bi bi-search"></i></span>
                                    <input type="text" name="search" class="form-control border-start-0" placeholder="Cari berita..." value="{{ request('search') }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <select name="kategori" class="form-select" onchange="this.form.submit()">
                                    <option value="">Semua Kategori</option>
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat }}" {{ request('kategori') == $cat ? 'selected' : '' }}>{{ $cat }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-success w-100">Cari</button>
                            </div>
                        </form>
                    </div>

                    <div class="row gy-4">
                        @forelse ($beritas as $item)
                            <div class="col-md-6">
                                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden d-flex flex-column">
                                    <div class="position-relative" style="height: 200px; overflow: hidden; background: #f1f5f9;">
                                        @if(!empty($item->gambar))
                                            <img src="{{ Storage::url($item->gambar) }}" alt="{{ $item->judul }}" class="w-100 h-100" style="object-fit: cover;" loading="lazy">
                                        @else
                                            <div class="w-100 h-100 d-flex flex-column align-items-center justify-content-center text-muted">
                                                <i class="bi bi-image fs-2 opacity-50"></i>
                                                <small>BUMDes Makmur Jaya</small>
                                            </div>
                                        @endif
                                        <div class="position-absolute top-0 start-0 m-3">
                                            <span class="badge bg-success rounded-pill px-3 py-2 fw-semibold">
                                                {{ $item->kategori }}
                                            </span>
                                        </div>
                                    </div>

                                    <div class="card-body p-3 d-flex flex-column flex-grow-1">
                                        <div class="d-flex align-items-center gap-2 text-muted small mb-2">
                                            <span><i class="bi bi-calendar3 me-1 text-success"></i> {{ $item->tanggal_publikasi->format('d M Y') }}</span>
                                            <span>•</span>
                                            <span><i class="bi bi-person me-1 text-success"></i> {{ $item->penulis }}</span>
                                        </div>

                                        <h5 class="fw-bold mb-2">
                                            <a href="{{ route('berita.public.detail', $item->slug) }}" class="text-dark text-decoration-none" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                                {{ $item->judul }}
                                            </a>
                                        </h5>

                                        <p class="text-muted small flex-grow-1" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                                            {{ $item->excerpt }}
                                        </p>

                                        <div class="pt-3 mt-auto border-top">
                                            <a href="{{ route('berita.public.detail', $item->slug) }}" class="btn btn-sm btn-outline-success rounded-pill px-3 fw-semibold">
                                                Baca Selengkapnya <i class="bi bi-arrow-right ms-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 text-center py-5 text-muted">
                                <i class="bi bi-newspaper fs-1 d-block mb-2 text-secondary"></i>
                                Tidak ada berita yang sesuai dengan kriteria pencarian Anda.
                            </div>
                        @endforelse
                    </div>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-center mt-5">
                        {{ $beritas->links('pagination::bootstrap-5') }}
                    </div>

                </div>

                <!-- Sidebar -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    
                    <!-- Categories Widget -->
                    <div class="detail-card-box p-4 mb-4">
                        <h5 class="fw-bold mb-3 border-bottom pb-2">Kategori Berita</h5>
                        <div class="d-flex flex-wrap gap-2">
                            <a href="{{ route('berita.public.index') }}" class="btn btn-sm {{ !request('kategori') ? 'btn-success' : 'btn-light border' }} rounded-pill">
                                Semua
                            </a>
                            @foreach ($categories as $cat)
                                <a href="{{ route('berita.public.index', ['kategori' => $cat]) }}" class="btn btn-sm {{ request('kategori') == $cat ? 'btn-success' : 'btn-light border' }} rounded-pill">
                                    {{ $cat }}
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <!-- Recent News Widget -->
                    <div class="detail-card-box p-4">
                        <h5 class="fw-bold mb-3 border-bottom pb-2">Berita Terkini</h5>
                        @foreach ($recentBeritas as $recent)
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
                        @endforeach
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
