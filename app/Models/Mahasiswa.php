<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function prestasis()
    {
        return $this->hasMany(Prestasi::class, 'mahasiswa_id');
    }
    public function pengalamans()
    {
        return $this->hasMany(Pengalaman::class, 'pengalaman_id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
