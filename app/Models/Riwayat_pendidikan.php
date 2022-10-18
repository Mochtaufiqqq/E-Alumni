<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat_pendidikan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'riwayat_pendidikan';
    protected $fillable = [
        'univ',
        'smk',
        'smp',
        'id_user'
    ];

    public function riwayat_pendidikan()
    {
        return $this->belongsTo(User::class);
    }
}
