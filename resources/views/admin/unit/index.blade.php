@extends('admin.main-layout')
@section('title', 'Index|unit')

@section('content')
    <div class="container card">
        <div class="row">
            <div class="col-12 mt-3">
                <h4>Unit List</h4>
                {{-- <a href="{{ route('unit.create') }}" class="btn btn-primary">Tambah unit</a> --}}
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Ringkasan</th>
                            <th>Deskripsi</th>
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
                                <td><a href="{{ $unit->link }}" target="_blank">{{ $unit->link }}</a></td>
                                <td>
                                    <img src="{{ Storage::url($unit->gambar) }}" alt="Gambar" width="100">
                                </td>
                                <td>
                                    {{-- <a href="{{ route('home.show', $home->id) }}" class="btn btn-info">Show</a> --}}
                                    <a href="{{ route('unit.edit', $unit->id) }}" class="btn btn-warning">Edit</a>
                                    {{-- <form action="{{ route('unit.destroy', $unit->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Anda yakin hapus ?')">Hapus</button>
                                    </form> --}}
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
