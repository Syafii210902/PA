<?php

use App\Http\Controllers\JuaraIndividuController;
use App\Http\Controllers\JuaraTimController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LombaController;
use App\Models\JuaraIndividu;
use App\Models\JuaraTim;
use App\Models\Tim;
use App\Models\Lomba;
use App\Models\Kegiatan;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\ProfileController;
use Symfony\Component\Console\Input\Input;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "tittle" => "Home",
        "lombas" => Lomba::latest()->get(),
        "kgts" => Kegiatan::latest()->get(),
        "tims" => Tim::latest()->get(),
        "juara_individus" => JuaraIndividu::with(['lomba', 'user'])->latest()->get(),
        "juara_tims" => JuaraTim::with('tim')->latest()->get()

    ]);
});

Route::get('/lomba', [LombaController::class, 'index']);
Route::get('/lomba/{lomba:id}', [LombaController::class, 'show']);

Route::get('/kegiatan/{kategoriKegiatan:nama_kategori}', [KegiatanController::class, 'index']);
Route::get('/kegiatan/{kategoriKegiatan:nama_kategori}/{kegiatan:id}', [KegiatanController::class, 'show']);

Route::get('/juara/individu', [JuaraIndividuController::class, 'index']);
Route::get('/juara/tim', [JuaraTimController::class, 'index']);

Route::get('/profile/{user:username}', [ProfileController::class, 'index']);