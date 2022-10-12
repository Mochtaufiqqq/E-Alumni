<?php

namespace App\Models;

use App\Models\Riwayat_organisasi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
    use HasFactory;

    protected $table = 'organisasi';
    protected $fillable = ['organisasi'];

    public function riwayat_organisasi()
    {
        return $this->hasMany(Riwayat_organisasi::class);
    }
}
