<?php

namespace App\Http\Controllers;

use App\Models\JuaraIndividu;
use App\Models\JuaraTim;
use App\Models\Kegiatan;
use App\Models\Lomba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard', [
            "tittle" => "Dashboard"
        ]);
    }
    public function getLomba(){
        return view('admin.listlomba', [
            "tittle" => "List Lomba",
            "lombas" => Lomba::latest()->get()
        ]);
    }
    public function addLomba(){
        return view('admin.addlomba', [
            "tittle" => "Add Lomba"
        ]);
    }
    public function getKegiatan(){
        return view('admin.listkegiatan', [
            "tittle" => "List Kegiatan",
            "kegiatans" => Kegiatan::latest()->get()
        ]);
    }
    public function addKegiatan(){
        return view('admin.addkegiatan', [
            "tittle" => "Add Kegiatan"
        ]);
    }
    public function getPrestasi(){
        return view('admin.listprestasi', [
            "tittle" => "List Prestasi",
            "prestasis" => JuaraIndividu::with(['user', 'lomba'])->where('status', '1')->get()
        ]);
    }
    public function getPrestasiIndividu(){
        return view('admin.validasiprestasiindividu', [
            "tittle" => "Validasi Prestasi Individu",
            "prestasiIndividus" => JuaraIndividu::with(['user', 'lomba'])->where('status', '0')->get()
        ]);
    }
    public function getPrestasiTim(){
        return view('admin.validasiprestasitim', [
            "tittle" => "Validasi Prestasi Tim",
            "prestasiTims" => JuaraTim::with('tim')->where('status', '0')->get()
        ]);
    }
    
}
