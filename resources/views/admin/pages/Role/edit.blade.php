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
                <h4 class="card-title">Role Details</h4>
                <h6 class="card-subtitle">Input the Required Information for fresh Service</h6>
                <form class="form-control-line m-t-40" action="{{ route('role.update', $role->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>Role Name :</label>
                        <input type="text" id="number" name="name" class="form-control @error('name') is-invalid @enderror "
                            value="{{ $role->name }}">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Permission :</label>
                        @foreach ($permission as $item)
                            <div>
                                <input type="checkbox" id="{{ $item->name }}" name="permission[]"
                                    value="{{ $item->id }}"
                                    {{ $role->haspermissionTo($item->name) ? 'checked' : '' }}>
                                <label for="{{ $item->name }}">{{ $item->name }}</label><br>
                            </div>
                        @endforeach
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
