<?php

namespace App\Models;

use App\Models\Riwayat_organisasi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
    use HasFactory;

    protected $table = 'organisasi';
    protected $fillable = [
        'organisasi',
        'user_id',
    ];

    public function riwayat_organisasi()
    {
        return $this->hasMany(Riwayat_organisasi::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
