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
                         <table id="myTable" class="table table-bordered table-striped dataTable no-footer" role="grid"
                             aria-describedby="myTable_info">
                             <thead>
                                 <tr role="row">
                                     <th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1"
                                         aria-sort="ascending" aria-label="Name: activate to sort column descending"
                                         style="width: 173.266px;">Name</th>
                                     <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1"
                                         aria-label="Position: activate to sort column ascending" style="width: 283.344px;">
                                         Email</th>
                                     <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1"
                                         aria-label="Office: activate to sort column ascending" style="width: 129.984px;">
                                         Role</th>
                                     <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1"
                                         aria-label="Age: activate to sort column ascending" style="width: 53.2188px;">
                                         Action</th>
                             </thead>
                             <tbody>
                                 @foreach ($data as $item)


                                     <tr role="row" class="odd">
                                         <td class="sorting_1">{{ $item->name }}</td>
                                         <td>{{ $item->email }}</td>
                                         <td>
                                             @foreach ($item->roles as $role)
                                                 <span class="badge bg-primary">{{ $role->name }}</span>
                                             @endforeach

                                         </td>
                                         <td>
                                             <div class="button-group" <a class="btn btn-info"
                                                 href="{{ route('user.show', $item->id) }}">Show</a>

                                                 <a class="btn btn-primary"
                                                     href="{{ route('user.edit', $item->id) }}">Edit</a>
                                             </div>
                                         </td>
                                     </tr>
                                 @endforeach
                             </tbody>

                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>
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
                         <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img"
                                 class="img-circle"> <span>Varun Dhavan <small
                                     class="text-success">online</small></span></a>
                     </li>
                     <li>
                         <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img"
                                 class="img-circle"> <span>Genelia Deshmukh <small
                                     class="text-warning">Away</small></span></a>
                     </li>
                     <li>
                         <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img"
                                 class="img-circle"> <span>Ritesh Deshmukh <small
                                     class="text-danger">Busy</small></span></a>
                     </li>
                     <li>
                         <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img"
                                 class="img-circle"> <span>Arijit Sinh <small
                                     class="text-muted">Offline</small></span></a>
                     </li>
                     <li>
                         <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img"
                                 class="img-circle"> <span>Govinda Star <small
                                     class="text-success">online</small></span></a>
                     </li>
                     <li>
                         <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img"
                                 class="img-circle"> <span>John Abraham<small
                                     class="text-success">online</small></span></a>
                     </li>
                     <li>
                         <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img"
                                 class="img-circle"> <span>Hritik Roshan<small
                                     class="text-success">online</small></span></a>
                     </li>
                     <li>
                         <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img"
                                 class="img-circle"> <span>Pwandeep rajan <small
                                     class="text-success">online</small></span></a>
                     </li>
                 </ul>
             </div>
         </div>
     </div>
     </div>

 @endsection
