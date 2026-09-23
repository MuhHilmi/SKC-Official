<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogAdminController extends Controller
{
    public function index(Request $request)
    {
        $posts = BlogPost::with(['author', 'categories'])
            ->latest()
            ->paginate(10);

        return view('dashboard.blog.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('dashboard.blog.create', [
            'categories' => Category::orderBy('nama')->get(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => ['required', 'string', 'max:255'],
            'konten' => ['required', 'string'],
            'gambar_sampul' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'status' => ['required', 'in:draft,published'],
            'kategori_ids' => ['nullable', 'array'],
            'kategori_ids.*' => ['integer', 'exists:categories,id'],
            'kategori_baru' => ['nullable', 'string', 'max:255'],
        ]);

        $post = new BlogPost();
        $post->judul = $validated['judul'];
        $post->konten = $validated['konten'];
        $post->status = $validated['status'];
        $post->user_id = $request->user()->id;
        $post->published_at = $validated['status'] === 'published' ? now() : null;

        if ($request->hasFile('gambar_sampul')) {
            $post->gambar_sampul = $request->file('gambar_sampul')->store('blog', 'public');
        }

        $post->save();

        $categoryIds = $validated['kategori_ids'] ?? [];

        if (! empty($validated['kategori_baru'])) {
            foreach (explode(',', $validated['kategori_baru']) as $nama) {
                $nama = trim($nama);
                if ($nama === '') {
                    continue;
                }

                $category = Category::firstOrCreate(
                    ['slug' => Str::slug($nama)],
                    ['nama' => $nama]
                );

                $categoryIds[] = $category->id;
            }
        }

        if (! empty($categoryIds)) {
            $post->categories()->sync(array_unique($categoryIds));
        }

        return redirect()->route('dashboard.blog.index')
            ->with('success', 'Artikel berhasil disimpan.');
    }

    public function edit(BlogPost $blogPost)
    {
        return view('dashboard.blog.edit', [
            'post' => $blogPost->load('categories'),
            'categories' => Category::orderBy('nama')->get(),
        ]);
    }

    public function update(Request $request, BlogPost $blogPost)
    {
        $validated = $request->validate([
            'judul' => ['required', 'string', 'max:255'],
            'konten' => ['required', 'string'],
            'gambar_sampul' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp', 'max:2048'],
            'hapus_gambar_sampul' => ['nullable', 'boolean'],
            'status' => ['required', 'in:draft,published'],
            'kategori_ids' => ['nullable', 'array'],
            'kategori_ids.*' => ['integer', 'exists:categories,id'],
            'kategori_baru' => ['nullable', 'string', 'max:255'],
        ]);

        $blogPost->judul = $validated['judul'];
        $blogPost->konten = $validated['konten'];

        // Kalau sebelumnya draft lalu sekarang di-publish, catat waktu publish
        // sekarang. Kalau sudah published sejak awal, published_at dibiarkan
        // (tidak "reset" tanggal tayang aslinya hanya karena diedit).
        if ($validated['status'] === 'published' && $blogPost->status !== 'published') {
            $blogPost->published_at = now();
        } elseif ($validated['status'] === 'draft') {
            $blogPost->published_at = null;
        }
        $blogPost->status = $validated['status'];

        if ($request->hasFile('gambar_sampul')) {
            if ($blogPost->gambar_sampul) {
                Storage::disk('public')->delete($blogPost->gambar_sampul);
            }
            $blogPost->gambar_sampul = $request->file('gambar_sampul')->store('blog', 'public');
        } elseif ($request->boolean('hapus_gambar_sampul') && $blogPost->gambar_sampul) {
            Storage::disk('public')->delete($blogPost->gambar_sampul);
            $blogPost->gambar_sampul = null;
        }

        $blogPost->save();

        $categoryIds = $validated['kategori_ids'] ?? [];

        if (!empty($validated['kategori_baru'])) {
            foreach (explode(',', $validated['kategori_baru']) as $nama) {
                $nama = trim($nama);
                if ($nama === '') {
                    continue;
                }

                $category = Category::firstOrCreate(
                    ['slug' => Str::slug($nama)],
                    ['nama' => $nama]
                );

                $categoryIds[] = $category->id;
            }
        }

        // sync() dengan array kosong akan melepas semua kategori jika memang
        // admin menghapus semua centang — ini perilaku yang diinginkan.
        $blogPost->categories()->sync(array_unique($categoryIds));

        return redirect()->route('dashboard.blog.index')
            ->with('success', 'Artikel berhasil diperbarui.');
    }

    public function destroy(BlogPost $blogPost)
    {
        if ($blogPost->gambar_sampul) {
            Storage::disk('public')->delete($blogPost->gambar_sampul);
        }

        // Baris di tabel pivot blog_post_category ikut terhapus otomatis
        // (cascadeOnDelete di migration), jadi tidak perlu detach manual.
        $blogPost->delete();

        return redirect()->route('dashboard.blog.index')->with('success', 'Artikel berhasil dihapus.');
    }
}
