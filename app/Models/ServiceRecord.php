<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'serviceBook_id',
        'date',
        'kilometer',
        'part_change',
        'service_charge',
        'service_duration',
        'nextService',
        'description',
        'image',
        'serviceCenter_name',

    ];
}
