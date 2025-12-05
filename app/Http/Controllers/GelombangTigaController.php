<?php

namespace App\Http\Controllers;

use App\Models\GelombangTiga;
use Illuminate\Http\Request;

class GelombangTigaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gelombangtiga = GelombangTiga::all();
        return view('dashboard.2025.gelombangtiga', compact('gelombangtiga'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.2025.gelombangtiga.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        GelombangTiga::create($request->all());
        return redirect()->route('dashboard.2025.gelombangtiga.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(GelombangTiga $gelombangTiga)
    {
        return view('dashboard.2025.gelombangtiga.show', compact('gelombangTiga'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GelombangTiga $gelombangTiga)
    {
        return view('dashboard.2025.gelombangtiga.edit', compact('gelombangTiga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GelombangTiga $gelombangTiga)
    {
        $gelombangTiga->update($request->all());
        return redirect()->route('dashboard.2025.gelombangtiga.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GelombangTiga $gelombangTiga)
    {
        $gelombangTiga->delete();
        return redirect()->route('dashboard.2025.gelombangtiga.index');
    }
}
