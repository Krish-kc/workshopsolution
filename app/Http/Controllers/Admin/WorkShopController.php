<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\WorkshopValidation;
use App\Models\Event;
use App\Models\WorkShop;
use App\Models\Service;
use App\Models\WorkshopImg;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;
use Intervention\Image\Facades\Image;
use Calendar;
use Carbon\Carbon;

class WorkShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
        $this->middleware('permission:workshop-list', ['only' => ['index', 'show']]);
        $this->middleware('permission:workshop-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:workshop-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:workshop-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $workshop = WorkShop::all();
        return view('admin.pages.workshop.list', compact('workshop'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.workshop.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $imageName = time() . '.' . $image->getClientOriginalExtension();
        //     $image->move(public_path('workshop'), $imageName);
        // } else {
        //     $imageName = null;
        // }

        $workshop = new WorkShop();
        $workshop->name = $request->name;
        $workshop->PAN = $request->PAN;
        $workshop->location = $request->location;
        $workshop->starting_time = $request->starting_time;
        $workshop->ending_time = $request->ending_time;
        $workshop->short_description = $request->short_description;
        $workshop->long_description = $request->long_description;
        $workshop->no_of_staff = $request->no_of_staff;
        $workshop->user_id = Auth::id();
        $workshop->save();



        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {

                $imageName = time() . '.' . $image->getClientOriginalName();
                $destinationPath = public_path('workshop');

                if (!file_exists($destinationPath)) {
                    mkdir($destinationPath, 666, true);
                }
                $img = Image::make($image->path());
                $img->resize(250, 300, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $imageName);

                WorkshopImg::create([
                    'name' => $imageName,
                    'workshop_id' => $workshop->id
                ]);
            }
        }


        toastr()->success('Workshop information has been successfully saved!');
        return redirect()->route('shop.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $workshop = Workshop::findorFail($id);
        $events = Event::all();
    






        // $data = Event::all();
        // if($data->count()) {
        //     foreach ($data as $key => $value) {
        //         $events[] = Calendar::event(
        //             $value->title,
        //             false,
        //             new \DateTime(Carbon::parse($value->start_date)),
        //             new \DateTime(Carbon::parse($value->end_date)),
        //             null,
        //             // Add color and link on event
        //             [
        //                 'color' => '#f05050',
        //                 'url' => 'pass here url and any route',
            
        //             ]
                     
        //         );
        //     }
        // }
        // $calendar = Calendar::addEvents($events);
        
        
        // $calendar->setOptions([
        //         'displayEventTime' => true,
        //         'initialView' => 'timeGridDay',
        //         'headerToolbar' => [
        //             'left' => 'prev,next today',
        //             'center' => 'title',
        //             'right' => 'timeGridWeek,timeGridDay'
        //         ],
               
        //         ]);

        return view('admin.pages.workshop.view', compact('workshop','events'));


    }    


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $workshop = WorkShop::findOrFail($id);
        $service = Service::all();
        return view('admin.pages.workshop.edit', compact('workshop', 'service'));
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
        $workshop = Workshop::findorfail($id);
        $workshopImg = WorkshopImg::where('workshop_id',$id);
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {

                $imageName = time() . '.' . $image->getClientOriginalName();
                $destinationPath = public_path('workshop');

                if (!file_exists($destinationPath)) {
                    mkdir($destinationPath, 666, true);
                }
                $img = Image::make($image->path());
                $img->resize(250, 300, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $imageName);

                $workshopImg->update([
                    'name'=> $imageName,
                    'workshop_id'=>$workshop->id,
                ]);
            }
        }

        // $workshopImg = WorkshopImg::where('workshop_id',$id);
        // if($request->hasFile('image')){
        //     File::update('workshop'.'.'.$workshopImg->name);
        //     $workshopImg->update([
        //         'name' => $name,
        //     ]);
        // }

        $workshop->update([
            'name' => $request->name,
            'PAN' => $request->PAN,
            'location' => $request->location,
            'starting_time' => $request->starting_time,
            'ending_time' => $request->ending_time,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'no_of_staff' => $request->no_of_staff,
        ]);

        //  else {
        //     $imageName = $workshop->image;
        // }

        // if ($request->hasFile('image')) {
        //     foreach ($request->file('image') as $image) {

        //         $imageName = time() . '.' . $image->getClientOriginalName();
        //         $destinationPath = public_path('workshop');










        toastr()->success('workshop list has Successfully updated');
        return redirect()->route('shop.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        WorkShop::findOrFail($id)->delete();
        toastr()->warning('workshop has Successfully delete');
        return redirect()->route('shop.index');
        // WorkshopImg::where('workshop_id',$id)->delete($id);

        // $images = WorkshopImg::findOrFail($id);
        // $images->delete();
        // foreach ($request->file('image') as $image)
        // $image= WorkshopImg::where('workshop_id',$id);
        // dd($id);
        // Storage::delete($image->path);
        // $image->delete();

        // $image = WorkshopImg::where('workshop_id', $id);
        // $destinationPath =  $destinationPath = public_path('workshop');
        // if(File::exist($destinationPath)){
        //     File::delete($destinationPath);
        // }
        // $image->destroy($id);


        $image = WorkshopImg::where('workshop_id',$id);


        $image->delete();

        return response()->json([

            'message' => 'Image deleted successfully!'

        ]);




        // if($image){

        //     $path = public_path('workshop').$image->name;
        //     if(File::exists($path)){
        //         File::delete($path);
        //     }
        //     $image->delete();
        //     return response()->json([
        //         'status' =>200,
        //         'message'=> 'Image deleted successfully'
        //     ]);
        // }
        // else{
        //     return response()->json([

        //         'status' =>404,
        //         'message' => 'sorry could not delete image'
        //     ]);
        // }

    }



    public function calender(Request $request){
         if($request->ajax()) {  
            $data = Event::all();
            return response()->json($data);
        }
    }

}
