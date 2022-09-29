<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sosmed extends Model
{
    use HasFactory;

    protected $guarded = ['id_sosmed'];
    protected $primaryKey = 'id';
    protected $table = 'sosmed';

    public function sosmed()
    {
        return $this->hasMany(User::class);
    }
}
