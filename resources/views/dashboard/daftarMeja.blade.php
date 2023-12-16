@extends('dashboard.layout')


@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h1>Table Meja</h1>

            <!-- Hoverable Table rows -->
            <div class="card">
                <h5 class="card-header">Daftar Meja</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nomor Meja</th>
                                <th>Kapasitas Meja</th>
                                <th>Status Meja</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($tables as $key => $table)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong>{{ $table->table_number }}</strong>
                                    </td>
                                    <td>{{ $table->capacity }} </td>
                                    <td>{{ $table->is_available }} </td>
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
