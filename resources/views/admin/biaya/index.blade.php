@extends('admin.main-layout')
@section('title', 'Index|Biaya')

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
    <div class="container card ">
        <div class="row">
            <div class="col-12 mt-3">
                <h4>Biaya Layanan</h4>
                <a href="{{ route('biaya.create') }}" class="btn btn-primary ">Tambah Biaya</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nominal</th>
                            <th>Unit</th>
                            <th>Item Layanan</th>
                            <th>Satuan</th>
                            <th>Keterangan</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        @foreach ($biayas as $biaya)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $biaya->nama }}</td>
                                <td>{{ $biaya->nominal }}</td>
                                <td>{{ $biaya->kategori }}</td>
                                <td>
                                    <div>
                                        {!! html_entity_decode($biaya->item_layanan) !!}
                                    </div>
                                </td>
                                <td>{{ $biaya->satuan }}</td>
                                <td>{{ $biaya->keterangan }}</td>
                                <td>
                                    <a href="{{ route('biaya.edit', $biaya->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('biaya.destroy', $biaya->id) }}" method="POST"
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
