@extends('dashboard.layout')


@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h1>Table Reservasi</h1>

            <!-- Hoverable Table rows -->
            <div class="card">
                <h5 class="card-header">
                    <a href="{{ url('/daftar-reservasi/tambah') }}">
                        <button class="btn btn-sm btn-primary">
                            <i class='bx bxs-plus-circle'></i> Tambah Reservasi
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
                                <th>Nomor Handphone</th>
                                <th>Tanggal Reservasi</th>
                                <th>Jumlah Orang</th>
                                <th>Nomor Meja</th>
                                <th>Catatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($reservations as $key => $res)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td><strong>{{ $res->name }}</strong></td>
                                    <td>{{ $res->no_hp }}</td>
                                    <td>{{ $res->reservation_date }}</td>
                                    <td>{{ $res->party_size }}</td>
                                    <td>{{ $res->table_number }}</td>
                                    <td>{{ $res->pesan }}</td>
                                    <td><button onclick="window.location='{{ url('daftar-reservasi/' . $res->id) }}'"
                                            class="btn btn-sm btn-warning">Ubah</button>
                                        <form onsubmit="return deleteData('{{ $res->name }}')"
                                            style="display: inline"method="POST"
                                            action="{{ url('daftar-reservasi/' . $res->id) }}">
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
@endsection
