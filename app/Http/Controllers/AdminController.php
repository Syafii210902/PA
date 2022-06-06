<?php

namespace App\Http\Controllers;

use App\Models\JuaraIndividu;
use App\Models\JuaraTim;
use App\Models\KategoriKegiatan;
use App\Models\Kegiatan;
use App\Models\Lomba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        if (Auth::check() and (Auth::user()->role == 'admin' or Auth::user()->role == 'super admin')) {
            return redirect()->intended('/admin/dashboard');
        }
        else{
            return view('admin.adminlogin', [
                "tittle" => "Admin Login"
            ]);
        }
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt($credentials)) { 
            if (Auth::user()->role == 'admin' or Auth::user()->role == 'super admin') {
                $request->session()->regenerate();
                return redirect()->intended('/admin/dashboard');
            }
        }
 
        return back()->with('loginError', 'Login Gagal');
    }

    public function logout(Request $request){
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/admin/login');
    }
    public function getDashboard(){
        return view('admin.dashboard', [
            "tittle" => "Dashboard"
        ]);
    }
    public function getLomba(){
        if (Auth::user()->role == 'admin') {
            return view('admin.listlomba', [
                "tittle" => "List Lomba",
                "lombas" => Lomba::where('user_id', Auth::user()->id)->latest()->get()
            ]);
        }
        elseif(Auth::user()->role == 'super admin'){
            return view('admin.listlomba', [
                "tittle" => "List Lomba",
                "lombas" => Lomba::latest()->get()
            ]);
        }
    }
    public function addLomba(){
        return view('admin.addlomba', [
            "tittle" => "Add Lomba"
        ]);
    }
    public function storeLomba(Request $request){
        $request->validate([
            'poster'     => 'required|image|mimes:png,jpg,jpeg'
        ]);

        if ($request->file('poster')) {
            $poster = $request->file('poster')->store('poster');
       }
       $lomba = Lomba::create([
           'user_id' => Auth::user()->id,
           'nama_lomba' => $request->namalomba,
           'deskripsi' => $request->deskripsi,
           'tingkat' => $request->tingkat,
           'tahun' => $request->tahun,
           'deadline' => $request->deadline,
           'poster' => $poster,
           'info' => $request->info
       ]);

       if($lomba){
            //redirect dengan pesan sukses
            return redirect()->back()->with(['success' => 'Data Berhasil Disimpan!']);
       }else{
            //redirect dengan pesan error
            return redirect()->back()->with(['error' => 'Data Gagal Disimpan!']);
       }
    }
    public function getKegiatan(){
        if (Auth::user()->role == 'admin') {
            return view('admin.listkegiatan', [
                "tittle" => "List Kegiatan",
                "kegiatans" => Kegiatan::where('user_id', Auth::user()->id)->latest()->get()
            ]);
        }
        
        elseif(Auth::user()->role == 'super admin'){
            return view('admin.listkegiatan', [
                "tittle" => "List Kegiatan",
                "kegiatans" => Kegiatan::latest()->get()
            ]);
        }
    }
    public function addKegiatan(){
        return view('admin.addkegiatan', [
            "tittle" => "Add Kegiatan",
            "kategori_kegiatans" => KategoriKegiatan::get()
        ]);
    }
    public function storeKegiatan(Request $request){
        $request->validate([
            'poster'     => 'required|image|mimes:png,jpg,jpeg'
        ]);

        if ($request->file('poster')) {
            $poster = $request->file('poster')->store('poster');
       }
       $kegiatan = Kegiatan::create([
           'user_id' => Auth::user()->id,
           'kategori_id' => $request->kategori,
           'nama_kegiatan' => $request->namakegiatan,
           'deskripsi' => $request->deskripsi,
           'deadline' => $request->deadline,
           'poster' => $poster,
           'info' => $request->info
       ]);

       if($kegiatan){
            //redirect dengan pesan sukses
            return redirect()->back()->with(['success' => 'Data Berhasil Disimpan!']);
       }else{
            //redirect dengan pesan error
            return redirect()->back()->with(['error' => 'Data Gagal Disimpan!']);
       }
    }
    public function getPrestasiIndividu(){
        return view('admin.prestasiindividu', [
            "tittle" => "Prestasi Individu",
            "prestasis" => JuaraIndividu::with(['user', 'lomba'])->where('status', '1')->get()
        ]);
    }
    public function getPrestasiTim(){
        return view('admin.prestasitim', [
            "tittle" => "Prestasi Kelompok",
            "prestasis" => JuaraTim::with('tim')->where('status', '1')->get()
        ]);
    }
    public function getValidasiIndividu(){
        return view('admin.validasiprestasiindividu', [
            "tittle" => "Validasi Prestasi Individu",
            "prestasiIndividus" => JuaraIndividu::with(['user', 'lomba'])->where('status', '0')->get()
        ]);
    }
    public function getValidasiTim(){
        return view('admin.validasiprestasitim', [
            "tittle" => "Validasi Prestasi Tim",
            "prestasiTims" => JuaraTim::with('tim')->where('status', '0')->get()
        ]);
    }
    public function getProfile(){
        return view('admin.adminprofile', [
            "tittle" => "Profile Admin",
        ]);
    }
    public function destroy(Lomba $lomba)
    {
        $lombas = Lomba::find($lomba->id);
        $lombas->delete();
        return back()->with('loginSuccess', 'Login Sukses');
    }
    public function updateLomba(Request $request)
    {
        $request->validate([
            'poster'     => 'image|mimes:png,jpg,jpeg'
        ]);

        if ($request->file('poster')) {
            $poster = $request->file('poster')->store('poster');
            $updateLomba = Lomba::where('id', $request->lomba_id)->update([
                'nama_lomba' => $request->namalomba,
                'deskripsi'=>$request->deskripsi,
                'tingkat'=>$request->tingkat,
                'tahun'=>$request->tahun,
                'deadline'=>$request->deadline,
                'poster'=>$poster,
                'info'=>$request->info
            ]);
        }
        else{
            $updateLomba = Lomba::where('id', $request->lomba_id)->update([
                'nama_lomba' => $request->namalomba,
                'deskripsi'=>$request->deskripsi,
                'tingkat'=>$request->tingkat,
                'tahun'=>$request->tahun,
                'deadline'=>$request->deadline,
                'info'=>$request->info
            ]);
        }
       
       if($updateLomba){
            //redirect dengan pesan sukses
            return redirect()->back()->with(['success' => 'Data Berhasil Disimpan!']);
       }else{
            //redirect dengan pesan error
            return redirect()->back()->with(['error' => 'Data Gagal Disimpan!']);
       }
        
    }
    
}
