@extends('admin.main-layout')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">
            
            <div class="d-flex align-items-center justify-content-between pt-3 pb-2 mb-3 border-bottom">
                <div>
                    <h4 class="card-title p-0 mb-1 fw-bold">Kontak, Alamat & Sosial Media</h4>
                    <p class="text-muted small mb-0">Kelola informasi kontak, alamat kantor, dan tautan sosial media resmi BUMDes</p>
                </div>
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
                            <th>Alamat Kantor</th>
                            <th>WhatsApp / Telepon</th>
                            <th>Email</th>
                            <th style="width: 130px;" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($kontaks as $kontak)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><small class="text-dark">{{ $kontak->alamat }}</small></td>
                                <td><strong class="text-success"><i class="bi bi-whatsapp me-1"></i>{{ $kontak->telpon }}</strong></td>
                                <td><small class="text-muted"><i class="bi bi-envelope me-1"></i>{{ $kontak->email }}</small></td>
                                <td class="text-center">
                                    <a href="{{ route('kontak.edit', $kontak->id) }}" class="btn btn-sm btn-outline-warning" title="Edit">
                                        <i class="bi bi-pencil-square me-1"></i> Edit
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-4 text-muted">Belum ada data kontak.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection
