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
        'id_jabatan',
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

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id');
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
