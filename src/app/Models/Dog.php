<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dog extends Model
{
    public function animal_type(): BelongsTo
    {
        return $this->belongsTo(AnimalType::class, 'animal_type_id');
    }
}
