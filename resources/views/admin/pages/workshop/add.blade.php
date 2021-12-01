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
                     <li class="breadcrumb-item"><a href="javascript:void(0)">Add Workshop</a></li>
                     <li class="breadcrumb-item active">Users</li>
                 </ol>
             </div>
         </div>

         <div class="card">
             <div class="card-body">
                  <h4 class="card-title">Add WorkShop</h4>
                 <h6 class="card-subtitle">Please add Workshop Information</h6>
                <form action="{{route('workshop.store')}}" method="POST" enctype="multipart/form-data" class="form-material m-t-40">
                @csrf
                    <div class="form-group">
                         <label>WorkShop Name</label>
                         <input type="text" name="name" class="form-control form-control-line" placeholder="Workshop name please...">
                     </div>

                     <div class="form-group">
                         <label>PAN No</label>
                         <input type="text" name="PAN" class="form-control" placeholder="please Enter the PAN number">
                     </div>
                     <div class="form-group">
                         <label>location</label>
                         <input type="text" name="location" class="form-control" placeholder="Please Enter Location">
                     </div>
                     <div class="row form-material">
                         <div class="col-md-6">
                             <label class="m-t-20">Start Time</label>
                             <input type="time" name="starting_time" class="form-control" placeholder="Starting-time" id="mdate"
                                 data-dtp="dtp_6eFea">
                         </div>
                         <div class="col-md-6">
                             <label class="m-t-20">Ending Time</label>
                             <input type="time" name="ending_time" class="form-control" id="timepicker" placeholder="Ending time"
                                 data-dtp="dtp_8Ykj1">
                         </div>
                     </div>



                     <div class="form-group">
                         <label>Short Description</label>
                         <textarea class="form-control" placeholder="Give some description about Workshop"
                             rows="5"></textarea>
                     </div>


                     <div class="form-group">
                         <label>Upload Image</label>
                         <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                             <input type="file" class="fileinput fileinput-new input-group" name="image">
                             <div class="form-control" data-trigger="fileinput">
                             </div>
                         </div>
                     </div>
                     <div class="form-group">
                         <label>Number of Staff</label>
                         <input type="number" name="no_of_staff" class="form-control" placeholder="Please Enter Number of Working Staff">
                     </div>

                     <div class="button-group">
                          <button type="submit" class="btn waves-effect waves-light btn-rounded btn-success">Submit</button>
                         <button type="reset" class="btn waves-effect waves-light btn-rounded btn-danger">Exit</button>
                     </div>
                 </form>

             </div>


             
         </div>



     </div>

 @endsection
