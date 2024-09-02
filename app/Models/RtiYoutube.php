<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RtiYoutube extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'thumbnail_url',
        'video_url',
        'order',
    ];
}
