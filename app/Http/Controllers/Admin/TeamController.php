<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::all();
        return view('admin.pages.team.list', compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.team.add');
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
            $image->move(public_path('team_image'), $imageName);
        } else {
            $imageName = null;
        }

        $team = new Team();
        $team->name = $request->name;
        $team->post = $request->post;
        $team->facebook = $request->facebook;
        $team->instagram = $request->instagram;
        $team->linkedin = $request->linkedin;
        $team->image = $imageName;
        $team->status = $request->status;
        $team->save();
        toastr()->success('Team Member successfully added');
        // return redirect()->route('team.index');

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
        $team = Team::findorFail($id);
        return view('admin.pages.team.edit',compact('team'));
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
        $team = Team::findorfail($id);
        if($request->hasFile('image'))
        {
            $destination ='vehicle_image'.$team->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $image=$request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = time(). '.' .$extension;
            $image->move('team_image',$imageName);
            $team->image=$imageName;

        }else{
            $imageName=$team->image;
        }

        $team->update([
            'name'=> $request->name,
            'post'=> $request->post,
            'facebook'=> $request->facebook,
            'instagram'=> $request->instagram,
            'linkedin'=> $request->linkedin,
            'image'=>$imageName,
            'status'=> $request->status,
        ]);
        toastr()->success('Team list has been Successfully updated');
        return redirect()->route('team.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Team::findorFail($id)->delete();
        toastr()->warning('Team member has been Successfully delete');
        return redirect()->route('team.index');

    }
}
