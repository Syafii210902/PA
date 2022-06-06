<?php

namespace App\Http\Controllers;

use App\Models\DivisiKegiatan;
use App\Models\JoinTim;
use App\Models\JuaraIndividu;
use App\Models\JuaraTim;
use App\Models\Kegiatan;
use App\Models\Lomba;
use App\Models\Mahasiswa;
use App\Models\Pengalaman;
use App\Models\Tim;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Session;

use function PHPUnit\Framework\isNull;

class ProfileController extends Controller
{
    public function index(Request $request, User $user)
    {
        return view('profile', [
            "tittle" => "Profile",
            "user" => $user->where('id', $user->id)->get(),
            "prestasis" => JuaraIndividu::with('user')->where('user_id', $user->id)->where('status', '1')->orderBy('tahun','DESC')->get(),
            "pengalamans" => Pengalaman::with('user')->where('user_id', $user->id)->orderBy('tahun','DESC')->get(),
            "tims" => Tim::where('user_id', $user->id)->get(),
            "selected_id" => $request->get('select_tim'),
            "accepted_tims" => Tim::get(),
            "accepted_divisis" => DivisiKegiatan::get(),
        ]);
    }

    public function update(Request $request)
    {    
        foreach ($request->status as $key => $status) {
            $member = JoinTim::where('tim_id', $request->tim_id)->where('user_id', $request->user_id[$key])->update(["status" => $request->status[$key]]);
        }
        return redirect()->back()->with('success',' Update Success');
    }

    public function storePrestasi(Request $request)
    {
        $request->validate([
             'sertifikat'     => 'required|image|mimes:png,jpg,jpeg'
         ]);

         if ($request->file('sertifikat')) {
             $sertifikat = $request->file('sertifikat')->store('sertifikat');
        }
        $lomba_id = Lomba::where('nama_lomba', $request->nama_lomba)->where('tahun', $request->tahun)->get();
        $prestasi = JuaraIndividu::create([
            'user_id' => Auth::user()->id,
            'lomba_id' => $lomba_id[0]->id,
            'bidang' => $request->kategori,
            'keterangan' => $request->prestasi,
            'sertifikat' => $sertifikat,
            'status' => '0',
            'tahun' => $request->tahun,
            'type' => 'private'
        ]);

        if($prestasi){
             //redirect dengan pesan sukses
             return redirect()->back()->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
             //redirect dengan pesan error
             return redirect()->back()->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function storePengalaman(Request $request)
    {
        $request->validate([
             'nama_kegiatan'     => 'required',
             'jabatan'     => 'required',
             'tahun'     => 'required'
        ]);

        $pengalaman = Pengalaman::create([
            'user_id' => Auth::user()->id,
            'nama_kegiatan' => $request->nama_kegiatan,
            'jabatan' => $request->jabatan,
            'tahun' => $request->tahun
        ]);

        if($pengalaman){
             //redirect dengan pesan sukses
             return redirect()->back()->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
             //redirect dengan pesan error
             return redirect()->back()->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function storeJuaraIndividu(Request $request)
    {
        $request->validate([
            'sertifikat'     => 'required|image|mimes:png,jpg,jpeg'
        ]);

        if ($request->file('sertifikat')) {
            $sertifikat = $request->file('sertifikat')->store('sertifikat');
       }
       $lomba_id = Lomba::where('nama_lomba', $request->nama_lomba)->where('tahun', $request->tahun)->get();
       $juaraIndividu = JuaraIndividu::create([
           'user_id' => Auth::user()->id,
           'lomba_id' => $lomba_id[0]->id,
           'bidang' => $request->kategori,
           'keterangan' => $request->prestasi,  
           'sertifikat' => $sertifikat,
           'status' => '0',
           'tahun' => $request->tahun,
           'type' => 'publish'
       ]);
       if($juaraIndividu){
            //redirect dengan pesan sukses
            return redirect()->back()->with(['success' => 'Data Berhasil Disimpan!']);
       }else{
            //redirect dengan pesan error
            return redirect()->back()->with(['error' => 'Data Gagal Disimpan!']);
       }
    }

    public function storeJuaraKelompok(Request $request)
    {
        $request->validate([
            'sertifikat'     => 'required|image|mimes:png,jpg,jpeg'
        ]);

        if ($request->file('sertifikat')) {
            $sertifikat = $request->file('sertifikat')->store('sertifikat');
       }
       $tim_id = Tim::where('nama_tim', $request->nama_tim)->get();
       $juaraTim = JuaraTim::create([
           'tim_id' => $tim_id[0]->id,
           'keterangan' => $request->prestasi,
           'sertifikat' => $sertifikat,
           'status' => '0',
           'tahun' => $request->tahun,
           'type' => 'publish'
       ]);

       if($juaraTim){
            //redirect dengan pesan sukses
            return redirect()->back()->with(['success' => 'Data Berhasil Disimpan!']);
       }else{
            //redirect dengan pesan error
            return redirect()->back()->with(['error' => 'Data Gagal Disimpan!']);
       }
    }

    public function updateAccount(Request $request)
    {
        $updateUser = User::where('id', Auth::user()->id)->update(['username' => $request->username],['email'=>$request->email]);
        $updateMahasiswa = Mahasiswa::where('user_id', Auth::user()->id)->update(['bio'=>$request->bio]);
        if($updateMahasiswa){
            //redirect dengan pesan sukses
            return redirect()->back()->with(['success' => 'Data Berhasil Disimpan!']);
       }else{
            //redirect dengan pesan error
            return redirect()->back()->with(['error' => 'Data Gagal Disimpan!']);
       }
    }

    public function updateAvatar(Request $request)
    {
        $request->validate([
            'photoprofile'     => 'required|image|mimes:png,jpg,jpeg'
        ]);

        if ($request->file('photoprofile')) {
            $photoprofile = $request->file('photoprofile')->store('avatar');
            $updateAvatar = User::where('id', Auth::user()->id)->update(['image' => $photoprofile]);
       }
        if($updateAvatar){
            //redirect dengan pesan sukses
            return redirect()->back()->with(['success' => 'Data Berhasil Disimpan!']);
       }else{
            //redirect dengan pesan error
            return redirect()->back()->with(['error' => 'Data Gagal Disimpan!']);
       }
    }


    // public function autocomplete(Request $request){
    //     $data = Lomba::select('nama_lomba')->where('nama_lomba','like','%Information%')->get();
    //     return response()->json($data);
    // }
}
