<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat_pendidikan extends Model
{
    use HasFactory;

    protected $guarded = ['id_prestasi'];
    protected $primaryKey = 'id';
    protected $table = 'riwayat_pendidikan';

    public function riwayat_pendidikan()
    {
        return $this->hasMany(User::class);
    }
}
