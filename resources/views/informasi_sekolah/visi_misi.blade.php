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
                        <img class="img-fluid w-100 rounded-top" src="{{ asset('images/visi-misi.jpg') }}" alt="Visi dan Misi"
                            style="height: 400px; object-fit: cover;">
                    </div>

                    <div class="p-4">
                        <h3 class="mb-3">Visi dan Misi Sekolah</h3>
                        <p class="text-muted">
                            Sekolah ini memiliki komitmen untuk mencetak generasi unggul yang tidak hanya berprestasi secara akademik tetapi juga memiliki karakter yang kuat dan siap menghadapi tantangan di masa depan.
                        </p>

                        <hr>

                        <h4>Visi</h4>
                        <p>
                            *"Menjadi sekolah unggulan yang mencetak lulusan berkarakter, berkompeten, dan berdaya saing tinggi dalam menghadapi era globalisasi."*
                        </p>

                        <hr>

                        <h4>Misi</h4>
                        <ul>
                            <li>Menyediakan pendidikan berkualitas berbasis teknologi dan inovasi.</li>
                            <li>Mengembangkan karakter siswa yang berintegritas, disiplin, dan bertanggung jawab.</li>
                            <li>Mendorong siswa untuk berpikir kritis, kreatif, dan memiliki jiwa kepemimpinan.</li>
                            <li>Memfasilitasi pengembangan keterampilan abad 21 melalui kegiatan akademik dan ekstrakurikuler.</li>
                            <li>Membangun lingkungan belajar yang nyaman, aman, dan inklusif bagi seluruh siswa.</li>
                            <li>Menjalin kerja sama dengan dunia industri dan perguruan tinggi untuk meningkatkan kompetensi lulusan.</li>
                        </ul>

                        <hr>

                        <h4>Nilai-Nilai Sekolah</h4>
                        <p>Sekolah kami mengedepankan nilai-nilai berikut dalam setiap aspek pembelajaran:</p>
                        <ul>
                            <li><strong>Integritas</strong> – Menanamkan kejujuran dan tanggung jawab dalam setiap tindakan.</li>
                            <li><strong>Inovasi</strong> – Mendorong kreativitas dan pemecahan masalah yang inovatif.</li>
                            <li><strong>Kolaborasi</strong> – Mengajarkan pentingnya kerja sama dalam tim.</li>
                            <li><strong>Keunggulan</strong> – Mengupayakan yang terbaik dalam setiap bidang.</li>
                        </ul>

                        <hr>

                        <h4>Galeri Kegiatan</h4>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <img src="{{ asset('images/kegiatan1.jpg') }}" class="img-fluid rounded" alt="Kegiatan 1">
                            </div>
                            <div class="col-md-4 mb-3">
                                <img src="{{ asset('images/kegiatan2.jpg') }}" class="img-fluid rounded" alt="Kegiatan 2">
                            </div>
                            <div class="col-md-4 mb-3">
                                <img src="{{ asset('images/kegiatan3.jpg') }}" class="img-fluid rounded" alt="Kegiatan 3">
                            </div>
                        </div>

                        <hr>

                        <h4>Testimoni Alumni</h4>
                        <blockquote class="blockquote">
                            <p>"Sekolah ini memberikan saya bekal akademik dan karakter yang kuat untuk menghadapi dunia kerja dan perkuliahan."</p>
                            <footer class="blockquote-footer">[Nama Alumni]</footer>
                        </blockquote>

                        <hr>

                        <h4>Kontak & Informasi</h4>
                        <p>Untuk informasi lebih lanjut, silakan hubungi <strong>admin sekolah</strong> atau kunjungi halaman <a href="#">kontak kami</a>.</p>

                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4 mb-4">
                <!-- Tentang Sekolah Section -->
                <div class="card bg-white p-4 rounded shadow mb-4">
                    <h4 class="mb-3">Tentang Sekolah</h4>
                    <div class="ratio ratio-16x9 mt-4">
                        <iframe src="https://www.youtube.com/embed/sekolah-video" title="YouTube video"
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
