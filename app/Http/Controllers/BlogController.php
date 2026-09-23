<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->query('q');
        $categorySlug = $request->query('kategori');

        $posts = BlogPost::published()
            ->with(['author', 'categories'])
            ->search($keyword)
            ->when($categorySlug, function ($query, $categorySlug) {
                $query->whereHas('categories', function ($q) use ($categorySlug) {
                    $q->where('slug', $categorySlug);
                });
            })
            ->latest('published_at')
            ->paginate(9)
            ->withQueryString();

        return view('blog.index', [
            'posts' => $posts,
            'categories' => Category::orderBy('nama')->get(),
            'keyword' => $keyword,
            'activeCategory' => $categorySlug,
        ]);
    }

    public function show(string $slug)
    {
        $post = BlogPost::published()
            ->with(['author', 'categories'])
            ->where('slug', $slug)
            ->firstOrFail();

        $related = BlogPost::published()
            ->where('id', '!=', $post->id)
            ->whereHas('categories', function ($q) use ($post) {
                $q->whereIn('categories.id', $post->categories->pluck('id'));
            })
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('blog.show', [
            'post' => $post,
            'related' => $related,
        ]);
    }
}
