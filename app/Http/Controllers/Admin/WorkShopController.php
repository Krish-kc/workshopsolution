<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\WorkshopValidation;
use App\Models\WorkShop;
use App\Models\Service;
use App\Models\WorkshopImg;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;
use Intervention\Image\Facades\Image;

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
    public function store(WorkshopValidation $request)
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
        $workshop->description = $request->description;
        $workshop->no_of_staff = $request->no_of_staff;
        $workshop->user_id = Auth::id();
        $workshop->save();



            if ($request->hasFile('image')) {
                        foreach($request->file('image') as $image)
                        {
                            
                            $imageName=time().'.'.$image->getClientOriginalName();
                            $destinationPath = public_path('workshop');

                                if (!file_exists($destinationPath)) {
                                    mkdir($destinationPath, 666, true);
                                }
                                $img = Image::make($image->path());
                                $img->resize(250, 300, function ($constraint) {
                                    $constraint->aspectRatio();
                                })->save($destinationPath.'/'.$imageName);
                        
                            WorkshopImg::create([
                                        'name'=>$imageName,
                                        'workshop_id'=> $workshop->id
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
    public function show($id)
    {
        $workshop = Workshop::findorFail($id);
        // $images = WorkshopImg::where('workshop_id',$id)->first();
        return view('admin.pages.workshop.view', compact('workshop','images'));
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
        return view('admin.pages.workshop.view', compact('workshop', 'service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WorkshopValidation $request, $id)
    {
        $workshop = Workshop::findorfail($id);
        if ($request->hasFile('image')) {
            $destination = 'vehicle_image' . $workshop->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $extension;
            $image->move('workshop', $imageName);
            $workshop->image = $imageName;
        } else {
            $imageName = $workshop->image;
        }


        $workshop->update([
            'name' => $request->name,
            'PAN' => $request->PAN,
            'location' => $request->location,
            'starting_time' => $request->starting_time,
            'ending_time' => $request->ending_time,
            'image' => $imageName,
            'no_of_staff' => $request->no_of_staff,
            'user_id' => 4,
        ]);
        toastr()->success('workshop list has Successfully updated');
        return redirect()->route('workshop.index');
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
    }


}
