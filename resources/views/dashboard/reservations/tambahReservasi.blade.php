@extends('dashboard.layout')


@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h1>Tambah Reservasi</h1>
            <!-- Hoverable Table rows -->
            <div class="card">
                <div class="container px-5 my-5">
                    <div class="container px-5 my-5">
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <div class="form-floating mb-3">
                                <input class="form-control @error('namaPelanggan') is-invalid @enderror" id="namaPelanggan"
                                    type="text" placeholder="Nama" data-sb-validations="required" name="namaPelanggan"
                                    value="{{ old('namaPelanggan') }}" />
                                <label for="namaPelanggan">Nama</label>
                                @error('namaPelanggan')
                                    <div class="invalid-feedback" data-sb-feedback="namaPelanggan:required">{{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control @error('email') is-invalid @enderror" id="email"
                                    type="text" placeholder="Email" data-sb-validations="required" name="email"
                                    value="{{ old('email') }}" />
                                <label for="email">Email</label>
                                @error('email')
                                    <div class="invalid-feedback" data-sb-feedback="email:required">{{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control @error('noHp') is-invalid @enderror" id="noHp"
                                    type="text" placeholder="Nomor Handphone" data-sb-validations="required"
                                    name="noHp" value="{{ old('noHp') }}" />
                                <label for="noHp">Nomor Handphone</label>
                                @error('noHp')
                                    <div class="invalid-feedback" data-sb-feedback="noHp:required">{{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control @error('tanggalJam') is-invalid @enderror" id="tanggalJam"
                                    type="time" placeholder="Tanggal &amp; Jam" data-sb-validations="required"
                                    name="tanggalJam" value="{{ old('tanggalJam') }}" />
                                <label for="tanggalJam">Tanggal &amp; Jam</label>
                                @error('tanggalJam')
                                    <div class="invalid-feedback" data-sb-feedback="tanggalJam:required">{{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control @error('jumlahOrang') is-invalid @enderror" id="jumlahOrang"
                                    type="text" placeholder="Jumlah Orang" data-sb-validations="required"
                                    name="jumlahOrang" value="{{ old('jumlahOrang') }}" />
                                <label for="jumlahOrang">Jumlah Orang</label>
                                @error('jumlahOrang')
                                    <div class="invalid-feedback" data-sb-feedback="jumlahOrang:required">{{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select @error('nomorMeja') is-invalid @enderror" id="nomorMeja"
                                    aria-label="Nomor Meja" name="nomorMeja">
                                    <option value="">-- Pilih Nomor Meja</option>
                                    @foreach ($reservations as $res)
                                        <option value="{{ $res->table_number }}"
                                            {{ old('nomorMeja') == $res->table_number ? 'selected' : '' }}>
                                            {{ $res->table_number }}
                                        </option>
                                    @endforeach
                                </select>
                                <label for="nomorMeja">Nomor Meja</label>
                                @error('nomorMeja')
                                    <div class="invalid-feedback" data-sb-feedback="nomorMeja:required">{{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control  @error('catatan') is-invalid @enderror" id="catatan" type="text"
                                    placeholder="Testimoni" style="height: 10rem;" data-sb-validations="required" name="catatan"> {{ old('catatan') }}</textarea>
                                <label for="testimoni">Testimoni</label>
                                @error('catatan')
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
                                onclick="window.location='{{ url('daftar-reservasi') }}'">Kembali</button>
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
        </div>
    </div>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
@endsection
