@extends('admin.main-layout')
@section('title', 'Index|Legalitas')

@section('content')
    <div class="container card">
        <div class="row">
            <div class="col-12 mt-3">
                <h4>Legalitas List</h4>
                <a href="{{ route('legalitas.create') }}" class="btn btn-primary">Tambah Legalitas</a>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Gambar</th>
                            <th>Link</th>
                            <th>Deskripsi</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach ($legalitas as $legal)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $legal->nama }}</td>
                                <td>
                                    <img src="{{ Storage::url($legal->gambar) }}" alt="Gambar" width="100">
                                </td>
                                <td><a href="{{ $legal->link }}" target="_blank">{{ $legal->link }}</a></td>
                                <td>{{ $legal->deskripsi }}</td>
                                <td>
                                    {{-- <a href="{{ route('home.show', $home->id) }}" class="btn btn-info">Show</a> --}}
                                    <a href="{{ route('legalitas.edit', $legal->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('legalitas.destroy', $legal->id) }}" method="POST"
                                        class="d-inline">
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
