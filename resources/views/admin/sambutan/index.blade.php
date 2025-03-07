@extends('layouts.admin')

@section('content')

<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Sambutan Kepala Sekolah</h4>
                    </div>
                    @if(count($sambutans) == 0)
                        <a href="{{ route('sambutan.create') }}" class="text-center btn btn-primary btn-icon mt-lg-0 mt-md-0 mt-3">
                            <i class="btn-inner">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                            </i>
                            <span>Tambahkan sambutan</span>
                        </a>
                    @else
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('sambutan.edit', $sambutans->first()->id) }}" class="text-center btn btn-primary btn-icon mt-lg-0 mt-md-0 mt-3">
                                <i class="fas fa-pencil"></i>
                                <span>Edit sambutan</span>
                            </a>
                        </div>
                    @endif
                </div>
                @if(count($sambutans) > 0)
                    @foreach($sambutans as $sambutan)
                    <div class="container py-5 text-center">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 mb-4">
                                <div class="card bg-white rounded shadow">
                                    <div class="position-relative overflow-hidden">
                                        <img class="img-fluid w-100 rounded" src="{{ asset('storage/' . $sambutan->image) }}" alt="smk it baitul aziz" style="height: 400px; object-fit: cover;">
                                    </div>
                                    <div class="p-4">
                                        {!! $sambutan->konten !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="container py-5 text-center">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 mb-4">
                                <div class="card bg-white rounded shadow">
                                    <div class="p-4">
                                        <p>sambutan belum ditambahkan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
