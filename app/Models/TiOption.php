<?php

namespace App\Models;

use App\Blameable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TiOption extends Model
{
    use HasFactory, Blameable;

    protected $fillable = [
        'key',
        'value'
    ];
}
