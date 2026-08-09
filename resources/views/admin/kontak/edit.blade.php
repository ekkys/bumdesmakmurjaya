@extends('admin.main-layout')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <div class="d-flex align-items-center justify-content-between pt-3 pb-2 mb-3 border-bottom">
                <div>
                    <h4 class="card-title p-0 mb-1 fw-bold">Edit Kontak & Sosial Media</h4>
                    <p class="text-muted small mb-0">Perbarui kontak layanan, maps, dan link akun sosial media</p>
                </div>
                <a href="{{ route('kontak.index') }}" class="btn btn-outline-secondary rounded-pill px-3">
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

            <form action="{{ route('kontak.update', $kontak->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row g-3">
                    
                    <div class="col-md-6">
                        <label for="telpon" class="form-label fw-semibold">No. WhatsApp / Telepon <span class="text-danger">*</span></label>
                        <input type="text" name="telpon" id="telpon" class="form-control" value="{{ old('telpon', $kontak->telpon) }}" required>
                    </div>

                    <div class="col-md-6">
                        <label for="email" class="form-label fw-semibold">Alamat Email Resmi <span class="text-danger">*</span></label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $kontak->email) }}" required>
                    </div>

                    <div class="col-12">
                        <label for="alamat" class="form-label fw-semibold">Alamat Lengkap Kantor <span class="text-danger">*</span></label>
                        <textarea name="alamat" id="alamat" rows="2" class="form-control" required>{{ old('alamat', $kontak->alamat) }}</textarea>
                    </div>

                    <div class="col-12">
                        <label for="maps" class="form-label fw-semibold">Link Embed Google Maps (Iframe Src atau URL) <span class="text-danger">*</span></label>
                        <textarea name="maps" id="maps" rows="2" class="form-control" required>{{ old('maps', $kontak->maps) }}</textarea>
                    </div>

                    <div class="col-12"><hr class="my-2"><h6 class="fw-bold text-dark mb-0">Tautan Akun Sosial Media</h6></div>

                    <div class="col-md-6">
                        <label for="whatsapp" class="form-label fw-semibold"><i class="bi bi-whatsapp text-success me-1"></i> Link WhatsApp Chat</label>
                        <input type="text" name="whatsapp" id="whatsapp" class="form-control" value="{{ old('whatsapp', $kontak->whatsapp) }}">
                    </div>

                    <div class="col-md-6">
                        <label for="instagram" class="form-label fw-semibold"><i class="bi bi-instagram text-danger me-1"></i> Link Instagram</label>
                        <input type="text" name="instagram" id="instagram" class="form-control" value="{{ old('instagram', $kontak->instagram) }}">
                    </div>

                    <div class="col-md-4">
                        <label for="facebook" class="form-label fw-semibold"><i class="bi bi-facebook text-primary me-1"></i> Link Facebook</label>
                        <input type="text" name="facebook" id="facebook" class="form-control" value="{{ old('facebook', $kontak->facebook) }}">
                    </div>

                    <div class="col-md-4">
                        <label for="youtube" class="form-label fw-semibold"><i class="bi bi-youtube text-danger me-1"></i> Link Channel YouTube</label>
                        <input type="text" name="youtube" id="youtube" class="form-control" value="{{ old('youtube', $kontak->youtube) }}">
                    </div>

                    <div class="col-md-4">
                        <label for="tiktok" class="form-label fw-semibold"><i class="bi bi-tiktok text-dark me-1"></i> Link TikTok</label>
                        <input type="text" name="tiktok" id="tiktok" class="form-control" value="{{ old('tiktok', $kontak->tiktok) }}">
                    </div>

                    <div class="col-12 mt-4 text-end">
                        <a href="{{ route('kontak.index') }}" class="btn btn-light me-2">Batal</a>
                        <button type="submit" class="btn btn-warning px-4">
                            <i class="bi bi-save me-1"></i> Perbarui Kontak
                        </button>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>
@endsection
