<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto_postingan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image_path'
    ];

    protected $table = 'foto_postingan';
    protected $guarded = ['id'];

    public function foto_postingan()
    {
        return $this->hasMany(User::class);
    }
}
