@extends('layouts.admin')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form id="sambutanForm" action="{{ route('sambutan.update', $sambutan->id) }}" method="POST" enctype="multipart/form-data">
                    
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label class="font-weight-bold">GAMBAR</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old($sambutan->image) }}">
                            <img src="{{ asset('storage/' . $sambutan->image) }}" class="img-thumbnail mt-2" width="200">
                            <!-- error message untuk image -->
                            @error('image')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">KONTEN</label>
                            <textarea class="form-control @error('konten') is-invalid @enderror" name="konten" rows="5" placeholder="Masukkan Konten Blog">{{ old('konten', $sambutan->konten) }}</textarea>
                        
                            <!-- error message untuk konten -->
                            @error('konten')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>

                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('konten');

    document.getElementById('sambutanForm').addEventListener('submit', function() {
        var submitButton = this.querySelector('button[type="submit"]');
        submitButton.disabled = true;
        submitButton.innerHTML = 'Menyimpan...';
    });
</script>
@endsection
