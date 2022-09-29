<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat_prestasi extends Model
{
    use HasFactory;

    protected $guarded = ['id_prestasi'];
    protected $primaryKey = 'id';
    protected $table = 'riwayat_prestasi';

    public function prestasi()
    {
        return $this->hasMany(User::class);
    }
}
