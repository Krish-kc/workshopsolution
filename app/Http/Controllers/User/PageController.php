<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

use App\Models\Vehicle;
use App\Models\WorkShop;
use Illuminate\Support\Facades\Auth;

use App\Models\About;
use App\Models\Team;

class PageController extends Controller
{
    public function home()
    {
        // $banner=Banner::all();
        $banner = Banner::where('status', 'on')->get();
        return view('userinterface.pages.home', compact('banner'));
    }
    public function about()
    {
        $team = Team::where('status', 'on')->get();
        $about = About::where('status', 'on')->get();
        return view('userinterface.pages.about', compact('about', 'team'));
    }

    public function service(Request $request){
        $user_id=Auth::id();
           $search =$request['search'] ?? "";
                if($search != ""){

                    $workshop = WorkShop::where('location',"LIKE","%$search%")->get();
                }else{

                    $workshop=WorkShop::all();
                }
      
        
        $vehicle=Vehicle::where('user_id',$user_id)->get();
        return view('userinterface.pages.services',compact('workshop','vehicle','search'));
         } 
  
public function singleWorkshop(){
        
    $workshop=WorkShop::all();
        

         return view('userinterface.pages.single_service',compact('workshop'));
 
}
    


   
   
    public function contact()
    {

        return view('userinterface.pages.contact');
    }
}
