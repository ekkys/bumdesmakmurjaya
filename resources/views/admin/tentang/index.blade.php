@extends('layouts.main-layout')
@section('title', 'Tentang Kami')

@section('content')
    <div class="container mt-3 ">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tentang Kami</h3>
                    </div>
                    <div class="card-body">
                        <!-- Toast Notifications -->
                        <div aria-live="polite" aria-atomic="true" class="position-relative">
                            <div class="toast-container position-absolute top-0 end-0 p-3">
                                @if (session('success'))
                                    <div class="toast align-items-center text-white bg-success border-0" role="alert"
                                        aria-live="assertive" aria-atomic="true">
                                        <div class="d-flex">
                                            <div class="toast-body">
                                                {{ session('success') }}
                                            </div>
                                            <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                                data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                    </div>
                                @endif

                                @if (session('error'))
                                    <div class="toast align-items-center text-white bg-danger border-0" role="alert"
                                        aria-live="assertive" aria-atomic="true">
                                        <div class="d-flex">
                                            <div class="toast-body">
                                                {{ session('error') }}
                                            </div>
                                            <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                                data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <a href="{{ route('tentang.create') }}" class="btn btn-primary mb-3">Create New Tentang</a>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Gambar</th>
                                    <th>Deskripsi</th>
                                    <th>Kontak</th>
                                    <th>Lokasi</th>
                                    <th>Nomor Telpon</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tentangs as $tentang)
                                    <tr>
                                        <td>{{ $tentang->judul }}</td>
                                        <td>
                                            @if ($tentang->gambar)
                                                <img src="{{ asset('uploads/' . $tentang->gambar) }}"
                                                    alt="{{ $tentang->judul }}" width="100">
                                            @endif
                                        </td>
                                        <td>{{ $tentang->deskripsi }}</td>
                                        <td>{{ $tentang->kontak }}</td>
                                        <td>{{ $tentang->lokasi }}</td>
                                        <td>{{ $tentang->nomor_telpon }}</td>
                                        <td>
                                            <a href="{{ route('tentang.edit', $tentang->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('tentang.destroy', $tentang->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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