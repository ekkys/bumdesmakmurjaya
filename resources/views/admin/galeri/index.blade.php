@extends('admin.main-layout')
@section('title', 'Index|Galeri')

@section('content')
    <div class="container card">
        <div class="row">
            <div class="col-12 mt-3">
                <h4>Galeri List</h4>
                <a href="{{ route('galeri.create') }}" class="btn btn-primary">Tambah galeri</a>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Nama Kegiatan</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach ($galeris as $galeri)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>
                                    <img src="{{ Storage::url($galeri->gambar) }}" alt="Gambar" width="100">
                                </td>
                                <td>{{ $galeri->nama }}</td>
                                <td>{{ $galeri->tanggal }}</td>
                                <td>{{ $galeri->keterangan }}</td>
                                <td>{{ $galeri->status }}</td>
                                <td>
                                    {{-- <a href="{{ route('home.show', $home->id) }}" class="btn btn-info">Show</a> --}}
                                    <a href="{{ route('galeri.edit', $galeri->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('galeri.destroy', $galeri->id) }}" method="POST"
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
