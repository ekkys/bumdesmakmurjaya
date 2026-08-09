<!-- Hero Section -->
<section id="hero" class="hero">
    <div class="container text-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
            
            <div class="hero-badge-pill" data-aos="fade-down">
                <span class="pulse-dot"></span>
                <span>BUMDesa Makmur Jaya • Desa Sidomojo</span>
            </div>

            <h1 data-aos="fade-up" data-aos-delay="100">
                BUMDesa <span class="gradient-text">{{ $home->judul ?? 'Makmur Jaya' }}</span>
            </h1>

            <div class="hero-quote-card" data-aos="fade-up" data-aos-delay="200">
                <p>"{{ $home->quote ?? 'Berdayakan Desa, Majukan Usaha, Makmur Jaya!' }}"</p>
                <span class="hashtag">{{ $home->hashtag ?? '#MEMBANGUN INDONESIA DARI DESA' }}</span>
            </div>

            <div class="hero-actions" data-aos="fade-up" data-aos-delay="300">
                <a href="#about" class="btn-hero-primary">
                    <span>Pelajari Lebih Lanjut</span>
                    <i class="bi bi-arrow-down-circle"></i>
                </a>
                @if(!empty($home->link))
                    <a href="{{ $home->link }}" target="_blank" class="btn-hero-video">
                        <i class="bi bi-youtube"></i>
                        <span>Tonton Video Profil</span>
                    </a>
                @endif
            </div>

        </div>
    </div>
</section><!-- /Hero Section -->
