@extends('admin.main-layout')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">
            
            <div class="d-flex align-items-center justify-content-between pt-3 pb-2 mb-3 border-bottom">
                <div>
                    <h4 class="card-title p-0 mb-1 fw-bold">Banner & Hero Beranda</h4>
                    <p class="text-muted small mb-0">Kelola teks judul utama, slogan, dan video hero website</p>
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
                            <th style="width: 100px;">Logo/Gambar</th>
                            <th>Judul Utama</th>
                            <th>Kutipan / Slogan</th>
                            <th>Hashtag</th>
                            <th style="width: 130px;" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($homes as $home)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    @if(!empty($home->gambar))
                                        <img src="{{ Storage::url($home->gambar) }}" alt="{{ $home->judul }}" class="rounded p-1 bg-light border" style="max-height: 50px; max-width: 80px; object-fit: contain;">
                                    @else
                                        <span class="text-muted small">No Image</span>
                                    @endif
                                </td>
                                <td><strong class="text-dark">{{ $home->judul }}</strong></td>
                                <td><small class="text-muted">{{ $home->quote }}</small></td>
                                <td><span class="badge bg-light text-success border">{{ $home->hashtag }}</span></td>
                                <td class="text-center">
                                    <a href="{{ route('home.edit', $home->id) }}" class="btn btn-sm btn-outline-warning" title="Edit">
                                        <i class="bi bi-pencil-square me-1"></i> Edit
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-4 text-muted">Belum ada banner home.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection
