@extends('admin.main-layout')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <div class="d-flex align-items-center justify-content-between pt-3 pb-2 mb-3 border-bottom">
                <div>
                    <h4 class="card-title p-0 mb-1 fw-bold">Tambah Banner & Background Hero</h4>
                    <p class="text-muted small mb-0">Isi data judul utama, background hero, dan logo BUMDes</p>
                </div>
                <a href="{{ route('home.index') }}" class="btn btn-outline-secondary rounded-pill px-3">
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

            <form action="{{ route('home.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row g-3">
                    
                    <div class="col-md-12">
                        <div class="p-3 bg-light rounded-3 border">
                            <label for="hero_background" class="form-label fw-bold text-dark fs-6 mb-1">
                                <i class="bi bi-image text-primary me-1"></i> Gambar Latar Belakang Section Hero (Background)
                            </label>
                            <input type="file" name="hero_background" id="hero_background" class="form-control" accept="image/*">
                            <small class="text-muted">Format: JPG, PNG, WEBP (Maksimal 5MB). Resolusi rekomendasi: 1920x1080.</small>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="judul" class="form-label fw-semibold">Judul Utama (Nama BUMDes) <span class="text-danger">*</span></label>
                        <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul', 'Makmur Jaya') }}" required>
                    </div>

                    <div class="col-md-6">
                        <label for="hashtag" class="form-label fw-semibold">Hashtag / Slogan Pendukung <span class="text-danger">*</span></label>
                        <input type="text" name="hashtag" id="hashtag" class="form-control" value="{{ old('hashtag', '#MEMBANGUN INDONESIA DARI DESA') }}" required>
                    </div>

                    <div class="col-md-6">
                        <label for="link" class="form-label fw-semibold">Link Video Profil YouTube (Opsional)</label>
                        <input type="text" name="link" id="link" class="form-control" value="{{ old('link') }}" placeholder="https://youtube.com/watch?v=...">
                    </div>

                    <div class="col-md-6">
                        <label for="gambar" class="form-label fw-semibold">Logo BUMDes (Navbar)</label>
                        <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*">
                    </div>

                    <div class="col-12">
                        <label for="quote" class="form-label fw-semibold">Kutipan / Moto Utama <span class="text-danger">*</span></label>
                        <textarea name="quote" id="quote" rows="3" class="form-control" required>{{ old('quote', 'Berdayakan Desa, Majukan Usaha, Makmur Jaya!') }}</textarea>
                    </div>

                    <div class="col-12 mt-4 text-end">
                        <a href="{{ route('home.index') }}" class="btn btn-light me-2">Batal</a>
                        <button type="submit" class="btn btn-success px-4">
                            <i class="bi bi-save me-1"></i> Simpan Data Hero
                        </button>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>
@endsection
