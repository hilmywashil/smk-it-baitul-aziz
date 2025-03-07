@extends('layouts.admin')

@section('content')

    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Profil Sekolah</h4>
                        </div>
                        @if(count($profilSekolah) == 0)
                        <a href="{{ route('profil.sekolah.create') }}" class="text-center btn btn-primary btn-icon mt-lg-0 mt-md-0 mt-3">
                            <i class="btn-inner">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                            </i>
                            <span>Tambahkan</span>
                        </a>
                    @else
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('profil.sekolah.edit', $profilSekolah->first()->id) }}" class="text-center btn btn-primary btn-icon mt-lg-0 mt-md-0 mt-3">
                                <i class="btn-inner">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                </i>
                                <span>Edit</span>
                            </a>
                        </div>
                    @endif
                    </div>
                    <div class="container mt-5 mb-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card border-0 shadow rounded">
                                    <div class="card-body">
                                        <!-- <div class="table-responsive">
                                            <table id="datatable" class="table table-striped table-bordered" data-toggle="data-table">
                                                <thead>
                                                    <tr>
                                                        <th>Prasarana</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($profilSekolah as $item)
                                                    <tr>
                                                        <td style="white-space: pre-wrap; word-wrap: break-word;">Data Profil {{ $item->id }}</td>
                                                        
                                                        <td>
                                                            <a href="{{ route('profil') }}" class="btn btn-info btn-sm">Show</a>
                                                            <a href="{{ route('profil.sekolah.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                            <form action="{{ route('profil.sekolah.delete',$item->id)}}" method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div> -->

                                    @foreach($profilSekolah as $item)
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card border-0 shadow rounded">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Prasarana</h4>
                                                        <p class="card-text">{!! $item->prasarana !!}</p>
                                                        <a href="{{ route('profil.sekolah.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card border-0 shadow rounded">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Tujuan</h4>
                                                        <p class="card-text">{!! $item->tujuan !!}</p>
                                                        <a href="{{ route('profil.sekolah.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card border-0 shadow rounded">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Visi</h4>
                                                        <p class="card-text">{!! $item->visi !!}</p>
                                                        <a href="{{ route('profil.sekolah.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card border-0 shadow rounded">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Misi</h4>
                                                        <p class="card-text">{!! $item->misi !!}</p>
                                                        <a href="{{ route('profil.sekolah.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card border-0 shadow rounded">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Identitas</h4>
                                                        <p class="card-text">{!! $item->identitas !!}</p>
                                                        <a href="{{ route('profil.sekolah.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
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
