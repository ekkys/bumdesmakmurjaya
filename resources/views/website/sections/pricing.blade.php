<!-- Biaya Layanan Section -->
<section id="pricing" class="pricing section" style="padding: 70px 0; background: var(--bumdes-light);">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <span class="section-badge">
                <i class="bi bi-tag-fill"></i> Tarif Terjangkau
            </span>
            <h2>Biaya Layanan & Retribusi</h2>
            <p>Pilihan paket retribusi transparan dan terjangkau untuk rumah tangga maupun pelaku usaha</p>
        </div>

        <div class="row gy-4 justify-content-center" data-aos="fade-up" data-aos-delay="100">
            @forelse ($biayas as $biaya)
                @php
                    $isFeatured = (!empty($biaya->keterangan) && $biaya->keterangan != '-');
                    $waText = "Assalamu'alaikum, saya ingin bertanya tentang paket " . urlencode($biaya->nama);
                @endphp
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card {{ $isFeatured ? 'featured' : '' }}">
                        @if ($isFeatured)
                            <div class="pricing-ribbon">
                                <i class="bi bi-star-fill me-1"></i> {{ $biaya->keterangan }}
                            </div>
                        @endif

                        <h3>{{ $biaya->nama }}</h3>
                        
                        <div class="pricing-amount">
                            <span class="currency">Rp</span>
                            <span class="price">{{ $biaya->nominal }}</span>
                            <span class="period">/ {{ $biaya->satuan }}</span>
                        </div>

                        <div class="pricing-features">
                            {!! html_entity_decode($biaya->item_layanan) !!}
                        </div>

                        <div class="mt-auto">
                            <a href="https://wa.me/6281511119337?text={{ $waText }}" target="_blank" class="btn-pricing">
                                <i class="bi bi-whatsapp"></i> Hubungi Layanan
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center text-muted py-4">Belum ada data biaya layanan.</div>
            @endforelse
        </div>

    </div>
</section><!-- /Pricing Section -->
