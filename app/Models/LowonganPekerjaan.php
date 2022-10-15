<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LowonganPekerjaan extends Model
{
    use HasFactory;

    protected $table = 'lowongan_pekerjaans';
    protected $primaryKey = 'id';
    protected $fillable = ['judul', 'deskripsi','loker_image'];

}
