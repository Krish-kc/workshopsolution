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
            <h4 class="card-title">Add Role</h4>
            <h6 class="card-subtitle">Please add Role Information</h6>
            <form action="{{route('role.store')}}" method="POST" enctype="multipart/form-data"
                class="form-material m-t-40">
                @csrf

                <div class="form-group">
                    <label>Role Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        placeholder="Please Enter the Role Name">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Permission</label>
                    @foreach ($permission as $item)
                <div>
                    <input type="checkbox" id="{{$item->name}}" name="permission[]" value="{{$item->id}}">
                    <label for="{{$item->name}}">{{$item->name}}</label><br>
                </div>
                    @endforeach

            </div>

                <div class="button-group">
                    <button type="submit" class="btn waves-effect waves-light btn-rounded btn-success">Submit</button>
                    <button type="reset" class="btn waves-effect waves-light btn-rounded btn-danger">Exit</button>
                </div>
            </form>

        </div>



    </div>








</div>







@endsection
