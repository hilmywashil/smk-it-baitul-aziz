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
                    <h1 class="display-3 text-white animated slideInDown">Berita</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-5" style="font-family: 'Poppins', sans-serif;">Berita Terbaru</h1>
        </div>
        <div class="row">
            @if($berita->isEmpty())
                <div class="col-12 text-center">
                    <p>Belum ada berita</p>
                </div>
            @else
                @foreach($berita as $item)      
                    <div class="col-lg-4 mb-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="course-item bg-light">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{ $item->image }}" alt="{{ $item->judul }}"
                                    style="height: 200px; object-fit: cover;">
                                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                    <a href="{{ route('berita.show', $item->id) }} "
                                        class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                        style="border-radius: 30px 30px 30px 30px;">Read More</a>
                                </div>
                            </div>
                            <div class="text-left p-4 pb-0">
                                <h3 class="mb-4">{{ $item->judul }}</h3>
                                <p class="mb-4">{{ $item->deskripsi }}</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-left border-end py-2 px-3"><i
                                        class="fa fa-clock text-primary me-2"></i></i>{{ \Carbon\Carbon::parse($item->tgl)->isoFormat('dddd, D MMMM YYYY') }}</small>
                                <!-- <small class="flex-fill text-left border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                                        <small class="flex-fill text-left py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small> -->
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

@endsection