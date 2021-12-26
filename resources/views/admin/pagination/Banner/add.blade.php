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
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Add Banner</a></li>
                    <li class="breadcrumb-item active">Banner</li>
                </ol>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Banner</h4>
                <a href="{{ route('banner.index') }}" class="btn btn-primary float-right">Banner list</a>
                <h6 class="card-subtitle">Please add Banner Information</h6>
                <form action="{{route('banner.store')}}" method="POST" enctype="multipart/form-data"
                    class="form-material m-t-40">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title"
                            class="form-control form-control-line @error('title') is-invalid @enderror"
                            placeholder="Please enter title">
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" name="description" class="form-control @error('description') is-invalid @enderror"
                            placeholder="Please enter description">
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Image</label>
                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                            <input type="file"
                                class="fileinput fileinput-new input-group @error('image') is-invalid @enderror"
                                name="image">
                            <div class="form-control" data-trigger="fileinput"></div>
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Status</label>
                        <select class="form-control" name="status" id="exampleFormControlSelect1">
                            <option>on</option>
                            <option>off</option>
                        </select>

                    </div>

                    <div class="button-group">
                        <button type="submit" class="btn waves-effect waves-light btn-rounded btn-success">Submit</button>
                        <button type="reset" class="btn waves-effect waves-light btn-rounded btn-danger">Exit</button>
                    </div>
                </form>

            </div>



        </div>



    </div>

@endsection



