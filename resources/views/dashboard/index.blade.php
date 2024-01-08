@extends('dashboard.layout')


@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="row">
            <h1>Welcome to Dashboard</h1>
            <div class="container">
                <div class="row">
                    <div class="col mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ asset('admin/img/icons/unicons/chart-success.png') }}"
                                            alt="chart success" class="rounded" />
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-1">Reservasi</span>
                                <h3 class="card-title mb-2">{{ $reservations->count() }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ asset('admin/img/icons/unicons/wallet-info.png') }}" alt="Credit Card"
                                            class="rounded" />
                                    </div>
                                </div>
                                <span>Meja Tersedia</span>
                                <h3 class="card-title text-nowrap mb-1">
                                    {{ count($tables->where('is_available', 'available')) }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ asset('admin/img/icons/unicons/cc-primary.png') }}" alt="Credit Card"
                                            class="rounded" />
                                    </div>
                                </div>
                                <span class="d-block mb-1">Meja Tidak Tersedia</span>
                                <h3 class="card-title text-nowrap mb-2">
                                    {{ count($tables->where('is_available', 'not_available')) }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Hoverable Table rows -->
            <div class="card">
                <h5 class="card-header">Jadwal Reservasi Restoran Bakmie Arcadia</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pelanggan</th>
                                <th>Nomor Handphone</th>
                                <th>Tanggal Reservasi</th>
                                <th>Jam Reservasi</th>
                                <th>Jumlah Orang</th>
                                <th>Nomor Meja</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($reservations as $key => $reservation)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong>{{ $reservation->name }}</strong>
                                    </td>
                                    <td>{{ $reservation->no_hp }}</td>
                                    <td>{{ $reservation->reservation_date }}</td>
                                    <td>{{ $reservation->reservation_time }}</td>
                                    <td>{{ $reservation->party_size }} orang
                                    </td>
                                    <td>Meja ke-<span
                                            class="badge bg-label-danger me-1">{{ $reservation->tables->table_number }}
                                        </span></td>
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
    </div>
    <!-- / Layout wrapper -->
@endsection
