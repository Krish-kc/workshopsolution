<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\ServiceBook;
use App\Models\Booking;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Auth;
use File;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id=Auth::user()->id;
        if(Auth::user()->profile){
            $profile=(Auth::user()->profile);
            $booking=Booking::where('user_id',Auth::id())->get();
            return view('userinterface.pages.profile.index', compact('profile','booking'));

        }else{
            return view('userinterface.pages.profile.add');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userinterface.pages.profile.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->hasFile('image'))
        {
         $profile_pic=$request->file('image');
         $imageName = time().'.'.$profile_pic->getClientOriginalExtension();
         $profile_pic->move(public_path('profile_image'), $imageName);
        }else{
             $imageName=null;

        }

        $profile=new Profile();
        $profile->fullname=$request->fullname;
        $profile->nickname=$request->nickname;
        $profile->mobile_one=$request->mobile_one;
        $profile->mobile_two=$request->mobile_two;
        $profile->district=$request->district;
        $profile->city=$request->city;
        $profile->local_area=$request->local_area;
        $profile->street_address=$request->street_address;
        $profile->house_number=$request->house_number;
        $profile->birthday=$request->birthday;
        $profile->age=$request->age;
        $profile->gender=$request->gender;
        $profile->profile_pic=$imageName;
        $profile->user_id=Auth::id();
        $profile->save();
        // toastr()->success('Profile has been sucessfully added');
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile=(Auth::user()->profile);
        $vehicle=Vehicle::findorFail($id);
        return view('userinterface.pages.profile.view',compact('vehicle','profile'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        if(Auth::user()->profile){

        $profile =Profile::where('user_id',$id)->first();
        return view('userinterface.pages.profile.edit',compact('profile'));
        }
        else{
            return redirect()->route('userprofile.create');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profile=Profile::findorfail($id);
        if($request->hasFile('image'))
        {
            $destination ='profile_image'.$profile->profile_pic;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $image=$request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = time(). '.' .$extension;
            $image->move('profile_image',$imageName);
            $profile->profile_pic=$imageName;

        }else{
            $imageName=$profile->profile_pic;
        }

        $profile->update([
            'fullname'=>$request->fullname,
            'nickname'=>$request->nickname,
            'mobile_one'=>$request->mobile_one,
            'mobile_two'=>$request->mobile_two,
            'district'=>$request->district,
            'city'=>$request->city,
            'local_area'=>$request->local_area,
            'street_address'=>$request->district,
            'house_number'=>$request->house_number,
            'birthday'=>$request->birthday,
            'age'=>$request->age,
            'gender'=>$request->gender,
            'profile_pic'=>$imageName,
        ]);
        return redirect()->route('userprofile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
