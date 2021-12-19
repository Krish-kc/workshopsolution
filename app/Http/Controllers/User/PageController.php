<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('userinterface.pages.home');
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
