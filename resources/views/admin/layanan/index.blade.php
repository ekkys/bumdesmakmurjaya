@extends('admin.main-layout')
@section('title', 'Index|Layanan')

@section('content')
    <div class="container card">
        <div class="row">
            <div class="col-12 mt-3">
                <h4>Layanan List</h4>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <a href="{{ route('layanan.create') }}" class="btn btn-primary"><i class="bi bi-plus-square"></i>
                            Tambah
                            Layanan</a>
                    </div>
                </div>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Ringkasan</th>
                            <th>Deskripsi</th>
                            <th>Link</th>
                            <th>Unit</th>
                            <th>Gambar</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach ($layanans as $layanan)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $layanan->nama }}</td>
                                <td>{{ $layanan->ringkasan }}</td>
                                <td>
                                    <div>{!! html_entity_decode($layanan->deskripsi) !!}
                                    </div>
                                </td>
                                <td><a href="{{ $layanan->link }}" target="_blank">{{ $layanan->link }}</a></td>
                                <td>{{ $layanan->unit }}</td>
                                <td>
                                    <img src="{{ Storage::url($layanan->gambar) }}" alt="Gambar" width="100">
                                </td>
                                <td>
                                    {{-- <a href="{{ route('layanan.show', $home->id) }}" class="btn btn-info">Show</a> --}}
                                    <a href="{{ route('layanan.edit', $layanan->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('layanan.destroy', $layanan->id) }}" method="POST"
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
