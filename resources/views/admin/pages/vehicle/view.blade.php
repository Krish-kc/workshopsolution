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

         <div class="card">
             <div class="card-body">
                 <h4 class="card-title">Vehicle</h4>
                
                 <p class="card-text">All the information of Vehicle</p>
                    <h6 class="card-subtitle">Vehicle Name:{{$vehicle->name}}</h6>
                    <h6 class="card-subtitle">Vehicle No:{{$vehicle->number}}</h6>
                    <h6 class="card-subtitle">Vehicle No:{{$vehicle->lot}}</h6>
                    <h6 class="card-subtitle">Vehicle No:{{$vehicle->company}}</h6>
                    <h6 class="card-subtitle">Vehicle No:{{$vehicle->model}}</h6>

                    <img src="{{asset('vehicle_image/'.$vehicle->image)}}" style="max-height: 150px;">
              

             </div>
         </div>

            <button type="button" data-toggle="modal" data-target="#exampleModalLong" class="btn waves-effect waves-light btn-rounded btn-primary">Service Book</button>
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
            <form class="form-material m-t-40">
            <div class="form-group">
                <label>Owner Name</label>
                <input type="text" class="form-control form-control-line" value="Some text value..."> 
            </div>
            <div class="form-group">
                <label>Engeen Number</label>
                <input type="text" class="form-control form-control-line" value="Some text value..."> 
            </div>
            <div class="form-group">
                <label>Chassis Number</label>
                <input type="text" class="form-control form-control-line" value="Some text value..."> 
            </div>
            
         </form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@endsection