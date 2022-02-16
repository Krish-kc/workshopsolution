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
                     <meta name="csrf-token" content="{{ csrf_token() }}">
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
                         <input type="file" name="image[]" class="form-control" class="@error('image') is-valid @enderror"
                             multiple='multiple' />
                         @foreach ($workshop->images as $item)
                             @error('image')
                                 <div class="alert alert-danger">{{ $message }}</div>
                             @enderror
                             <a href="{{route('image.destroy',$item->id)}}">
                                 <img src="{{ asset('workshop') }}/{{ $item->name }}" style="max-height: 100px;" />
                                 <span aria-hidden="true" class="fa fa-trash"></span>
                                </a>



                             {{-- <a href="#"
                                 class="handeldelete">
                                 <i>&times;</i ></a> --}}
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


     {{-- <div id="imagemodal" class="modal fade">
         <div class="modal-dialog modal-confirm">
             <form action="" method="" id="delete_img">
                 @csrf
                 @method('DELETE')

                 <div class="modal-content">
                     <div class="modal-header bg-danger ">
                         <h4 class="modal-title w-100">Are you sure?</h4>
                         <button type="button" class="close" data-dismiss="modal"
                             aria-hidden="true">&times;</button>
                     </div>

                     <div class="modal-body">
                         <p>Do you really want to delete these image? This process
                             cannot be undone.</p>
                         <input type="text" name="" id="deleting_img_id">
                     </div>
                     <div class="modal-footer justify-content-center">
                         <button type="exit" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                         <button type="submit"  class="btn btn-primary">Sumbit</button>
                        </form>

                     </div>
                 </div>


         </div>
     </div> --}}
 @endsection

 @section('js')
     <script>


   function deleteimage(id){

    if(confirm("Do you really want to delete the image")){

        $.ajax({

            url: url.href,
            type:"GET",
            data: {
                _token : $("input[name=_token]").val()
            },


            success:function(response){

                $("deleteimg"+id).remove();
            }

        });
    }

   }






        //  $(document).ready(function() {

        //      $("body").on("click", "#deleteimage", function(e) {

        //          if (!confirm("Do you really want to delete this image")) {

        //              return true;
        //          }


        //          e.preventDefault();

        //          var id = $(this).data("id");
        //          var token = $("meta[name='csrf-token']").attr("content");
        //          var url = e.target;


        //          $.ajax({

        //              url: url.href,
        //              type: "DELETE",
        //              data: {
        //                  _token: token,
        //                  id: id
        //              },
        //              success: function(response) {
        //                  $("#success").html(response.message)

        //                  swal.fire(
        //                      'Remind!',
        //                      'Image deleted successfully!',
        //                      'success'
        //                  )
        //              }

        //          });
        //          return false;
        //      });


        //  });


         // $("#deleteimage ").click(function(){

         //     var id = $(this).data("id");
         //     var token = $("meta[name='csrf-token']").attr("content");

         //     $.ajax({

         //         url:"delete-image/" + id;
         //         type:"DELETE";
         //         data: {
         //             "id": id,
         //             "_token":token,
         //         },
         //         success: function(){
         //             console.log("it fucking works")
         //         }

         //     });

         // });




         //end//

         //   function handeldelete(id) {
         //       var form = document.getElementById('deleteimage')
         //       $('#imagemodal').modal('show')
         //       form.action = 'image/' + id

         //   }


         //  $(document).on('click', '#deleteimage', function(e) {
         //      e.preventDefault();

         //      var img_id = $(this).val();
         //      $('#imagemodal').modal('show');
         //      $('#deleting_img_id').val(img_id);
         //  })

         //  $(document).on('click', '#delete_img', function(e) {
         //              e.preventDefault();

         //              var id = $('#deleting_img_id').val();

         //              $.ajax({
         //                  type: 'DELETE',
         //                  url: '/delete-image/' + id,
         //                  dataType:"json",
         //                  success: function(response) {
         //                         if(response.status == 404){
         //                             alert(response.message);
         //                             $('#imagemodal').modal('hide');

         //                         }
         //                         else if(response.status == 200){
         //                             alert(response.message);
         //                             $('#imagemodal').modal('hide');
         //                         }
         //                  }
         //              });
         //  });
     </script>
 @endsection
