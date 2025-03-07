@extends('layouts.admin')

@section('content')
<div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form id="beritaForm" action="{{ route('profil.sekolah.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group">
                                <h4 class="font-weight-bold">SARANA DAN PRASARANA</>
                                <textarea class="form-control @error('prasarana') is-invalid @enderror" name="prasarana" rows="5" placeholder="Masukkan prasarana Blog">{{ old('prasarana') }}</textarea>
                            
                                <!-- error message untuk prasarana -->
                                @error('prasarana')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <h4 class="font-weight-bold mt-5">TUJUAN</h4>
                                <textarea class="form-control @error('tujuan') is-invalid @enderror" name="tujuan" rows="5" placeholder="Masukkan tujuan Blog">{{ old('tujuan') }}</textarea>
                            
                                <!-- error message untuk tujuan -->
                                @error('tujuan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <h4 class="font-weight-bold mt-5">VISI</h4>
                                <textarea class="form-control @error('visi') is-invalid @enderror" name="visi" rows="5" placeholder="Masukkan visi Blog">{{ old('visi') }}</textarea>
                            
                                <!-- error message untuk visi -->
                                @error('visi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <h4 class="font-weight-bold mt-5">MISI</h4>
                                <textarea class="form-control @error('misi') is-invalid @enderror" name="misi" rows="5" placeholder="Masukkan misi Blog">{{ old('misi') }}</textarea>
                            
                                <!-- error message untuk misi -->
                                @error('misi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <h4 class="font-weight-bold mt-5">INDENTITAS</h4>
                                <textarea class="form-control @error('identitas') is-invalid @enderror" name="identitas" rows="5" placeholder="Masukkan identitas Blog">{{ old('identitas') }}</textarea>
                            
                                <!-- error message untuk identitas -->
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
    

<!-- <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script> -->
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'prasarana' );
    CKEDITOR.replace( 'tujuan' );
    CKEDITOR.replace( 'visi' );
    CKEDITOR.replace( 'misi' );
    CKEDITOR.replace( 'misi' );
    CKEDITOR.replace( 'identitas' );

    document.getElementById('beritaForm').addEventListener('submit', function() {
        var submitButton = this.querySelector('button[type="submit"]');
        submitButton.disabled = true;
        submitButton.innerHTML = 'Menyimpan...';
    });
</script>
@endsection
