<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Curtain extends Model
{
    public function files(): MorphMany
    {
        return $this->morphMany(File::class, 'fileable');
    }
}
