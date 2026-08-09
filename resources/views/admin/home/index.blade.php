@extends('admin.main-layout')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">
            
            <div class="d-flex align-items-center justify-content-between pt-3 pb-2 mb-3 border-bottom">
                <div>
                    <h4 class="card-title p-0 mb-1 fw-bold">Banner & Hero Beranda</h4>
                    <p class="text-muted small mb-0">Kelola gambar latar belakang hero, logo, judul utama, slogan, dan video profil</p>
                </div>
                @if($homes->isEmpty())
                    <a href="{{ route('home.create') }}" class="btn btn-success rounded-pill px-3">
                        <i class="bi bi-plus-circle me-1"></i> Tambah Banner
                    </a>
                @endif
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle me-1"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="bi bi-exclamation-triangle me-1"></i> {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th style="width: 50px;">No</th>
                            <th style="width: 140px;">Gambar Background Hero</th>
                            <th style="width: 90px;">Logo</th>
                            <th>Judul Utama</th>
                            <th>Kutipan / Slogan</th>
                            <th>Hashtag</th>
                            <th style="width: 120px;" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($homes as $home)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img src="{{ $home->hero_bg_url }}" alt="Hero Background" class="rounded shadow-sm border" style="width: 120px; height: 65px; object-fit: cover;">
                                </td>
                                <td>
                                    @if(!empty($home->gambar))
                                        <img src="{{ Storage::url($home->gambar) }}" alt="{{ $home->judul }}" class="rounded p-1 bg-light border" style="max-height: 45px; max-width: 70px; object-fit: contain;">
                                    @else
                                        <span class="text-muted small">Default</span>
                                    @endif
                                </td>
                                <td><strong class="text-dark">{{ $home->judul }}</strong></td>
                                <td><small class="text-muted">{{ $home->quote }}</small></td>
                                <td><span class="badge bg-light text-success border">{{ $home->hashtag }}</span></td>
                                <td class="text-center">
                                    <a href="{{ route('home.edit', $home->id) }}" class="btn btn-sm btn-outline-warning" title="Edit Data & Ganti Gambar">
                                        <i class="bi bi-pencil-square me-1"></i> Edit
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-4 text-muted">Belum ada data banner home.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection
