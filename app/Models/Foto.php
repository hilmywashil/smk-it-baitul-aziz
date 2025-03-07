<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;
    protected $fillable = ['galeri_id', 'title', 'image_path'];

    public function galeri()
    {
        return $this->belongsTo(Galeri::class, 'galeri_id');
    }
}
