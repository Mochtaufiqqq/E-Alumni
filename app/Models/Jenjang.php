<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenjang extends Model
{
    use HasFactory;

    protected $table = 'jenjang';
    protected $primaryKey = 'id';
    protected $fillable = [
        'univ',
        'smk',
        'smp',
    ];

    public function riwayat_pendidikan()
    {
       return $this->hasMany(Riwayat_pendidikan::class);
    }
}
