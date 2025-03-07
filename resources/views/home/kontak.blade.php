@extends('layouts.navbar')

@section('content')
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        a,
        span,
        div,
        button,
        input,
        textarea,
        label {
            font-family: 'Poppins', sans-serif !important;
        }
    </style>


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Kontak</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5">Informasi Kontak</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h5>Get In Touch</h5>
                    <p class="mb-4">Kami selalu siap membantu dan memberikan informasi yang Anda butuhkan. Jangan ragu
                        untuk menghubungi kami. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary"
                            style="width: 50px; height: 50px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Lokasi</h5>
                            <p class="mb-0">Jl. Pesantren Baitul Aziz, Majalaya</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary"
                            style="width: 50px; height: 50px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Telepon</h5>
                            <p class="mb-0">+012 345 67890</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary"
                            style="width: 50px; height: 50px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Email</h5>
                            <p class="mb-0">smkit.baitulaziz@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.4613901015864!2d107.72483630019349!3d-7.081608096115856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c13516fe177f%3A0x3d23725c0d0c5d6c!2sSMK%20IT%20Baitul%20Aziz!5e0!3m2!1sid!2sid!4v1721765635920!5m2!1sid!2sid"
                        frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <h5>Punya saran?</h5>
                    <p>Kami sangat menghargai masukan Anda! Beri tahu kami saran atau pendapat Anda untuk membantu kami
                        menjadi lebih baik.</p>
                    <form id="contactForm" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="nama" placeholder="Nama Anda">
                                    <label for="name">Nama Anda</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Email Anda">
                                    <label for="email">Email Anda</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" name="subject"
                                        placeholder="Subjek">
                                    <label for="subject">Subjek</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Tinggalkan pesan di sini" id="message"
                                        name="pesan" style="height: 150px"></textarea>
                                    <label for="message">Pesan</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" id="submit-btn">Kirim
                                    Pesan</button>
                                <div id="loading" class="d-none">Mengirim...</div>
                            </div>
                        </div>
                    </form>
                    <div id="successMessage" class="alert alert-success mt-3 d-none">Pesan berhasil terkirim!</div>
                    <div id="errorMessage" class="alert alert-danger mt-3 d-none">Terjadi kesalahan, silakan coba lagi.
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Contact End -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#contactForm').on('submit', function (e) {
                e.preventDefault();

                var isValid = true;
                var formData = $(this).serialize();

                // Validasi sederhana
                $(this).find('input, textarea').each(function () {
                    if (!$(this).val()) {
                        isValid = false;
                        $(this).addClass('is-invalid');
                    } else {
                        $(this).removeClass('is-invalid');
                    }
                });

                if (isValid) {
                    $('#loading').removeClass('d-none'); // Tampilkan loading
                    $('#submit-btn').prop('disabled', true); // Nonaktifkan tombol kirim

                    $.ajax({
                        url: "{{ route('kontak.store') }}",
                        type: "POST",
                        data: formData,
                        success: function (response) {
                            $('#successMessage').removeClass('d-none').text(response.message);
                            $('#errorMessage').addClass('d-none');
                            $('#contactForm')[0].reset(); // Reset form setelah sukses
                            $('#loading').addClass('d-none'); // Sembunyikan loading
                            $('#submit-btn').prop('disabled', false); // Aktifkan tombol kirim kembali
                        },
                        error: function (response) {
                            $('#errorMessage').removeClass('d-none').text('Terjadi kesalahan, silakan coba lagi.');
                            $('#successMessage').addClass('d-none');
                            $('#loading').addClass('d-none'); // Sembunyikan loading
                            $('#submit-btn').prop('disabled', false); // Aktifkan tombol kirim kembali
                        }
                    });
                }
            });
        });
    </script>


@endsection