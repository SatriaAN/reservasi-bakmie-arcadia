@extends('landingpage.layout')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center section-bg">
        <div class="container">
            <div class="row justify-content-between gy-5">
                <div
                    class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                    <h2 data-aos="fade-up">Sentuhan Citra Rasa<br>Kelezatan Sejati di <br>Bakmie Arcadia</h2>
                    <p data-aos="fade-up" data-aos-delay="100">Taste Our Most Wanted "Mie Ayam" and the best coffee in town.
                    </p>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="#book-a-table" class="btn-book-a-table">Book a Table</a>
                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                    <img src="{{ asset('img/bakmie_arcadia.png') }}" class="img-fluid" alt="" data-aos="zoom-out"
                        data-aos-delay="300">
                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>About Us</h2>
                    <p>Learn More <span>About Us</span></p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-7 position-relative about-img"
                        style="background-image: url({{ asset('img/about.jpg') }}) ;" data-aos="fade-up"
                        data-aos-delay="150">
                        <div class="call-us position-absolute">
                            <h4>Book a Table</h4>
                            <p>+62 813 1522 3358</p>
                        </div>
                    </div>
                    <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
                        <div class="content ps-0 ps-lg-5">
                            <p class="fst-italic">
                                Bakmie Arcadia terkenal dengan bakminya yang lezat dan otentik. Bakmi ini terbuat dari
                                bahan-bahan berkualitas tinggi, seperti mie kuning yang lembut dan kenyal, kuah kaldu yang
                                gurih, dan topping-topping yang kaya rasa.
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> Bakminya yang otentik</li>
                                <li><i class="bi bi-check2-all"></i> Konsep restorannya yang unik</li>
                                <li><i class="bi bi-check2-all"></i> Harganya yang terjangkau</li>
                            </ul>
                            <p>
                                Restoran Bakmie Arcadia terletak di Jl. Raya Kalimulya No. 43, Sukmajaya, Depok, Jawa
                                Barat. Restoran ini buka setiap hari mulai pukul 10.00 hingga 21.00 WIB.
                            </p>


                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->
        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Testimonials</h2>
                    <p>What Are They <span>Saying About Us</span></p>
                </div>
                <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        @foreach ($testimoni as $testi)
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="row gy-4 justify-content-center">
                                        <div class="col-lg-6">
                                            <div class="testimonial-content">
                                                <p>
                                                    <i class="bi bi-quote quote-icon-left"></i>
                                                    {{ $testi->testimoni }}
                                                    <i class="bi bi-quote quote-icon-right"></i>
                                                </p>
                                                <h3>{{ $testi->nama }}</h3>
                                                <h4> {{ $testi->profesi }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->
        <!-- ======= Book A Table Section ======= -->
        <section id="book-a-table" class="book-a-table">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Book A Table</h2>
                    <p>Book <span>Your Stay</span> With Us</p>
                </div>
                <div class="row g-0">
                    <div class="col-lg-4 reservation-img"
                        style="background-image: url({{ asset('img/bakmie-arcadia.jpg') }});" data-aos="zoom-out"
                        data-aos-delay="200"></div>

                    <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
                        <form method="POST" action="{{ url('home') }}" data-aos="fade-up" data-aos-delay="100">
                            @csrf
                            <div class="php-email-form">
                                <div class="row gy-4">
                                    <div class="col-lg-4 col-md-6">
                                        <input class="form-control @error('namaPelanggan') is-invalid @enderror"
                                            id="namaPelanggan" type="text" placeholder="Nama"
                                            data-sb-validations="required" name="namaPelanggan"
                                            value="{{ old('namaPelanggan') }}" />
                                        @error('namaPelanggan')
                                            <div class="invalid-feedback" data-sb-feedback="namaPelanggan:required">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <input class="form-control @error('noHp') is-invalid @enderror" id="noHp"
                                            type="number" placeholder="Nomor Handphone" data-sb-validations="required"
                                            name="noHp" value="{{ old('noHp') }}" />
                                        @error('noHp')
                                            <div class="invalid-feedback" data-sb-feedback="noHp:required">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <select class="form-select @error('nomorMeja') is-invalid @enderror" id="nomorMeja"
                                            aria-label="Nomor Meja" name="nomorMeja">
                                            <option value="">-- Pilih Nomor Meja --</option>
                                            @foreach ($tables as $table)
                                                <option value="{{ $table->id }}"
                                                    {{ old('nomorMeja') == $table->table_number ? 'selected' : '' }}>
                                                    {{ $table->table_number }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('nomorMeja')
                                            <div class="invalid-feedback" data-sb-feedback="nomorMeja:required">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <input class="form-control @error('tanggalJam') is-invalid @enderror"
                                            id="tanggalJam" type="date" placeholder="Tanggal "
                                            data-sb-validations="required" name="tanggalJam"
                                            value="{{ old('tanggalJam') }}" />
                                        @error('tanggalJam')
                                            <div class="invalid-feedback" data-sb-feedback="tanggalJam:required">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <input class="form-control @error('jam') is-invalid @enderror" id="jam"
                                            type="time" placeholder="Jam Reservasi" data-sb-validations="required"
                                            name="jam" min="10:00" max="21:00" value="{{ old('jam') }}" />
                                        @error('jam')
                                            <div class="invalid-feedback" data-sb-feedback="jam:required">{{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <select class="form-select @error('jumlahOrang') is-invalid @enderror"
                                            id="jumlahOrang" data-sb-validations="required" name="jumlahOrang">
                                            <option value="">-- Pilih Jumlah Orang --</option>
                                            @foreach (range(1, 6) as $orang)
                                                <option value="{{ $orang }}"
                                                    {{ old('jumlahOrang') == $orang ? 'selected' : '' }}>
                                                    {{ $orang }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('jumlahOrang')
                                            <div class="invalid-feedback" data-sb-feedback="jumlahOrang:required">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="catatan" rows="5" placeholder="Pesan">{{ old('catatan') }}</textarea>
                                    @error('catatan')
                                        <div class="invalid-feedback" data-sb-feedback="catatan:required">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your booking request was sent. We will call back or send an
                                        Email
                                        to confirm your reservation. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit">Submit Reservasi</button></div>
                            </div>

                        </form>

                    </div><!-- End Reservation Form -->

                </div>

            </div>
        </section><!-- End Book A Table Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Contact</h2>
                    <p>Need Help? <span>Contact Us</span></p>
                </div>

                <div class="mb-3">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.806258948339!2d106.81896882186385!3d-6.41893467694715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ebd3878f2063%3A0xb89581ec4ce61435!2sJl.%20Raya%20Kalimulya%20No.43%2C%20Tirtajaya%2C%20Kec.%20Sukmajaya%2C%20Kota%20Depok%2C%20Jawa%20Barat%2016412!5e0!3m2!1sid!2sid!4v1701530073448!5m2!1sid!2sid"
                        width="600" height="450" style="border:0; width: 100%; height: 350px;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><!-- End Google Maps -->

                <div class="row gy-4">

                    <div class="col-md-6">
                        <div class="info-item  d-flex align-items-center">
                            <i class="icon bi bi-map flex-shrink-0"></i>
                            <div>
                                <h3>Our Address</h3>
                                <p>Jl. Raya Kalimulya No. 43, Sukmajaya, Depok, Jawa Barat.</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item d-flex align-items-center">
                            <i class="icon bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>bakmiearcadiadepok@gmail.com</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item  d-flex align-items-center">
                            <i class="icon bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>+62 813 1522 3358</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item  d-flex align-items-center">
                            <i class="icon bi bi-share flex-shrink-0"></i>
                            <div>
                                <h3>Opening Hours</h3>
                                <div><strong>Mon-Sat:</strong> 10AM - 21PM
                                </div>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                </div>



            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->


    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
@endSection
