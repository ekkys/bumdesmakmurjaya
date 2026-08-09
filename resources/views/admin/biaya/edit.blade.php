@extends('admin.main-layout')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <div class="d-flex align-items-center justify-content-between pt-3 pb-2 mb-3 border-bottom">
                <div>
                    <h4 class="card-title p-0 mb-1 fw-bold">Edit Paket Biaya Layanan</h4>
                    <p class="text-muted small mb-0">Perbarui tarif dan fitur layanan</p>
                </div>
                <a href="{{ route('biaya.index') }}" class="btn btn-outline-secondary rounded-pill px-3">
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

            <form action="{{ route('biaya.update', $biaya->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row g-3">
                    
                    <div class="col-md-6">
                        <label for="nama" class="form-label fw-semibold">Nama Paket Layanan <span class="text-danger">*</span></label>
                        <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $biaya->nama) }}" required>
                    </div>

                    <div class="col-md-6">
                        <label for="kategori" class="form-label fw-semibold">Kategori Unit Usaha <span class="text-danger">*</span></label>
                        <select name="kategori" id="kategori" class="form-select" required>
                            @foreach ($kategori_layanan as $u)
                                <option value="{{ $u->kategori }}" {{ old('kategori', $biaya->kategori) == $u->kategori ? 'selected' : '' }}>
                                    {{ $u->nama }} ({{ $u->kategori }})
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="nominal" class="form-label fw-semibold">Nominal Tarif (Rp) <span class="text-danger">*</span></label>
                        <input type="text" name="nominal" id="nominal" class="form-control" value="{{ old('nominal', $biaya->nominal) }}" required>
                    </div>

                    <div class="col-md-4">
                        <label for="satuan" class="form-label fw-semibold">Satuan / Periode <span class="text-danger">*</span></label>
                        <input type="text" name="satuan" id="satuan" class="form-control" value="{{ old('satuan', $biaya->satuan) }}" required>
                    </div>

                    <div class="col-md-4">
                        <label for="keterangan" class="form-label fw-semibold">Label Highlight</label>
                        <input type="text" name="keterangan" id="keterangan" class="form-control" value="{{ old('keterangan', $biaya->keterangan) }}">
                    </div>

                    <div class="col-12">
                        <label for="item_layanan" class="form-label fw-semibold">Rincian Fitur Layanan (HTML List) <span class="text-danger">*</span></label>
                        <textarea name="item_layanan" id="item_layanan" rows="6" class="form-control" required>{{ old('item_layanan', $biaya->item_layanan) }}</textarea>
                    </div>

                    <div class="col-12 mt-4 text-end">
                        <a href="{{ route('biaya.index') }}" class="btn btn-light me-2">Batal</a>
                        <button type="submit" class="btn btn-warning px-4">
                            <i class="bi bi-save me-1"></i> Perbarui Paket Biaya
                        </button>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>
@endsection
