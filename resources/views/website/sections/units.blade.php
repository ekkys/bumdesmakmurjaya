<!-- Unit Usaha Section -->
<section id="features" class="features section" style="padding: 70px 0; background: var(--bumdes-light);">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <span class="section-badge">
                <i class="bi bi-grid-fill"></i> Sektor Bisnis
            </span>
            <h2>Unit Usaha BUMDes</h2>
            <p>Berbagai divisi dan unit usaha mandiri yang dikelola untuk memajukan perekonomian desa</p>
        </div>

        <div class="units-tab-container" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-4 align-items-center">

                <!-- Tab Navigation Buttons -->
                <div class="col-lg-5">
                    <div class="nav units-nav-tabs" id="units-tab" role="tablist">
                        @foreach ($units as $index => $unit)
                            @php
                                $icon = 'bi-buildings';
                                if (str_contains(strtolower($unit->kategori), 'tps')) $icon = 'bi-recycle';
                                elseif (str_contains(strtolower($unit->kategori), 'toko')) $icon = 'bi-shop';
                                elseif (str_contains(strtolower($unit->kategori), 'pinjam')) $icon = 'bi-cash-coin';
                                elseif (str_contains(strtolower($unit->kategori), 'pangan')) $icon = 'bi-basket';
                            @endphp
                            <button class="units-tab-btn {{ $index == 0 ? 'active' : '' }}" 
                                    id="unit-tab-{{ $unit->id }}" 
                                    data-bs-toggle="tab" 
                                    data-bs-target="#unit-content-{{ $unit->id }}" 
                                    type="button" 
                                    role="tab" 
                                    aria-selected="{{ $index == 0 ? 'true' : 'false' }}">
                                <div class="units-tab-icon">
                                    <i class="bi {{ $icon }}"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h5>{{ $unit->nama }}</h5>
                                    <p class="text-truncate" style="max-width: 260px;">{{ Str::limit($unit->ringkasan, 70) }}</p>
                                </div>
                            </button>
                        @endforeach
                    </div>
                </div>

                <!-- Tab Content Preview -->
                <div class="col-lg-7">
                    <div class="tab-content" id="units-tabContent">
                        @foreach ($units as $index => $unit)
                            <div class="tab-pane fade {{ $index == 0 ? 'show active' : '' }}" 
                                 id="unit-content-{{ $unit->id }}" 
                                 role="tabpanel">
                                <div class="unit-preview-card">
                                    @if(!empty($unit->gambar))
                                        <img src="{{ Storage::url($unit->gambar) }}" alt="{{ $unit->nama }}" class="unit-preview-img">
                                    @endif
                                    <div class="unit-preview-body">
                                        <h4 class="fw-bold mb-2">{{ $unit->nama }}</h4>
                                        <p class="text-muted mb-3">{{ $unit->ringkasan }}</p>
                                        <div class="d-flex gap-2">
                                            @php
                                                $detailRoute = route('unit.detail');
                                                if (str_contains(strtolower($unit->kategori), 'tps')) $detailRoute = route('tps3r.detail');
                                                elseif (str_contains(strtolower($unit->kategori), 'toko')) $detailRoute = route('toko.detail');
                                                elseif (str_contains(strtolower($unit->kategori), 'pinjam')) $detailRoute = route('pinjaman.detail');
                                                elseif (str_contains(strtolower($unit->kategori), 'pangan')) $detailRoute = route('pangan.detail');
                                            @endphp
                                            <a href="{{ $detailRoute }}" class="btn btn-sm btn-success rounded-pill px-3">
                                                Detail Unit Usaha <i class="bi bi-arrow-right ms-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>

    </div>
</section><!-- /Unit Usaha Section -->
