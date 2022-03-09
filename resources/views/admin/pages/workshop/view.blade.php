@extends('admin.index')
@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css" rel="stylesheet" />
@endsection


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


            <div class="card-body ">
                <h3 class="card-title text-center">Workshop</h3>
                <p class="card-text text-center">All the information of Workshop</p>


                <div class="row">
                    <div class="col-lg-6 mt-4">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                @foreach ($workshop->Images as $key => $item)
                                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">

                                        <img class="img-responsive" src="{{ asset('workshop/' . $item->name) }}"
                                            alt="First slide">
                                    </div>
                                @endforeach

                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>

                        </div>



                    </div>


                    <div class="col-lg-6 mt-4">


                        <h4 class="card-subtitle">
                            <span class="label label-rounded label-primary">
                                Name
                            </span>
                            {{ $workshop->name }}
                        </h4>
                        <h4 class="card-subtitle">
                            <span class="label label-rounded label-primary">
                                Pan no
                            </span>
                            {{ $workshop->PAN }}
                        </h4>
                        <h4 class="card-subtitle"><span class="label label-rounded label-primary">
                                Location
                            </span>
                            {{ $workshop->location }}</h4>

                        <h4 class="card-subtitle"><span class="label label-rounded label-primary">
                                Total staff
                            </span>
                            {{ $workshop->no_of_staff }}</h4>


                        <div class="row">
                            <div class="col-lg-6 mt-4">
                                <h4 class="card-subtitle">
                                    <span class="label label-rounded label-primary">
                                        Opening
                                    </span>
                                    {{ Carbon\Carbon::parse($workshop->starting_time)->format('g:i A') }}
                                </h4>

                            </div>
                            <div class="col-lg-6 mt-4">
                                <h4 class="card-subtitle">

                                    <span class="label label-rounded label-primary">
                                        Closing </span>

                                    {{ Carbon\Carbon::parse($workshop->ending_time)->format('g:i A') }}
                                </h4>
                            </div>

                        </div>
                        <h4 class="card-subtitle">
                            {{ $workshop->short_description }}
                        </h4>





                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-9 mt-4">
                        <h3 class="text-center">About WorkShop</h3>
                        {{ $workshop->long_description }}



                    </div>
                    <div class="col-lg-3 mt-4">

                        <img src="{{ asset('workshop') }}/{{ $workshop->singleImage->name }}"
                            style="max-height: 150px;">

                    </div>


                </div>
            </div>


            <div id='fcalendar'></div>

            {{-- <div class="card-body">

                {!! $calendar->calendar() !!}

                {!! $calendar->script() !!}

            </div> --}}
        </div>
        <div class="button-group">
            <button id="open" data-toggle="modal" data-target="#exampleModalLong" type="submit"
                class="btn waves-effect waves-light btn-rounded btn-success">Add Service</button>
        </div>
        @if (!$workshop->services->isEmpty())
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List of Services</h4>

                    <div class="table-responsive m-t-40">

                        <div class="row">
                            <div class="col-sm-12">
                                <table id="myTable" class="table table-bordered table-striped dataTable no-footer"
                                    role="grid">
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




                                    @if (!$workshop->services->isEmpty())
                                        @foreach ($workshop->services as $item)
                                            <tbody>


                                                <tr role="row" class="odd">
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td class="sorting_1">{{ $item->title }}</td>
                                                    <td>{{ $item->duration }}</td>
                                                    <td>{{ $item->charge }}</td>
                                                    <td>{{ $item->details }}</td>
                                                    <td>{{ $item->workshop_id }}</td>
                                                    <td>
                                                        <div class="btn-group">

                                                            <a href="{{ route('service.edit', $item->id) }}"
                                                                class="btn btn-success"><i class="fa fa-edit"></i></a>
                                                            <a href="#" data-toggle="modal" data-target="#deletemodal"
                                                                class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                                <a href="{{ route('create.slot', $item->id) }}"
                                                                    class="btn btn-success"><i class="fa fa-eye"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>


                                            <div id="deletemodal" class="modal fade">
                                                <div class="modal-dialog modal-confirm">
                                                    <form action="{{ route('service.destroy', $item->id) }}"
                                                        method="POST" id="deletebanner">
                                                        @csrf
                                                        @method('DELETE')

                                                        <div class="modal-content">
                                                            <div class="modal-header bg-danger ">
                                                                <h4 class="modal-title w-100">Are you sure?</h4>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Do you really want to delete these records? This process
                                                                    cannot be undone.</p>
                                                            </div>
                                                            <div class="modal-footer justify-content-center">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Cancel</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Sumbit</button>

                                                            </div>
                                                        </div>


                                                    </form>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif

                                </table>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        @endif

    </div>




    </div>











    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Service Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data"
                        class="form-material m-t-40">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="text">Name: </label>
                            <input type="text" name="title" class="form-control" id="" placeholder="Enter Service Name">
                        </div>
                        <div class="form-group">
                            <label for="text">Duration</label>
                            <input type="number" name="duration" class="form-control" id="exampleInputPassword1"
                                placeholder="Enter Duration in minutes ">
                        </div>
                        <div class="form-group">
                            <label for="text">Service Charge</label>
                            <input type="number" name="charge" class="form-control" id="exampleInputPassword1"
                                placeholder="Enter service charge">
                        </div>
                        <div class="form-group">
                            <label for="text">Service Details</label>
                            <input type="text" name="details" class="form-control" id="exampleInputPassword1"
                                placeholder="Enter service Details">
                        </div>
                        <input type="hidden" name="workshop_id" value="{{ $workshop->id }}">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Services</button>
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
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {

            // pass _token in all ajax
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // initialize calendar in all events
            var calendar = $('#fcalendar').fullCalendar({
                timeZone: 'Asia/Kathmandu',
                defaultView: 'agendaDay',
                // minTime: "07:00:00",
                // maxTime: "18:00:00",
                // editable: true,
                header: {
                    left: 'prev,next,today',
                    center: 'title',
                    right: 'agendaWeek,agendaDay'

                },



                events: "{{ route('show.calender') }}",
                displayEventTime: true,
                allDayDefault: false,



            });
        });
    </script>
@endsection
