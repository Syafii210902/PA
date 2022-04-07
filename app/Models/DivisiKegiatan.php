<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DivisiKegiatan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function kegiatan(){
        return $this->belongsTo(Kegiatan::class, 'kegiatan_id');
    }

    public function users(){
        return $this->belongsToMany(DivisiKegiatan::class, 'join_divisis', 'divisi_id', 'user_id')->withPivot('pilihan1', 'pilihan2', 'status1', 'status2');
    }
}
