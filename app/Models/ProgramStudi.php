<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function mahasiswa(){
        return $this->hasOne(Mahasiswa::class, 'program_id');
    }
}
