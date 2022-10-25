<?php

namespace App\Models;

use App\Models\Jabatan;
use App\Models\Organisasi;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Riwayat_organisasi extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = ['id'];
    protected $table = 'riwayat_organisasi';
    protected $fillable = [
        'id_organisasi',
        'foto',
        'dokumentasi',
        'logo',
        'periode',
        'deskripsi'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'id_organisasi'
            ]
        ];
    }

    public function organisasi()
    {
        return $this->belongsTo(Organisasi::class, 'id');
    }

    public function organisasiuser()
    {
        return $this->hasMany(Organisasiuser::class);
    }
}
