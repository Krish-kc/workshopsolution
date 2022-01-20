<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->profile){
            $profile= Profile::all();
            return view('userinterface.pages.profile.index', compact('profile'));

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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile =Profile::where('user_id',$id)->first();
        return view('userinterface.pages.profile.edit',compact('profile'));

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
         $profile_pic=$request->file('image');
         $imageName = time().'.'.$profile_pic->getClientOriginalExtension();
         $profile_pic->move(public_path('profile_image'), $imageName);
        }else{
             $imageName=null;

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
