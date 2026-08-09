<!-- Kontak Section -->
<section id="contact" class="contact section" style="padding: 70px 0;">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <span class="section-badge">
                <i class="bi bi-geo-alt-fill"></i> Hubungi Kami
            </span>
            <h2>Informasi Kontak & Lokasi</h2>
            <p>Silakan berkunjung langsung ke kantor operasional kami atau hubungi kami melalui saluran komunikasi berikut</p>
        </div>

        @php
            $kontak = $kontaks->first();
        @endphp

        <div class="row gy-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-card">
                    <div class="contact-icon-box">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <h5 class="fw-bold">Alamat Kantor</h5>
                    <p class="text-muted mb-0">{{ $kontak->alamat ?? 'Jl. Dusun Tundungan, Sidomojo, Kec. Krian, Kab. Sidoarjo, Jawa Timur' }}</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="contact-info-card">
                    <div class="contact-icon-box">
                        <i class="bi bi-whatsapp"></i>
                    </div>
                    <h5 class="fw-bold">WhatsApp / Telepon</h5>
                    <p class="text-muted mb-2">{{ $kontak->telpon ?? '+62 815-1111-9337' }}</p>
                    <a href="https://wa.me/6281511119337" target="_blank" class="btn btn-sm btn-outline-success rounded-pill px-3">
                        <i class="bi bi-chat-dots me-1"></i> Kirim Pesan WhatsApp
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="contact-info-card">
                    <div class="contact-icon-box">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <h5 class="fw-bold">Email Resmi</h5>
                    <p class="text-muted mb-2">{{ $kontak->email ?? 'bumdessidomojo1@gmail.com' }}</p>
                    <a href="mailto:{{ $kontak->email ?? 'bumdessidomojo1@gmail.com' }}" class="btn btn-sm btn-outline-secondary rounded-pill px-3">
                        <i class="bi bi-envelope-open me-1"></i> Kirim Email
                    </a>
                </div>
            </div>

        </div>

        @if(!empty($kontak->maps))
            <div class="map-card-wrapper" data-aos="fade-up" data-aos-delay="200">
                <iframe src="{{ $kontak->maps }}" 
                        width="100%" 
                        height="400" 
                        style="border:0; display:block;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        @endif

    </div>
</section><!-- /Kontak Section -->
