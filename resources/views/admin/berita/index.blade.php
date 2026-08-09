@extends('admin.main-layout')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">
            
            <div class="d-flex flex-wrap align-items-center justify-content-between pt-3 pb-2 mb-3 border-bottom">
                <div>
                    <h4 class="card-title p-0 mb-1 fw-bold">Manajemen Berita & Artikel</h4>
                    <p class="text-muted small mb-0">Kelola publikasi berita, artikel, dan pengumuman BUMDes</p>
                </div>
                <a href="{{ route('berita.create') }}" class="btn btn-success rounded-pill px-3">
                    <i class="bi bi-plus-circle me-1"></i> Tulis Berita Baru
                </a>
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

            <!-- Filter & Search Form -->
            <form method="GET" action="{{ route('berita.index') }}" class="row g-2 mb-3">
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-search"></i></span>
                        <input type="text" name="search" class="form-control" placeholder="Cari judul berita atau penulis..." value="{{ request('search') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <select name="status" class="form-select" onchange="this.form.submit()">
                        <option value="">-- Semua Status --</option>
                        <option value="publish" {{ request('status') == 'publish' ? 'selected' : '' }}>Published</option>
                        <option value="draft" {{ request('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary w-100">Filter</button>
                </div>
                @if(request('search') || request('status'))
                    <div class="col-md-2">
                        <a href="{{ route('berita.index') }}" class="btn btn-outline-secondary w-100">Reset</a>
                    </div>
                @endif
            </form>

            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th style="width: 50px;">No</th>
                            <th style="width: 100px;">Gambar</th>
                            <th>Judul Berita</th>
                            <th>Kategori</th>
                            <th>Penulis</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th style="width: 150px;" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($beritas as $index => $item)
                            <tr>
                                <td>{{ $beritas->firstItem() + $index }}</td>
                                <td>
                                    @if(!empty($item->gambar))
                                        <img src="{{ Storage::url($item->gambar) }}" alt="{{ $item->judul }}" class="rounded" style="width: 70px; height: 50px; object-fit: cover;">
                                    @else
                                        <div class="bg-light rounded d-flex align-items-center justify-content-center text-muted border" style="width: 70px; height: 50px; font-size: 11px;">
                                            No Image
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <span class="fw-bold text-dark d-block">{{ $item->judul }}</span>
                                    <small class="text-muted">{{ Str::limit($item->excerpt, 60) }}</small>
                                </td>
                                <td><span class="badge bg-light text-dark border">{{ $item->kategori }}</span></td>
                                <td><small class="text-muted"><i class="bi bi-person me-1"></i>{{ $item->penulis }}</small></td>
                                <td><small>{{ $item->tanggal_publikasi->format('d M Y') }}</small></td>
                                <td>
                                    @if($item->status == 'publish')
                                        <span class="badge bg-success"><i class="bi bi-check2 me-1"></i>Publish</span>
                                    @else
                                        <span class="badge bg-warning text-dark"><i class="bi bi-pencil me-1"></i>Draft</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <div class="btn-group btn-group-sm" role="group">
                                        <a href="{{ route('berita.edit', $item->id) }}" class="btn btn-outline-warning" title="Edit Berita">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <form action="{{ route('berita.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger" title="Hapus Berita">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center py-4 text-muted">
                                    <i class="bi bi-newspaper fs-1 d-block mb-2 text-secondary"></i>
                                    Belum ada data berita yang tersedia.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-end mt-3">
                {{ $beritas->links('pagination::bootstrap-5') }}
            </div>

        </div>
    </div>
</div>
@endsection
