<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id'
    ];


    public function Intervals(){
        return $this->hasMany(Interval::class);
    }
}
