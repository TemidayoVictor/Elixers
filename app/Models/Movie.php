<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $table = "movies";

    protected $fillable = [
        'name',
        'description',
        'genre',
        'image',
        'video',
        'price',
        'popular',
        'status',
        'size',
    ];

    public function images() {
        return $this->hasMany(Image::class);
    }
}
