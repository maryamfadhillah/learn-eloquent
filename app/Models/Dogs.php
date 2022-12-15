<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Dogs extends Model
{
    use HasFactory;

    public function dogsRequiringAntiRabbitBiteShot() {
        return $this->AgeGreaterThan(6);
    }

    public function scopeAgeGreaterThan($query, $age) {
        return $query->where('age', '>', $age);
    }

    /**
     * Global scope for this model
     */
    // protected static function boot()
    // {
    //     parent::boot();

    //     static::addGlobalScope('age', function (Builder $builder) {
    //         $builder->where('age', '>', 8);
    //     });
    // }

    public function getNameAttribute($value) {
        return strtoupper($value);
    }

    // protected function name(): Attribute
    // { 
    //     return Attribute::make(
    //         get: fn ($value) => strtoupper($value)
    //     );
    // }
}
