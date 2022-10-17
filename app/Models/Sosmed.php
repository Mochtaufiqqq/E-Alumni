<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sosmed extends Model
{
    use HasFactory;

    // protected $guarded = ['id'];
    protected $table = 'sosmed';
    protected $primaryKey = 'id';
    protected $fillable = [
        'instagram',
        'facebook',
        'tiktok',
        'linkedin',
        'id_user'
    ];

    public function sosmed()
    {
        return $this->belongsTo(User::class);
    }
}
