@extends('layouts.navbar')

@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Ekstrakulikuler</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container py-5">
        @if($ekskul)
            <div class="row">
                <div class="col-lg-8 mb-4">
                    <div class="blog-item bg-light rounded shadow-sm p-4">
                        <h3 class="mb-5">Ekstrakulikuler</h3>
                        <p></p>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <!-- Video Section -->
                    <div class="bg-light rounded shadow-sm p-4 text-center mb-4">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/etHq7lI2-BE?si=_F3O2l6YX7B2UQO6" title="YouTube video" allowfullscreen></iframe>
                        </div>
                        <h4 class="mt-4">Video Sekolah</h4>
                    </div>

                    <!-- Sidebar: Follow Us -->
                    <div class="bg-light rounded shadow-sm p-4 text-center mb-4">
                        <h4 class="mb-4">Follow Us</h4>
                        <div class="d-flex justify-content-around">
                            <a href="https://www.instagram.com/smkita/" target="_blank"><img src="{{ asset('images/instagram.png') }}" alt="Instagram" style="width: 40px;"></a>
                            <a href="https://www.facebook.com/smkita/" target="_blank"><img src="{{ asset('images/facebook.png') }}" alt="Facebook" style="width: 40px;"></a>
                            <a href="https://www.youtube.com/smkita" target="_blank"><img src="{{ asset('images/youtube.png') }}" alt="YouTube" style="width: 40px;"></a>
                        </div>
                    </div>

                    <!-- Sidebar: Latest News -->
                    <div class="bg-light rounded shadow-sm p-4 mb-4">
                        <h4 class="mb-4">Latest News</h4>
                        @foreach($latestBerita as $news)
                        <div class="d-flex mb-3">
                            <img src="{{ $news->image }}" alt="{{ $news->judul }}" class="me-3 rounded" style="width: 60px; height: 60px; object-fit: cover;">
                            <div>
                                <a href="{{ route('berita.show', $news->id) }}" class="text-decoration-none text-dark">
                                    <h5 class="mb-1">{{ $news->judul }}</h5>
                                    <small class="text-muted">{{ date('d M Y', strtotime($news->tgl)) }}</small>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        <!-- @else -->
             <div class="text-center">
                <h3>Belum ada Konten</h3>
            </div>
        <!-- @endif -->
    </div>

@endsection
