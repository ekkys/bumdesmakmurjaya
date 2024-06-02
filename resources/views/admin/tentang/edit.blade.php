@extends('layouts.main-layout')
@section('title', 'Edit Tentang Kami')

@section('content')
    <div class="container mt-1">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Tentang Kami</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('tentang.update', $tentang->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul"
                                    value="{{ $tentang->judul }}">
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="gambar" class="form-label">Gambar</label>
                                    <input type="file" class="form-control" id="gambar" name="gambar">
                                </div>
                                <div class="col-md-3">
                                    @if ($tentang->gambar)
                                        <img src="{{ asset('uploads/' . $tentang->gambar) }}" alt="{{ $tentang->judul }}"
                                            width="100">
                                    @endif
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ $tentang->deskripsi }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="kontak" class="form-label">Kontak</label>
                                <input type="text" class="form-control" id="kontak" name="kontak"
                                    value="{{ $tentang->kontak }}">
                            </div>
                            <div class="mb-3">
                                <label for="lokasi" class="form-label">Lokasi</label>
                                <input type="text" class="form-control" id="lokasi" name="lokasi"
                                    value="{{ $tentang->lokasi }}">
                            </div>
                            <div class="mb-3">
                                <label for="nomor_telpon" class="form-label">Nomor Telpon</label>
                                <input type="text" class="form-control" id="nomor_telpon" name="nomor_telpon"
                                    value="{{ $tentang->nomor_telpon }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
