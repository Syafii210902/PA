<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\KategoriKegiatan;
use App\Http\Requests\StoreKegiatanRequest;
use App\Http\Requests\UpdateKegiatanRequest;
use App\Models\DivisiKegiatan;
use App\Models\JoinDivisi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(KategoriKegiatan $kategoriKegiatan)
    {
        return view('kegiatan', [
            "tittle" => "Kegiatan",
            "kegiatans" => Kegiatan::with('kategori')->where('kategori_id', $kategoriKegiatan->id)->latest()->get()
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
     * @param  \App\Http\Requests\StoreKegiatanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKegiatanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriKegiatan $kategoriKegiatan, Kegiatan $kegiatan)
    {
        return view('detail-kegiatan', [
            "tittle" => "Detail Kegiatan",
            "kegiatan" => $kegiatan::with('kategori')->where('id', $kegiatan->id)->latest()->get(),
            "divisis" => DivisiKegiatan::with('kegiatan')->where('kegiatan_id', $kegiatan->id)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKegiatanRequest  $request
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKegiatanRequest $request, Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kegiatan $kegiatan)
    {
        //
    }

    public function joinDivisi(Request $request)
    {
        $request->validate([
            'no_wa'     => 'required'
        ]);

        $joinDivisi = JoinDivisi::create([
            'user_id' => Auth::user()->id,
            'divisi_id' => $request->pilihan1,
            'pilihan1' => DivisiKegiatan::find($request->pilihan1)->nama_kegiatan,
            'pilihan2' => DivisiKegiatan::find($request->pilihan2)->nama_kegiatan,
            'status1' => '0',
            'status2' => '0',
            'no_wa' => $request->no_wa
        ]);

        if($joinDivisi){
             //redirect dengan pesan sukses
             return redirect()->back()->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
             //redirect dengan pesan error
             return redirect()->back()->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
}
