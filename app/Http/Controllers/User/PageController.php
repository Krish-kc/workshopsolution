<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Vehicle;
use App\Models\WorkShop;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home(){
        // $banner=Banner::all();
        $banner=Banner::where('status','on')->get();
        return view('userinterface.pages.home',compact('banner'));
    }
    public function about(){
        return view('userinterface.pages.about');
    }
    public function service(){
        $user_id=Auth::id();
        $workshop=WorkShop::all();
        $vehicle=Vehicle::where('user_id',$user_id)->get();
        return view('userinterface.pages.services',compact('workshop','vehicle'));
    }
    public function contact(){
        return view('userinterface.pages.contact');
    }
}
