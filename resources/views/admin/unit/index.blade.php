@extends('admin.main-layout')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">
            
            <div class="d-flex align-items-center justify-content-between pt-3 pb-2 mb-3 border-bottom">
                <div>
                    <h4 class="card-title p-0 mb-1 fw-bold">Manajemen Unit Usaha</h4>
                    <p class="text-muted small mb-0">Kelola daftar unit usaha operasional BUMDes Makmur Jaya</p>
                </div>
                <a href="{{ route('unit.create') }}" class="btn btn-success rounded-pill px-3">
                    <i class="bi bi-plus-circle me-1"></i> Tambah Unit Usaha
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

            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th style="width: 50px;">No</th>
                            <th style="width: 100px;">Gambar</th>
                            <th>Nama Unit</th>
                            <th>Kategori</th>
                            <th>Ringkasan</th>
                            <th style="width: 130px;" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($units as $unit)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    @if(!empty($unit->gambar))
                                        <img src="{{ Storage::url($unit->gambar) }}" alt="{{ $unit->nama }}" class="rounded shadow-sm" style="width: 70px; height: 50px; object-fit: cover;">
                                    @else
                                        <span class="text-muted small">No Image</span>
                                    @endif
                                </td>
                                <td><strong class="text-dark">{{ $unit->nama }}</strong></td>
                                <td><span class="badge bg-light text-dark border">{{ $unit->kategori }}</span></td>
                                <td><small class="text-muted">{{ Str::limit($unit->ringkasan, 70) }}</small></td>
                                <td class="text-center">
                                    <div class="btn-group btn-group-sm">
                                        <a href="{{ route('unit.edit', $unit->id) }}" class="btn btn-outline-warning" title="Edit">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <form action="{{ route('unit.destroy', $unit->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus unit usaha ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger" title="Hapus">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-4 text-muted">Belum ada unit usaha.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection
