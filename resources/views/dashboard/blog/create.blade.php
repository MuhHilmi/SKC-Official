@extends('layout.app')

@section('title', 'Tulis Artikel Baru')

@section('content')

    <section class="content pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h4 mb-3">Tulis Artikel Baru</h1>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('dashboard.blog.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="judul" class="form-label">Judul</label>
                                    <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul') }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="konten" class="form-label">Isi Artikel</label>
                                    <textarea name="konten" id="konten" rows="12">{{ old('konten') }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="gambar_sampul" class="form-label">Gambar Sampul</label>
                                    <input type="file" name="gambar_sampul" id="gambar_sampul" class="form-control" accept="image/*">
                                    <small class="text-muted">Opsional. Maks 2MB, format JPG/PNG/WEBP.</small>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Kategori</label>
                                    @if ($categories->isNotEmpty())
                                        <div class="mb-2">
                                            @foreach ($categories as $category)
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="kategori_ids[]" id="kategori-{{ $category->id }}" value="{{ $category->id }}" @checked(collect(old('kategori_ids'))->contains($category->id))>
                                                    <label class="form-check-label" for="kategori-{{ $category->id }}">
                                                        {{ $category->nama }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                    <input type="text" name="kategori_baru" class="form-control" value="{{ old('kategori_baru') }}" placeholder="Kategori baru, pisahkan dengan koma (mis: Prestasi, Pengumuman)">
                                    <small class="text-muted">
                                        Kategori yang belum ada akan otomatis dibuat.
                                    </small>
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" id="status" class="form-select">
                                        <option value="draft" @selected(old('status', 'draft') === 'draft')>
                                            Draft (belum tayang)
                                        </option>
                                        <option value="published" @selected(old('status') === 'published')>
                                            Publish sekarang
                                        </option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan Artikel</button>
                                <a href="{{ route('dashboard.blog.index') }}" class="btn btn-secondary">Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    {{-- TinyMCE community edition, di-host dari jsDelivr (open source, tanpa perlu API key) --}}
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/8/tinymce.min.js" referrerpolicy="origin" crossorigin="anonymous"></script>
    <script>
        tinymce.init({
            selector: '#konten',
            height: 420,
            menubar: false,
            plugins: 'lists link code table wordcount',
            toolbar: 'undo redo | blocks | bold italic underline strikethrough | ' +
                'forecolor backcolor | alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | blockquote hr | link table | removeformat code',
            // Tampilan di dalam editor dibuat semirip mungkin dengan tampilan
            // akhir di halaman blog publik, supaya WYSIWYG (what you see is
            // what you get) benar-benar apa adanya.
            content_style: `
                body {
                    font-family: Arial, sans-serif;
                    font-size: 16px;
                    line-height: 1.6;
                }
                p { margin-bottom: 1rem; }
                blockquote {
                    border-left: 4px solid #ccc;
                    margin-left: 0;
                    padding-left: 1rem;
                    color: #555;
                }
            `,
            // Catatan: upload gambar di dalam isi artikel belum aktif di tahap ini.
            // Hanya "Gambar Sampul" di atas yang bisa diupload untuk saat ini.
        });
    </script>
@endpush
