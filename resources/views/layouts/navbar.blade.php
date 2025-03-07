<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SMK IT Baitul Aziz</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="{{asset('images/logo.png')}}" rel="icon">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet"> <!-- Scripts -->

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>


</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img src="{{asset('images/logo.png')}}" alt="Logo" class="me-3" style="height: 65px;">
            <div>
                <h2 style="font-family: 'Poppins', sans-serif; margin-bottom: 0;" class="m-0 text">SMK IT Baitul Aziz</h2>
                <p style="font-family: 'Poppins', sans-serif; font-size: 14px; margin-bottom: 0;">Menuai Risalah, menggapai Peradaban
                </p>
            </div>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                <!-- <a href="profil" class="nav-item nav-link {{ request()->is('profil') ? 'active' : '' }}">Profil</a> -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ request()->is('profil*') ? 'active' : '' }}"
                        data-bs-toggle="dropdown">Informasi Sekolah</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="{{ route('sejarah') }}"
                            class="dropdown-item {{ request()->is('profil/sejarah') ? 'active' : '' }}">Sejarah
                            Singkat</a>
                        <a href="{{ route('identitas.sekolah') }}"
                            class="dropdown-item {{ request()->is('profil/identitas-sekolah') ? 'active' : '' }}">Identitas
                            Sekolah</a>
                        <a href="{{ route('sarana') }}"
                            class="dropdown-item {{ request()->is('profil/sarana-prasarana') ? 'active' : '' }}">Sarana
                            Prasarana</a>
                        <a href="{{ route('visi.misi') }}"
                            class="dropdown-item {{ request()->is('profil/visi-misi') ? 'active' : '' }}">Visi dan
                            Misi</a>
                        <a href="{{ route('ekskul') }}"
                            class="dropdown-item {{ request()->is('profil/ekstrakulikuler') ? 'active' : '' }}">Ekstrakulikuler</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ request()->is('jurusan/pplg') ? 'active' : '' }}"
                        data-bs-toggle="dropdown">Program Keahlian</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="{{ route('jurusan.pplg')}}"
                            class="dropdown-item {{ request()->is('profil/jurusan/pplg') ? 'active' : '' }}">PPLG</a>
                        <!-- <a href="galeri/video" class="dropdown-item {{ request()->is('jurusan/akutansi') ? 'active' : '' }}">Akutansi</a> -->
                    </div>
                </div>
                <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ request()->is('galeri*') ? 'active' : '' }}" data-bs-toggle="dropdown">Galeri</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="#" class="dropdown-item {{ request()->is('galeri/foto') ? 'active' : '' }}">Galeri Foto</a>
                        <a href="#" class="dropdown-item {{ request()->is('galeri/video') ? 'active' : '' }}">Galeri Video</a>
                    </div>
                </div> -->
                <a href="{{ route('berita') }}"
                    class="nav-item nav-link {{ request()->is('berita') ? 'active' : '' }}">Berita</a>
                <a href="{{ route('kontak') }}"
                    class="nav-item nav-link {{ request()->is('kontak') ? 'active' : '' }}">Kontak</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    @yield('content')

    @include('layouts.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>