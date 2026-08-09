@extends('admin.main-layout')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <div class="d-flex align-items-center justify-content-between pt-3 pb-2 mb-3 border-bottom">
                <div>
                    <h4 class="card-title p-0 mb-1 fw-bold">Edit Layanan BUMDes</h4>
                    <p class="text-muted small mb-0">Perbarui data layanan</p>
                </div>
                <a href="{{ route('layanan.index') }}" class="btn btn-outline-secondary rounded-pill px-3">
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

            <form action="{{ route('layanan.update', $layanan->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row g-3">
                    
                    <div class="col-md-8">
                        <label for="nama" class="form-label fw-semibold">Nama Layanan <span class="text-danger">*</span></label>
                        <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $layanan->nama) }}" required>
                    </div>

                    <div class="col-md-4">
                        <label for="unit" class="form-label fw-semibold">Unit Pengelola <span class="text-danger">*</span></label>
                        <select name="unit" id="unit" class="form-select" required>
                            @foreach ($units as $u)
                                <option value="{{ $u->kategori }}" {{ old('unit', $layanan->unit) == $u->kategori ? 'selected' : '' }}>
                                    {{ $u->nama }} ({{ $u->kategori }})
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="link" class="form-label fw-semibold">Tautan / Link Halaman (Opsional)</label>
                        <input type="text" name="link" id="link" class="form-control" value="{{ old('link', $layanan->link) }}">
                    </div>

                    <div class="col-md-6">
                        <label for="gambar" class="form-label fw-semibold">Foto Layanan</label>
                        @if(!empty($layanan->gambar))
                            <div class="mb-2">
                                <img src="{{ Storage::url($layanan->gambar) }}" alt="Current Image" class="rounded border" style="max-height: 100px;">
                            </div>
                        @endif
                        <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*">
                        <small class="text-muted">Biarkan kosong jika tidak ingin mengubah foto.</small>
                    </div>

                    <div class="col-12">
                        <label for="ringkasan" class="form-label fw-semibold">Ringkasan Singkat <span class="text-danger">*</span></label>
                        <textarea name="ringkasan" id="ringkasan" rows="2" class="form-control" required>{{ old('ringkasan', $layanan->ringkasan) }}</textarea>
                    </div>

                    <div class="col-12">
                        <label for="deskripsi" class="form-label fw-semibold">Deskripsi Lengkap <span class="text-danger">*</span></label>
                        <textarea name="deskripsi" id="deskripsi" rows="6" class="form-control" required>{{ old('deskripsi', $layanan->deskripsi) }}</textarea>
                    </div>

                    <div class="col-12 mt-4 text-end">
                        <a href="{{ route('layanan.index') }}" class="btn btn-light me-2">Batal</a>
                        <button type="submit" class="btn btn-warning px-4">
                            <i class="bi bi-save me-1"></i> Perbarui Layanan
                        </button>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>
@endsection
