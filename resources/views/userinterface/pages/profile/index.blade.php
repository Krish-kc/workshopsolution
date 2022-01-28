@extends('userinterface.master')
@section('css')
    <style>
        .section {
            padding: 100px 0;
            position: relative;
        }

        .gray-bg {
            background-color: #f5f5f5;
        }

        img {
            max-width: 80%;
        }

        img {
            vertical-align: middle;
            border-style: none;
        }

        /* About Me
                                                                                                                        ---------------------*/
        .about-text h3 {
            font-size: 45px;
            font-weight: 700;
            margin: 0 0 6px;
        }

        @media (max-width: 767px) {
            .about-text h3 {
                font-size: 35px;
            }
        }

        .about-text h6 {
            font-weight: 600;
            margin-bottom: 15px;
        }

        @media (max-width: 767px) {
            .about-text h6 {
                font-size: 18px;
            }
        }

        .about-text p {
            font-size: 18px;
            max-width: 450px;
        }

        .about-text p mark {
            font-weight: 600;
            color: #20247b;
        }

        .about-list {
            padding-top: 10px;
        }

        .about-list .media {
            padding: 5px 0;
        }

        .about-list label {
            color: #20247b;
            font-weight: 600;
            width: 88px;
            margin: 0;
            position: relative;
        }

        .about-list label:after {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            right: 11px;
            width: 1px;
            height: 12px;
            background: #20247b;
            -moz-transform: rotate(15deg);
            -o-transform: rotate(15deg);
            -ms-transform: rotate(15deg);
            -webkit-transform: rotate(15deg);
            transform: rotate(15deg);
            margin: auto;
            opacity: 0.5;
        }

        .about-list p {
            margin: 0;
            font-size: 15px;
        }

        @media (max-width: 991px) {
            .about-avatar {
                margin-top: 30px;
            }
        }

        .about-section .counter {
            padding: 22px 20px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
        }

        .about-section .counter .count-data {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .about-section .counter .count {
            font-weight: 700;
            color: #20247b;
            margin: 0 0 5px;
        }

        .about-section .counter p {
            font-weight: 600;
            margin: 0;
        }

        mark {
            background-image: linear-gradient(rgba(252, 83, 86, 0.6),
                    rgba(252, 83, 86, 0.6));
            background-size: 100% 3px;
            background-repeat: no-repeat;
            background-position: 0 bottom;
            background-color: transparent;
            padding: 0;
            color: currentColor;
        }

        .theme-color {
            color: #fc5356;
        }

        .dark-color {
            color: #20247b;
        }

        /*
                                                                                                                        *
                                                                                                                        * ==========================================
                                                                                                                        * CUSTOM UTIL CLASSES
                                                                                                                        * ==========================================
                                                                                                                        */
        .nav-pills-custom .nav-link {
            color: #aaa;
            background: #fff;
            position: relative;
        }

        .nav-pills-custom .nav-link.active {
            color: #45b649;
            background: #fff;
        }

        /* Add indicator arrow for the active tab */
        @media (min-width: 992px) {
            .nav-pills-custom .nav-link::before {
                content: "";
                display: block;
                border-top: 8px solid transparent;
                border-left: 10px solid #fff;
                border-bottom: 8px solid transparent;
                position: absolute;
                top: 50%;
                right: -10px;
                transform: translateY(-50%);
                opacity: 0;
            }
        }

        .nav-pills-custom .nav-link.active::before {
            opacity: 1;
        }

        form h1 {
            font-size: 18px;
            background: #f6aa93 none repeat scroll 0% 0%;
            color: rgb(255, 255, 255);
            padding: 22px 25px;
            border-radius: 5px 5px 0px 0px;
            margin: auto;
            text-shadow: none;
            text-align: left;
        }

        form {
            border-radius: 5px;
            max-width: 700px;
            width: 100%;
            margin: 5% auto;
            background-color: #ffffff;
            overflow: hidden;
        }

        p span {
            color: #f00;
        }

        p {
            margin: 0px;
            font-weight: 500;
            line-height: 2;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #666;
            text-shadow: 1px 1px 0px #fff;
            margin: 50px 0px 0px 0px;
        }

        input {
            border-radius: 0px 5px 5px 0px;
            border: 1px solid #eee;
            margin-bottom: 15px;
            width: 75%;
            height: 40px;
            float: left;
            padding: 0px 15px;
        }

        a {
            text-decoration: inherit;
        }

        textarea {
            border-radius: 0px 5px 5px 0px;
            border: 1px solid #eee;
            margin: 0;
            width: 75%;
            height: 130px;
            float: left;
            padding: 0px 15px;
        }

    </style>

@endsection
@section('content')
    <section class="section about-section gray-bg" id="about">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6">
                    <div class="about-text go-to">
                        {{-- @foreach ($profile as $profile) --}}
                        <h3 class="dark-color">About Me</h3>
                        <div class="row about-list">
                            <div class="col-md-6">
                                <div class="media">
                                    <label>Name</label>
                                    <p>{{ $profile->fullname }}</p>
                                </div>
                                <div class="media">
                                    <label>Birthday</label>
                                    <p>{{ $profile->birthday }}</p>
                                </div>
                                <div class="media">
                                    <label>Age</label>
                                    <p>{{ $profile->age }}</p>
                                </div>
                                <div class="media">
                                    <label>City</label>
                                    <p>{{ $profile->city }}</p>
                                </div>
                                <div class="media">
                                    <label>District</label>
                                    <p>{{ $profile->district }}</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="media">
                                    <label>House Number</label>
                                    <p>{{ $profile->house_number }}</p>
                                </div>
                                <div class="media">
                                    <label>Phone</label>
                                    <p>{{ $profile->mobile_one }}</p>
                                </div>
                                <div class="media">
                                    <label>Gender</label>
                                    <p>{{ $profile->gender }}</p>
                                </div>
                                <div class="media">
                                    <label>Nickname</label>
                                    <p>{{ $profile->nickname }}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rounded-circle mt-5">
                        <img src="{{ asset('profile_image/' . $profile->profile_pic) }} " style="max-height: 250px;"
                            alt="">
                    </div>
                </div>
                {{-- @endforeach --}}
            </div>
            <div class="counter">
                <div class="row">
                    <div class="col-6 col-lg-3">
                        <div class="count-data text-center">
                            <h6 class="count h2" data-to="500" data-speed="500">
                                {{ Auth::user()->vehicle->count() }}
                            </h6>
                            <p class="m-0px font-w-600">Vehicle</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="count-data text-center">
                            <h6 class="count h2" data-to="150" data-speed="150">150</h6>
                            <p class="m-0px font-w-600">Reservation</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="count-data text-center">
                            <h6 class="count h2" data-to="850" data-speed="850">850</h6>
                            <p class="m-0px font-w-600">Service Book</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="count-data text-center">
                            <h6 class="count h2" data-to="190" data-speed="190">190</h6>
                            <p class="m-0px font-w-600">Telephonic Talk</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <!-- Tabs nav -->
                    <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill"
                            href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <i class="fa fa-user-circle-o mr-2"></i>
                            <span class="font-weight-bold small text-uppercase">Vehicle information</span></a>

                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill"
                            href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                            <i class="fa fa-calendar-minus-o mr-2"></i>
                            <span class="font-weight-bold small text-uppercase">Bookings</span></a>

                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill"
                            href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                            <i class="fa fa-star mr-2"></i>
                            <span class="font-weight-bold small text-uppercase">Reviews</span></a>

                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill"
                            href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                            <i class="fa fa-check mr-2"></i>
                            <span class="font-weight-bold small text-uppercase">Confirm booking</span></a>
                    </div>
                </div>


                <div class="col-md-9">
                    <!-- Tabs content -->
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <h4 class="font-italic mb-4">Vehicle information</h4>
                            <p class="font-italic text-muted mb-2">All the information of your vehicle are listed here</p>



                            <div class="row single-related wow fadeInUp">
                                @foreach (Auth::user()->vehicle as $item)
                                    <div class="col-sm-6">
                                        <div class="card">
                                            <img class="card-img-top"
                                                src="{{ asset('vehicle_image/' . $item->image) }} "
                                                style="max-height: 150px;" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $item->name }}</h5>
                                                <a href="{{ route('userprofile.show', $item->id) }}"
                                                    class="btn btn-primary">Service Book</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            </br>



                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Add Vehicle
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Vehicle Details</h4>
                                                <h6 class="card-subtitle">Input the Required Information for fresh Service
                                                </h6>
                                                <form class="form-control-line m-t-40"
                                                    action="{{ route('vehicle.store') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('POST')
                                                    <div class="form-group">
                                                        <label>Vehicle Name :</label>
                                                        <input type="text" name="name"
                                                            class="form-control form-control-line @error('name') is-invalid @enderror"
                                                            placeholder="Enter Name">
                                                        @error('name')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="vehicle_number">Vehicle Number :</label>
                                                        <input type="text" id="number" name="number"
                                                            class="form-control  @error('number') is-invalid @enderror"
                                                            placeholder="Enter vehicle">
                                                        @error('number')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Vehicle Lot :</label>
                                                        <input type="text" name="lot"
                                                            class="form-control @error('lot') is-invalid @enderror"
                                                            placeholder="Enter lot number">
                                                        @error('lot')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Vehicle Company Name :</label>
                                                        <input type="text" name="company"
                                                            class="form-control @error('company') is-invalid @enderror "
                                                            placeholder="Enter Company Name">
                                                        @error('company')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Model Year :</label>
                                                        <input type="text" name="model"
                                                            class="form-control @error('model') is-invalid @enderror "
                                                            placeholder="Enter Model year">
                                                        @error('model')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>


                                                    <div class="form-group">
                                                        <label>Image Upload :</label>
                                                        <input type="file"
                                                            class="form-control @error('image') is-invalid @enderror "
                                                            name="image">
                                                        @error('image')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="row button-group">

                                                        <div class="col-lg-4 col-md-4">
                                                            <button type="submit"
                                                                class="btn btn-rounded btn-block btn-success">Save</button>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4">
                                                            <button type="button"
                                                                class="ml-3 btn btn-rounded btn-block btn-danger"
                                                                data-dismiss="modal">Exit</button>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">
                            <h4 class="font-italic mb-4">Bookings</h4>
                            <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                anim id est laborum.</p>
                        </div>

                        <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-messages" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab">
                            <h4 class="font-italic mb-4">Reviews</h4>
                            <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                anim id est laborum.</p>
                        </div>

                        <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-settings" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab">
                            <h4 class="font-italic mb-4">Confirm booking</h4>
                            <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                anim id est laborum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    </section>
@endsection
