@extends('admin.main-layout')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <div class="d-flex align-items-center justify-content-between pt-3 pb-2 mb-3 border-bottom">
                <div>
                    <h4 class="card-title p-0 mb-1 fw-bold">Tambah Unit Usaha</h4>
                    <p class="text-muted small mb-0">Daftarkan unit usaha baru BUMDes Makmur Jaya</p>
                </div>
                <a href="{{ route('unit.index') }}" class="btn btn-outline-secondary rounded-pill px-3">
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

            <form action="{{ route('unit.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row g-3">
                    
                    <div class="col-md-8">
                        <label for="nama" class="form-label fw-semibold">Nama Unit Usaha <span class="text-danger">*</span></label>
                        <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}" required placeholder="Contoh: TPS 3R - Tempat Pengolahan Sampah Terpadu">
                    </div>

                    <div class="col-md-4">
                        <label for="kategori" class="form-label fw-semibold">Kategori Kode <span class="text-danger">*</span></label>
                        <input type="text" name="kategori" id="kategori" class="form-control" value="{{ old('kategori') }}" required placeholder="Contoh: tps, toko, peminjaman, pangan">
                    </div>

                    <div class="col-md-6">
                        <label for="link" class="form-label fw-semibold">Tautan / Link Halaman (Opsional)</label>
                        <input type="text" name="link" id="link" class="form-control" value="{{ old('link') }}" placeholder="https://...">
                    </div>

                    <div class="col-md-6">
                        <label for="gambar" class="form-label fw-semibold">Foto Unit Usaha (Maks 3MB) <span class="text-danger">*</span></label>
                        <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*" required>
                    </div>

                    <div class="col-12">
                        <label for="ringkasan" class="form-label fw-semibold">Ringkasan Singkat <span class="text-danger">*</span></label>
                        <textarea name="ringkasan" id="ringkasan" rows="2" class="form-control" required placeholder="Ringkasan 1-2 kalimat untuk kartu pratinjau...">{{ old('ringkasan') }}</textarea>
                    </div>

                    <div class="col-12">
                        <label for="deskripsi" class="form-label fw-semibold">Deskripsi Lengkap <span class="text-danger">*</span></label>
                        <textarea name="deskripsi" id="deskripsi" rows="6" class="form-control" required placeholder="Penjelasan lengkap profil dan fasilitas unit usaha...">{{ old('deskripsi') }}</textarea>
                    </div>

                    <div class="col-12 mt-4 text-end">
                        <a href="{{ route('unit.index') }}" class="btn btn-light me-2">Batal</a>
                        <button type="submit" class="btn btn-success px-4">
                            <i class="bi bi-save me-1"></i> Simpan Unit Usaha
                        </button>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>
@endsection
