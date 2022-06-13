<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'number', 'lot', 'company', 'model', 'image', 'user_id'
    ];

    public function service()
    {
        return $this->hasOne(ServiceBook::class, 'vechile_id');
    }


}
