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
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="images/ba.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary mb-3 animated slideInDown"
                                    style="font-family: 'Poppins', sans-serif;">Sekolah Program Keunggulan </h5>
                                <h1 class="display-3 text-white animated slideInDown"
                                    style="font-family: 'Poppins', sans-serif;">SMK IT Baitul Aziz</h1>
                                <p class="fs-5 text-white mb-4 pb-2 animated slideInDown">Menuai Risalah, Menggapai
                                    Peradaban.</p>
                                <a href="{{ url('/kontak') }}"
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInDown">Daftar Sekarang</a>
                                <a href="{{ url('/kontak')}}"
                                    class="btn btn-light py-md-3 px-md-5 animated slideInDown">Kontak Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($latestBerita as $berita)
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{ $berita->image }}" alt=""
                        style="aspect-ratio: 16 / 9; object-fit: cover; width: 100%;">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(24, 29, 56, .7);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-sm-10 col-lg-8">
                                    <h5 class="text-primary text-uppercase mb-3 animated slideInDown"
                                        style="font-family: 'Poppins', sans-serif;">Berita :</h5>
                                    <h1 class="display-3 text-white animated slideInDown"
                                        style="font-family: 'Poppins', sans-serif;">{{$berita->judul}}
                                    </h1>
                                    <p class="fs-5 text-white mb-4 pb-2">{{$berita->deskripsi}}</p>
                                    <a href="{{ route('berita.show', $berita->id) }}"
                                        class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3" style="font-family: 'Poppins', sans-serif;">Skilled Instructors</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3" style="font-family: 'Poppins', sans-serif;">Online Classes</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3" style="font-family: 'Poppins', sans-serif;">Home Projects</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h5 class="mb-3" style="font-family: 'Poppins', sans-serif;">Book Library</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        @if($sambutan && $sambutan->image)
                            <img class="img-fluid position-absolute w-100 h-100"
                                src="{{ asset('storage/' . $sambutan->image) }}" alt="" style="object-fit: cover;">
                        @else
                            <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('images/default.jpg') }}"
                                alt="Default Image" style="object-fit: cover;">
                        @endif
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="mb-4" style="font-family: 'Poppins', sans-serif;">Kepala SMK IT Baitul Aziz</h1>
                    <div>
                        {!! $sambutan ? $sambutan->konten : 'Konten tidak tersedia' !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5" style="font-family: 'Poppins', sans-serif;">Program Keahlian
                </h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/cat-1.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0">Web Design</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/cat-2.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0">Graphic Design</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/cat-3.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0">Video Editing</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/cat-4.jpg" alt=""
                            style="object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                            <h5 class="m-0">Online Marketing</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Start -->


    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5" style="font-family: 'Poppins', sans-serif;">Berita Terbaru</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach($latestBerita as $berita)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="course-item bg-light">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="{{ $berita->image }}" alt="{{ $berita->judul }}"
                                    style="aspect-ratio: 16 / 9; object-fit: cover; width: 100%;">
                                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                    <a href="{{ route('berita.show', $berita->id) }}"
                                        class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                        style="border-radius: 30px 30px 30px 30px;">Read More</a>
                                </div>
                            </div>
                            <div class="text-center p-4 pb-0">
                                <h3 class="mb-4" style="font-family: 'Poppins', sans-serif;">{{ $berita->judul }}</h3>
                                <p class="mb-4" style="font-family: 'Poppins', sans-serif;">
                                    {{ Str::limit($berita->deskripsi, 100) }}
                                </p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-user-tie text-primary me-2"></i>{{ $berita->user->name }}</small>
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-clock text-primary me-2"></i>{{ $berita->created_at->diffForHumans() }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="text-center mt-3">
                    <a href="{{ url('/berita') }}" class="btn btn-primary wow fadeInUp mt-4" data-wow-delay="0.1s"
                        style="border-radius: 50px;">Lihat Semua Berita</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Courses End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5" style="font-family: 'Poppins', sans-serif;">Kenalan sama Guru kita, yuk!</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($latestGuru as $item)

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="height: 100%;">
                        <div class="team-item bg-light h-100">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{ asset('storage/' . $item->image) }}" alt=""
                                    style="aspect-ratio: 3 / 4; object-fit: cover; width: 100%;">
                            </div>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                    <a class="btn btn-sm-square btn-primary mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href="#"><i class="fab fa-whatsapp"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">{{ $item->nama }}</h5>
                                <small>{{ $item->jabatan }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
    <!-- Team End -->

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
@endsection