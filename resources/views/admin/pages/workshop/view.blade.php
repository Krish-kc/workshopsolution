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
                <li class="breadcrumb-item"><a href="javascript:void(0)">WorkShop List</a></li>
                <li class="breadcrumb-item active">WorkShop Profile</li>
            </ol>
        </div>
    </div>

    <div class="container">
        <div class="card mb-3">
            <img class="card-img-top" src="{{$workshop->image}}" alt="Card image cap">
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item disabled">{{$workshop->name}}</li>
                    <li class="list-group-item">{{$workshop->email}}</li>
                    <li class="list-group-item">{{$workshop->location}}</li>
                    <li class="list-group-item">{{$workshop->workshop_id}}</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                  </ul>
            </div>
          </div>
        <div class="button-group">
            <button id="open" data-toggle="modal" data-target="#exampleModalLong" type="submit" class="btn waves-effect waves-light btn-rounded btn-success">Add Service</button>
       </div>
    </div>
    </div>
</div>

   


      
      <!-- Modal -->
      <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Service Details</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
                <form action="{{route('service.store')}}" method="POST" enctype="multipart/form-data" class="form-material m-t-40">
                  @csrf
                  @method('POST')
                    <div class="form-group">
                      <label for="text">Name: </label>
                      <input type="text" name="title" class="form-control" id="" placeholder="Enter Service Name">
                    </div>
                    <div class="form-group">
                      <label for="text">Duration</label>
                      <input type="text" name="duration" class="form-control" id="exampleInputPassword1" placeholder="Enter Duration">
                    </div>
                    <div class="form-group">
                      <label for="text">Service Charge</label>
                      <input type="text" name="charge" class="form-control" id="exampleInputPassword1" placeholder="Enter service charge">
                    </div>
                    <div class="form-group">
                      <label for="text">Service Details</label>
                      <input type="text" name="details" class="form-control" id="exampleInputPassword1" placeholder="Enter service Details">
                    </div>
                    <div class="form-group">
                      <label for="text">WorkShop ID</label>
                      <input type="text" name="workshop_id" class="form-control" id="exampleInputPassword1" placeholder="Enter service Details">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit"  class="btn btn-primary">Add Services</button>
                      </div>
                  </form>

            </div>
        </div>
        </div>
          </div>
        </div>
      </div>
    </div>

    




















@endsection