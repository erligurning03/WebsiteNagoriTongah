<?php

namespace App\Http\Controllers;

use App\Models\PerangkatDesa;
use App\Models\Periode;
use Illuminate\Http\Request;

class PerangkatDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //read data
        $perangkat_desa = PerangkatDesa::with('periode')->paginate(10);
        $periode = Periode::all();
        return view('admin.perangkat_desa.index', compact('perangkat_desa','periode'));//masukkan alamat dari filenya lengkap, biar ketemu hiks
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
