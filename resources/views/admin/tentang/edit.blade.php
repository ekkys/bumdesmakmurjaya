@extends('admin.main-layout')
@section('title', 'Edit Tentang Kami')
@section('css')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container mt-1">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Tentang Kami</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('tentang.update', ['tentang' => $tentang->id]) }}" method="POST"
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
                                    <label for="gambar" class="form-label">Gambar 1 (Di Detail) </label>
                                    <input type="file" class="form-control" id="gambar" name="gambar">
                                    @if ($tentang->gambar1)
                                        <img src="{{ Storage::url($tentang->gambar1) }}" alt="{{ $tentang->gambar1 }}"
                                            width="100">
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="gambar" class="form-label">Gambar 2</label>
                                    <input type="file" class="form-control" id="gambar" name="gambar">
                                    @if ($tentang->gambar2)
                                        <img src="{{ Storage::url($tentang->gambar2) }}" alt="{{ $tentang->gambar2 }}"
                                            width="100">
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="gambar" class="form-label">Gambar3</label>
                                    <input type="file" class="form-control" id="gambar" name="gambar">
                                    @if ($tentang->gambar3)
                                        <img src="{{ Storage::url($tentang->gambar3) }}" alt="{{ $tentang->gambar3 }}"
                                            width="100">
                                    @endif
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="description" name="deskripsi" rows="3">{{ $tentang->deskripsi }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
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
    </div>
@endsection
