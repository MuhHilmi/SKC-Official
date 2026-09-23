@extends('layout.app')

@section('title', 'Kelola Blog')

@section('content')
    <section class="content pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h1 class="h4 mb-0">Kelola Blog</h1>
                                <a href="{{ route('dashboard.blog.create') }}" class="btn btn-primary">
                                    &plus; Tulis Artikel
                                </a>
                            </div>
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            <table class="table table-bordered table-striped" style="white-space: nowrap;">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Judul</th>
                                        <th>Penulis</th>
                                        <th>Kategori</th>
                                        <th>Status</th>
                                        <th>Tanggal Publish</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($posts as $post)
                                        <tr>
                                            <td>{{ $loop->iteration + ($posts->currentPage() - 1) * $posts->perPage() }}</td>
                                            <td>{{ $post->judul }}</td>
                                            <td>{{ $post->author->name ?? '-' }}</td>
                                            <td>
                                                @forelse ($post->categories as $category)
                                                    <span class="badge bg-secondary">{{ $category->nama }}</span>
                                                @empty
                                                    <span class="text-muted">-</span>
                                                @endforelse
                                            </td>
                                            <td>
                                                @if ($post->status === 'published')
                                                    <span class="badge bg-success">Published</span>
                                                @else
                                                    <span class="badge bg-warning text-dark">Draft</span>
                                                @endif
                                            </td>
                                            <td>{{ optional($post->published_at)->format('d-m-Y') ?? '-' }}</td>
                                            <td>
                                                {{-- Tombol akan aktif pada tahap selanjutnya --}}
                                                <a href="{{ route('dashboard.blog.edit', $post) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                                <form action="{{ route('dashboard.blog.destroy', $post) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                                        Hapus
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center text-muted" colspan="7">
                                                Belum ada artikel. Klik "Tulis Artikel" untuk membuat yang pertama.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $posts->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
