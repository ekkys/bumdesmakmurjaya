@extends('admin.main-layout')

@section('content')
<div class="col-12">
    <div class="pagetitle mb-4">
        <h1 class="fw-bold">Dashboard Admin</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Admin</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>

    <!-- Stats Cards Row -->
    <div class="row g-3 mb-4">
        
        <!-- Total Berita -->
        <div class="col-xxl-3 col-md-6">
            <div class="card info-card sales-card shadow-sm h-100">
                <div class="card-body p-3">
                    <h5 class="card-title text-muted small text-uppercase fw-bold p-0 mb-2">Total Berita</h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-primary bg-opacity-10 text-primary p-3">
                            <i class="bi bi-newspaper fs-3"></i>
                        </div>
                        <div class="ps-3">
                            <h4 class="fw-bold mb-0">{{ $totalBerita }}</h4>
                            <span class="text-muted small">Artikel diterbitkan</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Unit Usaha -->
        <div class="col-xxl-3 col-md-6">
            <div class="card info-card revenue-card shadow-sm h-100">
                <div class="card-body p-3">
                    <h5 class="card-title text-muted small text-uppercase fw-bold p-0 mb-2">Unit Usaha</h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-success bg-opacity-10 text-success p-3">
                            <i class="bi bi-buildings fs-3"></i>
                        </div>
                        <div class="ps-3">
                            <h4 class="fw-bold mb-0">{{ $totalUnit }}</h4>
                            <span class="text-muted small">Unit bisnis aktif</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Layanan -->
        <div class="col-xxl-3 col-md-6">
            <div class="card info-card customers-card shadow-sm h-100">
                <div class="card-body p-3">
                    <h5 class="card-title text-muted small text-uppercase fw-bold p-0 mb-2">Layanan BUMDes</h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-info bg-opacity-10 text-info p-3">
                            <i class="bi bi-truck fs-3"></i>
                        </div>
                        <div class="ps-3">
                            <h4 class="fw-bold mb-0">{{ $totalLayanan }}</h4>
                            <span class="text-muted small">Jenis layanan</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Visitors -->
        <div class="col-xxl-3 col-md-6">
            <div class="card info-card shadow-sm h-100">
                <div class="card-body p-3">
                    <h5 class="card-title text-muted small text-uppercase fw-bold p-0 mb-2">Kunjungan Web</h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-warning bg-opacity-10 text-warning p-3">
                            <i class="bi bi-people fs-3"></i>
                        </div>
                        <div class="ps-3">
                            <h4 class="fw-bold mb-0">{{ number_format($totalVisitors, 0, ',', '.') }}</h4>
                            <span class="text-muted small">Total hits</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Quick Links & Latest News -->
    <div class="row g-4">
        
        <!-- Latest News Table -->
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between pt-3 pb-2 mb-3 border-bottom">
                        <h5 class="card-title p-0 m-0 fw-bold">Berita & Artikel Terbaru</h5>
                        <a href="{{ route('berita.index') }}" class="btn btn-sm btn-outline-primary rounded-pill px-3">Lihat Semua</a>
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($latestBerita as $berita)
                                    <tr>
                                        <td>
                                            <a href="{{ route('berita.edit', $berita->id) }}" class="fw-semibold text-dark text-decoration-none">
                                                {{ Str::limit($berita->judul, 45) }}
                                            </a>
                                        </td>
                                        <td><span class="badge bg-light text-dark border">{{ $berita->kategori }}</span></td>
                                        <td><small class="text-muted">{{ $berita->tanggal_publikasi->format('d M Y') }}</small></td>
                                        <td>
                                            @if($berita->status == 'publish')
                                                <span class="badge bg-success">Publish</span>
                                            @else
                                                <span class="badge bg-warning text-dark">Draft</span>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center py-3 text-muted">Belum ada berita.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions Panel -->
        <div class="col-lg-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title pt-3 pb-2 mb-3 border-bottom fw-bold">Aksi Cepat</h5>
                    <div class="d-grid gap-2">
                        <a href="{{ route('berita.create') }}" class="btn btn-primary text-start">
                            <i class="bi bi-plus-circle me-2"></i> Tulis Berita Baru
                        </a>
                        <a href="{{ route('galeri.create') }}" class="btn btn-outline-success text-start">
                            <i class="bi bi-images me-2"></i> Tambah Foto Galeri
                        </a>
                        <a href="{{ route('klien.create') }}" class="btn btn-outline-secondary text-start">
                            <i class="bi bi-person-plus me-2"></i> Tambah Mitra / Klien
                        </a>
                        <a href="{{ route('website.index') }}" target="_blank" class="btn btn-light text-start border">
                            <i class="bi bi-globe me-2"></i> Pratinjau Website Publik
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
