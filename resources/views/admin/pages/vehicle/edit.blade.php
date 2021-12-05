@extends('admin.index')
@section('content')
<div class="container-fluid">

    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Vehicle Details</h4>
                    <h6 class="card-subtitle">Input the Required Information for fresh Service</h6>
                    <form class="form-control-line m-t-40" action="{{route('vehicle.update',$vehicle->id)}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      
                        
                        <div class="form-group">
                            <label>Vehicle Name :</label>
                            <input type="text" name="name" class="form-control form-control-line" value="{{$vehicle->name}}">
                        </div>

                        <div class="form-group">
                            <label for="vehicle_number">Vehicle Number :</label>
                            <input type="text" id="number" name="number" class="form-control" value="{{$vehicle->number}}">
                       </div>

                        <div 
                            class="form-group">
                            <label>Vehicle Lot :</label>
                            <input type="text" name="lot" class="form-control" value="{{$vehicle->lot}}">
                       </div>
                        <div 
                            class="form-group">
                            <label>Vehicle Company Name :</label>
                            <input type="text" name="company" class="form-control" value="{{$vehicle->company}}">
                       </div>
                        <div 
                            class="form-group">
                            <label>Model Year :</label>
                            <input type="text" name="model" class="form-control" value="{{$vehicle->model}}">
                       </div>
                        <div 
                            class="form-group">
                            <label>User Id :</label>
                            <input type="text" name="user_id" class="form-control" value="{{$vehicle->user_id}}">
                       </div>

                       <div class="form-group">
                        <label for ="target">Image Upload</label>
                        <input type="file" name="image" class="form-control" value="{{$vehicle->image}}" class="@error('image') is-valid @enderror" />                            
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                           @enderror  
                           <img src="{{asset('vehicle_image')}}/{{$vehicle->image}}" style="max-height: 100px;"/>
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

