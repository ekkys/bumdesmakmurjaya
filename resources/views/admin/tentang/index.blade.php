@extends('admin.main-layout')
@section('title', 'Tentang Kami')

@section('content')
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
    <!-- Toast Notifications -->
    <div class="container mt-5 card ">
        <h1>Tentang Kami</h1>
        {{-- <a href="{{ route('tentang.create') }}" class="btn btn-primary ">Create New Tentang</a> --}}

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Action</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar 1</th>
                    <th>Gambar 2</th>
                    <th>Gambar 3</th>
                    <th>Nomor Telepon</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tentangs as $tentang)
                    <?php $no = 1; ?>
                    <td>{{ $no++ }}</td>
                    <td>
                        <a href="{{ route('tentang.edit', $tentang->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('tentang.destroy', $tentang->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                        </form>
                    </td>
                    <td>{{ $tentang->judul }}</td>
                    <td>
                        <div{!! html_entity_decode($tentang->deskripsi) !!} </div>
                    </td>
                    <td><img src="{{ Storage::url($tentang->gambar1) }}" alt="{{ $tentang->gambar2 }}" width="150"></td>
                    <td><img src="{{ Storage::url($tentang->gambar2) }}" alt="{{ $tentang->gambar2 }}" width="150"></td>
                    <td><img src="{{ Storage::url($tentang->gambar3) }}" alt="{{ $tentang->gambar2 }}" width="150">
                    </td>
                    <td>{{ $tentang->nomor_telpon }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

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
