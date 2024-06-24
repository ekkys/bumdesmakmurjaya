@extends('admin.main-layout')
@section('title', 'Tentang Kami')

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
            {{-- <div class="mb-3">
                <label for="deskripsi" class="form-label">deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" id="deskripsi">
            </div> --}}

            <div class="mb-3">
                <h5 class="card-title">Edit Artikel</h5>
                <div class="quill-editor-full">
                </div>
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
            <div class="mb-3">
                <label for="nomor_telpon" class="form-label">Nomor Telepon</label>
                <input type="text" name="nomor_telpon" class="form-control" id="nomor_telpon">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    <script src="https://cdn.quilljs.com/1.3.7/quill.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var quill = new Quill('#quill-editor-full', {
                theme: 'snow'
            });

            var form = document.querySelector('form');
            form.onsubmit = function() {
                var deskripsi = document.querySelector('textarea[name=deskripsi]');
                deskripsi.value = quill.root.innerHTML;
            };

            var toastElList = [].slice.call(document.querySelectorAll('.toast'));
            var toastList = toastElList.map(function(toastEl) {
                return new bootstrap.Toast(toastEl, {
                    autohide: true,
                    delay: 3000
                }).show();
            });
        });
    </script>
@endsection
