<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmergencyBreakDown extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'location',
        'phone',
        'vehicle_number',
        'vehicle_type',
        'description',
    ];
}
