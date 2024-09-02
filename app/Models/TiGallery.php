<?php

namespace App\Models;

use App\Blameable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiGallery extends Model
{
    use HasFactory, Blameable;

    protected $fillable = [
        'image_url',
    ];
}
