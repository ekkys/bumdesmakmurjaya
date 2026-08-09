@extends('admin.main-layout')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">
            
            <div class="d-flex align-items-center justify-content-between pt-3 pb-2 mb-3 border-bottom">
                <div>
                    <h4 class="card-title p-0 mb-1 fw-bold">Profil Tentang Kami</h4>
                    <p class="text-muted small mb-0">Kelola deskripsi profil, visi misi, dan 3 foto dokumentasi tentang BUMDes</p>
                </div>
                @if($tentangs->isEmpty())
                    <a href="{{ route('tentang.create') }}" class="btn btn-success rounded-pill px-3">
                        <i class="bi bi-plus-circle me-1"></i> Tambah Profil
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
                            <th style="width: 140px;">Foto Profil</th>
                            <th>Judul Profil</th>
                            <th>Deskripsi Ringkas</th>
                            <th style="width: 130px;" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($tentangs as $tentang)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <div class="d-flex gap-1">
                                        @if(!empty($tentang->gambar1))
                                            <img src="{{ Storage::url($tentang->gambar1) }}" alt="Foto 1" class="rounded border" style="width: 35px; height: 35px; object-fit: cover;">
                                        @endif
                                        @if(!empty($tentang->gambar2))
                                            <img src="{{ Storage::url($tentang->gambar2) }}" alt="Foto 2" class="rounded border" style="width: 35px; height: 35px; object-fit: cover;">
                                        @endif
                                        @if(!empty($tentang->gambar3))
                                            <img src="{{ Storage::url($tentang->gambar3) }}" alt="Foto 3" class="rounded border" style="width: 35px; height: 35px; object-fit: cover;">
                                        @endif
                                    </div>
                                </td>
                                <td><strong class="text-dark">{{ $tentang->judul }}</strong></td>
                                <td><small class="text-muted">{{ Str::limit(strip_tags($tentang->deskripsi), 90) }}</small></td>
                                <td class="text-center">
                                    <a href="{{ route('tentang.edit', $tentang->id) }}" class="btn btn-sm btn-outline-warning" title="Edit">
                                        <i class="bi bi-pencil-square me-1"></i> Edit
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-4 text-muted">Belum ada data tentang kami.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection
