<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkShop extends Model
{
    use HasFactory;

    protected $fillable=[
        'name','PAN','location','starting_time','ending_time','image','no_of_staff','user_id'
    ];

    public function services(){
        return $this->hasMany(Service::class,'workshop_id');
    }

}
