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

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Workshop</h4>
           
            <p class="card-text">All the information of Workshop</p>
               <h6 class="card-subtitle">Workshop name:{{$workshop->name}}</h6>
               <h6 class="card-subtitle">Workshop :{{$workshop->PAN}}</h6>
               <h6 class="card-subtitle">worksho No:{{$workshop->location}}</h6>
               <h6 class="card-subtitle">worksho No:{{$workshop->starting_time}}</h6>
               <h6 class="card-subtitle">worksho No:{{$workshop->ending_time}}</h6>

               <img src="{{asset('Workshop_image/'.$workshop->image)}}" style="max-height: 150px;">
         

        </div>
    </div>
        <div class="button-group">
            <button id="open" data-toggle="modal" data-target="#exampleModalLong" type="submit" class="btn waves-effect waves-light btn-rounded btn-success">Add Service</button>
       </div>

       <div class="card">
        <div class="card-body">
            <h4 class="card-title">List of Services</h4>
            <div class="table-responsive m-t-40">
                <div id="myTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                   
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="myTable" class="table table-bordered table-striped dataTable no-footer"
                                role="grid" aria-describedby="myTable_info">
                               <thead>
                                    <tr role="row">
                                       <th>S.No</th>
                                       <th>Name</th>
                                       <th>Service Duration</th>
                                       <th>Service Charge</th>
                                       <th>Service Details</th>
                                       <th>Workshop Id</th>>
                                       <th>Action</th>
                                    </thead>
                                 
                                    @foreach ($service as $item)
                                 <tbody>
                                     
                                 
                                     <tr role="row" class="odd">
                                       <td>{{ $loop->iteration}}</td>
                                         <td class="sorting_1">{{$item->title}}</td>
                                         <td>{{$item->duration}}</td>
                                         <td>{{$item->charge}}</td> 
                                         <td>{{$item->details}}</td>
                                         <td>{{$item->workshop_id}}</td>
                                          <td>
                                           <div class="btn-group">
                                      
                                               <a href="{{route('service.edit',$item->id)}}"  class="btn btn-success"><i class="fa fa-edit"></i></a>
                                              <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                           </div>
                                       </td>
                                       </tr>
                                   </tbody>
                                   @endforeach

                            </table>
                        </div>
                    </div>
                </div>
            </div>
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