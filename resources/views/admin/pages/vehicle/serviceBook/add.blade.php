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
            <li class="breadcrumb-item"><a href="javascript:void(0)">Service Record List</a></li>
            <li class="breadcrumb-item active">Records list</li>
         </ol>
      </div>
   </div>

   <div class="row">
    <div class="col-12 m-t-30">
             <h4 class="m-b-0">Wellcome to our Vehicle page</h4>
             <p class="text-muted m-t-0 font-12">You can get all the infromation about you vehicle.</p>
         </div>
         <div class="col-md-8">
         
             <div class="card">
                 <div class="card-body">
                      <h4 class="card-title">Vehicle</h4>
                         <p class="card-text">All the information of Vehicle</p>
                         <h6 class="card-subtitle">Vehicle Name: </h6>
                         <h6 class="card-subtitle">Vehicle Number: </h6>
                         <h6 class="card-subtitle">Vehicle Lot: </h6>
                         <h6 class="card-subtitle">Vehicle Company: </h6>
                         <h6 class="card-subtitle">Vehicle Model: </h6>
                         <img src="" style="max-height: 150px;">                                
                      
                 </div>
             </div>
         
            
                        <button type="button" data-toggle="modal" data-target="#exampleModalLong" class="btn waves-effect waves-light btn-rounded btn-primary">Add Service Record</button>

         </div>


         <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLongTitle">Add Service Record</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <form action="{{route('serviceRecord.store')}}" method="POST" class="form-material m-t-40">
                        @csrf
                        @method('POST')
                        <input type="hidden" name="vehicle_id" value="">
                        <div class="form-group">
                           <label>Service Book Id</label>
                           <input type="text" name="serviceBook_id" class="form-control form-control-line" placeholder="Some text value..."> 
                        </div>
                        <div class="form-group">
                           <label>Date</label>
                           <input type="text" name="date" class="form-control form-control-line" placeholder="Some text value..."> 
                        </div>
                        <div class="form-group">
                           <label>Kilometer</label>
                           <input type="text" name="kilometer" class="form-control form-control-line" placeholder="Some text value..."> 
                        </div>
                        <div class="form-group">
                           <label>Part Changed</label>
                           <input type="text" name="part_change" class="form-control form-control-line" placeholder="Some text value..."> 
                        </div>
                        <div class="form-group">
                           <label>Service Charge</label>
                           <input type="text" name="service_charge" class="form-control form-control-line" placeholder="Some text value..."> 
                        </div>
                        <div class="form-group">
                           <label>Service Duration</label>
                           <input type="text" name="service_duration" class="form-control form-control-line" placeholder="Some text value..."> 
                        </div>
                        <div class="form-group">
                           <label>Next Service</label>
                           <input type="text" name="nextService" class="form-control form-control-line" placeholder="Some text value..."> 
                        </div>
                        <div class="form-group">
                           <label>Description</label>
                           <input type="text" name="description" class="form-control form-control-line" placeholder="Some text value..."> 
                        </div>
                        <div class="form-group">
                            <label>Bill Image</label>
                                <input type="file" class="fileinput fileinput-new input-group" name="image">
                        </div>
                        <div class="form-group">
                           <label>Service center Name</label>
                           <input type="text" name="serviceCenter_name" class="form-control form-control-line" placeholder="Some text value..."> 
                        </div>
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                  </form>
               </div>
            </div>
         </div>




         


</div>
         



            


   




   @endsection
