<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita';
    protected $guarded = ['id'];

    public function admin()
    {
        return $this->hasMany(Admin::class);
    }

    public function foto_postingan()
    {
        return $this->belongsTo(Foto_postingan::class);
    }
}
