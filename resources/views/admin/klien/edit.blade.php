@extends('admin.main-layout')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <div class="d-flex align-items-center justify-content-between pt-3 pb-2 mb-3 border-bottom">
                <div>
                    <h4 class="card-title p-0 mb-1 fw-bold">Edit Mitra / Klien</h4>
                    <p class="text-muted small mb-0">Ubah data dan logo mitra</p>
                </div>
                <a href="{{ route('klien.index') }}" class="btn btn-outline-secondary rounded-pill px-3">
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

            <form action="{{ route('klien.update', $klien->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row g-3">
                    
                    <div class="col-md-7">
                        <label for="nama" class="form-label fw-semibold">Nama Perusahaan / Instansi <span class="text-danger">*</span></label>
                        <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $klien->nama) }}" required>
                    </div>

                    <div class="col-md-5">
                        <label for="gambar" class="form-label fw-semibold">Logo Mitra</label>
                        @if(!empty($klien->gambar))
                            <div class="mb-2">
                                <img src="{{ Storage::url($klien->gambar) }}" alt="Current Logo" class="p-2 border rounded bg-white" style="max-height: 60px;">
                            </div>
                        @endif
                        <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*">
                        <small class="text-muted">Biarkan kosong jika tidak ingin mengganti logo.</small>
                    </div>

                    <div class="col-12 mt-4 text-end">
                        <a href="{{ route('klien.index') }}" class="btn btn-light me-2">Batal</a>
                        <button type="submit" class="btn btn-warning px-4">
                            <i class="bi bi-save me-1"></i> Perbarui Mitra
                        </button>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>
@endsection
