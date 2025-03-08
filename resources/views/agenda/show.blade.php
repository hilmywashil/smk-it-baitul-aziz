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
                        <img src="{{ $agenda->image ? asset($agenda->image) : asset('images/sekolah-main.jpg') }}"
                            class="card-img-top rounded" alt="{{ $agenda->title }}"
                            style="width: 100%; height: 200px; object-fit: cover;">
                        <div class="position-absolute top-0 left-0 m-3 bg-dark text-white p-2 rounded">
                            @if ($agenda->status == 'upcoming')
                                Akan Datang
                            @elseif ($agenda->status == 'ongoing')
                                Sedang Berlangsung
                            @elseif ($agenda->status == 'completed')
                                Selesai
                            @else
                                {{ $agenda->status }}
                            @endif
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="mb-3">{{ $agenda->title }}</h3>
                        <p class="text-muted">{{ $agenda->description }}</p>
                        <table class="table table-bordered">
                            <tr>
                                <th>Tanggal Pelaksanaan</th>
                                <td>{{ $agenda->tanggal }}</td>
                            </tr>
                            <tr>
                                <th>Waktu Pelaksanaan</th>
                                <td>{{ $agenda->start_time }} sampai {{ $agenda->end_time }}</td>
                            </tr>
                            <tr>
                                <th>Lokasi</th>
                                <td>{{ $agenda->location }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    @if ($agenda->status == 'upcoming')
                                        Akan Datang
                                    @elseif ($agenda->status == 'ongoing')
                                        Sedang Berlangsung
                                    @elseif ($agenda->status == 'completed')
                                        Selesai
                                    @else
                                        {{ $agenda->status }}
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            @include('layouts.sidebarshow')

        </div>
    </div>

@endsection