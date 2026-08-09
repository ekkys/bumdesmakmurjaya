<!-- Legalitas Section -->
<section id="featured-services" class="featured-services section" style="padding: 70px 0;">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <span class="section-badge">
                <i class="bi bi-shield-check"></i> Legalitas Resmi
            </span>
            <h2>Sertifikasi & Perizinan</h2>
            <p>Dokumen legalitas dan izin resmi pendirian operasional BUMDes Makmur Jaya</p>
        </div>

        <div class="legalitas-grid" data-aos="fade-up" data-aos-delay="100">
            @forelse ($legalitasPage as $legal)
                <div class="legalitas-card">
                    <div class="legalitas-img-box">
                        <img src="{{ Storage::url($legal->gambar) }}" alt="{{ $legal->nama }}" loading="lazy">
                    </div>
                    <h4>{{ $legal->nama }}</h4>
                    <div class="mt-auto pt-2">
                        <a href="{{ $legal->link ?? Storage::url($legal->gambar) }}" target="_blank" class="btn btn-sm btn-outline-success rounded-pill px-3">
                            <i class="bi bi-file-earmark-pdf me-1"></i> Buka Dokumen
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center text-muted py-4">Belum ada data legalitas.</div>
            @endforelse
        </div>

        <div class="text-center mt-5" data-aos="fade-up">
            <a href="{{ route('legalitas.detail') }}" class="btn btn-outline-secondary rounded-pill px-4 py-2 fw-semibold">
                Lihat Semua Dokumen Legalitas <i class="bi bi-arrow-right ms-1"></i>
            </a>
        </div>

    </div>
</section><!-- /Legalitas Section -->
