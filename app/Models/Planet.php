<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'detail',
        'distance',
        'duree',
        'image_path',
        'updated_at',
        'created_at'
    ];
}
