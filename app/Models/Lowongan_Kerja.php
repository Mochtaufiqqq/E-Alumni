<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan_Kerja extends Model
{
    use HasFactory;

    
    protected $table = 'lowongan_kerja';
    protected $primaryKey = 'id';
    protected $guarded = ['id_kerja'];

    public function admin()
    {
        return $this->hasMany(Admin::class);
    }
}
