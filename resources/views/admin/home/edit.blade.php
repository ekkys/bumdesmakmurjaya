@extends('admin.main-layout')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <div class="d-flex align-items-center justify-content-between pt-3 pb-2 mb-3 border-bottom">
                <div>
                    <h4 class="card-title p-0 mb-1 fw-bold">Edit Banner & Background Hero</h4>
                    <p class="text-muted small mb-0">Ubah gambar background section hero, logo, judul utama, dan teks slogan</p>
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

            <form action="{{ route('home.update', $home->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row g-3">
                    
                    <!-- Hero Background Image Upload -->
                    <div class="col-md-12">
                        <div class="p-3 bg-light rounded-3 border">
                            <label for="hero_background" class="form-label fw-bold text-dark fs-6 mb-1">
                                <i class="bi bi-image text-primary me-1"></i> Gambar Latar Belakang Section Hero (Background)
                            </label>
                            <p class="text-muted small mb-2">Gambar ini akan menjadi pemandangan/background penuh di bagian paling atas halaman utama website.</p>
                            
                            <div class="row align-items-center g-3">
                                <div class="col-md-5">
                                    <img src="{{ $home->hero_bg_url }}" alt="Current Hero Background" class="img-fluid rounded-3 shadow-sm border w-100" style="max-height: 180px; object-fit: cover;">
                                    <small class="text-muted d-block mt-1 text-center"><i class="bi bi-check-circle-fill text-success me-1"></i> Gambar Background Saat Ini</small>
                                </div>
                                <div class="col-md-7">
                                    <input type="file" name="hero_background" id="hero_background" class="form-control" accept="image/*">
                                    <div class="form-text text-muted">
                                        <i class="bi bi-info-circle me-1"></i> Format: JPG, PNG, WEBP (Maksimal 5MB).<br>
                                        Disarankan gambar beresolusi tinggi / lanskap (Contoh: 1920 x 1080 piksel).<br>
                                        <span class="fst-italic text-secondary">Biarkan kosong jika tidak ingin mengganti background.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="judul" class="form-label fw-semibold">Judul Utama (Nama BUMDes) <span class="text-danger">*</span></label>
                        <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul', $home->judul) }}" required placeholder="Contoh: Makmur Jaya">
                    </div>

                    <div class="col-md-6">
                        <label for="hashtag" class="form-label fw-semibold">Hashtag / Slogan Pendukung <span class="text-danger">*</span></label>
                        <input type="text" name="hashtag" id="hashtag" class="form-control" value="{{ old('hashtag', $home->hashtag) }}" required placeholder="Contoh: #MEMBANGUN INDONESIA DARI DESA">
                    </div>

                    <div class="col-md-6">
                        <label for="link" class="form-label fw-semibold">Link Video Profil YouTube (Opsional)</label>
                        <input type="text" name="link" id="link" class="form-control" value="{{ old('link', $home->link) }}" placeholder="https://youtube.com/watch?v=...">
                    </div>

                    <div class="col-md-6">
                        <label for="gambar" class="form-label fw-semibold">Logo BUMDes (Navbar & Header)</label>
                        @if(!empty($home->gambar))
                            <div class="mb-2">
                                <img src="{{ Storage::url($home->gambar) }}" alt="Logo Saat Ini" class="p-2 border rounded bg-light" style="max-height: 55px;">
                            </div>
                        @endif
                        <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*">
                        <small class="text-muted">Biarkan kosong jika tidak ingin mengganti logo.</small>
                    </div>

                    <div class="col-12">
                        <label for="quote" class="form-label fw-semibold">Kutipan / Moto Utama BUMDes <span class="text-danger">*</span></label>
                        <textarea name="quote" id="quote" rows="3" class="form-control" required placeholder="Tuliskan moto atau kutipan visi BUMDes...">{{ old('quote', $home->quote) }}</textarea>
                    </div>

                    <div class="col-12 mt-4 text-end">
                        <a href="{{ route('home.index') }}" class="btn btn-light me-2">Batal</a>
                        <button type="submit" class="btn btn-success px-4">
                            <i class="bi bi-save me-1"></i> Simpan Perubahan Hero
                        </button>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>
@endsection
