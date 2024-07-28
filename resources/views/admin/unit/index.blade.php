@extends('admin.main-layout')
@section('title', 'Index|unit')

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
    <div class="container card">
        <div class="row">
            <div class="col-12 mt-3">
                <h4>Unit List</h4>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <a href="{{ route('unit.create') }}" class="btn btn-primary"><i class="bi bi-plus-square"></i>
                            Tambah
                            Unit</a>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Ringkasan</th>
                            <th>Deskripsi</th>
                            <th>Kategori</th>
                            <th>Link</th>
                            <th>Gambar</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach ($units as $unit)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $unit->nama }}</td>
                                <td>{{ $unit->ringkasan }}</td>
                                <td>{{ $unit->deskripsi }}</td>
                                <td>{{ $unit->kategori }}</td>
                                <td><a href="{{ $unit->link }}" target="_blank">{{ $unit->link }}</a></td>
                                <td>
                                    <img src="{{ Storage::url($unit->gambar) }}" alt="Gambar" width="100">
                                </td>
                                <td>

                                    <a href="{{ route('unit.edit', $unit->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('unit.destroy', $unit->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Anda yakin hapus ?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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
