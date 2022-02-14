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
                 <form action="{{ route('shop.update', $workshop->id) }}" method="POST" enctype="multipart/form-data"
                     class="form-material m-t-40">
                     @method('PUT')
                     @csrf
                     <div class="form-group">
                         <label>WorkShop Name</label>
                         <input type="text" name="name" value="{{ $workshop->name }}"
                             class="form-control form-control-line  @error('name') is-invalid @enderror"
                             placeholder="Workshop name please...">
                         @error('name')
                             <div class="text-danger">{{ $message }}</div>
                         @enderror
                     </div>

                     <div class="form-group">
                         <label>PAN No</label>
                         <input type="text" name="PAN" value="{{ $workshop->PAN }}"
                             class="form-control @error('PAN') is-invalid @enderror"
                             placeholder="please Enter the PAN number">
                         @error('PAN')
                             <div class="text-danger">{{ $message }}</div>
                         @enderror
                     </div>
                     <div class="form-group">
                         <label>location</label>
                         <input type="text" name="location" value="{{ $workshop->location }}"
                             class="form-control @error('location') is-invalid @enderror"
                             placeholder="Please Enter Location">
                         @error('location')
                             <div class="text-danger">{{ $message }}</div>
                         @enderror
                     </div>
                     <div class="row form-material">
                         <div class="col-md-6">
                             <label class="m-t-20">Start Time</label>
                             <input type="time" name="starting_time" value="{{ $workshop->starting_time }}"
                                 class="form-control @error('starting_time') is-invalid @enderror"
                                 placeholder="Starting-time" id="mdate" data-dtp="dtp_6eFea">
                             @error('starting_time')
                                 <div class="text-danger">{{ $message }}</div>
                             @enderror

                         </div>
                         <div class="col-md-6">
                             <label class="m-t-20">Ending Time</label>
                             <input type="time" name="ending_time" value="{{ $workshop->ending_time }}"
                                 class="form-control @error('ending_time') is-invalid @enderror" id="timepicker"
                                 placeholder="Ending time" data-dtp="dtp_8Ykj1">
                             @error('ending_time')
                                 <div class="text-danger">{{ $message }}</div>
                             @enderror
                         </div>
                     </div>

                     <div class="form-group">
                         <label>Short Description</label>
                         <textarea name="short_description"
                             class="form-control @error('short_description') is-invalid @enderror"
                             placeholder="Give some description about Workshop" rows="5"></textarea>
                         @error('short_description')
                             <div class="text-danger">{{ $message }}</div>
                         @enderror
                     </div>


                     <div class="form-group">
                         <label>Long Description</label>
                         <textarea name="long_description"
                             class="form-control @error('long_description') is-invalid @enderror"
                             placeholder="Give some description about Workshop" rows="5"></textarea>
                         @error('long_description')
                             <div class="text-danger">{{ $message }}</div>
                         @enderror
                     </div>




                     <div class="form-group">
                         <label for="target">Image Upload</label>
                         <input type="file" name="image" class="form-control"
                             class="@error('image') is-valid @enderror" />
                         @foreach ($workshop->images as $item)
                             @error('image')
                                 <div class="alert alert-danger">{{ $message }}</div>
                             @enderror
                             <img src="{{ asset('workshop') }}/{{ $item->name }}" style="max-height: 100px;" />
                         @endforeach
                     </div>

                     <div class="form-group">
                         <label>Number of Staff</label>
                         <input type="number" value="{{ $workshop->no_of_staff }}" name="no_of_staff"
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
