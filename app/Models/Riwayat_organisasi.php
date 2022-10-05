<?php

namespace App\Models;

use App\Models\Jabatan;
use App\Models\Organisasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Riwayat_organisasi extends Model
{
    use HasFactory;

    protected $guarded = ['id_riwayat'];
    protected $primaryKey = 'id';
    protected $table = 'riwayat_organisasi';
    protected $fillable = [
        'id_organisasi',
        'id_jabatan'
    ];

    public function riwayat_organisasi()
    {
        return $this->belongsTo(Organisasi::class);
    }

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }

    public function alumni()
    {
        return $this->hasMany(User::class);
    }
}
