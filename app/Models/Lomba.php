<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lomba extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function juaraIndividus()
    {
        return $this->hasMany(JuaraIndividu::class, 'lomba_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tims()
    {
        return $this->hasMany(Tim::class, 'lomba_id');
    }
}
