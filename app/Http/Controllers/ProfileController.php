<?php

namespace App\Http\Controllers;

use App\Models\DivisiKegiatan;
use App\Models\Kegiatan;
use App\Models\Pengalaman;
use App\Models\Tim;
use App\Models\User;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request, User $user)
    {
        return view('profile', [
            "tittle" => "Profile",
            "user" => $user->where('id', $user->id)->get(),
            "pengalamans" => Pengalaman::with('user')->where('user_id', $user->id)->latest()->get(),
            "tims" => Tim::where('user_id', $user->id)->get(),
            "selected_id" => $request->get('select_tim'),
            "accepted_tims" => Tim::get(),
            "accepted_divisis" => DivisiKegiatan::get()
        ]);
    }
}
