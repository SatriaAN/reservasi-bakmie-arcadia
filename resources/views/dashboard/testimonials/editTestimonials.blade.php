@extends('dashboard.layout')


@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h1>Edit Testimoni</h1>

            <!-- Hoverable Table rows -->
            <div class="card">
                <div class="container px-5 my-5">
                    <div class="container px-5 my-5">
                        <form method="POST" action="{{ url('testimonials/' . $idTestimoni) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-floating mb-3">
                                <input class="form-control  @error('namaTestimoni') is-invalid @enderror" id="namaTestimoni"
                                    type="text" placeholder="Nama" data-sb-validations="required" name="namaTestimoni"
                                    value="{{ $namaTestimoni }}" />
                                <label for="namaTestimoni">Nama</label>
                                @error('namaTestimoni')
                                    <div class="invalid-feedback" data-sb-feedback="nama:required">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control  @error('profesiTestimoni') is-invalid @enderror"
                                    id="profesiTestimoni" type="text" placeholder="Cth: Pelanggan"
                                    data-sb-validations="required" name="profesiTestimoni"
                                    value="{{ $profesiTestimoni }}" />
                                <label for="profesiTestimoni">Profesi</label>
                                @error('profesiTestimoni')
                                    <div class="invalid-feedback" data-sb-feedback="profesi:required">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control  @error('testimonials') is-invalid @enderror" id="testimonials" type="text"
                                    placeholder="Testimoni" style="height: 10rem;" data-sb-validations="required" name="testimonials"> {{ $testimonials }}</textarea>
                                <label for="testimoni">Testimoni</label>
                                @error('profesiTestimoni')
                                    <div class="invalid-feedback" data-sb-feedback="testimoni:required">{{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
                            </div>
                        </form>
                        <div class="d-grid mt-3">
                            <button class="btn btn-lg btn-warning"
                                onclick="window.location='{{ url('testimonials') }}'">Kembali</button>
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
