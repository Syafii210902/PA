<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriKegiatan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function kegiatans()
    {
        return $this->hasMany(Kegiatan::class, 'kategori_id');
    }
}
