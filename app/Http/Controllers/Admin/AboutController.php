<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:about-list', ['only' => ['index', 'show']]);
        $this->middleware('permission:about-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:about-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:about-delete', ['only' => ['destory']]);
    }
    public function index()
    {
        $about = About::all();
        return view('admin.pagination.About.list', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pagination.About.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('about_image'), $imageName);
        } else {
            $imageName = null;
        }

        $about = new About();
        $about->title = $request->title;
        $about->description = $request->description;
        $about->image = $imageName;
        $about->status = $request->status;
        $about->save();
        toastr()->success('About has been successfully added');
        return redirect()->route('about.index');
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
        $about = About::findorFail($id);
        return view('admin.pagination.About.edit', compact('about'));
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
        $about = About::findorFail($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('about_image'), $imageName);
        } else {
            $imageName = null;
        }


        $about->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
            'status' => $request->status,
        ]);
        toastr()->success('About is successfully updated');
        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        About::findOrFail($id)->delete();

        toastr()->warning('About has Successfully delete');
        return redirect()->route('about.index');
    }
}
