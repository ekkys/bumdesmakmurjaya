@extends('admin.main-layout')
@section('title', 'Tentang Kami')
@section('css')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container mt-5 card">
        <h2>Tentang Bumdes</h2>
        <!-- Toast Notifications -->
        <div aria-live="polite" aria-atomic="true" class="position-relative">
            <div class="toast-container position-absolute top-0 end-0 p-3">
                @if (session('success'))
                    <div class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive"
                        aria-atomic="true">
                        <div class="d-flex">
                            <div class="toast-body">
                                {{ session('success') }}
                            </div>
                            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                                aria-label="Close"></button>
                        </div>
                    </div>
                @endif

                @if (session('error'))
                    <div class="toast align-items-center text-white bg-danger border-0" role="alert" aria-live="assertive"
                        aria-atomic="true">
                        <div class="d-flex">
                            <div class="toast-body">
                                {{ session('error') }}
                            </div>
                            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                                aria-label="Close"></button>
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <form action="{{ route('tentang.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" name="judul" class="form-control" id="judul">
            </div>

            <div class="mb-3">
                <label for="">Detail Deskripsi</label>
                <textarea name="deskripsi" id="description" cols="30" rows="10"></textarea>
            </div>

            <div class="mb-3">
                <label for="gambar1" class="form-label">Gambar 1</label>
                <input type="file" name="gambar1" class="form-control" id="gambar1">
            </div>
            <div class="mb-3">
                <label for="gambar2" class="form-label">Gambar 2</label>
                <input type="file" name="gambar2" class="form-control" id="gambar2">
            </div>
            <div class="mb-3">
                <label for="gambar3" class="form-label">Gambar 3</label>
                <input type="file" name="gambar3" class="form-control" id="gambar3">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $('#description').summernote({
            placeholder: 'description...',
            tabsize: 2,
            height: 300
        });
    </script>
    <script>
        var toastElList = [].slice.call(document.querySelectorAll('.toast'));
        var toastList = toastElList.map(function(toastEl) {
            return new bootstrap.Toast(toastEl, {
                autohide: true,
                delay: 3000
            }).show();
        });
    </script>


@endsection
