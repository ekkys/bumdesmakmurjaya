@extends('admin.main-layout')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <div class="d-flex align-items-center justify-content-between pt-3 pb-2 mb-3 border-bottom">
                <div>
                    <h4 class="card-title p-0 mb-1 fw-bold">Edit Profil Tentang Kami</h4>
                    <p class="text-muted small mb-0">Perbarui profil dan 3 foto tentang BUMDes</p>
                </div>
                <a href="{{ route('tentang.index') }}" class="btn btn-outline-secondary rounded-pill px-3">
                    <i class="bi bi-arrow-left me-1"></i> Kembali
                </a>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('tentang.update', $tentang->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row g-3">
                    
                    <div class="col-12">
                        <label for="judul" class="form-label fw-semibold">Judul Profil <span class="text-danger">*</span></label>
                        <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul', $tentang->judul) }}" required>
                    </div>

                    <div class="col-md-4">
                        <label for="gambar1" class="form-label fw-semibold">Foto 1 (Utama)</label>
                        @if(!empty($tentang->gambar1))
                            <div class="mb-2">
                                <img src="{{ Storage::url($tentang->gambar1) }}" alt="Foto 1" class="rounded border" style="max-height: 80px;">
                            </div>
                        @endif
                        <input type="file" name="gambar1" id="gambar1" class="form-control" accept="image/*">
                        <small class="text-muted">Ganti foto 1</small>
                    </div>

                    <div class="col-md-4">
                        <label for="gambar2" class="form-label fw-semibold">Foto 2</label>
                        @if(!empty($tentang->gambar2))
                            <div class="mb-2">
                                <img src="{{ Storage::url($tentang->gambar2) }}" alt="Foto 2" class="rounded border" style="max-height: 80px;">
                            </div>
                        @endif
                        <input type="file" name="gambar2" id="gambar2" class="form-control" accept="image/*">
                        <small class="text-muted">Ganti foto 2</small>
                    </div>

                    <div class="col-md-4">
                        <label for="gambar3" class="form-label fw-semibold">Foto 3</label>
                        @if(!empty($tentang->gambar3))
                            <div class="mb-2">
                                <img src="{{ Storage::url($tentang->gambar3) }}" alt="Foto 3" class="rounded border" style="max-height: 80px;">
                            </div>
                        @endif
                        <input type="file" name="gambar3" id="gambar3" class="form-control" accept="image/*">
                        <small class="text-muted">Ganti foto 3</small>
                    </div>

                    <div class="col-12">
                        <label for="deskripsi" class="form-label fw-semibold">Deskripsi Profil & Visi Misi <span class="text-danger">*</span></label>
                        <textarea name="deskripsi" id="deskripsi" rows="8" class="form-control" required>{{ old('deskripsi', $tentang->deskripsi) }}</textarea>
                    </div>

                    <div class="col-12 mt-4 text-end">
                        <a href="{{ route('tentang.index') }}" class="btn btn-light me-2">Batal</a>
                        <button type="submit" class="btn btn-warning px-4">
                            <i class="bi bi-save me-1"></i> Perbarui Profil
                        </button>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>
@endsection
