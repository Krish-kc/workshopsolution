@extends('admin.index')
@section('content')
    <div class="container-fluid">

        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Add Roles</a></li>
                    <li class="breadcrumb-item active">Users</li>
                </ol>
            </div>
        </div>






        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Permission Details</h4>
                <h6 class="card-subtitle">Input the Required Information for Permission</h6>
                <form class="form-control-line m-t-40" action="{{ route('permission.update', $permission->id) }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')


                    <div class="form-group">
                        <label>Role ID :</label>
                        <input type="text" name="id"
                            class="form-control form-control-line @error('id') is-invalid @enderror"
                            value="{{ $permission->id }}">
                        @error('id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Role Name :</label>
                        <input type="text" id="number" name="name" class="form-control @error('name') is-invalid @enderror "
                            value="{{ $permission->name }}">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Guard Name :</label>
                        <input type="text" name="guard_name" class="form-control @error('guard_name') is-invalid @enderror"
                            value="{{ $permission->guard_name }}">
                        @error('guard_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="row button-group">

                        <div class="col-lg-2 col-md-4">
                            <button type="submit" class="btn btn-rounded btn-block btn-success">Save</button>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <button type="button" class="ml-3 btn btn-rounded btn-block btn-danger">Exit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>


    </div>





@endsection
