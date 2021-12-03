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
                          <li class="breadcrumb-item"><a href="javascript:void(0)">Add User</a></li>
                          <li class="breadcrumb-item active">vehicle</li>
                      </ol>
                  </div>
              </div>

                      <div class="card">
                          <div class="card-body">
                              <h4 class="card-title">Vehicle Details</h4>
                              <h6 class="card-subtitle">Input the Required Information for fresh Service</h6>
                              <form class="form-control-line m-t-40" action="{{route('vehicle.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                  <div class="form-group">
                                      <label>Vehicle Name :</label>
                                      <input type="text" name="name" class="form-control form-control-line" placeholder="Enter Name">
                                  </div>

                                  <div class="form-group">
                                      <label for="vehicle_number">Vehicle Number :</label>
                                      <input type="text" id="number" name="number" class="form-control" placeholder="Enter vehicle">
                                 </div>

                                  <div 
                                      class="form-group">
                                      <label>Vehicle Lot :</label>
                                      <input type="text" name="lot" class="form-control" placeholder="Enter lot number">
                                 </div>
                                  <div 
                                      class="form-group">
                                      <label>Vehicle Company Name :</label>
                                      <input type="text" name="company" class="form-control" placeholder="Enter Company Name">
                                 </div>
                                  <div 
                                      class="form-group">
                                      <label>Model Year :</label>
                                      <input type="text" name="model" class="form-control" placeholder="Enter Model year">
                                 </div>
                                  <div 
                                      class="form-group">
                                      <label>User Id :</label>
                                      <input type="text" name="user_id" class="form-control" placeholder="Enter user id">
                                 </div>

                                 <div class="form-group">
                                      <label>Image Upload :</label>
                                      <input type="file" name="image" >    
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

             

@endsection 