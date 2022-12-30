<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        "type",
        "current_zipcode",
        "new_zipcode",
        "start_date",
        "email",
        "phone",
        "promo_code",
        "container_types",
    ];
    
}
