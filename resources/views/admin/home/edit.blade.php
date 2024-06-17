@extends('admin.main-layout')
@section('title', 'Edit|Home')

@section('content')
    <div class="container mt-5">
        <form action="{{ route('home.update', $home->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar">
                <img src="{{ Storage::url($home->gambar) }}" alt="Gambar" width="100" class="mt-2">
            </div>
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ $home->judul }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="quote" class="form-label">Quote</label>
                <input type="text" class="form-control" id="quote" name="quote" value="{{ $home->quote }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="hastag" class="form-label">Hastag</label>
                <input type="text" class="form-control" id="hastag" name="hastag" value="{{ $home->hastag }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="link" class="form-label">Link</label>
                <input type="text" class="form-control" id="link" name="link" value="{{ $home->link }}"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
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
