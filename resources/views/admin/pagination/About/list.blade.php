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
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Banner List</a></li>
                    <li class="breadcrumb-item active">Users</li>
                </ol>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">List of About</h4>
                <a href="{{route('about.create')}}" class="btn btn-primary float-right">Add About </a>
                <h6 class="card-subtitle">All the Required Information Of About page</h6>

                <div class="table-responsive m-t-40">
                    <div id="myTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                        <div class="row">
                            <div class="col-sm-12">
                                <table id="myTable" class="table table-bordered table-striped dataTable no-footer"
                                    role="grid" aria-describedby="myTable_info">
                                    <thead>
                                        <tr role="row">
                                            <th>S.No</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                    </thead>
                                    @foreach ($about as $item)


                                        <tbody>


                                            <tr role="row" class="odd">
                                                <td>{{ $loop->iteration }}</td>
                                                <td class="sorting_1">{{ $item->title }}</td>
                                                <td>{{ $item->description }}</td>

                                                <td><img src="{{ asset('about_image') }}/{{ $item->image }}"
                                                        style="max-height: 100px;"></td>
                                                </td>
                                                <td>{{ $item->status }}</td>
                                                <td>
                                                    <div class="btn-group">

                                                        <a href="{{route('about.edit',$item->id)}}" class="btn btn-success m-1"><i
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
            <form action="#" method="POST" id="deleteabout">
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
            var form = document.getElementById('deleteabout')
            $('#deletemodal').modal('show')
            form.action = 'about/' + id

        }
    </script>
@endsection
