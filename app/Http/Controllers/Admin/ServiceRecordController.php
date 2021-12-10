<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceRecord;
use File;


class ServiceRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.pages.vehicle.serviceBook.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.vehicle.serviceBook.add');
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
         $image->move(public_path('bill'), $imageName);
        }else{
             $imageName=null;
        }  

     
     
     
        dd($imageName);

        $service_record=new ServiceRecord();
        $service_record->serviceBook_id=$request->serviceBook_id;
        $service_record->date=$request->date;
        $service_record->kilometer=$request->kilometer;
        $service_record->part_change=$request->part_change;
        $service_record->service_charge=$request->service_charge;
        $service_record->service_duration=$request->service_duration;
        $service_record->nextService=$request->nextService;
        $service_record->description=$request->description;
        $service_record->serviceCenter_name=$request->serviceCenter_name;
        $service_record->image=$imageName;
        $service_record->save();
        toastr()->success('Service Record information has been successfully saved!');
        return redirect()->route('service.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service= Service::findorFail($id);
        return view('admin.pages.vehicle.serviceBook.add', compact('service'));
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
