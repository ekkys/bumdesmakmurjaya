<!-- Klien & Mitra Section -->
<section id="clients" class="clients section" style="padding: 70px 0; background: var(--bumdes-light);">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <span class="section-badge">
                <i class="bi bi-hand-thumbs-up-fill"></i> Kepercayaan Mitra
            </span>
            <h2>Klien & Mitra Kami</h2>
            <p>Dipercaya oleh berbagai instansi, perusahaan swasta, dan kelompok masyarakat</p>
        </div>

        <div class="row g-3 justify-content-center" data-aos="fade-up" data-aos-delay="100">
            @forelse ($kliens as $klien)
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="client-logo-card">
                        <img src="{{ Storage::url($klien->gambar) }}" alt="{{ $klien->nama }}" title="{{ $klien->nama }}" loading="lazy">
                    </div>
                </div>
            @empty
                <div class="col-12 text-center text-muted py-4">Belum ada data klien.</div>
            @endforelse
        </div>

        <div class="text-center mt-5" data-aos="fade-up">
            <a href="{{ route('klien.detail') }}" class="btn btn-outline-secondary rounded-pill px-4 py-2 fw-semibold">
                Lihat Daftar Klien Lengkap <i class="bi bi-arrow-right ms-1"></i>
            </a>
        </div>

    </div>
</section><!-- /Klien Section -->
