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
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
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

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'index']);
    Route::post('/login', [AdminController::class, 'authenticate']);
    Route::get('/logout', [AdminController::class, 'logout']);
    Route::get('/dashboard', [AdminController::class, 'getDashboard']);
    Route::get('/lomba/list', [AdminController::class, 'getLomba']);
    Route::post('/lomba/edit', [AdminController::class, 'updateLomba']);
    Route::get('/lomba/delete/{lomba:id}', [AdminController::class, 'destroy']);
    Route::get('/lomba/add', [AdminController::class, 'addLomba']);
    Route::post('/addlomba', [AdminController::class, 'storeLomba']);
    Route::get('/kegiatan/list', [AdminController::class, 'getKegiatan']);
    Route::get('/kegiatan/add', [AdminController::class, 'addKegiatan']);
    Route::post('/addkegiatan', [AdminController::class, 'storeKegiatan']);
    Route::get('/prestasi/individu/list', [AdminController::class, 'getPrestasiIndividu']);
    Route::get('/prestasi/kelompok/list', [AdminController::class, 'getPrestasiTim']);
    Route::get('/prestasi/validasi/individu', [AdminController::class, 'getValidasiIndividu']);
    Route::get('/prestasi/validasi/kelompok', [AdminController::class, 'getValidasiTim']);
    Route::get('/profile', [AdminController::class, 'getProfile']);
});

Route::get('/', function () {
    return view('home', [
        "tittle" => "Home",
        "lombas" => Lomba::latest()->get(),
        "kgts" => Kegiatan::latest()->get(),
        "tims" => Tim::latest()->get(),
        "juara_individus" => JuaraIndividu::with(['lomba', 'user'])->where('status', '1')->where('type', 'publish')->latest()->get(),
        "juara_tims" => JuaraTim::with('tim')->where('status', '1')->where('type', 'publish')->latest()->get()

    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/lomba', [LombaController::class, 'index']);
Route::get('/lomba/{lomba:id}', [LombaController::class, 'show']);
Route::post('/createteam', [LombaController::class, 'createTeam']);
Route::post('/jointeam', [LombaController::class, 'jointeam']);

Route::get('/kegiatan/{kategoriKegiatan:nama_kategori}', [KegiatanController::class, 'index']);
Route::get('/kegiatan/{kategoriKegiatan:nama_kategori}/{kegiatan:id}', [KegiatanController::class, 'show']);
Route::post('/joindivisi', [KegiatanController::class, 'joinDivisi']);

Route::get('/juara/individu', [JuaraIndividuController::class, 'index']);
Route::get('/juara/tim', [JuaraTimController::class, 'index']);

Route::get('/profile/{user:username}', [ProfileController::class, 'index']);
Route::post('/addprestasi', [ProfileController::class, 'storePrestasi']);
Route::post('/addpengalaman', [ProfileController::class, 'storePengalaman']);
Route::post('/addjuaraindividu', [ProfileController::class, 'storeJuaraIndividu']);
Route::post('/addjuarakelompok', [ProfileController::class, 'storeJuaraKelompok']);
Route::post('/profile', [ProfileController::class, 'update']);
Route::post('/updateaccount', [ProfileController::class, 'updateAccount']);
Route::post('/updateavatar', [ProfileController::class, 'updateAvatar']);
// Route::get('autocomplete', [ProfileController::class, 'autocomplete']);