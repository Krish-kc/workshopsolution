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
                 <a href="{{route('shop.index')}}" class="btn btn-primary float-right">Workshop List</a>
                 <form action="{{ route('shop.store') }}" method="POST" enctype="multipart/form-data"
                     class="form-material m-t-40">
                     @csrf
                     <div class="form-group">
                         <label>WorkShop Name</label>
                         <input type="text" name="name"
                             class="form-control form-control-line @error('user_id') is-invalid @enderror"
                             placeholder="Workshop name please...">
                         @error('name')
                             <div class="text-danger">{{ $message }}</div>
                         @enderror
                     </div>

                     <div class="form-group">
                         <label>PAN No</label>
                         <input type="text" name="PAN" class="form-control @error('PAN') is-invalid @enderror"
                             placeholder="please Enter the PAN number">
                         @error('PAN')
                             <div class="text-danger">{{ $message }}</div>
                         @enderror
                     </div>
                     <div class="form-group">
                         <label>location</label>
                         <input type="text" name="location" class="form-control @error('location') is-invalid @enderror"
                             placeholder="Please Enter Location">
                         @error('location')
                             <div class="text-danger">{{ $message }}</div>
                         @enderror
                     </div>
                     <div class="row form-material">
                         <div class="col-md-6">
                             <label class="m-t-20">Start Time</label>
                             <input type="time" name="starting_time"
                                 class="form-control @error('starting_time') is-invalid @enderror"
                                 placeholder="Starting-time" id="mdate" data-dtp="dtp_6eFea">
                             @error('starting_time')
                                 <div class="text-danger">{{ $message }}</div>
                             @enderror
                         </div>
                         <div class="col-md-6">
                             <label class="m-t-20">Ending Time</label>
                             <input type="time" name="ending_time"
                                 class="form-control @error('ending_time') is-invalid @enderror" id="timepicker"
                                 placeholder="Ending time" data-dtp="dtp_8Ykj1">
                             @error('ending_time')
                                 <div class="text-danger">{{ $message }}</div>
                             @enderror
                         </div>
                     </div>

                     <div class="col-sm-12">
                         <label class="m-t-20">Short Description</label>
                         <textarea class="form-control" class="form-control @error('short_description') is-invalid @enderror"
                             name="short_description" rows="5" cols="55"></textarea>
                         @error('short_description')
                             <div class="text-danger">{{ $message }}</div>
                         @enderror

                     </div>
                     <div class="col-sm-12">
                         <label class="m-t-20">Long Description</label>
                         <textarea class="form-control" class="form-control @error('long_description') is-invalid @enderror"
                             name="long_description" rows="5" cols="55"></textarea>
                         @error('long_description')
                             <div class="text-danger">{{ $message }}</div>
                         @enderror

                     </div>


                     <div class="form-group">
                         <label>Upload Image</label>
                         <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                             <input type="file"
                                 class="fileinput fileinput-new input-group @error('image') is-invalid @enderror"
                                 name="image[]" multiple = "multiple">
                             <div class="form-control" data-trigger="fileinput"></div>
                             @error('image')
                                 <div class="text-danger">{{ $message }}</div>
                             @enderror

                         </div>
                     </div>
                     <div class="form-group">
                         <label>Number of Staff</label>
                         <input type="number" name="no_of_staff"
                             class="form-control @error('no_of_staff') is-invalid @enderror"
                             placeholder="Please Enter Number of Working Staff">
                         @error('no_of_staff')
                             <div class="text-danger">{{ $message }}</div>
                         @enderror
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
