<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    use HasFactory;

    // protected $guarded = ['id'];
    protected $table ='carousels';
    protected $fillable = ['halaman','judul','isi','foto'];
}
