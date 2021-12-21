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

    function __construct()
    {
        $this->middleware('permission:serviceRecord-list', ['only'=>['index','show']]);
        $this->middleware('permission:serviceRecord-create', ['only'=>['create','store']]);
        $this->middleware('permission:serviceRecord-edit', ['only'=>['edit','update']]);
        $this->middleware('permission:serviceRecord-delete', ['only'=>['destroy']]);
    }
    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     // 'name' => 'required|max:255',
        //     'date' => 'required',
        //     'kilometer' => 'required',
        //     'part_change' => 'required',
        //     'service_charge' => 'required',
        //     'service_duration' => 'required',
        //     'nextService' => 'required',
        //     'description' => 'required',
        //     'serviceCenter_name' => 'required',
        //     'user_id' => 'required',
        //     'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
        // ]);



        if($request->hasFile('image'))
        {
         $image=$request->file('image');
         $imageName = time().'.'.$image->getClientOriginalExtension();
         $image->move(public_path('bill'), $imageName);
        }else{
             $imageName=null;
        }



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

        // $serviceRecord= ServiceRecord::all();
        // return view('admin.pages.vehicle.serviceBook.add', compact('serviceRecord'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $serviceRecord = ServiceRecord::findorFail($id);
        return view('admin.pages.vehicle.serviceBook.edit', compact('serviceRecord'));
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
        $serviceRecord=ServiceRecord::findorfail($id);
        if($request->hasFile('image'))
        {
         $image=$request->file('image');
         $imageName = time().'.'.$image->getClientOriginalExtension();
         $image->move(public_path('bill'), $imageName);
        }else{
             $imageName=null;

        }

        $serviceRecord->update([
            'date'=>$request->date,
            'kilometer'=>$request->kilometer,
            'part_change'=>$request->part_change,
            'service_charge'=>$request->service_charge,
            'service_duration'=>$request->service_duration,
            'nextService'=>$request->nextService,
            'description'=>$request->description,
            'image'=>$imageName,
            'serviceCenter_name'=>$request->serviceCenter_name,

        ]);
        toastr()->success('Service Record list has Successfully updated');
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
        // $serviceRecord=ServiceRecord::findorFail($id);
        // unlink("bill/".$serviceRecord->image);

        // ServiceRecord::where("image", $serviceRecord->image)->delete();
        ServiceRecord::findOrFail($id)->delete();
        toastr()->warning('serviceRecord has been delete successfully!');
        return redirect()->route('vehicle.index');

    }
}
