@extends('admin.main-layout')
@section('title', 'Index|Home')

@section('content')
    <div class="container mt-5 card">
        <h1>Home </h1>
        {{-- <a href="{{ route('home.create') }}" class="btn btn-primary mb-3">Add Home</a> --}}

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Quote</th>
                    <th>Hashtag</th>
                    <th>Link</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($homes as $home)
                    <tr>
                        <td>{{ $home->id }}</td>
                        <td>
                            <img src="{{ Storage::url($home->gambar) }}" alt="Gambar" width="100">
                        </td>
                        <td>{{ $home->judul }}</td>
                        <td>{{ $home->quote }}</td>
                        <td>{{ $home->hashtag }}</td>
                        <td><a href="{{ $home->link }}" target="_blank">{{ $home->link }}</a></td>
                        <td>
                            {{-- <a href="{{ route('home.show', $home->id) }}" class="btn btn-info">Show</a> --}}
                            <a href="{{ route('home.edit', $home->id) }}" class="btn btn-warning">Edit</a>
                            {{-- <form action="{{ route('home.destroy', $home->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Anda yakin hapus')">Hapus</button>
                            </form> --}}
                        </td>
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
