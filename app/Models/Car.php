<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['brand', 'model', 'year', 'price', 'description', 'is_electric'];

    // Assegura que `is_electric` es desa com a booleà
    public function setIsElectricAttribute($value)
    {
        $this->attributes['is_electric'] = (bool) $value;
    }
}

