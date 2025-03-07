@extends('layouts.navbar')

@section('content')
    <style>
        h3, h4 {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <div class="container py-5">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8 mb-4">
                <div class="card bg-white rounded shadow">

                    <!-- Gambar Utama -->
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100 rounded-top" src="{{ asset('images/pplg-main.jpeg') }}" alt="PPLG"
                            style="height: 400px; object-fit: cover;">
                    </div>

                    <div class="p-4">
                        <h3 class="mb-3">Pengembangan Perangkat Lunak dan Gim (PPLG)</h3>
                        <p class="text-muted">
                            Program Keahlian <strong>Pengembangan Perangkat Lunak dan Gim (PPLG)</strong> adalah bidang
                            studi yang berfokus pada pengembangan aplikasi berbasis desktop, web, dan mobile serta pembuatan
                            gim interaktif. Jurusan ini membekali siswa dengan keterampilan dalam pemrograman, desain UI/UX,
                            serta pemecahan masalah menggunakan teknologi terbaru.
                        </p>

                        <hr>

                        <h4>Kompetensi Keahlian</h4>
                        <ul>
                            <li>Pemrograman Web (HTML, CSS, JavaScript, PHP, Laravel)</li>
                            <li>Pengembangan Aplikasi Mobile (Android Studio, Flutter)</li>
                            <li>Manajemen Basis Data (MySQL, Firebase)</li>
                            <li>Pembuatan Gim Interaktif (Unity, Unreal Engine)</li>
                            <li>Keamanan Jaringan dan Cybersecurity</li>
                            <li>Kecerdasan Buatan dan Machine Learning (Dasar-dasar AI)</li>
                        </ul>

                        <hr>

                        <h4>Kurikulum</h4>
                        <p>Beberapa mata pelajaran utama yang dipelajari di jurusan PPLG:</p>
                        <ul>
                            <li>Pemrograman Berorientasi Objek</li>
                            <li>Pemrograman Web dan Mobile</li>
                            <li>Basis Data</li>
                            <li>Desain UI/UX</li>
                            <li>Pemrograman Gim</li>
                            <li>Jaringan Komputer dan Keamanan</li>
                        </ul>

                        <hr>

                        <h4>Fasilitas</h4>
                        <ul>
                            <li><strong>Laboratorium Komputer</strong> dengan spesifikasi tinggi</li>
                            <li>Akses ke perangkat lunak profesional seperti Visual Studio Code, Android Studio, dan Unity
                            </li>
                            <li>Proyek nyata untuk meningkatkan pengalaman siswa</li>
                            <li>Kolaborasi dengan industri IT untuk program magang dan sertifikasi</li>
                        </ul>

                        <hr>

                        <h4>Prospek Karir</h4>
                        <ul>
                            <li>Software Developer</li>
                            <li>Web Developer</li>
                            <li>Mobile App Developer</li>
                            <li>Game Developer</li>
                            <li>UI/UX Designer</li>
                            <li>IT Support & Networking</li>
                            <li>Cybersecurity Analyst</li>
                        </ul>

                        <hr>

                        <h4>Galeri Kegiatan</h4>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <img src="{{ asset('images/pplg1.jpg') }}" class="img-fluid rounded" alt="Kegiatan 1">
                            </div>
                            <div class="col-md-4 mb-3">
                                <img src="{{ asset('images/pplg2.jpg') }}" class="img-fluid rounded" alt="Kegiatan 2">
                            </div>
                            <div class="col-md-4 mb-3">
                                <img src="{{ asset('images/pplg3.jpg') }}" class="img-fluid rounded" alt="Kegiatan 3">
                            </div>
                        </div>

                        <hr>

                        <h4>Kontak & Pendaftaran</h4>
                        <p>Untuk informasi lebih lanjut, silakan hubungi <strong>admin sekolah</strong> atau kunjungi bagian
                            <a href="#">pendaftaran online</a>.</p>

                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4 mb-4">
                <!-- Follow Us Section -->
                <div class="card bg-white p-4 rounded shadow mb-4">
                    <h4 class="mb-3">Tentang Sekolah</h4>
                    <div class="ratio ratio-16x9 mt-4">
                        <iframe src="https://www.youtube.com/embed/etHq7lI2-BE?si=nFk-KP0mcby5iCna" title="YouTube video"
                            allowfullscreen></iframe>
                    </div>
                </div>

                <!-- Latest News Section -->
                <div class="card bg-white p-4 rounded shadow mb-4">
                    <h4 class="mb-3">Berita Terbaru</h4>
                    @foreach($latestBerita as $news)
                        <div class="mb-3">
                            <a href="{{ route('berita.show', $news->id) }}" class="text-decoration-none text-dark">
                                <div class="d-flex">
                                    <img src="{{ $news->image }}" alt="{{ $news->judul }}" class="me-3"
                                        style="width: 60px; height: 60px; object-fit: cover;">
                                    <div>
                                        <h5 class="mb-1">{{ $news->judul }}</h5>
                                        <small class="text-muted"><i class="bi bi-calendar"></i>
                                            {{ date('d M Y', strtotime($news->tgl)) }}</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection