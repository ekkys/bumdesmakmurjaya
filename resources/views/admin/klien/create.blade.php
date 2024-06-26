@extends('admin.main-layout')
@section('title', 'Create|Klien')

@section('content')
    <div class="container card mt-5">
        <h2>Tambah Klien</h2>
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
        <form action="{{ route('klien.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
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