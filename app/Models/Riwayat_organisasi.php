<?php

namespace App\Models;

use App\Models\Jabatan;
use App\Models\Organisasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Riwayat_organisasi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'riwayat_organisasi';
    protected $fillable = [
        'carousel',
        'periode',
        'id_organisasi',
        'id_jabatan',
    ];

    public function organisasi()
    {
        return $this->belongsTo(Organisasi::class, 'id');
    }

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id');
    }

    public function alumni()
    {
        return $this->hasMany(User::class);
    }
}
