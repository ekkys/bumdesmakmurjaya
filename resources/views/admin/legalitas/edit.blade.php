@extends('admin.main-layout')
@section('title', 'Edit|Legalitas')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="container mt-1">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Edit Legalitas</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('legalitas.update', $legalitas->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="nama" class="form-label"><strong>Nama</strong></label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="{{ $legalitas->nama }}">
                            </div>
                            <div class="mb-3">
                                <label for="gambar" class="form-label"><strong>Gambar</strong></label>
                                <input type="file" class="form-control" id="gambar" name="gambar">
                                <img src="{{ Storage::url($legalitas->gambar) }}" alt="Gambar" width="100"
                                    class="mt-2">
                            </div>
                            <div class="mb-3">
                                <label for="link" class="form-label"><strong>Link</strong></label>
                                <input class="form-control" id="link" name="link" value="{{ $legalitas->link }}">
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label"><strong>Deskripsi</strong></label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi">{{ $legalitas->deskripsi }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script>
        // Show toast notifications on page load
        document.addEventListener('DOMContentLoaded', function() {
            var toastElList = [].slice.call(document.querySelectorAll('.toast'))
            var toastList = toastElList.map(function(toastEl) {
                return new bootstrap.Toast(toastEl, {
                    autohide: true,
                    delay: 3000
                })
            })
            toastList.forEach(toast => toast.show())
        });
    </script>
@endsection
