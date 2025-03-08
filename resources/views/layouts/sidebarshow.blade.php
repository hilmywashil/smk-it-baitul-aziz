<div class="col-lg-4 mb-4">
    <!-- Tentang Sekolah -->
    <div class="card bg-white p-4 rounded shadow mb-4">
        <h4 class="mb-3">Tentang Sekolah</h4>
        <div class="ratio ratio-16x9 mt-4">
            <iframe src="https://www.youtube.com/embed/etHq7lI2-BE?si=nFk-KP0mcby5iCna" title="YouTube video"
                allowfullscreen></iframe>
        </div>
    </div>

    <!-- Berita Terbaru -->
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
