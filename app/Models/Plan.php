<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute as CastsAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'name',
        'short_description',
        'price',
        'cod',
    ];

    public function signatures()
    {
        return $this->hasMany(Signature::class);
    }

    public function name(): CastsAttribute
    {
        return CastsAttribute::make(
            get: fn($value) => ucfirst($value),
        );
    }
    public function cod(): CastsAttribute
    {
        return CastsAttribute::make(
            get: fn($value) => strtoupper($value),
            set: fn($value) => strtolower($value),
        );
    }

    public function fullname(): CastsAttribute
    {
        return CastsAttribute::make(
            get: fn($value, $attributes) => $attributes['cod'] . ' - ' . $attributes['name']
        );
    }
}
