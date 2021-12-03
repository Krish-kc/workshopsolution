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

    <div class="right-sidebar">
        <div class="slimscrollright">
            <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
            <div class="r-panel-body">
                <ul id="themecolors" class="m-t-20">
                    <li><b>With Light sidebar</b></li>
                    <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                    <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                    <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                    <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                    <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                    <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                    <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                    <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                    <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                    <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                    <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                    <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                    <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                </ul>
                <ul class="m-t-20 chatonline">
                    <li><b>Chat option</b></li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

