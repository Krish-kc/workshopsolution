<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'duration', 'charge', 'details', 'workshop_id'
    ];

    public function slots(){
      return  $this->hasMany(Slot::class,'service_id');
    }
}
