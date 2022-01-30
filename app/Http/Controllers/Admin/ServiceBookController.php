<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceBook;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class ServiceBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
        $this->middleware('permission:serviceBook-list', ['only' => ['index', 'show']]);
        $this->middleware('permission:serviceBook-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:serviceBook-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:serviceBook-delete', ['only' => ['destory']]);
    }

    public function index()
    {
        $servicebook = ServiceBook::all();
        return view('userinterface.pages.profile.view', compact('servicebook'));
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
        $request->merge([
            'vechile_id' => $request->vehicle_id
        ]);

        $servicebook = ServiceBook::create($request->all());
        if ($servicebook) {
            toastr()->success('ServiceBook has Created Successfully');
            return back();
        } else {
            toastr()->error('ServiceBook Cannot be Created Please try again');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {

        $vehicle = Vehicle::findOrFail($id);
        return view('admin.pages.vehicle.serviceBook.add', compact('vehicle'));
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
        ServiceBook::findOrFail($id)->delete();

        toastr()->warning('ServiceBook has Successfully delete');
        return redirect()->route('vehicle.index');
    }
}
