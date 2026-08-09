@extends('admin.main-layout')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <div class="d-flex align-items-center justify-content-between pt-3 pb-2 mb-3 border-bottom">
                <div>
                    <h4 class="card-title p-0 mb-1 fw-bold">Edit Dokumen Legalitas</h4>
                    <p class="text-muted small mb-0">Perbarui data surat izin atau sertifikasi</p>
                </div>
                <a href="{{ route('legalitas.index') }}" class="btn btn-outline-secondary rounded-pill px-3">
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

            <form action="{{ route('legalitas.update', $legalitas->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row g-3">
                    
                    <div class="col-md-7">
                        <label for="nama" class="form-label fw-semibold">Nama Dokumen / Izin <span class="text-danger">*</span></label>
                        <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $legalitas->nama) }}" required>
                    </div>

                    <div class="col-md-5">
                        <label for="link" class="form-label fw-semibold">Tautan Dokumen</label>
                        <input type="text" name="link" id="link" class="form-control" value="{{ old('link', $legalitas->link) }}">
                    </div>

                    <div class="col-12">
                        <label for="gambar" class="form-label fw-semibold">File Gambar Sertifikat</label>
                        @if(!empty($legalitas->gambar))
                            <div class="mb-2">
                                <img src="{{ Storage::url($legalitas->gambar) }}" alt="Current Image" class="rounded border" style="max-height: 120px;">
                            </div>
                        @endif
                        <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*">
                        <small class="text-muted">Biarkan kosong jika tidak ingin mengubah berkas gambar.</small>
                    </div>

                    <div class="col-12">
                        <label for="deskripsi" class="form-label fw-semibold">Deskripsi Singkat</label>
                        <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control">{{ old('deskripsi', $legalitas->deskripsi) }}</textarea>
                    </div>

                    <div class="col-12 mt-4 text-end">
                        <a href="{{ route('legalitas.index') }}" class="btn btn-light me-2">Batal</a>
                        <button type="submit" class="btn btn-warning px-4">
                            <i class="bi bi-save me-1"></i> Perbarui Dokumen
                        </button>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>
@endsection
