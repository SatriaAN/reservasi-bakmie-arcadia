@extends('landingpage.layout')

@section('content')
    <br>
    <br>
    <div class="container mb-5 mt-5">
        <div class="row align-items-stretch justify-content-center no-gutters">
            <div class="col-md-7">
                <div class="form h-100 contact-wrap p-5 mb-5">
                    <h3 class="text-center">Reservasi Meja Bakmie Arcadia Depok</h3>
                    <form class="mb-5" method="post" id="contactForm" name="contactForm">
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="" class="col-form-label">Nama</label>
                                <input type="text" class="form-control" placeholder="{{ $showData->name }}" disabled>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="" class="col-form-label">Nomor Handphone</label>
                                <input type="email" class="form-control" placeholder="{{ $showData->no_hp }}" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="" class="col-form-label">Tanggal Reservasi</label>
                                <input type="text" class="form-control" placeholder="{{ $showData->reservation_date }}"
                                    disabled>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="" class="col-form-label">Waktu Reservasi</label>
                                <input type="email" class="form-control" placeholder="{{ $showData->reservation_time }}"
                                    disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="" class="col-form-label">nomor meja</label>
                                <input type="text" class="form-control" placeholder="{{ $showData->tables_id }}"
                                    disabled>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="" class="col-form-label">Jumlah Orang</label>
                                <input type="email" class="form-control" placeholder="{{ $showData->party_size }}"
                                    disabled>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col-md-12 form-group mb-3">
                                <label for="message" class="col-form-label">Catatan</label>
                                <textarea class="form-control" name="message" id="message" cols="30" rows="4"
                                    placeholder="Write your message" disabled>{{ $showData->pesan }}</textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
@endSection
