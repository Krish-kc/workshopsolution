<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

use App\Models\Vehicle;
use App\Models\WorkShop;
use Illuminate\Support\Facades\Auth;

use App\Models\About;
use App\Models\Contact;
use App\Models\Event;
use App\Models\Profile;
use App\Models\Rating;
use App\Models\Service;
use App\Models\Team;
use App\Models\User;
use App\Models\WorkshopImg;
use Laravelista\Comments\Comment;



class PageController extends Controller
{
    public function home()
    {
        $user_id = Auth::id();
        $workshop = WorkShop::all();
        $vehicle = Vehicle::where('user_id', $user_id)->get();
        $about = About::where('status', 'on')->get();
        $team = Team::where('status', 'on')->get();
        $banner = Banner::where('status', 'on')->get();
        return view('userinterface.pages.home', compact('banner', 'workshop', 'vehicle', 'about', 'team'));
    }
    public function about()
    {
        $team = Team::where('status', 'on')->get();
        $about = About::where('status', 'on')->get();
        return view('userinterface.pages.about', compact('about', 'team'));
    }

    public function service(Request $request)
    { {
            $user_id = Auth::id();
            $search = $request['search'] ?? "";
            if ($search != "") {

                $workshop = WorkShop::where('location', "LIKE", "%$search%")->get();
            } else {

                $workshop = WorkShop::all();
            }
            $vehicle = Vehicle::where('user_id', $user_id)->get();
            return view('userinterface.pages.services', compact('workshop', 'vehicle', 'search'));
        }
    }


    public function singleWorkshop(Request $request, $id)
    {



        $workshop = WorkShop::findOrFail($id);

        $related = WorkShop::all();
        $rating = Rating::where('workshop_id', $workshop->id)->get();
        $rating_sum = Rating::where('workshop_id', $workshop->id)->sum('stars_rated');
        $user_rating = Rating::where('workshop_id', $workshop->id)->where('user_id', Auth::id())->first();

        $vehicle = Vehicle::all();

        $latestworkshop = WorkShop::latest()->take(3)->get();


        // if(request('latest')){
        //     $workshop->where('workshop_id',$workshop->id)->orderby('created_at','desc');
        // }



        // if ($request->method('sort') == 'latest' ){

        //     $workshop = WorkShop::where('workshop_id',$workshop->id)->orderBy('created_at','desc');

        // }

            // if ($request->get('sort') == 'popular') {

            //     $filterworkshop = Rating::where('workshop_id', $workshop->id)->get();
            // }


            // if ($rating_sum >= 3){

            //     $filterworkshop = WorkShop::where('stars_rated',$workshop->id)->get();
            // }

            $comment = Comment::all();



        if ($rating->count() > 0) {
            $rating_value = $rating_sum / $rating->count();
        } else {
            $rating_value = 0;
        }


        return view('userinterface.pages.single_service', compact('workshop', 'rating', 'rating_value', 'user_rating', 'comment','related','vehicle','latestworkshop'));
    }





    public function contact()
    {

        return view('userinterface.pages.contact');
    }

    public function contactStore(Request $request){

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->back();

    }

    public function index(){

        $contactqueries = Contact::all();
        return view('userinterface.pages.contactlist',compact('contactqueries'));
    }
}
