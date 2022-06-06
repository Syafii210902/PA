<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function program(){
        return $this->belongsTo(ProgramStudi::class, 'program_id');
    }
    public function jurusan(){
        return $this->belongsTo(Jurusan::class, 'jurusan_id');
    }
}
