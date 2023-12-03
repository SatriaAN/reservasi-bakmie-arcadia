@extends('dashboard.layout')


@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h1>Table Reservasi</h1>

            <!-- Hoverable Table rows -->
            <div class="card">
                <h5 class="card-header">Users</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Agung Pratama</strong>
                                </td>
                                <td>18-12-2023 : 17:00 PM</td>
                            </tr>
                            <tr>
                                <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Raul Ramos</strong>
                                </td>
                                <td>18-12-2023 : 17:00 PM</td>
                            </tr>
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
