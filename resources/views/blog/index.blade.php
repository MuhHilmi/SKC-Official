@extends('app')

@section('title', 'Blog')

@section('content')

    <div class="judul text-center py-4 bg-primary text-white">
        <h1>BLOG</h1>
    </div>
    <div class="container my-5">
        <form action="{{ route('blog.index') }}" method="GET" class="row g-2 justify-content-center mb-4">
            <div class="col-md-5">
                <input type="text" name="q" value="{{ $keyword }}" class="form-control" placeholder="Cari artikel...">
            </div>
            <div class="col-md-3">
                <select name="kategori" class="form-select" onchange="this.form.submit()">
                    <option value="">Semua Kategori</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->slug }}" @selected($activeCategory === $category->slug)>
                            {{ $category->nama }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-auto">
                <button type="submit" class="btn btn-primary">Cari</button>
                @if ($keyword || $activeCategory)
                    <a href="{{ route('blog.index') }}" class="btn btn-outline-secondary">Reset</a>
                @endif
            </div>
        </form>
        @if ($posts->isEmpty())
            <p class="text-center text-muted">
                @if ($keyword || $activeCategory)
                    Tidak ada artikel yang cocok dengan pencarian.
                @else
                    Belum ada artikel yang dipublikasikan.
                @endif
            </p>
        @else
            <div class="row g-4">
                @foreach ($posts as $post)
                    <div class="col-md-4">
                        <a href="{{ route('blog.show', $post->slug) }}"
                            class="text-decoration-none text-dark">
                            <div class="card h-100 shadow-sm">
                                @if ($post->gambar_sampul)
                                    <img src="{{ \Illuminate\Support\Facades\Storage::url($post->gambar_sampul) }}" class="card-img-top" alt="{{ $post->judul }}" style="object-fit: cover; height: 200px;">
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->judul }}</h5>
                                    <p class="card-text text-muted small">
                                        {{ \Illuminate\Support\Str::limit(strip_tags($post->konten), 100) }}
                                    </p>
                                </div>
                                <div class="card-footer text-muted small">
                                    {{ optional($post->published_at)->format('d-m-Y') }}
                                    @if ($post->categories->isNotEmpty())
                                        &middot; {{ $post->categories->pluck('nama')->join(', ') }}
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="mt-4">
                {{ $posts->links() }}
            </div>
        @endif
    </div>
@endsection
