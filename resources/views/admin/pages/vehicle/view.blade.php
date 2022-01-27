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
            <li class="breadcrumb-item"><a href="javascript:void(0)">User List</a></li>
            <li class="breadcrumb-item active">Users</li>
         </ol>
      </div>
   </div>
         <div class="row">
               <div class="col-12 m-t-30">
                        <h4 class="m-b-0">Wellcome to our Vehicle page</h4>
                        <p class="text-muted m-t-0 font-12">You can get all the infromation about you vehicle.</p>
                    </div>
                    <div class="col-md-8">

                        <div class="card">
                            <div class="card-body">
                                 <h4 class="card-title">Vehicle</h4>
                                    <p class="card-text">All the information of Vehicle</p>
                                    <h6 class="card-subtitle">Vehicle Name: {{$vehicle->name}}</h6>
                                    <h6 class="card-subtitle">Vehicle Number: {{$vehicle->number}}</h6>
                                    <h6 class="card-subtitle">Vehicle Lot: {{$vehicle->lot}}</h6>
                                    <h6 class="card-subtitle">Vehicle Company: {{$vehicle->company}}</h6>
                                    <h6 class="card-subtitle">Vehicle Model: {{$vehicle->model}}</h6>
                                    <img src="{{asset('vehicle_image/'.$vehicle->image)}}" style="max-height: 150px;">

                            </div>
                        </div>


                                   <button type="button" data-toggle="modal" data-target="#exampleModalLong" class="btn waves-effect waves-light btn-rounded btn-primary">Service Book</button>

                    </div>
                    @if ($vehicle->service)

                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 class="card-title">Service Book</h4>
                                <p class="card-text">Our servicebook provide all the infromation related to services.</p>
                                <h4>Owner Name: {{$vehicle->service->owner_name}} </h4>
                                <h4>Vehicle Name: {{$vehicle->name}} </h4>
                                <h4>Engine Number: {{$vehicle->service->engeen_number}} </h4>
                                <h4>Chassis Number: {{$vehicle->service->chassis_number}}</h4>
                                <a href="{{route('servicebook.show',$vehicle->id)}}" class="btn btn-primary">Open Servicebook</a>
                            </div>
                        </div>
                    </div>
                   @endif

                </div>
            </div>

        </div>
</div>





<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add Service Book</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form action="{{route('servicebook.store')}}" method="POST" class="form-material m-t-40">
               @csrf
               <input type="hidden" name="vehicle_id" value="{{$vehicle->id}}">
               <div class="form-group">
                  <label>Owner Name</label>
                  <input type="text" name="owner_name" class="form-control form-control-line" placeholder="Some text value...">
               </div>
               <div class="form-group">
                  <label>Engine Number</label>
                  <input type="text" name="engeen_number" class="form-control form-control-line" placeholder="Some text value...">
               </div>
               <div class="form-group">
                  <label>Chassis Number</label>
                  <input type="text" name="chassis_number" class="form-control form-control-line" placeholder="Some text value...">
               </div>
         </div>
         <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-primary">Save changes</button>
         </div>
         </form>
      </div>
   </div>
</div>
@endsection
