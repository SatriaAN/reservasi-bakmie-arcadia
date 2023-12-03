@extends('dashboard.layout')


@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <h1>Welcome to Dashboard</h1>
                <div class="col-lg-4 col-md-4 order-1">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="{{ asset('admin/img/icons/unicons/chart-success.png') }}"
                                                alt="chart success" class="rounded" />
                                        </div>
                                    </div>
                                    <span class="fw-semibold d-block mb-1">Reservasi</span>
                                    <h3 class="card-title mb-2">18</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="{{ asset('admin/img/icons/unicons/wallet-info.png') }}"
                                                alt="Credit Card" class="rounded" />
                                        </div>
                                    </div>
                                    <span>Meja Tersedia</span>
                                    <h3 class="card-title text-nowrap mb-1">24</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="{{ asset('admin/img/icons/unicons/cc-primary.png') }}"
                                                alt="Credit Card" class="rounded" />
                                        </div>
                                    </div>
                                    <span class="d-block mb-1">Meja Tidak Tersedia</span>
                                    <h3 class="card-title text-nowrap mb-2">16</h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Hoverable Table rows -->
                <div class="card">
                    <h5 class="card-header">Jadwal Reservasi</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nama Pelanggan</th>
                                    <th>Tanggal</th>
                                    <th>Meja</th>
                                    <th>Jumlah Tamu</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Agung Pratama</strong>
                                    </td>
                                    <td>18-12-2023 : 17:00 PM</td>

                                    <td><span class="badge bg-label-danger me-1">13</span></td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Raul Ramos</strong>
                                    </td>
                                    <td>18-12-2023 : 17:00 PM</td>

                                    <td><span class="badge bg-label-danger me-1">12</span></td>
                                    <td>4
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Diki Kiki</strong>
                                    </td>
                                    <td>18-12-2023 : 17:00 PM</td>

                                    <td><span class="badge bg-label-danger me-1">11</span></td>
                                    <td>5
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Fulan</strong>
                                    </td>
                                    <td>18-12-2023 : 17:00 PM</td>
                                    <td><span class="badge bg-label-danger me-1">23</span></td>
                                    <td>5
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--/ Hoverable Table rows -->
            </div>

        </div>
        <!-- / Content -->

        <!-- Footer -->
        <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                    ©
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    , made with ❤️ by
                    <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
                </div>
            </div>
        </footer>
        <!-- / Footer -->

        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
@endsection
