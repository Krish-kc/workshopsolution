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
                    <li class="breadcrumb-item active">Users</li>
                </ol>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">List of Register Vehicle</h4>
                <h6 class="card-subtitle">All the Required Information Of Register Vehicle</h6>
                <a href="{{route('vehicle.create')}}" class="btn btn-primary float-right">Add Vehicle</a>
                <div class="table-responsive m-t-40">
                    <div id="myTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                        <div class="row">
                            <div class="col-sm-12">
                                <table id="myTable" class="table table-bordered table-striped dataTable no-footer"
                                    role="grid" aria-describedby="myTable_info">
                                    <thead>
                                        <tr role="row">
                                            <th>S.No</th>
                                            <th>Name</th>
                                            <th>Vehicle Number</th>
                                            <th>Lot</th>
                                            <th>Company</th>
                                            <th>Model</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                    </thead>
                                    @foreach ($vehicle as $item)
                                        @can('view', $item)


                                            <tbody>


                                                <tr role="row" class="odd">
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td class="sorting_1">{{ $item->name }}</td>
                                                    <td>{{ $item->number }}</td>
                                                    <td>{{ $item->lot }}</td>
                                                    <td>{{ $item->company }}</td>
                                                    <td>{{ $item->model }}</td>

                                                    <td><img src="{{ asset('vehicle_image') }}/{{ $item->image }}"
                                                            style="max-height: 100px;"></td>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">

                                                            <a href="{{ route('vehicle.edit', $item->id) }}"
                                                                class="btn btn-success m-1"><i class="fa fa-edit"></i></a>
                                                            <a href="#" class="btn btn-danger m-1"
                                                                onclick="handeldelete({{ $item->id }})">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                            <a href="{{ route('vehicle.show', $item->id) }}"
                                                                class="btn btn-success m-1"><i class="fa fa-eye"></i></a>
                                                        </div>

                                                    </td>


                                                </tr>
                                            </tbody>

                                        @endcan
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

    <div id="deletemodal" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <form action="#" method="POST" id="deletevehicle">
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
                        <button type="submit" class="btn btn-primary">Sumbit</button>

                    </div>
                </div>


            </form>
        </div>
    </div>





@endsection

@section('js')
    <script>
        function handeldelete(id) {
            var form = document.getElementById('deletevehicle')
            $('#deletemodal').modal('show')
            form.action = 'vehicle/' + id

        }
    </script>
@endsection
