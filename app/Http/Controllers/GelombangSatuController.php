<?php

namespace App\Http\Controllers;

use App\Models\GelombangSatu;
use Illuminate\Http\Request;

class GelombangSatuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gelombangsatu = GelombangSatu::all();
        return view('dashboard.2025.gelombangsatu', compact('gelombangsatu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.2025.gelombangsatu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        GelombangSatu::create($request->all());
        return redirect()->route('dashboard.2025.gelombangsatu.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(GelombangSatu $gelombangSatu)
    {
        return view('dashboard.2025.gelombangsatu.show', compact('gelombangSatu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GelombangSatu $gelombangSatu)
    {
        return view('dashboard.2025.gelombangsatu.edit', compact('gelombangSatu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GelombangSatu $gelombangSatu)
    {
        $gelombangSatu->update($request->all());
        return redirect()->route('dashboard.2025.gelombangsatu.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GelombangSatu $gelombangSatu)
    {
        $gelombangSatu->delete();
        return redirect()->route('dashboard.2025.gelombangsatu.index');
    }
}
