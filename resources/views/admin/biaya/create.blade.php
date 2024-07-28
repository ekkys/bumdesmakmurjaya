@extends('admin.main-layout')
@section('title', 'Create|Biaya')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container mt-5 card">
        <h2>Tambah Biaya Layanan</h2>
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
        <form action="{{ route('biaya.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="mb-3">
                    <div class="form-group">
                        <strong>Nama Layanan</strong>
                        <input type="text" name="nama" class="form-control" placeholder="Nama">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <strong>Nominal</strong>
                        <input type="text" name="nominal" class="form-control" placeholder="Nominal">
                    </div>
                    <div class="col-md-6">
                        <label for="kategori" class="form-label"><strong>Layanan Unit</strong></label>
                        <select class="form-control" name="kategori" id="kategori">
                            @foreach ($kategori_layanan as $kategori)
                                <option value="{{ $kategori->kategori }}">{{ $kategori->kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="">Item Layanan </label>
                    <textarea name="item_layanan" id="item_layanan" cols="30" rows="10"></textarea>
                </div>

                <div class="mb-3">
                    <div class="form-group">
                        <strong>Satuan</strong>
                        <input type="text" name="satuan" class="form-control" placeholder="Satuan">
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <strong>Keterangan</strong>
                        <textarea class="form-control" style="height:150px" name="keterangan" placeholder="Keterangan"></textarea>
                    </div>
                </div>
                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('scripts')
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#item_layanan').summernote({
                placeholder: 'Gunakan Fungsi List supaya list bagus...',
                tabsize: 2,
                height: 300,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript',
                        'subscript', 'clear'
                    ]],
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ol', 'ul', 'paragraph', 'height']],
                    ['table', ['table']],
                    ['insert', ['link']],
                    ['view', ['undo', 'redo', 'fullscreen', 'codeview', 'help']]
                ]
            });
        });

        var toastElList = [].slice.call(document.querySelectorAll('.toast'));
        var toastList = toastElList.map(function(toastEl) {
            return new bootstrap.Toast(toastEl, {
                autohide: true,
                delay: 3000
            }).show();
        });
    </script>
@endsection
