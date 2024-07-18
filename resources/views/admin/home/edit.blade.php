@extends('admin.main-layout')
@section('title', 'Edit|Home')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="container mt-1">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Edit Tentang Kami</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('home.update', $home->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="judul" class="form-label">Nama BUMDesa</label>
                                <input type="text" class="form-control" id="judul" name="judul"
                                    value="{{ $home->judul }}" required>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">


                                    <label for="gambar" class="form-label">Gambar</label>
                                    <input type="file" class="form-control" id="gambar" name="gambar">
                                    <img src="{{ Storage::url($home->gambar) }}" alt="Gambar" width="100"
                                        class="mt-2">
                                </div>
                                <div class="col-lg-6">
                                    <label for="quote" class="form-label">Quote</label>
                                    <input type="text" class="form-control" id="quote" name="quote"
                                        value="{{ $home->quote }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="hastag" class="form-label">Hastag</label>
                                    <input type="text" class="form-control" id="hashtag" name="hashtag"
                                        value="{{ $home->hashtag }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="link" class="form-label">Link</label>
                                    <input type="text" class="form-control" id="link" name="link"
                                        value="{{ $home->link }}" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $('#description').summernote({
            placeholder: 'description...',
            tabsize: 2,
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ol', 'ul', 'paragraph', 'height']],
                ['table', ['table']],
                ['insert', ['link']],
                ['view', ['undo', 'redo', 'fullscreen', 'codeview', 'help']]
            ]
        });

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
