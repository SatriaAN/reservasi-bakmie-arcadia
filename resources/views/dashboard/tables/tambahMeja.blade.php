@extends('dashboard.layout')


@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h1>Tambah Meja</h1>
            <!-- Hoverable Table rows -->
            <div class="card">
                <div class="container px-5 my-5">
                    <form method="POST" action="{{ url('daftar-meja') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="nomorMeja">Nomor Meja</label>
                            <input class="form-control @error('nomorMeja') is-invalid @enderror" id="nomorMeja"
                                type="number" placeholder="Nomor Meja" data-sb-validations="required" name="nomorMeja"
                                value="{{ old('nomorMeja') }}" />
                            @error('nomorMeja')
                                <div class="invalid-feedback" data-sb-feedback="nomorMeja:required">{{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="kapasitasMeja">Kapasitas Meja</label>
                            <input class="form-control @error('kapasitasMeja') is-invalid @enderror" id="kapasitasMeja"
                                type="number" placeholder="Kapasitas Meja" data-sb-validations="required"
                                name="kapasitasMeja" value="{{ old('kapasitasMeja') }}" />
                            @error('kapasitasMeja')
                                <div class="invalid-feedback" data-sb-feedback="kapasitasMeja:required">{{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="statusMeja">Status Meja</label>
                            <select class="form-select @error('statusMeja') is-invalid @enderror" id="statusMeja"
                                aria-label="Status Meja" name="statusMeja">
                                <option value="">-- Pilih Status Meja --</option>
                                <option value="available" {{ old('statusMeja') == 'available' ? 'selected' : '' }}>
                                    Tersedia
                                </option>
                                <option value="not_available" {{ old('statusMeja') == 'not_available' ? 'selected' : '' }}>
                                    Tidak
                                    Tersedia</option>
                            </select>
                            @error('statusMeja')
                                <div class="invalid-feedback" data-sb-feedback="statusMeja:required">{{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-success btn-lg" type="submit">Submit</button>
                        </div>
                    </form>
                    <div class="d-grid mt-3">
                        <button class="btn btn-lg btn-warning"
                            onclick="window.location='{{ url('daftar-meja') }}'">Kembali</button>
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
        </div>
    </div>
@endsection
