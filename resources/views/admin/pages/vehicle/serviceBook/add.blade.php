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
                <h4 class="m-b-0">Wellcome to our Service Record page</h4>
                <p class="text-muted m-t-0 font-12">You can get all the infromation about your vehicle servicing.</p>
            </div>
            <div class="col-md-8">

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Service Book</h4>
                        <p class="card-text">All the information of Vehicle Servicing</p>
                        <h6 class="card-subtitle">Owner Name:{{ $vehicle->service->owner_name }} </h6>
                        <h6 class="card-subtitle">Vehicle Name:{{ $vehicle->name }} </h6>
                        <h6 class="card-subtitle">Vehicle Number: {{ $vehicle->number }}</h6>
                        <h6 class="card-subtitle">Engine Number:{{ $vehicle->service->engeen_number }} </h6>
                        <h6 class="card-subtitle">Chasis Number:{{ $vehicle->service->chassis_number }} </h6>
                        <img src="" style="max-height: 150px;">

                    </div>
                </div>
                <div>
                    <button type="button" data-toggle="modal" data-target="#exampleModalLong"
                        class="btn waves-effect waves-light btn-rounded btn-primary">Add Service Record</button>
                </div>
            </div>
        </div>
    </div>




                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">List of Service Records</h4>
                        <h6 class="card-subtitle">Service Records Information Till Now</h6>

                        <div class="table-responsive m-t-40">
                            <div id="myTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="myTable" class="table table-bordered table-striped dataTable no-footer"
                                            role="grid" aria-describedby="myTable_info">
                                            <thead>
                                                <tr role="row">
                                                    <th>S.No</th>
                                                    <th>Service Book Id</th>
                                                    <th>Date</th>
                                                    <th>Kilometer</th>
                                                    <th>Part Changed</th>
                                                    <th>Service Charge</th>
                                                    <th>Service Duration</th>
                                                    <th>Next Service</th>
                                                    <th>Description</th>
                                                    <th>Bill Image</th>
                                                    <th>Service center Name</th>
                                                    <th>Action</th>
                                            </thead>
                                            @if (!$vehicle->service->record->isEmpty())


                                                @foreach ($vehicle->service->record as $item)
                                                    <tbody>

                                                        <tr role="row" class="odd">
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td class="sorting_1">{{ $item->serviceBook_id }}</td>
                                                            <td>{{ $item->date }}</td>
                                                            <td>{{ $item->kilometer }}</td>
                                                            <td>{{ $item->part_change }}</td>
                                                            <td>{{ $item->service_charge }}</td>
                                                            <td>{{ $item->service_duration }}</td>
                                                            <td>{{ $item->nextService }}</td>
                                                            <td>{{ $item->description }}</td>
                                                            <td>
                                                                <img src="{{ asset('bill') }}/{{ $item->image }}"
                                                                    style="max-height: 100px;">
                                                            </td>
                                                            <td>{{ $item->serviceCenter_name }}</td>
                                                            <td>
                                                                <div class="btn-group">

                                                                    <a href="{{ route('serviceRecord.edit', $item->id) }}"
                                                                        class="btn btn-success"><i
                                                                            class="fa fa-edit"></i></a>
                                                                            <a href="#" class="btn btn-danger m-1"
                                                                            onclick="handeldelete({{ $item->id }})">
                                                                            <i class="fa fa-trash"></i>
                                                                        </a>
                                                                </div>
                                                            </td>
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
        </div>
    </div>
</div>



    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Service Record</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('serviceRecord.store') }}" method="POST" class="form-material m-t-40"
                        enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <input type="hidden" name="vehicle_id" value="">
                        <div class="form-group">

                            <input type="hidden" name="serviceBook_id" value="{{ $vehicle->service->id }}"
                                class="form-control form-control-line  @error('serviceBook_id') is-invalid @enderror " placeholder="Some text value...">
                                @error('serviceBook_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" name="date" class="form-control form-control-line @error('date') is-invalid @enderror"
                                placeholder="Some text value...">
                                @error('date')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Kilometer</label>
                            <input type="text" name="kilometer" class="form-control form-control-line @error('kilometer') is-invalid @enderror"
                                placeholder="Some text value...">
                                @error('kilometer')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label>Part Changed</label>
                            <input type="text" name="part_change" class="form-control form-control-line @error('part_change') is-invalid @enderror"
                                placeholder="Some text value...">
                                @error('part_change')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label>Service Charge</label>
                            <input type="text" name="service_charge" class="form-control form-control-line @error('service_charge') is-invalid @enderror"
                                placeholder="Some text value...">
                                @error('service_charge')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label>Service Duration</label>
                            <input type="text" name="service_duration" class="form-control form-control-line @error('service_charge') is-invalid @enderror "
                                placeholder="Some text value...">
                                @error('service_duration')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label>Next Service</label>
                            <input type="date" name="nextService" class="form-control form-control-line @error('nextService') is-invalid @enderror "
                                placeholder="Some text value...">
                                @error('nextService')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="description" class="form-control form-control-line  @error('nextService') is-invalid @enderror "
                                placeholder="Some text value...">
                                @error('description')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label>Bill Image</label>
                            <input type="file" class="fileinput fileinput-new input-group @error('image') is-invalid @enderror" name="image">
                            @error('image')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Service center Name</label>
                            <input type="text" name="serviceCenter_name" class="form-control form-control-line @error('serviceCenter_name') is-invalid @enderror"
                                placeholder="Some text value...">
                                @error('serviceCenter_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
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


    <div id="deletemodal" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <form action="#" method="POST" id="deleteserviceRecord">
                @csrf
                @method('DELETE')

                <div class="modal-content">
                    <div class="modal-header bg-danger ">
                        <h4 class="modal-title w-100">Are you sure?</h4>
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </div>


            </form>
        </div>
    </div>









@endsection

@section('js')
    <script>
        function handeldelete(id) {
            var form = document.getElementById('deleteserviceRecord')
            $('#deletemodal').modal('show')
            form.action = 'serviceRecord/' + id

        }
    </script>
@endsection
