<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\WorkShop;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashbord()
    {
        $count_user = User::all()->count();
        $count_workShop = WorkShop::all()->count();
        $count_vehicle = Vehicle::all()->count();
        $count_service = Service::all()->count();
        return view('admin.pages.home', compact('count_user', 'count_workShop', 'count_vehicle', 'count_service'));
    }
}
