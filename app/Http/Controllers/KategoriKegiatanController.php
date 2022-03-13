<?php

namespace App\Http\Controllers;

use App\Models\KategoriKegiatan;
use App\Models\Kegiatan;
use App\Http\Requests\StoreKategoriKegiatanRequest;
use App\Http\Requests\UpdateKategoriKegiatanRequest;

class KategoriKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKategoriKegiatanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKategoriKegiatanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KategoriKegiatan  $kategoriKegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriKegiatan $kategoriKegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KategoriKegiatan  $kategoriKegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(KategoriKegiatan $kategoriKegiatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKategoriKegiatanRequest  $request
     * @param  \App\Models\KategoriKegiatan  $kategoriKegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKategoriKegiatanRequest $request, KategoriKegiatan $kategoriKegiatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KategoriKegiatan  $kategoriKegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(KategoriKegiatan $kategoriKegiatan)
    {
        //
    }
}
