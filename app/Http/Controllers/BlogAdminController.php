<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Category;
use Illuminate\Http\Request;
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
}
