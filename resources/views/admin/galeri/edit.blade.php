@extends('admin.main-layout')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <div class="d-flex align-items-center justify-content-between pt-3 pb-2 mb-3 border-bottom">
                <div>
                    <h4 class="card-title p-0 mb-1 fw-bold">Edit Foto Galeri</h4>
                    <p class="text-muted small mb-0">Ubah data dokumentasi foto</p>
                </div>
                <a href="{{ route('galeri.index') }}" class="btn btn-outline-secondary rounded-pill px-3">
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

            <form action="{{ route('galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row g-3">
                    
                    <div class="col-md-8">
                        <label for="nama" class="form-label fw-semibold">Nama Kegiatan / Judul Foto <span class="text-danger">*</span></label>
                        <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $galeri->nama) }}" required>
                    </div>

                    <div class="col-md-4">
                        <label for="tanggal" class="form-label fw-semibold">Tanggal Kegiatan <span class="text-danger">*</span></label>
                        <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ old('tanggal', $galeri->tanggal) }}" required>
                    </div>

                    <div class="col-md-6">
                        <label for="gambar" class="form-label fw-semibold">File Foto</label>
                        @if(!empty($galeri->gambar))
                            <div class="mb-2">
                                <img src="{{ Storage::url($galeri->gambar) }}" alt="Current Image" class="rounded border" style="max-height: 120px;">
                            </div>
                        @endif
                        <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*">
                        <small class="text-muted">Biarkan kosong jika tidak ingin mengganti foto.</small>
                    </div>

                    <div class="col-md-6">
                        <label for="status" class="form-label fw-semibold">Status Tampilan <span class="text-danger">*</span></label>
                        <select name="status" id="status" class="form-select" required>
                            <option value="tampil" {{ old('status', $galeri->status) == 'tampil' ? 'selected' : '' }}>Tampil di Website</option>
                            <option value="sembunyi" {{ old('status', $galeri->status) == 'sembunyi' ? 'selected' : '' }}>Sembunyikan</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="keterangan" class="form-label fw-semibold">Keterangan / Deskripsi Singkat</label>
                        <textarea name="keterangan" id="keterangan" rows="3" class="form-control">{{ old('keterangan', $galeri->keterangan) }}</textarea>
                    </div>

                    <div class="col-12 mt-4 text-end">
                        <a href="{{ route('galeri.index') }}" class="btn btn-light me-2">Batal</a>
                        <button type="submit" class="btn btn-warning px-4">
                            <i class="bi bi-save me-1"></i> Perbarui Galeri
                        </button>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>
@endsection
