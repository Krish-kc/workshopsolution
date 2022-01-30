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
                    <li class="breadcrumb-item active">Reservation</li>
                </ol>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">List of Booking</h4>
                {{-- <a href="{{route('permission.create')}}" class="btn btn-primary float-right">Add Permission</a> --}}
                <h6 class="card-subtitle"></h6>

                <div class="table-responsive m-t-40">
                    <div id="myTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                        <div class="row">
                            <div class="col-sm-12">
                                <table id="myTable" class="table table-bordered table-striped dataTable no-footer"
                                    role="grid" aria-describedby="myTable_info">
                                    <thead>
                                        <tr role="row">
                                            <th>S.No</th>
                                            <th>User Name</th>
                                            <th>Location</th>
                                            <th>Phone Number</th>
                                            <th>Vehicle Type</th>
                                            <th>Vehicle Number</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                    </thead>
                                    @foreach ($emergency as $item)




                                        <tbody>

                                            <tr role="row" class="odd">
                                                <td>{{ $loop->iteration }}</td>
                                                <td class="sorting_1">{{ $item->name }}</td>
                                                <td>{{ $item->location }}</td>
                                                <td>{{ $item->phone }}</td>
                                                <td>{{ $item->vehicle_type }}</td>
                                                <td>{{ $item->vehicle_number }}</td>
                                                <td>{{ $item->description }}</td>


                                                <td>
                                                    <div class="btn-group">

                                                        <a href="" class="btn btn-success m-1"><i
                                                                class="fa fa-edit"></i></a>

                                                        <a href="#" class="btn btn-danger m-1" onclick="handeldelete()">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </div>

                                                </td>


                                            </tr>
                                        </tbody>

                                    @endforeach

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>


@endsection
