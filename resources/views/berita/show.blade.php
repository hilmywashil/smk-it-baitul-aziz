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

    <div class="container py-5">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8 mb-4">
                <div class="card bg-white rounded shadow">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100 rounded-top" src="{{ $berita->image }}" alt="{{ $berita->judul }}"
                            style="height: 400px; object-fit: cover;">
                        <div class="position-absolute top-0 left-0 m-3 bg-dark text-white p-2 rounded">
                            {{ date('d M Y', strtotime($berita->tgl)) }}</div>
                    </div>
                    <div class="p-4">
                        <h3 class="mb-3">{{ $berita->judul }}</h3>
                        <p class="text-muted">{{ $berita->deskripsi }}</p>
                        <hr>
                        <p>{!! $berita->konten !!}</p>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <span class="text-muted">Diposting oleh <strong>{{ $berita->user->name }}</strong>, pada <strong>{{ $berita->tgl}}</strong></span>
                            {{-- <div class="d-flex">
                                <a href="#" class="btn btn-primary btn-sm me-2">Share</a>
                                <a href="#" class="btn btn-secondary btn-sm">Comment</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4 mb-4">
                <!-- Follow Us Section -->
                <div class="card bg-white p-4 rounded shadow mb-4">
                    <h4 class="mb-3">Tentang Sekolah</h4>
                    <!-- <div class="d-flex justify-content-between">
                        <a href="https://www.instagram.com/smkita/" target="_blank"><img src="{{ asset('images/instagram.png') }}" alt="Instagram" style="width: 50px;"></a>
                        <a href="https://www.facebook.com/smkita/" target="_blank"><img src="{{ asset('images/facebook.png') }}" alt="Facebook" style="width: 50px;"></a>
                        <a href="https://www.youtube.com/smkita" target="_blank"><img src="{{ asset('images/youtube.png') }}" alt="YouTube" style="width: 50px;"></a>
                    </div> -->
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