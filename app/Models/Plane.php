<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
    use HasFactory;

    protected $fillable = [
        'plane_name',
        'flights_plane',
        'color',
        'seats',
        'gasoline_capacity',
    ];
}
