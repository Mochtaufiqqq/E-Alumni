<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $table = 'jabatan';
    protected $fillable = ['nama_jabatan', 'id_jabatan'];

    public function jabatan()
    {
        return $this->hasMany(Riwayat_organisasi::class);
    }
}
