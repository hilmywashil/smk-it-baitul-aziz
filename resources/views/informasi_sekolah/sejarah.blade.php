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
    </style>
    <div class="container py-5">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8 mb-4">
                <div class="card bg-white rounded shadow">

                    <!-- Gambar Utama -->
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100 rounded-top" src="{{ asset('images/sekolah-main.jpg') }}"
                            alt="Sejarah Sekolah" style="height: 400px; object-fit: cover;">
                    </div>

                    <div class="p-4">
                        <h3 class="mb-3">Sejarah Sekolah</h3>
                        <p class="text-muted">
                            Sekolah ini didirikan pada tahun 2013 dengan tujuan memberikan pendidikan berkualitas bagi
                            generasi muda. Berawal dari sebuah bangunan sederhana dengan hanya tiga ruang kelas, kini
                            sekolah telah berkembang pesat menjadi salah satu institusi pendidikan terbaik di daerah ini.
                        </p>

                        <hr>

                        <h4>Masa Awal Berdiri</h4>
                        <p>
                            Pada tahun-tahun awal, sekolah ini hanya memiliki sekitar 50 siswa dan beberapa tenaga pengajar.
                            Dengan semangat dan dedikasi tinggi, para pendiri sekolah berusaha membangun lingkungan
                            pendidikan yang nyaman dan berkualitas.
                        </p>

                        <hr>

                        <h4>Perkembangan dan Prestasi</h4>
                        <p>
                            Seiring berjalannya waktu, sekolah mulai berkembang dengan menambahkan berbagai fasilitas baru,
                            seperti laboratorium komputer, perpustakaan modern, dan lapangan olahraga. Tak hanya itu,
                            prestasi akademik dan non-akademik terus meningkat, baik di tingkat lokal maupun nasional.
                        </p>

                        <hr>

                        <h4>Visi dan Misi</h4>
                        <ul>
                            <li><strong>Visi:</strong> Menjadi sekolah unggulan yang mencetak lulusan berkarakter,
                                berkompeten, dan siap menghadapi era globalisasi.</li>
                            <li><strong>Misi:</strong></li>
                            <ul>
                                <li>Menyediakan pendidikan berkualitas dengan pendekatan inovatif.</li>
                                <li>Mengembangkan karakter siswa melalui kegiatan akademik dan ekstrakurikuler.</li>
                                <li>Mengintegrasikan teknologi dalam pembelajaran.</li>
                            </ul>
                        </ul>

                        <hr>

                        <h4>Fasilitas</h4>
                        <ul>
                            <li>Ruang kelas modern dengan teknologi pendukung</li>
                            <li>Laboratorium komputer dan sains</li>
                            <li>Perpustakaan dengan koleksi buku yang lengkap</li>
                            <li>Lapangan olahraga dan fasilitas ekstrakurikuler</li>
                        </ul>

                        <hr>

                        <h4>Galeri Sejarah</h4>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <img src="{{ asset('images/sekolah1.jpg') }}" class="img-fluid rounded" alt="Foto Lama 1">
                            </div>
                            <div class="col-md-4 mb-3">
                                <img src="{{ asset('images/sekolah2.jpg') }}" class="img-fluid rounded" alt="Foto Lama 2">
                            </div>
                            <div class="col-md-4 mb-3">
                                <img src="{{ asset('images/sekolah3.jpg') }}" class="img-fluid rounded" alt="Foto Lama 3">
                            </div>
                        </div>

                        <hr>

                        <h4>Testimoni Alumni</h4>
                        <blockquote class="blockquote">
                            <p>"Sekolah ini memberikan banyak pengalaman berharga. Saya bangga menjadi bagian dari sejarah
                                sekolah ini."</p>
                            <footer class="blockquote-footer">[Nama Alumni]</footer>
                        </blockquote>

                        <hr>

                        <h4>Kontak & Informasi</h4>
                        <p>Untuk informasi lebih lanjut, silakan hubungi <strong>admin sekolah</strong> atau kunjungi
                            halaman <a href="#">kontak kami</a>.</p>

                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4 mb-4">
                <!-- Tentang Sekolah Section -->
                <div class="card bg-white p-4 rounded shadow mb-4">
                    <h4 class="mb-3">Tentang Sekolah</h4>
                    <div class="ratio ratio-16x9 mt-4">
                        <iframe src="https://www.youtube.com/embed/etHq7lI2-BE?si=nFk-KP0mcby5iCna" title="YouTube video"
                            allowfullscreen></iframe>
                    </div>
                </div>

                <!-- Berita Terbaru Section -->
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