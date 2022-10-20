<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KesanPesan extends Model
{
    use HasFactory;
    protected $table = 'kesan_pesans';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id','isi'];
    // protected $guarded = ['user_id'];


    public function user ()
    {
        return $this->belongsTo(User::class);
    }
}
