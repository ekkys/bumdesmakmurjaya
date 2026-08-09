@extends('admin.main-layout')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <div class="d-flex align-items-center justify-content-between pt-3 pb-2 mb-3 border-bottom">
                <div>
                    <h4 class="card-title p-0 mb-1 fw-bold">Edit Banner Home</h4>
                    <p class="text-muted small mb-0">Perbarui judul dan slogan utama beranda website</p>
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
                    
                    <div class="col-md-6">
                        <label for="judul" class="form-label fw-semibold">Judul Banner <span class="text-danger">*</span></label>
                        <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul', $home->judul) }}" required>
                    </div>

                    <div class="col-md-6">
                        <label for="hashtag" class="form-label fw-semibold">Hashtag / Slogan Pendukung <span class="text-danger">*</span></label>
                        <input type="text" name="hashtag" id="hashtag" class="form-control" value="{{ old('hashtag', $home->hashtag) }}" required>
                    </div>

                    <div class="col-md-6">
                        <label for="link" class="form-label fw-semibold">Link Video Profil YouTube (Opsional)</label>
                        <input type="text" name="link" id="link" class="form-control" value="{{ old('link', $home->link) }}" placeholder="https://youtube.com/watch?v=...">
                    </div>

                    <div class="col-md-6">
                        <label for="gambar" class="form-label fw-semibold">Logo / Gambar Banner</label>
                        @if(!empty($home->gambar))
                            <div class="mb-2">
                                <img src="{{ Storage::url($home->gambar) }}" alt="Current Image" class="p-2 border rounded bg-light" style="max-height: 70px;">
                            </div>
                        @endif
                        <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*">
                        <small class="text-muted">Biarkan kosong jika tidak ingin mengganti logo.</small>
                    </div>

                    <div class="col-12">
                        <label for="quote" class="form-label fw-semibold">Kutipan / Moto Utama <span class="text-danger">*</span></label>
                        <textarea name="quote" id="quote" rows="3" class="form-control" required>{{ old('quote', $home->quote) }}</textarea>
                    </div>

                    <div class="col-12 mt-4 text-end">
                        <a href="{{ route('home.index') }}" class="btn btn-light me-2">Batal</a>
                        <button type="submit" class="btn btn-warning px-4">
                            <i class="bi bi-save me-1"></i> Perbarui Banner
                        </button>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>
@endsection
