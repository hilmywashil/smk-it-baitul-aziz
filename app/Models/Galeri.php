<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'deskripsi',
        'tanggal'
    ];

    public function foto()
    {
        return $this->hasMany(foto::class);
    }
    public function video()
    {
        return $this->hasMany(Video::class);
    }
}
