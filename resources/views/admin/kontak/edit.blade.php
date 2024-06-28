@extends('admin.main-layout')
@section('title', 'Edit|Kontak')

@section('content')
    <div class="container mt-5">
        <h3>Update Kontak</h3>
        <form action="{{ route('kontak.update', $kontak->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $kontak->alamat }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="telpon" class="form-label">Telpon</label>
                <input type="text" class="form-control" id="telpon" name="telpon" value="{{ $kontak->telpon }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="maps" class="form-label">Maps</label>
                <input type="text" class="form-control" id="maps" name="maps" value="{{ $kontak->maps }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $kontak->email }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="youtube" class="form-label">Youtube</label>
                <input type="url" class="form-control" id="youtube" name="youtube" value="{{ $kontak->youtube }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="whatsapp" class="form-label">Whatsapp</label>
                <input type="url" class="form-control" id="whatsapp" name="whatsapp" value="{{ $kontak->whatsapp }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="instagram" class="form-label">Instagram</label>
                <input type="url" class="form-control" id="instagram" name="instagram" value="{{ $kontak->instagram }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="facebook" class="form-label">Facebook</label>
                <input type="url" class="form-control" id="facebook" name="facebook" value="{{ $kontak->facebook }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="tiktok" class="form-label">Tiktok</label>
                <input type="url" class="form-control" id="tiktok" name="tiktok" value="{{ $kontak->tiktok }}"
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
