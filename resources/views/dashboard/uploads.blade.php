@extends('layout.app')

@section('title', 'Unggah Gambar Kegiatan')

@section('content')

    <div class="container-fluid">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <h2>Unggah Gambar</h2>
        <form action="{{ route('galeri.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi (opsional)</label>
                <textarea name="deskripsi" class="form-control" rows="3"></textarea>
            </div>
            
            <div class="mb-3">
                <label for="link" class="form-label">Link</label>
                <textarea name="link" class="form-control" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="gambar" class="form-label">Upload Gambar</label>
                <input type="file" name="gambar" class="form-control" required>
            </div>

            <div class="mb-3" id="previewContainer" style="display: none;">
                <label class="form-label">Preview Gambar:</label><br>
                <img id="previewImage" src="#" alt="Preview" style="max-width: 300px;">
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
        </form>

    </div>

@endsection
