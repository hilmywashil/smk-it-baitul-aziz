@extends('layouts.admin')

@section('content')

<div class="container-fluid content-inner mt-n5 py-0">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Manajemen SMK IT Baitul Aziz</h4>
                    </div>
                    <a href="{{ route('manajemen.create') }}" class="btn btn-primary btn-icon">
                        <i class="btn-inner">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </i>
                        <span>Tambahkan Guru</span>
                    </a>
                </div>
                <div class="card-body">
                    @if(count($gurus) > 0)
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Foto</th>
                                    <th>Nama Guru</th>
                                    <th>Jabatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($gurus as $guru)
                                <tr>
                                    <td><img src="{{ asset('storage/' . $guru->image) }}" alt="Foto guru" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover; border-radius: 8px;"></td>
                                    <td>{{ $guru->nama }}</td>
                                    <td>{{ $guru->jabatan }}</td>
                                    <td>
                                        <form action="{{ route('manajemen.destroy', $guru->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <div class="text-center py-5">
                        <div class="card bg-white rounded shadow">
                            <div class="p-4">
                                <p>Data belum ditambahkan.</p>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
