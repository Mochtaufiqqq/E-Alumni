<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavIcon extends Model
{
    use HasFactory;
    protected $table = 'fav_icons';
    protected $fillable = ['favicon'];
}
