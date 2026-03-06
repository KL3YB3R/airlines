<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flights extends Model
{
    protected $table = 'flights';

    protected $fillable = [
        'flight_number',
        'origin',
        'destination',
        'departure_time',
        'arrival_time',
        'gate',
        'status_id',
    ];
}
