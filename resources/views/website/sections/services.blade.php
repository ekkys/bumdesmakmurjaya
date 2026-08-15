<!-- Layanan Kami Section -->
<section id="features-details" class="features-details section" style="padding: 70px 0;">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <span class="section-badge">
                <i class="bi bi-gear-wide-connected"></i>Produk & Layanan Unggulan
            </span>
            <h2>Produk & Layanan</h2>
            <p>Solusi pengolahan sampah terpadu, pemusnahan dokumen resmi, dan pengangkutan profesional</p>
        </div>

        <div class="row gy-4">
            @forelse ($layananTps as $layanan)
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                    <div class="service-feature-card h-100 d-flex flex-column">
                        @if(!empty($layanan->gambar))
                            <div class="service-img-wrapper mb-3">
                                <img src="{{ Storage::url($layanan->gambar) }}" alt="{{ $layanan->nama }}" loading="lazy">
                            </div>
                        @endif
                        <h4 class="fw-bold mb-2">{{ $layanan->nama }}</h4>
                        <p class="text-muted flex-grow-1">{{ $layanan->ringkasan }}</p>
                        <div class="pt-2">
                            @php
                                $layananRoute = route('website.index');
                                if (str_contains(strtolower($layanan->nama), 'angkut') || str_contains(strtolower($layanan->nama), 'pengangkutan')) {
                                    $layananRoute = route('pengangkutan.detail');
                                } elseif (str_contains(strtolower($layanan->nama), 'beli') || str_contains(strtolower($layanan->nama), 'pembelian')) {
                                    $layananRoute = route('pembelian.detail');
                                } elseif (str_contains(strtolower($layanan->nama), 'musnah') || str_contains(strtolower($layanan->nama), 'pemusnahan')) {
                                    $layananRoute = route('pemusnahan.detail');
                                } elseif (!empty($layanan->link)) {
                                    $layananRoute = $layanan->link;
                                }
                            @endphp
                            <a href="{{ $layananRoute }}" class="btn btn-sm btn-outline-success rounded-pill px-3">
                                Pelajari Layanan <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center text-muted py-4">Belum ada data layanan.</div>
            @endforelse
        </div>

    </div>
</section><!-- /Layanan Kami Section -->