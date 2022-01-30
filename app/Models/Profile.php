<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname',
        'nickname',
        'mobile_one',
        'mobile_two',
        'district',
        'city',
        'local_area',
        'street_address',
        'house_number',
        'birthday',
        'age',
        'gender',
        'profile_pic',
        'user_id',
    ];

    // public function vehicle(){
    //     return $this->hasMany(Vehicle::class,'user_id');
    // }

    // public function service(){
    //     return $this->hasOne(ServiceBook::class,'vechile_id');
    // }



}
