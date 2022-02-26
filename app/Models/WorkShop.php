<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;

class WorkShop extends Model
{
    use HasFactory;
    use Commentable;

    protected $fillable = [
        'name', 'PAN', 'location', 'starting_time', 'ending_time','short_description','long_description', 'no_of_staff', 'user_id'
    ];

    public function services()
    {
        return $this->hasMany(Service::class, 'workshop_id');
    }

    public function Images()
    {
        return $this->hasMany(WorkshopImg::class, 'workshop_id');
    }

    public function singleImage(){
        return $this->hasone(WorkshopImg::class, 'workshop_id');
    }
}
