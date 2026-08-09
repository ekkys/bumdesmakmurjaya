<footer id="footer" class="footer position-relative">
    <div class="container footer-top">
        <div class="row gy-4">
            
            <div class="col-lg-5 col-md-6 footer-about">
                <a href="{{ route('website.index') }}" class="logo d-flex align-items-center mb-3">
                    <span class="sitename">BUMDesa {{ $home->judul ?? 'Makmur Jaya' }}</span>
                </a>
                <p class="pe-lg-4" style="color: #cbd5e1;">
                    Badan Usaha Milik Desa Makmur Jaya, Desa Sidomojo, Kecamatan Krian, Kabupaten Sidoarjo. Berkomitmen dalam pemberdayaan ekonomi masyarakat dan pengelolaan lingkungan hidup berkelanjutan.
                </p>
                
                <div class="visitor-stat-badge">
                    <i class="bi bi-people-fill text-success"></i>
                    <span>Total Kunjungan: <strong class="text-white">{{ number_format(($visitors ?? 320) * 9, 0, ',', '.') }}</strong></span>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h5 class="text-white fw-bold mb-3">Tautan Cepat</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ route('website.index') }}#hero"><i class="bi bi-chevron-right me-1 text-success"></i> Beranda</a></li>
                    <li class="mb-2"><a href="{{ route('tentang.detail') }}"><i class="bi bi-chevron-right me-1 text-success"></i> Profil BUMDes</a></li>
                    <li class="mb-2"><a href="{{ route('legalitas.detail') }}"><i class="bi bi-chevron-right me-1 text-success"></i> Legalitas & Sertifikasi</a></li>
                    <li class="mb-2"><a href="{{ route('website.index') }}#features"><i class="bi bi-chevron-right me-1 text-success"></i> Unit Usaha</a></li>
                    <li class="mb-2"><a href="{{ route('website.index') }}#pricing"><i class="bi bi-chevron-right me-1 text-success"></i> Tarif Layanan</a></li>
                    <li class="mb-2"><a href="{{ route('berita.public.index') }}"><i class="bi bi-chevron-right me-1 text-success"></i> Berita & Artikel</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-12 footer-contact">
                <h5 class="text-white fw-bold mb-3">Kontak & Media Sosial</h5>
                @php
                    $kontak = $kontaks->first();
                @endphp
                <p class="mb-2" style="color: #cbd5e1;">
                    <i class="bi bi-geo-alt-fill me-2 text-success"></i>
                    {{ $kontak->alamat ?? 'Jl. Dusun Tundungan, Sidomojo, Krian, Sidoarjo' }}
                </p>
                <p class="mb-2" style="color: #cbd5e1;">
                    <i class="bi bi-telephone-fill me-2 text-success"></i>
                    {{ $kontak->telpon ?? '+62 815-1111-9337' }}
                </p>
                <p class="mb-3" style="color: #cbd5e1;">
                    <i class="bi bi-envelope-fill me-2 text-success"></i>
                    {{ $kontak->email ?? 'bumdessidomojo1@gmail.com' }}
                </p>

                @if($kontak)
                    <div class="social-links d-flex mt-3">
                        @if(!empty($kontak->facebook))
                            <a href="{{ $kontak->facebook }}" target="_blank" title="Facebook"><i class="bi bi-facebook"></i></a>
                        @endif
                        @if(!empty($kontak->instagram))
                            <a href="{{ $kontak->instagram }}" target="_blank" title="Instagram"><i class="bi bi-instagram"></i></a>
                        @endif
                        @if(!empty($kontak->whatsapp))
                            <a href="{{ $kontak->whatsapp }}" target="_blank" title="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                        @endif
                        @if(!empty($kontak->youtube))
                            <a href="{{ $kontak->youtube }}" target="_blank" title="YouTube"><i class="bi bi-youtube"></i></a>
                        @endif
                        @if(!empty($kontak->tiktok))
                            <a href="{{ $kontak->tiktok }}" target="_blank" title="TikTok"><i class="bi bi-tiktok"></i></a>
                        @endif
                    </div>
                @endif
            </div>

        </div>
    </div>

    <div class="container copyright text-center mt-4 pt-4 border-top border-secondary">
        <p class="mb-0" style="color: #94a3b8;">
            © {{ date('Y') }} <strong class="text-white">BUMDes Makmur Jaya Desa Sidomojo</strong>. All Rights Reserved.
        </p>
    </div>
</footer>
