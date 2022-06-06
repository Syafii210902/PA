<?php

namespace App\Http\Controllers;

use App\Models\Lomba;
use App\Http\Requests\StoreLombaRequest;
use App\Http\Requests\UpdateLombaRequest;
use App\Models\JoinTim;
use App\Models\Tim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Null_;

use function PHPUnit\Framework\isNull;

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
            //belum ditambahlan kondisi untuk tidak menampilkan tim yang sudah penuh anggotanya
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

    public function createTeam(Request $request)
    {
        //dd($request->kategori_lomba);
        $request->validate([
            'nama_tim'     => 'required',
            'jumlah_anggota'     => 'required',
            'requirements'     => 'required'
        ]);

        $team = Tim::create([
            'lomba_id' => $request->lomba_id,
            'user_id' => Auth::user()->id,
            'nama_tim' => $request->nama_tim,
            'jumlah_anggota' => $request->jumlah_anggota,
            'bidang' => $request->kategori_lomba,
            'requirement' => $request->requirements
        ]);

        if($team){
             //redirect dengan pesan sukses
             return redirect()->back()->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
             //redirect dengan pesan error
             return redirect()->back()->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function joinTeam(Request $request)
    {
        $request->validate([
            'no_wa'     => 'required'
        ]);

        $joinTeam = JoinTim::create([
            'user_id' => Auth::user()->id,
            'tim_id' => $request->tim_id,
            'no_wa' => $request->no_wa,
            'status' => '0'
        ]);

        if($joinTeam){
             //redirect dengan pesan sukses
             return redirect()->back()->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
             //redirect dengan pesan error
             return redirect()->back()->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
}
