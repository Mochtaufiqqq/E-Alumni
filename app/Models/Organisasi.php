<?php

namespace App\Models;

use App\Models\Riwayat_organisasi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
    use HasFactory;

    protected $table = 'organisasi';
    protected $fillable = ['nama_organisasi', 'id_organisasi'];

    public function organisasi()
    {
        return $this->hasMany(Riwayat_organisasi::class);
    }
}
