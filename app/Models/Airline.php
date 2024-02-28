<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    use HasFactory;

    protected $fillable = [
        'airline_name',
        'planes_number',
        'flights_number',
        'passenger_lounges_number',
        'status',
    ];
}
