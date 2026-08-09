@extends('admin.main-layout')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <div class="d-flex align-items-center justify-content-between pt-3 pb-2 mb-3 border-bottom">
                <div>
                    <h4 class="card-title p-0 mb-1 fw-bold">Edit Berita</h4>
                    <p class="text-muted small mb-0">Ubah detail dan konten artikel berita</p>
                </div>
                <a href="{{ route('berita.index') }}" class="btn btn-outline-secondary rounded-pill px-3">
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

            <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row g-3">
                    
                    <div class="col-md-8">
                        <label for="judul" class="form-label fw-semibold">Judul Berita <span class="text-danger">*</span></label>
                        <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul', $berita->judul) }}" required>
                    </div>

                    <div class="col-md-4">
                        <label for="kategori" class="form-label fw-semibold">Kategori <span class="text-danger">*</span></label>
                        <select name="kategori" id="kategori" class="form-select" required>
                            <option value="Kegiatan" {{ old('kategori', $berita->kategori) == 'Kegiatan' ? 'selected' : '' }}>Kegiatan</option>
                            <option value="Pengumuman" {{ old('kategori', $berita->kategori) == 'Pengumuman' ? 'selected' : '' }}>Pengumuman</option>
                            <option value="Lingkungan" {{ old('kategori', $berita->kategori) == 'Lingkungan' ? 'selected' : '' }}>Lingkungan</option>
                            <option value="Ekonomi Desa" {{ old('kategori', $berita->kategori) == 'Ekonomi Desa' ? 'selected' : '' }}>Ekonomi Desa</option>
                            <option value="Pemberdayaan" {{ old('kategori', $berita->kategori) == 'Pemberdayaan' ? 'selected' : '' }}>Pemberdayaan</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="penulis" class="form-label fw-semibold">Penulis / Kontributor <span class="text-danger">*</span></label>
                        <input type="text" name="penulis" id="penulis" class="form-control" value="{{ old('penulis', $berita->penulis) }}" required>
                    </div>

                    <div class="col-md-4">
                        <label for="tanggal_publikasi" class="form-label fw-semibold">Tanggal Publikasi <span class="text-danger">*</span></label>
                        <input type="date" name="tanggal_publikasi" id="tanggal_publikasi" class="form-control" value="{{ old('tanggal_publikasi', $berita->tanggal_publikasi->format('Y-m-d')) }}" required>
                    </div>

                    <div class="col-md-4">
                        <label for="status" class="form-label fw-semibold">Status Publikasi <span class="text-danger">*</span></label>
                        <select name="status" id="status" class="form-select" required>
                            <option value="publish" {{ old('status', $berita->status) == 'publish' ? 'selected' : '' }}>Publish (Tampilkan ke Publik)</option>
                            <option value="draft" {{ old('status', $berita->status) == 'draft' ? 'selected' : '' }}>Draft (Simpan sebagai Konsep)</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="gambar" class="form-label fw-semibold">Gambar Utama / Thumbnail</label>
                        @if(!empty($berita->gambar))
                            <div class="mb-2">
                                <img src="{{ Storage::url($berita->gambar) }}" alt="Current Image" class="rounded border" style="max-height: 140px;">
                                <small class="text-muted d-block mt-1">Gambar saat ini</small>
                            </div>
                        @endif
                        <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*">
                        <small class="text-muted">Biarkan kosong jika tidak ingin mengubah gambar.</small>
                    </div>

                    <div class="col-12">
                        <label for="ringkasan" class="form-label fw-semibold">Ringkasan Singkat</label>
                        <textarea name="ringkasan" id="ringkasan" rows="2" class="form-control">{{ old('ringkasan', $berita->ringkasan) }}</textarea>
                    </div>

                    <div class="col-12">
                        <label for="isi" class="form-label fw-semibold">Isi Lengkap Berita <span class="text-danger">*</span></label>
                        <textarea name="isi" id="isi" rows="10" class="form-control" required>{{ old('isi', $berita->isi) }}</textarea>
                    </div>

                    <div class="col-12 mt-4 text-end">
                        <a href="{{ route('berita.index') }}" class="btn btn-light me-2">Batal</a>
                        <button type="submit" class="btn btn-warning px-4">
                            <i class="bi bi-save me-1"></i> Perbarui Berita
                        </button>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>
@endsection
