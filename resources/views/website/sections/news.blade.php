<!-- Berita & Artikel Terbaru Section -->
<section id="news" class="news section" style="padding: 70px 0;">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <span class="section-badge">
                <i class="bi bi-newspaper"></i> Kabar Terkini
            </span>
            <h2>Berita & Artikel BUMDes</h2>
            <p>Informasi terbaru seputar kegiatan desa, program inovasi, dan perkembangan BUMDes Makmur Jaya</p>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
            @forelse ($beritas as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden d-flex flex-column" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                        <div class="position-relative" style="height: 220px; overflow: hidden; background: #f1f5f9;">
                            @if(!empty($item->gambar))
                                <img src="{{ Storage::url($item->gambar) }}" alt="{{ $item->judul }}" class="w-100 h-100" style="object-fit: cover;" loading="lazy">
                            @else
                                <div class="w-100 h-100 d-flex flex-column align-items-center justify-content-center text-muted">
                                    <i class="bi bi-image fs-1 opacity-50"></i>
                                    <small>BUMDes Makmur Jaya</small>
                                </div>
                            @endif
                            <div class="position-absolute top-0 start-0 m-3">
                                <span class="badge bg-success shadow-sm rounded-pill px-3 py-2 fw-semibold">
                                    {{ $item->kategori }}
                                </span>
                            </div>
                        </div>

                        <div class="card-body p-4 d-flex flex-column flex-grow-1">
                            <div class="d-flex align-items-center gap-3 text-muted small mb-2">
                                <span><i class="bi bi-calendar3 me-1 text-success"></i> {{ $item->tanggal_publikasi->format('d M Y') }}</span>
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
                <div class="col-12 text-center text-muted py-4">Belum ada berita yang dipublikasikan.</div>
            @endforelse
        </div>

        <div class="text-center mt-5" data-aos="fade-up">
            <a href="{{ route('berita.public.index') }}" class="btn btn-outline-secondary rounded-pill px-4 py-2 fw-semibold">
                Lihat Semua Artikel & Berita <i class="bi bi-arrow-right ms-1"></i>
            </a>
        </div>

    </div>
</section><!-- /Berita Section -->
