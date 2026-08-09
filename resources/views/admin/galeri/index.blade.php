@extends('admin.main-layout')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">
            
            <div class="d-flex align-items-center justify-content-between pt-3 pb-2 mb-3 border-bottom">
                <div>
                    <h4 class="card-title p-0 mb-1 fw-bold">Galeri Dokumentasi Foto</h4>
                    <p class="text-muted small mb-0">Kelola foto-foto dokumentasi kegiatan BUMDes Makmur Jaya</p>
                </div>
                <a href="{{ route('galeri.create') }}" class="btn btn-success rounded-pill px-3">
                    <i class="bi bi-plus-circle me-1"></i> Tambah Foto Galeri
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
                            <th style="width: 120px;">Foto</th>
                            <th>Nama Kegiatan</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                            <th style="width: 130px;" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($galeris as $index => $galeri)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    @if(!empty($galeri->gambar))
                                        <img src="{{ Storage::url($galeri->gambar) }}" alt="{{ $galeri->nama }}" class="rounded shadow-sm" style="width: 80px; height: 55px; object-fit: cover;">
                                    @else
                                        <span class="text-muted small">Tidak ada</span>
                                    @endif
                                </td>
                                <td><strong class="text-dark">{{ $galeri->nama }}</strong></td>
                                <td><small class="text-muted">{{ $galeri->tanggal }}</small></td>
                                <td><small class="text-muted">{{ Str::limit($galeri->keterangan, 50) }}</small></td>
                                <td>
                                    @if($galeri->status == 'tampil')
                                        <span class="badge bg-success">Tampil</span>
                                    @else
                                        <span class="badge bg-secondary">Sembunyi</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <div class="btn-group btn-group-sm">
                                        <a href="{{ route('galeri.edit', $galeri->id) }}" class="btn btn-outline-warning" title="Edit">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <form action="{{ route('galeri.destroy', $galeri->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus foto galeri ini?')">
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
                                <td colspan="7" class="text-center py-4 text-muted">Belum ada foto dalam galeri.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection
