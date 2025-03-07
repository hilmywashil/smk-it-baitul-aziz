@extends('layouts.admin')

@section('content')

<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Kontak Masuk</h4>
                    </div>
                </div>
                <div class="container mt-5 mb-5">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card border-0 shadow rounded">
                                <div class="card-body">

                                    @foreach($kontaks as $item)
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card border-0 shadow rounded">
                                                <div class="card-body">
                                                    <h4 class="card-title">{!! $item->nama !!}</h4>
                                                    <!-- <p class="card-text">{{ Str::limit($item->subject, 50) }}</p> -->
                                                    <p class="card-text">{{ $item->subject }}</p>
                                                    <div class="d-flex justify-content-end">
                                                        <button type="button" class="btn btn-primary btn-sm me-2" data-bs-toggle="modal" data-bs-target="#pesanModal{{ $item->id }}">
                                                            Lihat Pesan
                                                        </button>
                                                        <form action="{{ route('kontak.destroy', $item->id) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">Hapus</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="pesanModal{{ $item->id }}" tabindex="-1" aria-labelledby="pesanModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="pesanModalLabel">Detail Pesan</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p><strong>Nama:</strong> {!! $item->nama !!}</p>
                                                    <p><strong>Email:</strong> {{ $item->email }}</p>
                                                    <p><strong>Subject:</strong> {{ $item->subject }}</p>
                                                    <p><strong>Pesan:</strong> {{ $item->pesan }}</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection