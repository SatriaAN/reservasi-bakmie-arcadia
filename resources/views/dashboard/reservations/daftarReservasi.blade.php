@extends('dashboard.layout')


@section('content')
    <style>
        .btn-container {
            margin-bottom: 5px;
            /* Atur margin antar tombol jika diperlukan */
        }

        .btn-container button {
            width: 80px;
            /* Atur lebar tombol sesuai kebutuhan */
        }
    </style>

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h1>Table Reservasi</h1>
            <!-- Hoverable Table rows -->
            <div class="card">
                <h5 class="card-header">
                    <a href="{{ url('/daftar-reservasi/create') }}">
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
                                <th>Tanggal dan Jam Reservasi</th>
                                <th>Jumlah Orang</th>
                                <th>Nomor Meja</th>
                                <th>Catatan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($reservations as $key => $res)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td><strong>{{ $res->name }}</strong></td>
                                    <td>{{ $res->no_hp }}</td>
                                    <td>{{ $res->reservation_date }} <br>
                                        {{ $res->reservation_time }}</td>
                                    <td>{{ $res->party_size }} Orang</td>
                                    <td>Meja - {{ $res->tables->table_number }}</td>
                                    <td>{{ $res->pesan }}</td>
                                    <td>
                                        <div style="display: inline-block; font-size: 0.875rem;">
                                            @if ($res->status == 'Pending')
                                                <span class="badge bg-label-warning me-1">{{ $res->status }}</span>
                                            @elseif ($res->status == 'Disetujui')
                                                <span class="badge bg-label-success me-1">{{ $res->status }}</span>
                                            @elseif ($res->status == 'Ditolak')
                                                <span class="badge bg-label-danger me-1">{{ $res->status }}</span>
                                            @endif
                                        </div>
                                        @if ($res->status == 'Pending')
                                            <div class="btn-container mt-2">
                                                <form action="{{ route('daftar-reservasi.accept', $res->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('put')
                                                    <input type="hidden" name="status" value="disetujui">
                                                    <button class="btn btn-sm btn-success" type="submit">Terima</button>
                                                </form>
                                            </div>
                                            <div class="btn-container mt-2">
                                                <form action="{{ route('daftar-reservasi.reject', $res->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('put')
                                                    <input type="hidden" name="status" value="ditolak">
                                                    <button class="btn btn-sm btn-secondary" type="submit">Tolak</button>
                                                </form>
                                            </div>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-container">
                                            <button onclick="window.location='{{ url('daftar-reservasi/' . $res->id) }}'"
                                                class="btn btn-sm btn-warning">Ubah</button>
                                        </div>
                                        <div class="btn-container">
                                            <form onsubmit="return deleteData('{{ $res->name }}')"
                                                style="display: inline" method="POST"
                                                action="{{ url('daftar-reservasi/' . $res->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" title="Hapus Data"
                                                    class="btn btn-sm btn-danger">Hapus</button>
                                            </form>
                                        </div>
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
        function deleteData(reservasi) {
            pesan = confirm(`Yakin menghapus reservasi ${reservasi}`);
            if (pesan) return true;
            else return false;
        }

        // Tambahkan skrip ini di bagian bawah template Anda
        $(document).ready(function() {
            $('select[name="status"]').change(function() {
                var reservationId = $(this).data('reservation-id');
                var newStatus = $(this).val();

                // Kirim permintaan AJAX untuk memperbarui status di server
                $.ajax({
                    url: '{{ url('/daftar-reservasi') }}/' +
                        reservationId, // Sesuaikan dengan URL di server Anda
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        status: newStatus
                    },
                    success: function(response) {
                        // Tanggapi hasil dari server (jika diperlukan)
                        console.log(response);
                    },
                    error: function(error) {
                        // Tanggapi kesalahan (jika diperlukan)
                        console.error(error);
                    }
                });
            });
        });
    </script>
@endsection
