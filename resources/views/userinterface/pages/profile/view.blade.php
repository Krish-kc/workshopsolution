@extends('userinterface.master')
@section('css')
    <style>
        .section {
            padding: 100px 0;
            position: relative;
        }

        .gray-bg {
            background-color: #f5f5f5;
        }

        img {
            max-width: 80%;
        }

        img {
            vertical-align: middle;
            border-style: none;
        }

        /* About Me
                                                                                    ---------------------*/
        .about-text h3 {
            font-size: 45px;
            font-weight: 700;
            margin: 0 0 6px;
        }

        @media (max-width: 767px) {
            .about-text h3 {
                font-size: 35px;
            }
        }

        .about-text h6 {
            font-weight: 600;
            margin-bottom: 15px;
        }

        @media (max-width: 767px) {
            .about-text h6 {
                font-size: 18px;
            }
        }

        .about-text p {
            font-size: 18px;
            max-width: 450px;
        }

        .about-text p mark {
            font-weight: 600;
            color: #20247b;
        }

        .about-list {
            padding-top: 10px;
        }

        .about-list .media {
            padding: 5px 0;
        }

        .about-list label {
            color: #20247b;
            font-weight: 600;
            width: 88px;
            margin: 0;
            position: relative;
        }

        .about-list label:after {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            right: 11px;
            width: 1px;
            height: 12px;
            background: #20247b;
            -moz-transform: rotate(15deg);
            -o-transform: rotate(15deg);
            -ms-transform: rotate(15deg);
            -webkit-transform: rotate(15deg);
            transform: rotate(15deg);
            margin: auto;
            opacity: 0.5;
        }

        .about-list p {
            margin: 0;
            font-size: 15px;
        }

        @media (max-width: 991px) {
            .about-avatar {
                margin-top: 30px;
            }
        }

        .about-section .counter {
            padding: 22px 20px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
        }

        .about-section .counter .count-data {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .about-section .counter .count {
            font-weight: 700;
            color: #20247b;
            margin: 0 0 5px;
        }

        .about-section .counter p {
            font-weight: 600;
            margin: 0;
        }

        mark {
            background-image: linear-gradient(rgba(252, 83, 86, 0.6),
                    rgba(252, 83, 86, 0.6));
            background-size: 100% 3px;
            background-repeat: no-repeat;
            background-position: 0 bottom;
            background-color: transparent;
            padding: 0;
            color: currentColor;
        }

        .theme-color {
            color: #fc5356;
        }

        .dark-color {
            color: #20247b;
        }

        /*
                                                                                    *
                                                                                    * ==========================================
                                                                                    * CUSTOM UTIL CLASSES
                                                                                    * ==========================================
                                                                                    */
        .nav-pills-custom .nav-link {
            color: #aaa;
            background: #fff;
            position: relative;
        }

        .nav-pills-custom .nav-link.active {
            color: #45b649;
            background: #fff;
        }

        /* Add indicator arrow for the active tab */
        @media (min-width: 992px) {
            .nav-pills-custom .nav-link::before {
                content: "";
                display: block;
                border-top: 8px solid transparent;
                border-left: 10px solid #fff;
                border-bottom: 8px solid transparent;
                position: absolute;
                top: 50%;
                right: -10px;
                transform: translateY(-50%);
                opacity: 0;
            }
        }

        .nav-pills-custom .nav-link.active::before {
            opacity: 1;
        }

        form h1 {
            font-size: 18px;
            background: #f6aa93 none repeat scroll 0% 0%;
            color: rgb(255, 255, 255);
            padding: 22px 25px;
            border-radius: 5px 5px 0px 0px;
            margin: auto;
            text-shadow: none;
            text-align: left;
        }

        form {
            border-radius: 5px;
            max-width: 700px;
            width: 100%;
            margin: 5% auto;
            background-color: #ffffff;
            overflow: hidden;
        }

        p span {
            color: #f00;
        }

        p {
            margin: 0px;
            font-weight: 500;
            line-height: 2;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #666;
            text-shadow: 1px 1px 0px #fff;
            margin: 50px 0px 0px 0px;
        }

        input {
            border-radius: 0px 5px 5px 0px;
            border: 1px solid #eee;
            margin-bottom: 15px;
            width: 75%;
            height: 40px;
            float: left;
            padding: 0px 15px;
        }

        a {
            text-decoration: inherit;
        }

        textarea {
            border-radius: 0px 5px 5px 0px;
            border: 1px solid #eee;
            margin: 0;
            width: 75%;
            height: 130px;
            float: left;
            padding: 0px 15px;
        }

    </style>

@endsection
@section('content')
    <section class="section about-section gray-bg" id="about">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6">
                    <div class="about-text go-to">
                        {{-- @foreach ($profile as $profile) --}}
                            <h3 class="dark-color">About Me</h3>
                            <div class="row about-list">
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>Name</label>
                                        <p>{{$profile->fullname}}</p>
                                    </div>
                                    <div class="media">
                                        <label>Birthday</label>
                                        <p>{{$profile->birthday}}</p>
                                    </div>
                                    <div class="media">
                                        <label>Age</label>
                                        <p>{{$profile->age}}</p>
                                    </div>
                                    <div class="media">
                                        <label>City</label>
                                        <p>{{$profile->city}}</p>
                                    </div>
                                    <div class="media">
                                        <label>District</label>
                                        <p>{{$profile->district}}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="media">
                                        <label>House Number</label>
                                        <p>{{$profile->house_number}}</p>
                                    </div>
                                    <div class="media">
                                        <label>Phone</label>
                                        <p>{{$profile->mobile_one}}</p>
                                    </div>
                                    <div class="media">
                                        <label>Phone</label>
                                        <p>{{$profile->mobile_two}}</p>
                                    </div>
                                    <div class="media">
                                        <label>Gender</label>
                                        <p>{{$profile->gender}}</p>
                                    </div>
                                    <div class="media">
                                        <label>Nickname</label>
                                        <p>{{$profile->nickname}}</p>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rounded-circle mt-5">
                        <img src="{{asset('profile_image/'.$profile->profile_pic)}} " style="max-height: 250px;" alt="">
                    </div>
                </div>
                {{-- @endforeach --}}
            </div>
            <div class="counter">
                <div class="row">
                    <div class="col-6 col-lg-3">
                        <div class="count-data text-center">
                            <h6 class="count h2" data-to="500" data-speed="500">{{Auth::user()->vehicle->count()}}</h6>
                            <p class="m-0px font-w-600">Vehicle</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="count-data text-center">
                            <h6 class="count h2" data-to="150" data-speed="150">150</h6>
                            <p class="m-0px font-w-600">Reservation</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="count-data text-center">
                            <h6 class="count h2" data-to="850" data-speed="850">850</h6>
                            <p class="m-0px font-w-600">Service Book</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="count-data text-center">
                            <h6 class="count h2" data-to="190" data-speed="190">190</h6>
                            <p class="m-0px font-w-600">Telephonic Talk</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>





                @if ($vehicle->service)



                    <div class="col-md-12">
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 class="card-title">Service Book</h4>
                                <p class="card-text">Our servicebook provide all the infromation related to services.</p>
                                <h4>Owner Name: {{$vehicle->service->owner_name}}</h4>
                                <h4>Vehicle Name: {{$vehicle->name}} </h4>
                                <h4>Engine Number: {{$vehicle->service->engeen_number}} </h4>
                                <h4>Chassis Number: {{$vehicle->service->chassis_number}}</h4>
                                <div class="rounded-circle mt-5">
                                    <img src="{{asset('vehicle_image/'.$vehicle->image)}} " style="max-height: 150px;" alt="">
                                </div>
                                <br>
                                <button class="btn btn-primary" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">View ServiceRecords</button>
                            </div>
                        </div>
                    </div>

                    @else
                    <p> No service Book Available Please create  your service center</p>
                    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Add ServiceBook
  </button>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLongTitle">Add Service Book</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true"></span>
               </button>
            </div>
            <div class="modal-body">
                <form action="{{route('servicebook.store')}}" method="POST" class="form-material m-t-40">
                    @csrf
                    <input type="hidden" name="vehicle_id" value="{{$vehicle->id}}">
                    <div class="form-group">
                       <label>Owner Name</label>
                       <input type="text" name="owner_name" class="form-control form-control-line" placeholder="Some text value...">
                    </div>
                    <div class="form-group">
                       <label>Engine Number</label>
                       <input type="text" name="engeen_number" class="form-control form-control-line" placeholder="Some text value...">
                    </div>
                    <div class="form-group">
                       <label>Chassis Number</label>
                       <input type="text" name="chassis_number" class="form-control form-control-line" placeholder="Some text value...">
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


     @endif

                    <div class="col-md-12">
                        <div class="card text-center collapse" id="collapseExample">
                            <div class="card-body">
                                <h3>Service Record Information</h3>
                                <div class="table-responsive m-t-40">
                                    <div id="myTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="myTable" class="table table-bordered table-striped dataTable no-footer"
                                                    role="grid" aria-describedby="myTable_info">
                                                    <thead>
                                                        <tr role="row">
                                                            <th>S.No</th>
                                                            <th>Date</th>
                                                            <th>Part Changed</th>
                                                            <th>Service Charge</th>
                                                            <th>Next Service</th>
                                                            <th>Bill Image</th>
                                                            <th>Service center Name</th>

                                                    </thead>
                                                    @if (!$vehicle->service->record->isEmpty())


                                                        @foreach ($vehicle->service->record as $item)
                                                            <tbody>

                                                                <tr role="row" class="odd">
                                                                    <td>{{ $loop->iteration }}</td>
                                                                    <td>{{ $item->date }}</td>
                                                                    <td>{{ $item->part_change }}</td>
                                                                    <td>{{ $item->service_charge }}</td>
                                                                    <td>{{ $item->nextService }}</td>
                                                                    <td>
                                                                        <img src="{{ asset('bill') }}/{{ $item->image }}"
                                                                            style="max-height: 100px;">
                                                                    </td>
                                                                    <td>{{ $item->serviceCenter_name }}</td>

                                                                </tr>
                                                            </tbody>

                                                        @endforeach
                                                    @endif

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>








    </section>
@endsection
