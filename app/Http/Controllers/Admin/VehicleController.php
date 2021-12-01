<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Http\Request;


class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicle=Vehicle::all();
        return view('admin.pages.vehicle.list', compact('vehicle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('admin.pages.vehicle.add');
    }

 public function add(){
    
        // return view('admin.pages.vehicle.add');
     
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
         $image=$request->file('image');
         $imageName = time().'.'.$image->getClientOriginalExtension(); 
         $image->move(public_path('vehicle_image'), $imageName);
        }else{
             $imageName=null;
 
        }

        $vehicle=new Vehicle();
        $vehicle->name=$request->name;
        $vehicle->number=$request->number;
        $vehicle->lot=$request->lot;
        $vehicle->company=$request->company;
        $vehicle->model=$request->model;
        $vehicle->image=$imageName;
        $vehicle->user_id=$request->user_id;
        $vehicle->save();
        return redirect()->route('vehicle.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
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
