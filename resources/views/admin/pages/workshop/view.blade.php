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
                <h6 class="card-subtitle">Workshop name:{{ $workshop->name }}</h6>
                <h6 class="card-subtitle">Workshop :{{ $workshop->PAN }}</h6>
                <h6 class="card-subtitle">worksho No:{{ $workshop->location }}</h6>
                <h6 class="card-subtitle">worksho No:{{ $workshop->starting_time }}</h6>
                <h6 class="card-subtitle">worksho No:{{ $workshop->ending_time }}</h6>


                <img src="{{ asset('workshop') }}/{{ $workshop->image }}" style="max-height: 150px;">



            </div>
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
                                                            <a href="" data-toggle="modal" data-target="#deletemodal"
                                                                class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
                            <input type="text" name="duration" class="form-control" id="exampleInputPassword1"
                                placeholder="Enter Duration">
                        </div>
                        <div class="form-group">
                            <label for="text">Service Charge</label>
                            <input type="text" name="charge" class="form-control" id="exampleInputPassword1"
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
