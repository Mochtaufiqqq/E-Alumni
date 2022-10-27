<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisasiuser extends Model
{
    use HasFactory;

    protected $table = 'organisasiuser';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'organisasi_id',
        // 'jabatan_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }    

    public function riwayat_organisasi()
    {
        return $this->belongsTo(Riwayat_organisasi::class);
    }

    // public function jabatan()
    // {
    //     return $this->belongsTo(Jabatan::class);
    // }
    public function organisasi()
    {
        return $this->belongsTo(Organisasi::class, 'organisasi_id', 'id');
    }
}
