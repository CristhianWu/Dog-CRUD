<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AnimalType extends Model
{
    //Aqui se definen etc...
    public function dogs(): HasMany
    {
        return $this->hasMany(Dog::class);
    }

}
