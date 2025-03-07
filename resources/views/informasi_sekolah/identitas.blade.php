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
                            alt="Identitas Sekolah" style="height: 400px; object-fit: cover;">
                    </div>

                    <div class="p-4">
                        <h3 class="mb-3">Identitas Sekolah</h3>
                        <p class="text-muted">
                            Berikut adalah informasi identitas resmi sekolah kami sebagai lembaga pendidikan yang
                            berkomitmen untuk mencetak generasi unggul.
                        </p>

                        <hr>

                        <h4>Data Sekolah</h4>
                        <table class="table table-bordered">
                            <tr>
                                <th>Nama Sekolah</th>
                                <td>SMK IT Baitul Aziz</td>
                            </tr>
                            <tr>
                                <th>NPSN</th>
                                <td>69908714</td>
                            </tr>
                            <tr>
                                <th>Jenjang Pendidikan</th>
                                <td>SMK (Sekolah Menengah Kejuruan)</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>Swasta</td>
                            </tr>
                            <tr>
                                <th>Akreditasi</th>
                                <td>B</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>Jl. Pesantren Baitul Aziz Kp. Sukahaji No.44, Neglasari</td>
                            </tr>
                            <tr>
                                <th>Kecamatan</th>
                                <td>Majalaya</td>
                            </tr>
                            <tr>
                                <th>Kota/Kabupaten</th>
                                <td>Kabupaten Bandung</td>
                            </tr>
                            <tr>
                                <th>Telepon</th>
                                <td>(022) 1234567</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>smkit.baitulaziz@gmail.com</td>
                            </tr>
                            <tr>
                                <th>Website</th>
                                <td><a href="https://www.smkitbaitulaziz.sch.id"
                                        target="_blank">www.smkitbaitulaziz.sch.id</a></td>
                            </tr>
                            <tr>
                                <th>Kepala Sekolah</th>
                                <td>Andriani, S.T., M.Kom</td>
                            </tr>
                        </table>

                        <hr>

                        <h4>Program Keahlian</h4>
                        <ul>
                            <li>Pengembangan Perangkat Lunak dan Gim (PPLG)</li>
                        </ul>

                        <hr>

                        <h4>Struktur Organisasi</h4>
                        <ul>
                            <li>Kepala Sekolah: Drs. Contoh Nama, M.Pd.</li>
                            <li>Wakil Kepala Sekolah Bidang Kurikulum: [Nama]</li>
                            <li>Wakil Kepala Sekolah Bidang Kesiswaan: [Nama]</li>
                            <li>Wakil Kepala Sekolah Bidang Sarana & Prasarana: [Nama]</li>
                            <li>Wakil Kepala Sekolah Bidang Hubungan Industri: [Nama]</li>
                        </ul>

                        <hr>

                        <h4>Galeri Sekolah</h4>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <img src="{{ asset('images/sekolah1.jpg') }}" class="img-fluid rounded" alt="Sekolah 1">
                            </div>
                            <div class="col-md-4 mb-3">
                                <img src="{{ asset('images/sekolah2.jpg') }}" class="img-fluid rounded" alt="Sekolah 2">
                            </div>
                            <div class="col-md-4 mb-3">
                                <img src="{{ asset('images/sekolah3.jpg') }}" class="img-fluid rounded" alt="Sekolah 3">
                            </div>
                        </div>

                        <hr>

                        <h4>Sosial Media</h4>
                        <ul>
                            <li><strong>Facebook:</strong> <a href="https://www.facebook.com/smkitbaitulaziz/"
                                    target="_blank">facebook.com/smkitbaitulaziz</a></li>
                            <li><strong>Instagram:</strong> <a href="https://www.instagram.com/baitulaziz.id/"
                                    target="_blank">@baitulaziz.id</a></li>
                            <li><strong>YouTube:</strong> <a href="https://youtube.com/smkcontoh"
                                    target="_blank">youtube.com/smkcontoh</a></li>
                            <li><strong>TikTok:</strong> <a href="https://tiktok.com/@smkcontoh"
                                    target="_blank">@smkcontoh</a></li>
                        </ul>
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