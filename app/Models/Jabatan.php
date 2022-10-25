<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $table = 'jabatan';
    protected $fillable = ['jabatan', 'user_id'];

    public function riwayat_organisasi()
    {
        return $this->hasMany(Riwayat_organisasi::class);
    }

    public function organisasiuser()
    {
        return $this->hasMany(Organisasiuser::class);
    }
}
