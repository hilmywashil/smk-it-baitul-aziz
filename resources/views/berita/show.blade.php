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
                            {{ date('d M Y', strtotime($berita->tgl)) }}
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="mb-3">{{ $berita->judul }}</h3>
                        <p class="text-muted">{{ $berita->deskripsi }}</p>
                        <hr>
                        <p>{!! $berita->konten !!}</p>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <span class="text-muted">Diposting oleh <strong>{{ $berita->user->name }}</strong>, pada
                                <strong>
                                    {{ \Carbon\Carbon::parse($berita->created_at)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}
                                </strong>
                            </span>
                            {{-- <div class="d-flex">
                                <a href="#" class="btn btn-primary btn-sm me-2">Share</a>
                                <a href="#" class="btn btn-secondary btn-sm">Comment</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            @include('layouts.sidebarshow')
        </div>
    </div>

@endsection