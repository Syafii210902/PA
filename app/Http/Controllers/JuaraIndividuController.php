<?php

namespace App\Http\Controllers;

use App\Models\JuaraIndividu;
use App\Http\Requests\StoreJuaraIndividuRequest;
use App\Http\Requests\UpdateJuaraIndividuRequest;

class JuaraIndividuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('juara-individu', [
            "tittle" => "Juara",
            "juara_individus" => JuaraIndividu::with(['lomba', 'user'])->latest()->get()
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
     * @param  \App\Http\Requests\StoreJuaraIndividuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJuaraIndividuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JuaraIndividu  $juaraIndividu
     * @return \Illuminate\Http\Response
     */
    public function show(JuaraIndividu $juaraIndividu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JuaraIndividu  $juaraIndividu
     * @return \Illuminate\Http\Response
     */
    public function edit(JuaraIndividu $juaraIndividu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJuaraIndividuRequest  $request
     * @param  \App\Models\JuaraIndividu  $juaraIndividu
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJuaraIndividuRequest $request, JuaraIndividu $juaraIndividu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JuaraIndividu  $juaraIndividu
     * @return \Illuminate\Http\Response
     */
    public function destroy(JuaraIndividu $juaraIndividu)
    {
        //
    }
}
