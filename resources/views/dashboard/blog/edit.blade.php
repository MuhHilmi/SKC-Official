@extends('layout.app')

@section('title', 'Edit Artikel')

@section('content')

    <section class="content pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h4 mb-3">Edit Artikel</h1>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('dashboard.blog.update', $post) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="judul" class="form-label">Judul</label>
                                    <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul', $post->judul) }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="konten" class="form-label">Isi Artikel</label>
                                    <textarea name="konten" id="konten" rows="12">{{ old('konten', $post->konten) }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Gambar Sampul Saat Ini</label>
                                    <br>
                                    @if ($post->gambar_sampul)
                                        <img src="{{ \Illuminate\Support\Facades\Storage::url($post->gambar_sampul) }}" alt="Gambar sampul" style="max-width: 240px;" class="img-thumbnail mb-2">
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" name="hapus_gambar_sampul" id="hapus_gambar_sampul" value="1">
                                            <label class="form-check-label" for="hapus_gambar_sampul">
                                                Hapus gambar sampul ini
                                            </label>
                                        </div>
                                    @else
                                        <p class="text-muted">Belum ada gambar sampul.</p>
                                    @endif
                                    <label for="gambar_sampul" class="form-label">Ganti Gambar Sampul</label>
                                    <input type="file" name="gambar_sampul" id="gambar_sampul" class="form-control" accept="image/*">
                                    <small class="text-muted">
                                        Opsional. Kosongkan jika tidak ingin mengganti. Maks 2MB.
                                    </small>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Kategori</label>
                                    @if ($categories->isNotEmpty())
                                        <div class="mb-2">
                                            @php $selectedIds = old('kategori_ids', $post->categories->pluck('id')->all()); @endphp
                                            @foreach ($categories as $category)
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="kategori_ids[]" id="kategori-{{ $category->id }}" value="{{ $category->id }}" @checked(collect($selectedIds)->contains($category->id))>
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
                                        <option value="draft" @selected(old('status', $post->status) === 'draft')>
                                            Draft (belum tayang)
                                        </option>
                                        <option value="published" @selected(old('status', $post->status) === 'published')>
                                            Published
                                        </option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
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
    <script src="https://cdn.jsdelivr.net/npm/tinymce@6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#konten',
            height: 420,
            menubar: false,
            plugins: 'lists link code table wordcount',
            toolbar: 'undo redo | blocks | bold italic underline strikethrough | ' +
                'forecolor backcolor | alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | blockquote hr | link table | removeformat code',
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
        });
    </script>
@endpush
