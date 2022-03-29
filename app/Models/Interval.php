<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interval extends Model
{
    use HasFactory;

   protected $fillable = [

        'solt_id',
        'start_time',
        'end_time',
        'booking_id',
        'status'
    ];
}
