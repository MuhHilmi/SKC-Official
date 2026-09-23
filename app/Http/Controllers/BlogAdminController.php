<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogAdminController extends Controller
{
    public function index(Request $request)
    {
        $posts = BlogPost::with(['author', 'categories'])
            ->latest()
            ->paginate(10);

        return view('dashboard.blog.index', ['posts' => $posts]);
    }
}
