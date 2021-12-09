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
                 <h4 class="card-title">List of Register User</h4>
                 <h6 class="card-subtitle">Input the Required Information for Registering New User</h6>

                 <div class="table-responsive m-t-40">
                     <div id="myTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        
                         <div class="row">
                             <div class="col-sm-12">
                                 <table id="myTable" class="table table-bordered table-striped dataTable no-footer"
                                     role="grid" aria-describedby="myTable_info">
                                     <thead>
                                         <tr role="row">
                                             <th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1"
                                                 colspan="1" aria-sort="ascending"
                                                 aria-label="Name: activate to sort column descending"
                                                 style="width: 173.266px;">WorkShop Name</th>
                                             <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1"
                                                 colspan="1" aria-label="Position: activate to sort column ascending"
                                                 style="width: 283.344px;">Location</th>
                                             <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1"
                                                 colspan="1" aria-label="Office: activate to sort column ascending"
                                                 style="width: 129.984px;">Image</th>
                                             <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1"
                                                 colspan="1" aria-label="Age: activate to sort column ascending"
                                                 style="width: 53.2188px;">Action</th>
                                     </thead>
                                    @foreach ($workshop as $item)
                                        <tr>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->location}}</td>
                                            <td>
                                              <img src="{{asset('workshop')}}/{{$item->image}}" style="max-height: 100px;">
                                            </td>
                                            <td>
                                            <div class="btn-group">
                                                <a href="{{route('shop.edit',$item->id)}}" class="btn btn-success btn-sm mr-1"><i class="fa fa-edit"></i></a>

                                                <a data-toggle="modal" data-target="#deletemodal" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                <a href="{{route('shop.show',$item->id)}}" class="btn btn-danger btn-sm mr-1"><i class="fa fa-eye"></i></a>
                                              
                                              </div>  

                                            </td>
                                        </tr>
                                        <tbody>
                                            
                                        </tbody>
                                        <div id="deletemodal" class="modal fade">
                                            <div class="modal-dialog modal-confirm">
                                            <form action="{{route('shop.destroy',$item->id)}}" method="POST" id="deletebanner">
                                              @csrf
                                              @method('DELETE')
                                              
                                                <div class="modal-content">
                                                    <div class="modal-header bg-danger ">				
                                                        <h4 class="modal-title w-100">Are you sure?</h4>	
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                                                    </div>
                                                    <div class="modal-footer justify-content-center">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-primary" >Sumbit</button>
                                                      
                                                    </div>
                                                </div>
                                            
                                            
                                            </form>
                                            </div>
                                        </div>
                                        @endforeach

                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>





    
     

 @endsection
