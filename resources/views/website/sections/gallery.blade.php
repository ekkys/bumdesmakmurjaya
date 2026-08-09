<!-- Galeri Kegiatan Section -->
<section id="services" class="services section" style="padding: 70px 0;">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <span class="section-badge">
                <i class="bi bi-camera-fill"></i> Dokumentasi
            </span>
            <h2>Galeri Kegiatan</h2>
            <p>Dokumentasi aktivitas, program pemberdayaan, dan operasional BUMDes Makmur Jaya</p>
        </div>

        @if($galeris->isNotEmpty())
            <div class="gallery-container" data-aos="fade-up" data-aos-delay="100">
                <div id="carouselGaleri" class="carousel slide" data-bs-ride="carousel">
                    
                    <!-- Indicators -->
                    <div class="carousel-indicators">
                        @foreach ($galeris as $index => $galeri)
                            <button type="button" 
                                    data-bs-target="#carouselGaleri" 
                                    data-bs-slide-to="{{ $index }}" 
                                    class="{{ $index == 0 ? 'active' : '' }}" 
                                    aria-current="{{ $index == 0 ? 'true' : 'false' }}" 
                                    aria-label="Slide {{ $index + 1 }}">
                            </button>
                        @endforeach
                    </div>

                    <!-- Slides -->
                    <div class="carousel-inner">
                        @foreach ($galeris as $index => $galeri)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <div class="gallery-carousel-item">
                                    <img src="{{ Storage::url($galeri->gambar) }}" alt="{{ $galeri->nama }}" loading="lazy">
                                    <div class="gallery-caption-overlay">
                                        <h4>{{ $galeri->nama }}</h4>
                                        <p><i class="bi bi-calendar3 me-1"></i> {{ $galeri->tanggal ?? 'Kegiatan BUMDes' }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselGaleri" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselGaleri" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                </div>
            </div>
        @else
            <div class="text-center text-muted py-4">Belum ada galeri foto.</div>
        @endif

    </div>
</section><!-- /Galeri Section -->
