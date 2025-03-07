@extends('layouts.admin')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form id="profilForm" action="{{ route('profil.sekolah.update', $profilSekolah->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <h4 class="font-weight-bold">SARANA DAN PRASARANA</h4>
                            <textarea class="form-control @error('prasarana') is-invalid @enderror" name="prasarana" rows="5">{{ old('prasarana', $profilSekolah->prasarana) }}</textarea>
                            @error('prasarana')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <h4 class="font-weight-bold mt-5">TUJUAN</h4></h4>
                            <textarea class="form-control @error('tujuan') is-invalid @enderror" name="tujuan" rows="5">{{ old('tujuan', $profilSekolah->tujuan) }}</textarea>
                            @error('tujuan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <h4 class="font-weight-bold mt-5">VISI</h4>
                            <textarea class="form-control @error('visi') is-invalid @enderror" name="visi" rows="5">{{ old('visi', $profilSekolah->visi) }}</textarea>
                            @error('visi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <h4 class="font-weight-bold mt-5">MISI</h4>
                            <textarea class="form-control @error('misi') is-invalid @enderror" name="misi" rows="5">{{ old('misi', $profilSekolah->misi) }}</textarea>
                            @error('misi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h4 class="font-weight-bold mt-5">IDENTITAS</h4>
                            <textarea class="form-control @error('identitas') is-invalid @enderror" name="identitas" rows="5">{{ old('identitas', $profilSekolah->identitas) }}</textarea>
                            @error('identitas')
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
    CKEDITOR.replace('prasarana');
    CKEDITOR.replace('kurikulum');
    CKEDITOR.replace('kesiswaan');
    CKEDITOR.replace('tujuan');
    CKEDITOR.replace('visi');
    CKEDITOR.replace('misi');
    CKEDITOR.replace('identitas');

    document.getElementById('profilForm').addEventListener('submit', function() {
        var submitButton = this.querySelector('button[type="submit"]');
        submitButton.disabled = true;
        submitButton.innerHTML = 'Menyimpan...';
    });
</script>
@endsection
