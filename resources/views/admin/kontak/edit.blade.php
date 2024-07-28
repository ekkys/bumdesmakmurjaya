@extends('admin.main-layout')
@section('title', 'Edit|Kontak')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="container mt-1">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Edit Kontak</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kontak.update', $kontak->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="alamat" class="form-label"><strong>Alamat</strong></label>
                                <input type="text" class="form-control" id="alamat" name="alamat"
                                    value="{{ $kontak->alamat }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="telpon" class="form-label"><strong>Telpon</strong></label>
                                <input type="text" class="form-control" id="telpon" name="telpon"
                                    value="{{ $kontak->telpon }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="maps" class="form-label"><strong>Maps</strong></label>
                                <input type="text" class="form-control" id="maps" name="maps"
                                    value="{{ $kontak->maps }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label"><strong>Email</strong></label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ $kontak->email }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="youtube" class="form-label"><strong>Youtube</strong></label>
                                <input type="url" class="form-control" id="youtube" name="youtube"
                                    value="{{ $kontak->youtube }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="whatsapp" class="form-label"><strong>Whatsapp</strong></label>
                                <input type="url" class="form-control" id="whatsapp" name="whatsapp"
                                    value="{{ $kontak->whatsapp }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="instagram" class="form-label"><strong>Instagram</strong></label>
                                <input type="url" class="form-control" id="instagram" name="instagram"
                                    value="{{ $kontak->instagram }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="facebook" class="form-label"><strong>Facebook</strong></label>
                                <input type="url" class="form-control" id="facebook" name="facebook"
                                    value="{{ $kontak->facebook }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="tiktok" class="form-label"><strong>Tiktok</strong></label>
                                <input type="url" class="form-control" id="tiktok" name="tiktok"
                                    value="{{ $kontak->tiktok }}" required>
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
