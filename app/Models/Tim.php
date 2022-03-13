<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tim extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'join_tims', 'tim_id', 'user_id')->withPivot('no_wa', 'status');
    }

    public function lomba()
    {
        return $this->belongsTo(Lomba::class, 'lomba_id');
    }

    public function juaraTim()
    {
        return $this->hasOne(JuaraTim::class, 'tim_id');
    }
}
