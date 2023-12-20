@extends('dashboard.layout')


@section('content')
    <style>
        .table td.testimoni {
            max-width: 200px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: pre-wrap;
        }
    </style>
    <!-- Content wrapper -->
    <div class="content-wrapper">

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h1>Table Testimoni</h1>

            <!-- Hoverable Table rows -->
            <div class="card">
                <h5 class="card-header">
                    <a href="{{ url('/testimonials/tambah') }}">
                        <button class="btn btn-sm btn-primary">
                            <i class='bx bxs-plus-circle'></i> Tambah Testimoni
                        </button>
                    </a>
                </h5>
                <div class="card-header">
                    @if (session('msg'))
                        <div class="alert alert-success">
                            {{ session('msg') }}
                        </div>
                    @endif
                </div>
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Profesi</th>
                                <th>Testimoni</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($testimonials as $key => $testimoni)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $testimoni->nama }}</td>
                                    <td>{{ $testimoni->profesi }}</td>
                                    <td class="testimoni">{{ $testimoni->testimoni }}</td>
                                    <td><button onclick="window.location='{{ url('testimonials/' . $testimoni->id) }}'"
                                            class="btn btn-sm btn-warning">Ubah</button>
                                        <form onsubmit="return deleteData('{{ $testimoni->nama }}')"
                                            style="display: inline"method="POST"
                                            action="{{ url('testimonials/' . $testimoni->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" title="Hapus Data" class="btn btn-sm btn-danger">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <!--/ Hoverable Table rows -->
        </div>

    </div>
    <!-- / Content -->

    <div class="content-backdrop fade"></div>

    <!-- Footer -->
    <footer class="content-footer footer bg-footer-theme">
        <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
            <div class="mb-2 mb-md-0">
                ©
                <script>
                    document.write(new Date().getFullYear());
                </script>
                , made with ❤️
            </div>
        </div>
    </footer>
    <!-- / Footer -->

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    <!-- / Layout wrapper -->

    <script>
        function deleteData(testimoni) {
            pesan = confirm(`Yakin menghapus testimoni ${testimoni}`);
            if (pesan) return true;
            else return false;
        }
    </script>
@endsection
