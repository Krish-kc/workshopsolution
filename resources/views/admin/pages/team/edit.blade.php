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
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Add Member</a></li>
                    <li class="breadcrumb-item active">Members</li>
                </ol>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Team Member</h4>
                <a href="{{route('team.index')}}" class="btn btn-primary float-right">Team list</a>
                <h6 class="card-subtitle">Please add Team  Information</h6>
                <form action="{{route('team.update',$team->id)}}" method="POST" enctype="multipart/form-data"
                    class="form-material m-t-40">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name"
                            class="form-control form-control-line @error('name') is-invalid @enderror"
                            placeholder="Please Enter Name of the the Team Member" value="{{$team->name}}">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Designation</label>
                        <input type="text" name="post"
                            class="form-control @error('post') is-invalid @enderror"
                            placeholder="Please Enter the Designation of the Member" value="{{$team->post}}">
                        @error('post')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Facebook</label>
                        <input type="text" name="facebook"
                            class="form-control @error('facebook') is-invalid @enderror"
                            placeholder="Please Enter Facebook link of the Member" value="{{$team->facebook}}">
                        @error('facebook')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Instagram</label>
                        <input type="text" name="instagram"
                            class="form-control @error('instagram') is-invalid @enderror"
                            placeholder="Please Enter Instagram link of the Member" value="{{$team->instagram}}">
                        @error('instagram')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Linkedin</label>
                        <input type="text" name="linkedin"
                            class="form-control @error('linkedin') is-invalid @enderror"
                            placeholder="Please Enter Linkedin link of the Member" value="{{$team->linkedin}}">
                        @error('linkedin')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="target">Team Image</label>
                        <input type="file" name="image" class="form-control" value="{{ $team->image }}"
                            class="@error('image') is-valid @enderror" />
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <img src="{{ asset('team_image') }}/{{ $team->image }}" style="max-height: 100px;" />
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
