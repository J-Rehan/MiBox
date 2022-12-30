<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZipCode extends Model
{
    use HasFactory;
    protected $fillable = [
        "zipcode",
        "city",
        "country",
        "initial_delivery",
        "initial_pickup",
        "final_delivery",
        "final_pick",
        "moving",
    ];

    public static function search($query)
    {
        return empty($query) ? static::query()
            : static::where(function($q) use ($query) {
                $q
                    ->where('city', 'LIKE', '%'. $query . '%')
                    ->orWhere('zipcode', 'LIKE', '%' . $query . '%');
            });
    }
}
