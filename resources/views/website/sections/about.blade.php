<!-- Tentang Kami Section -->
<section id="about" class="about-section">
    <div class="container">
        
        <div class="about-card" data-aos="fade-up">
            <div class="row gy-4 align-items-center">

                <div class="col-lg-6 about-content" data-aos="fade-right" data-aos-delay="100">
                    <span class="section-badge">
                        <i class="bi bi-info-circle-fill"></i> Tentang Kami
                    </span>
                    <h3>{{ $tentang->judul ?? 'Profil BUMDes Makmur Jaya' }}</h3>
                    <div class="about-desc">
                        {{ $firstParagraph ?? 'BUMDesa Makmur Jaya merupakan Badan Usaha Milik Desa yang bergerak dalam pengelolaan potensi desa untuk kesejahteraan masyarakat.' }}
                    </div>
                    <a href="{{ route('tentang.detail') }}" class="btn-hero-primary" style="padding: 10px 24px; font-size: 14px;">
                        <span>Baca Selengkapnya</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="about-img-grid">
                        @if(!empty($tentang->gambar1))
                            <div class="about-img-item about-img-span">
                                <img src="{{ Storage::url($tentang->gambar1) }}" alt="Tentang BUMDes 1" loading="lazy">
                            </div>
                        @endif
                        @if(!empty($tentang->gambar2))
                            <div class="about-img-item" style="height: 160px;">
                                <img src="{{ Storage::url($tentang->gambar2) }}" alt="Tentang BUMDes 2" loading="lazy">
                            </div>
                        @endif
                        @if(!empty($tentang->gambar3))
                            <div class="about-img-item" style="height: 160px;">
                                <img src="{{ Storage::url($tentang->gambar3) }}" alt="Tentang BUMDes 3" loading="lazy">
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>

    </div>
</section><!-- /About Section -->
