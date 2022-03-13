<?php

namespace App\Http\Controllers;

use App\Models\Lomba;
use App\Http\Requests\StoreLombaRequest;
use App\Http\Requests\UpdateLombaRequest;
use App\Models\Tim;

class LombaController extends Controller
{
    public function index()
    {
        return view('lomba', [
            "tittle" => "Lomba",
            "lombas" => Lomba::latest()->get()
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
     * @param  \App\Http\Requests\StoreLombaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLombaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lomba  $lomba
     * @return \Illuminate\Http\Response
     */
    public function show(Lomba $lomba)
    {
        return view('detail-lomba', [
            "tittle" => "Detail Lomba",
            "lomba" => $lomba,
            "tims" => Tim::with('lomba')->where('lomba_id', $lomba->id)->latest()->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lomba  $lomba
     * @return \Illuminate\Http\Response
     */
    public function edit(Lomba $lomba)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLombaRequest  $request
     * @param  \App\Models\Lomba  $lomba
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLombaRequest $request, Lomba $lomba)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lomba  $lomba
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lomba $lomba)
    {
        //
    }
}
