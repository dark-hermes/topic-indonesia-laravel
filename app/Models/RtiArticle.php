<?php

namespace App\Models;

use App\Blameable;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RtiArticle extends Model
{
    use HasFactory, Blameable, SoftDeletes, HasSlug;

    protected $fillable = [
        'category_id',
        'created_by',
        'updated_by',
        'title',
        'slug',
        'image_url',
        'content',
        'views',
        'is_published',
    ];

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(RtiCategory::class);
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
