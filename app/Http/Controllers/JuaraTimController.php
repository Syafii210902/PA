<?php

namespace App\Http\Controllers;

use App\Models\JuaraTim;
use App\Http\Requests\StoreJuaraTimRequest;
use App\Http\Requests\UpdateJuaraTimRequest;

class JuaraTimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('juara-tim', [
            "tittle" => "Juara",
            "juara_tims" => JuaraTim::with('tim')->where('type', 'publish')->latest()->get()
        ]);
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
     * @param  \App\Http\Requests\StoreJuaraTimRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJuaraTimRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JuaraTim  $juaraTim
     * @return \Illuminate\Http\Response
     */
    public function show(JuaraTim $juaraTim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JuaraTim  $juaraTim
     * @return \Illuminate\Http\Response
     */
    public function edit(JuaraTim $juaraTim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJuaraTimRequest  $request
     * @param  \App\Models\JuaraTim  $juaraTim
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJuaraTimRequest $request, JuaraTim $juaraTim)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JuaraTim  $juaraTim
     * @return \Illuminate\Http\Response
     */
    public function destroy(JuaraTim $juaraTim)
    {
        //
    }
}
