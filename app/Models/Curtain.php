<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Spatie\Translatable\HasTranslations;

class Curtain extends Model
{
    use HasTranslations;

    protected $fillable = [
        'title', 'slug', 'short_description', 'description', 'image'
    ];

    protected $casts = [
        'title' => 'array',
        'short_description' => 'array',
        'description' => 'array',
    ];
    
    public $translatable = ['title', 'description', 'short_description'];

    

    public function files(): MorphMany
    {
        return $this->morphMany(File::class, 'fileable');
    }
}
