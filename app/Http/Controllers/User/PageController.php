<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
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
        return view('userinterface.pages.services');
    }
    public function contact(){
        return view('userinterface.pages.contact');
    }
}
