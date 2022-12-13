<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dogs extends Model
{
    use HasFactory;

    public function dogsRequiringAntiRabbitBiteShot() {
        return $this->AgeGreaterThan(6);
    }

    public function scopeAgeGreaterThan($query, $age) {
        return $query->where('age', '>', $age);
    }
}
