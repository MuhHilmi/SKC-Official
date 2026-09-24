@extends('app')

@section('title', 'Blog - ' . $post->judul)

@section('content')

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <a href="{{ route('blog.index') }}" class="text-decoration-none">&larr; Kembali ke Blog</a>
                <h1 class="mt-3">{{ $post->judul }}</h1>
                <p class="text-muted">
                    Oleh {{ $post->author->name ?? 'Admin' }}
                    &middot; {{ optional($post->published_at)->format('d-m-Y') }}
                    @if ($post->categories->isNotEmpty())
                        &middot;
                        @foreach ($post->categories as $category)
                            <a href="{{ route('blog.index', ['kategori' => $category->slug]) }}" class="badge bg-secondary text-decoration-none">
                                {{ $category->nama }}
                            </a>
                        @endforeach
                    @endif
                </p>
                @if ($post->gambar_sampul)
                    <img src="{{ \Illuminate\Support\Facades\Storage::url($post->gambar_sampul) }}" alt="{{ $post->judul }}" class="img-fluid rounded mb-4">
                @endif
                {{-- $post->konten berasal dari editor TinyMCE (admin-only, bukan input
                pengunjung publik), jadi ditampilkan sebagai HTML. --}}
                <div class="blog-content">
                    {!! $post->konten !!}
                </div>
                @if ($related->isNotEmpty())
                    <hr class="my-5">
                    <h4>Artikel Terkait</h4>
                    <div class="row g-4">
                        @foreach ($related as $item)
                            <div class="col-md-4">
                                <a href="{{ route('blog.show', $item->slug) }}" class="text-decoration-none text-dark">
                                    <div class="card h-100 shadow-sm">
                                        <div class="card-body">
                                            <h6 class="card-title">{{ $item->judul }}</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- Menyamakan tampilan hasil format (blockquote, list, dsb) dengan yang
    terlihat di editor TinyMCE saat admin menulis, supaya benar-benar WYSIWYG. --}}
    <style>
        .blog-content {
            font-size: 16px;
            line-height: 1.6;
        }

        .blog-content p {
            margin-bottom: 1rem;
        }

        .blog-content blockquote {
            border-left: 4px solid #ccc;
            margin-left: 0;
            padding-left: 1rem;
            color: #555;
        }

        .blog-content ul,
        .blog-content ol {
            margin-bottom: 1rem;
            padding-left: 1.5rem;
        }
    </style>
@endpush
