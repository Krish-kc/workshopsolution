<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     function __construct()
     {
         $this->middleware('permission:service-list',['only' => ['index','show']]);
         $this->middleware('permission:service-create',['only' => ['create','store']]);
         $this->middleware('permission:service-edit',['only' => ['edit','update']]);
         $this->middleware('permission:service-delete',['only' => ['destroy']]);

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
        $service= new Service();
        $service->title=$request->title;
        $service->duration=$request->duration;
        $service->charge=$request->charge;
        $service->details=$request->details;
        $service->workshop_id=$request->workshop_id;
        $service->save();

        toastr()->success('Service added successfully');
        return redirect()->route('shop.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service=Service::findOrFail($id);
        return view('admin.pages.vehicle.list',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service=Service::findOrFail($id);
        return view('admin.pages.workshop.modal',compact('service'));


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

        $service=Service::findOrFail($id);
        $service->update([

            'title'=>$request->title,
            'duration'=>$request->duration,
            'charge'=>$request->charge,
            'details'=>$request->details,
            'workshop_id'=>$request->workshop_id,

        ]);
        toastr()->success('workshop list has Successfully updated');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::findOrFail($id)->delete();
        toastr()->warning('Vehicle has Successfully delete');
        return redirect()->route('shop.index');

    }
}
