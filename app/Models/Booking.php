<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id','workshop_id','vehicle_id','service_id','date','time','status','rate'
    ];
}
