@extends('admin.main-layout')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">
            
            <div class="d-flex align-items-center justify-content-between pt-3 pb-2 mb-3 border-bottom">
                <div>
                    <h4 class="card-title p-0 mb-1 fw-bold">Manajemen Tarif & Retribusi</h4>
                    <p class="text-muted small mb-0">Kelola daftar paket biaya layanan untuk masyarakat</p>
                </div>
                <a href="{{ route('biaya.create') }}" class="btn btn-success rounded-pill px-3">
                    <i class="bi bi-plus-circle me-1"></i> Tambah Paket Biaya
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
                            <th>Nama Paket</th>
                            <th>Kategori</th>
                            <th>Nominal Tarif</th>
                            <th>Satuan Periode</th>
                            <th>Highlight</th>
                            <th style="width: 130px;" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($biayas as $biaya)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><strong class="text-dark">{{ $biaya->nama }}</strong></td>
                                <td><span class="badge bg-light text-dark border">{{ strtoupper($biaya->kategori) }}</span></td>
                                <td><span class="text-success fw-bold">Rp {{ $biaya->nominal }}</span></td>
                                <td><small class="text-muted">{{ $biaya->satuan }}</small></td>
                                <td>
                                    @if($biaya->keterangan != '-')
                                        <span class="badge bg-primary">{{ $biaya->keterangan }}</span>
                                    @else
                                        <span class="text-muted small">-</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <div class="btn-group btn-group-sm">
                                        <a href="{{ route('biaya.edit', $biaya->id) }}" class="btn btn-outline-warning" title="Edit">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <form action="{{ route('biaya.destroy', $biaya->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus paket biaya ini?')">
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
                                <td colspan="7" class="text-center py-4 text-muted">Belum ada paket biaya layanan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection
