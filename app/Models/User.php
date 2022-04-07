<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function juaraIndividus()
    {
        return $this->hasMany(JuaraIndividu::class, 'user_id');
    }
    public function pengalamans()
    {
        return $this->hasMany(Pengalaman::class, 'user_id');
    }
    public function kegiatans()
    {
        return $this->hasMany(Kegiatan::class, 'user_id');
    }

    public function joinDivisis(){
        return $this->belongsToMany(DivisiKegiatan::class, 'join_divisis', 'divisi_id', 'user_id')->withPivot('pilihan1', 'pilihan2', 'status1', 'status2');
    }

    public function lombas()
    {
        return $this->hasMany(Lomba::class, 'user_id');
    }

    public function tims()
    {
        return $this->hasMany(Tim::class, 'user_id');
    }

    public function joinTims()
    {
        return $this->belongsToMany(Tim::class, 'join_tims', 'tim_id', 'user_id')->withPivot('no_wa', 'status');
    }
    public function mahasiswa(){
        return $this->hasOne(Mahasiswa::class, 'user_id');
    }
}
