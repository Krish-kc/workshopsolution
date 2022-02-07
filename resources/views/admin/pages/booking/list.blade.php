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

                @if (!$booking->isEmpty())


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
                                                <th>Vehicle Name</th>
                                                <th>Workshop Name</th>
                                                <th>Task Name</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Rate</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                        </thead>
                                        @foreach ($booking as $item)





                                            <tbody>

                                                <tr role="row" class="odd">
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td class="sorting_1">{{ $item->user->name }}</td>
                                                    <td>{{ $item->vehicle->name }}</td>
                                                    <td>{{ $item->workshop->name }}</td>
                                                    <td>{{ $item->service->title }}</td>
                                                    <td>{{ $item->date }}</td>
                                                    <td>{{ $item->time }}</td>
                                                    <td>{{ $item->rate }}</td>
                                                    <td>{{ $item->status }}</td>


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
                @else
                    No Record Found
                @endif
            </div>
        </div>
    </div>

    </div>

    <div id="deletemodal" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <form action="#" method="POST" id="deletepermission">
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
            var form = document.getElementById('deletepermission')
            $('#deletemodal').modal('show')
            form.action = 'permission/' + id

        }
    </script>
@endsection
