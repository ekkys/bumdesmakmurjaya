@extends('admin.main-layout')
@section('title', 'Index|Kontak')

@section('content')
    <div class="container card">
        <div class="row">
            <div class="col-12 mt-3 table-responsive">
                <h4>Kontak List</h4>
                {{-- <a href="{{ route('kontak.create') }}" class="btn btn-primary">Tambah</a> --}}
                <table class="table table-responsive-lg">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>No</th>
                            <th>Alamat</th>
                            <th>Telpon/Hp</th>
                            <th width="10px">Maps</th>
                            <th>Email</th>
                            <th>YouTube</th>
                            <th>WhatsApp</th>
                            <th>Instagram</th>
                            <th>Facebook</th>
                            <th>TikTok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach ($kontaks as $kontak)
                            <tr>
                                <td>
                                    {{-- <a href="{{ route('home.show', $kontak->id) }}" class="btn btn-info">Show</a> --}}
                                    <a href="{{ route('kontak.edit', $kontak->id) }}" class="btn btn-warning">Edit</a>
                                    {{-- <form action="{{ route('kontak.destroy', $kontak->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Anda yakin hapus ?')">Hapus</button>
                                    </form> --}}
                                </td>
                                <td>{{ $i++ }}</td>
                                <td>{{ $kontak->alamat }} </td>
                                <td>{{ $kontak->telpon }}</td>
                                <td>{{ $kontak->maps }}</td>
                                <td>{{ $kontak->email }}</td>
                                <td>{{ $kontak->youtube }}</td>
                                <td>{{ $kontak->whatsapp }}</td>
                                <td>{{ $kontak->instagram }}</td>
                                <td>{{ $kontak->facebook }}</td>
                                <td>{{ $kontak->tiktok }}</td>
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
