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
        'nama_sekolah_univ',
        'tahun_mulai_univ',
        'tahun_akhir_univ',

        'nama_sekolah_smk',
        'tahun_mulai_smk',
        'tahun_akhir_smk',
        
        'nama_sekolah_smp',
        'tahun_mulai_smp',
        'tahun_akhir_smp',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jenjang()
    {
        return $this->belongsTo(Jenjang::class);
    }
}
