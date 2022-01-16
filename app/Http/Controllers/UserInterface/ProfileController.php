<?php

namespace App\Http\Controllers\UserInterface;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        $profile->profile_pic=$request->profile_pic;
        $profile->user_id=Auth::id();
        $profile->save();
        toastr()->success('Profile has been sucessfully added');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
