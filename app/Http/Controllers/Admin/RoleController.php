<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     function __construct()
     {
         $this->middleware('permission:role-list',['only'=>['index','show']]);
         $this->middleware('permission:role-create',['only'=>['create','store']]);
         $this->middleware('permission:role-edit',['only'=>['edit','update']]);
         $this->middleware('permission:role-delete',['only'=>['destory']]);
     }

    public function index()
    {   $permission=Permission::all();
        $role=Role::all();
        return view('admin.pages.Role.list',compact('role','permission'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $permission=Permission::all();
       return view('admin.pages.role.add',compact('permission'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role= new Role();
        $role->name=$request->name;
        $role->guard_name="web";
        $permission[]=$request->permission;
        foreach ($permission as $item) {
            $role->givePermissionTo($item);
        }
        $role->save();
        toastr()->success('Role information has been successfully saved!');
        return redirect()->route('role.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
       $permission=Permission::all();
       $role=Role::findorFail($id);
       return view('admin.pages.Role.edit',compact('role','permission'));
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
        $role=Role::findorfail($id);
       $role->update([
        'id'=>$request->id,
        'name'=>$request->name,


       ]);
       $permission[]=$request->permission;
       $role->syncPermissions($permission);
       $role->save();
       toastr()->success('Role list has Successfully updated');
       return redirect()->route('role.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Role::findOrFail($id)->delete();

        toastr()->warning('Role has Successfully deleted');
        return redirect()->route('role.index');

    }
}
