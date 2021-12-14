<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceRecord;
use App\Models\Vehicle;
use App\Models\WorkShop;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Auth;

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
        $vehicle->user_id=Auth::id();
        $vehicle->save();
        toastr()->success('Workshop information has been successfully saved!');
        return redirect()->route('vehicle.index');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $vehicle=Vehicle::findOrFail($id);
        // $serviceRecord= ServiceRecord::all();
       return view('admin.pages.vehicle.view',compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $vehicle=Vehicle::findorfail($id);
        return view('admin.pages.vehicle.edit',compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        // $vehicle =Vehicle::findorFail($id);

        // if($request->file != ''){
        //      $path = public_path().'vehicle_image';

        //      //code for remove old file
        //      if($vehicle->file != ''  && $vehicle->file != null){
        //           $file_old = $path.$vehicle->file;
        //           unlink($file_old);
        //      }

        //      //upload new file
        //      $image = $request->file;
        //      $imageName = $image->getClientOriginalName();
        //      $image->move($path, $imageName);
        //      $vehicle->image=$imageName;

             //for update in table
            //  $vehicle->update(['file' => $imageName]);
        // }
        // else{
        //     $imageName=$vehicle->image;
        // }

        $validated = $request->validate([
            'name' => 'required|max:255',
            'number' => 'required',
            'lot' => 'required',
            'company' => 'required',
            'model' => 'required',
            'user_id' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
        ]);


        $vehicle=Vehicle::findorfail($id);
        if($request->hasFile('image'))
        {
         $image=$request->file('image');
         $imageName = time().'.'.$image->getClientOriginalExtension();
         $image->move(public_path('vehicle_image'), $imageName);
        }else{
             $imageName=null;

        }

        $vehicle->update([
            'name'=>$request->name,
            'number'=>$request->number,
            'lot'=>$request->lot,
            'company'=>$request->company,
            'model'=>$request->model,
            'image'=>$imageName,
            'user_id'=>$request->user_id
        ]);
        toastr()->success('Vehicle list has Successfully updated');
        return redirect()->route('vehicle.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Vehicle::findOrFail($id)->delete();

        toastr()->warning('Vehicle has Successfully delete');
        return redirect()->route('vehicle.index');

    }
}
