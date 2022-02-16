<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
      protected $filable=[
          'title','date','start_time','end_time','booking_id'
      ];
}
