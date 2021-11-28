<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceBook extends Model
{
    use HasFactory;
    protected $fillable=[
        'owner_name','engeen_number','chassis_number','vechile_id'
    ];
}
