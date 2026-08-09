@extends('admin.main-layout')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <div class="d-flex align-items-center justify-content-between pt-3 pb-2 mb-3 border-bottom">
                <div>
                    <h4 class="card-title p-0 mb-1 fw-bold">Tambah Paket Biaya Layanan</h4>
                    <p class="text-muted small mb-0">Daftarkan paket tarif retribusi baru</p>
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

            <form action="{{ route('biaya.store') }}" method="POST">
                @csrf

                <div class="row g-3">
                    
                    <div class="col-md-6">
                        <label for="nama" class="form-label fw-semibold">Nama Paket Layanan <span class="text-danger">*</span></label>
                        <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}" required placeholder="Contoh: Retribusi Rumah Tangga">
                    </div>

                    <div class="col-md-6">
                        <label for="kategori" class="form-label fw-semibold">Kategori Unit Usaha <span class="text-danger">*</span></label>
                        <select name="kategori" id="kategori" class="form-select" required>
                            @foreach ($kategori_layanan as $u)
                                <option value="{{ $u->kategori }}" {{ old('kategori') == $u->kategori ? 'selected' : '' }}>
                                    {{ $u->nama }} ({{ $u->kategori }})
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="nominal" class="form-label fw-semibold">Nominal Tarif (Rp) <span class="text-danger">*</span></label>
                        <input type="text" name="nominal" id="nominal" class="form-control" value="{{ old('nominal') }}" required placeholder="Contoh: 30.000">
                    </div>

                    <div class="col-md-4">
                        <label for="satuan" class="form-label fw-semibold">Satuan / Periode <span class="text-danger">*</span></label>
                        <input type="text" name="satuan" id="satuan" class="form-control" value="{{ old('satuan', 'Bulan / Rumah') }}" required placeholder="Contoh: Bulan / Rumah, Rit, Truk">
                    </div>

                    <div class="col-md-4">
                        <label for="keterangan" class="form-label fw-semibold">Label Highlight (Opsional)</label>
                        <input type="text" name="keterangan" id="keterangan" class="form-control" value="{{ old('keterangan', '-') }}" placeholder="Contoh: Direkomendasikan, Populer, -">
                    </div>

                    <div class="col-12">
                        <label for="item_layanan" class="form-label fw-semibold">Rincian Fitur Layanan (HTML List) <span class="text-danger">*</span></label>
                        <textarea name="item_layanan" id="item_layanan" rows="6" class="form-control" required placeholder="Contoh: <ul><li>Pengambilan sampah 3x seminggu</li><li>Alat angkut Tossa</li></ul>">{{ old('item_layanan', '<ul><li>Pengambilan sampah 3x seminggu</li><li>Pembayaran setiap bulan</li><li>Alat angkut motor roda tiga (Tossa)</li></ul>') }}</textarea>
                        <small class="text-muted">Gunakan format tag &lt;ul&gt;&lt;li&gt;fitur&lt;/li&gt;&lt;/ul&gt; untuk daftar poin fitur.</small>
                    </div>

                    <div class="col-12 mt-4 text-end">
                        <a href="{{ route('biaya.index') }}" class="btn btn-light me-2">Batal</a>
                        <button type="submit" class="btn btn-success px-4">
                            <i class="bi bi-save me-1"></i> Simpan Paket Biaya
                        </button>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>
@endsection
