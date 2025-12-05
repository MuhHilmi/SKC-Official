<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeri = Galeri::all();
        return view('galeri', compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.uploads');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'deskripsi' => 'required',
            'link' => 'required',
        ]);

        $path = $request->file('gambar')->store('galeri', 'public');

        // dd($request->all());
        Galeri::create([
            'gambar' => $path,
            'deskripsi' => $request->deskripsi,
            'link' => $request->link,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('galeri.index')
            ->with('success', 'Gambar berhasil diupload');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
