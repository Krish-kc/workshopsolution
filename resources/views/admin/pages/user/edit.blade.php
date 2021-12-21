@extends('admin.index')
@section('content')

    <div class="container-fluid">

        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">User List Edit</a></li>
                    <li class="breadcrumb-item active">user list</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Role</h4>
            <h6 class="card-subtitle">Please add Role Information</h6>
            <form action="{{route('user.update',$user->id)}}" method="POST" enctype="multipart/form-data"
                class="form-material m-t-40">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                    value="{{$user->name}}">
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                    value="{{$user->email}}">
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01">Role</label>
                    </div>
                    <select class="custom-select" name="role" id="inputGroupSelect01">
                        <option selected>Choose...</option>
                        @foreach ($role as $item)
                      <option value="{{$item->id}}">{{$item->name}}</option>

                      @endforeach
                    </select>
                  </div>


                {{-- <div class="form-group">
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Role
                        </button>
                        @foreach ($role as $item)
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">{{$item->name}}</a>
                        </div>
                        @endforeach
                    </div>
                </div> --}}

                <div class="button-group">
                    <button type="submit" class="btn waves-effect waves-light btn-rounded btn-success">Submit</button>
                    <button type="reset" class="btn waves-effect waves-light btn-rounded btn-danger">Exit</button>
                </div>
            </form>


        </div>



    </div>


@endsection


