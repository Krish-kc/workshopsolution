@extends('admin.index');
@section('content')

    <div class="container-fluid">

        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">User List</a></li>
                    <li class="breadcrumb-item active">Users</li>
                </ol>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Service</h4>
                <h6 class="card-subtitle">Please add Workshop Information</h6>
                <form action="{{ route('service.update', $service->id) }}" method="POST" enctype="multipart/form-data"
                    class="form-material m-t-40">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label>WorkShop Name</label>
                        <input type="text" name="title" value="{{ $service->title }}"
                            class="form-control form-control-line" placeholder="Workshop name please...">
                    </div>

                    <div class="form-group">
                        <label>Service Duration</label>
                        <input type="text" name="duration" value="{{ $service->duration }}" class="form-control"
                            placeholder="please Enter the service duration">
                    </div>
                    <div class="form-group">
                        <label>Service Charge</label>
                        <input type="text" name="charge" value="{{ $service->charge }}" class="form-control"
                            placeholder="Please Enter service charge">
                    </div>
                    <div class="form-group">
                        <label>Service Details</label>
                        <input type="text" name="details" value="{{ $service->details }}" class="form-control"
                            placeholder="Please Enter service details">
                    </div>
                    <div class="form-group">
                        <label>WorkShop Id</label>
                        <input type="text" name="workshop_id" value="{{ $service->workshop_id }}" class="form-control"
                            placeholder="Please Enter workshop_id">
                    </div>

            </div>
            <div class="button-group">
                <button type="submit" class="btn waves-effect waves-light btn-rounded btn-success">Submit</button>
                <button type="reset" class="btn waves-effect waves-light btn-rounded btn-danger">Exit</button>
            </div>
            </form>

        </div>



    </div>



@endsection
