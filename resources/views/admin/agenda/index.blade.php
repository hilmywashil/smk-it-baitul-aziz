@extends('layouts.admin')

@section('content')

  <div class="container-fluid content-inner mt-n5 py-0">
    <div class="row">
    <div class="col-sm-12">
      <div class="card">
      <div class="card-header d-flex justify-content-between">
        <div class="header-title">
        <h4 class="card-title">Data Agenda</h4>
        </div>
        <a href="{{ route('admin.agenda.create') }}"
        class="text-center btn btn-primary btn-icon mt-lg-0 mt-md-0 mt-3">
        <i class="btn-inner">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
          stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
          </svg>
        </i>
        <span>Tambah Agenda</span>
        </a>
      </div>
      <div class="card-body">
        <div class="row">
        @foreach($agendas as $item)
      <div class="col-md-4 mb-4">
        <div class="card shadow rounded" style="height: 100%;">
        <img src="{{ $item->image ? asset($item->image) : asset('images/sekolah-main.jpg') }}"
        class="card-img-top rounded" alt="{{ $item->title }}"
        style="width: 100%; height: 200px; object-fit: cover;">
        <div class="card-body">
        <h5 class="card-title">{{ $item->title }}</h5>
        <p class="card-text">{{ $item->description }}</p>
        <p class="card-text"><small class="text-muted">Dari pukul <strong>{{ $item->start_time }}</strong>
          sampai <strong>{{ $item->end_time }}</strong></small></p>
        <p class="card-text">Lokasi: {{ $item->location }}</p>
        </div>
        <div class="card-footer">
        <div class="d-flex justify-content-between">
        <a href="{{ route('agenda.show', $item->id) }}" class="btn btn-info btn-sm">Lihat</a>
        <a href="{{ route('admin.agenda.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
        <form action="{{ route('agenda.destroy', $item->id) }}" method="POST" style="display:inline;">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger btn-sm"
          onclick="return confirm('Apakah Anda yakin ingin menghapus agenda ini?')">Hapus</button>
        </form>
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

@endsection