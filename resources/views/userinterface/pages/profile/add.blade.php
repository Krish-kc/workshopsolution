@extends('userinterface.master')
@section('css')
    <style>
        body {
            background: rgb(99, 39, 120);
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #ba68c8;
        }

        .profile-button {
            background: rgb(99, 39, 120);
            box-shadow: none;
            border: none;
        }

        .profile-button:hover {
            background: #682773;
        }

        .profile-button:focus {
            background: #682773;
            box-shadow: none;
        }

        .profile-button:active {
            background: #682773;
            box-shadow: none;
        }

        .back:hover {
            color: #682773;
            cursor: pointer;
        }

        .labels {
            font-size: 15px;
        }

        .add-experience:hover {
            background: #ba68c8;
            color: #fff;
            cursor: pointer;
            border: solid 1px #ba68c8;
        }

    </style>
@endsection
@section('content')


    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        src="https://bootdey.com/img/Content/avatar/avatar7.png"><span
                        class="font-weight-bold"></span><span class="text-black-50"></span><span>
                    </span></div>
            </div>
            <div class="col-md-9 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <form action="{{ route('userprofile.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label class="labels">Full Name</label>
                                <input type="text" class="form-control" name="fullname" placeholder="first name" value="">
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Nick Name</label>
                                <input type="text" class="form-control" name="nickname" value="" placeholder="nickname">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label class="labels">Phone Number</label>
                                <input type="text" class="form-control" name="mobile_one" placeholder="enter phone number" value="">
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Phone Number (optional)</label>
                                <input type="text" class="form-control" name="mobile_two" placeholder="enter phone number" value="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <label class="labels">District</label>
                                <input type="text" class="form-control" name="district" placeholder="enter address" value="">
                            </div>
                            <div class="col-md-4">
                                <label class="labels">City</label>
                                <input type="text" class="form-control" name="city" placeholder="enter address" value="">
                            </div>
                            <div class="col-md-4">
                                <label class="labels">Local Area</label>
                                <input type="text" class="form-control" name="local_area" placeholder="enter address" value="">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Street Address</label>
                                <input type="text" class="form-control" name="street_address" placeholder="enter street address" value="">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">House Number</label>
                                <input type="text" class="form-control" name="house_number" placeholder="House Number" value="">
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Birthday</label>
                                <input type="date" class="form-control" name="birthday" placeholder="Birthday" value="">
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Age</label>
                                <input type="number" class="form-control" name="age" placeholder="Age" value="">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label for="exampleFormControlSelect1">Gender</label>
                                <select class="form-control" name="gender" id="exampleFormControlSelect1">
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Others</option>
                                </select>
                            </div>
                        </div>
                            <div class="form-group">
                                <label>Profile Image</label>
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

                        <div class="button-group mt-5 text-center">
                            <button type="submit" class="btn btn-primary profile-button">Save Profile</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
    </form>

@endsection
