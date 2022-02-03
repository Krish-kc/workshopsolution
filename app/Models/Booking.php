<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'workshop_id', 'vehicle_id', 'service_id', 'start_time','end_time', 'date', 'status', 'rate'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'vehicle_id');
    }

    public function workshop()
    {
        return $this->belongsTo(WorkShop::class, 'workshop_id');
    }
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
