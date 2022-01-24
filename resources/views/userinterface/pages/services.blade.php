@extends('userinterface.master')
@section('css')

    <style type="text/css">
        .card {
            margin: auto;
            border: solid 1px #dbdad7;
            width: auto;

            padding-left: 10px !important;

            padding-right: 10px !important;
            padding-top: 0px !important
        }

        .card-title {
            margin: auto;
            padding: 15px;
            background-color: #FDBE33;
            color: white;
            width: 80%
        }

        div.card-body {
            padding: 0px
        }

        .custom-select {
            width: 100%
        }

        .btn2 {
            margin-left: 10%
        }

        input {
            outline: 0 !important;
            border-width: 0 0 2px !important;
            border-color: #d1d1cf !important
        }

        input:focus {
            border-color: #d1d1cf !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important
        }

        select {
            outline: 0 !important;
            border-width: 0 0 2px !important;
            border-color: #d1d1cf !important
        }

        select:focus {
            border-color: #d1d1cf !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important
        }

        .radiobtn {
            margin-left: 3.5%
        }

        .icons {
            margin: auto !important
        }

        .fa {
            border-radius: 25px;
            width: 10%;
            margin-left: 5%;
            border: solid 2px #dbdad7;
            margin-top: 5%;
            text-align: center
        }

        .fa-plane {
            color: #9ead1c
        }

        .fa-taxi {
            color: #c2f700
        }

        .fa-train {
            color: red
        }

        @media only screen and (max-width: 600px) {
            .card {
                margin: auto;
                border: solid 1px #dbdad7;
                width: 90%;
                padding-left: 10px !important;
                padding-bottom: 10px !important;
                padding-right: 10px !important;
                padding-top: 0px !important
            }

            .fa {
                border-radius: 25px;
                width: 15%;
                margin-left: 5%;
                border: solid 2px #dbdad7;
                margin-top: 5%;
                text-align: center
            }
        }

    </style>

@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Our Services</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">Our Services</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    @if (\Session::has('success'))
        <div class="fact">
            <div class="container-fluid">
                <div class="row counters">
                    <div class="col-md-6 fact-left wow slideInLeft"
                        style="visibility: visible; animation-name: slideInLeft;">
                        <div class="row">
                            <div class="col-4">

                                <div class="fact-text">

                                    <h2>Thankyou</h2>
                                </div>
                            </div>
                            <div class="col-8">

                                <div class="fact-text">
                                    <h2>{{ Auth::user()->name }} Your Booking</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 fact-right wow slideInRight"
                        style="visibility: visible; animation-name: slideInRight;">
                        <div class="row">
                            <div class="col-12">

                                <div class="fact-text">
                                    <h2> has been Sucessfully Placed
                                        {!! \Session::get('success') !!}
                                    </h2>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif


    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center">
                <p>Our Services</p>
                <h2>We Provide Services</h2>
            </div>
            <div class="icon-part">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-3 mb-2">
                            <a href="" data-toggle="modal" data-target="#exampleModalCenter">
                                <div class="icon-block blue">
                                    <div class="fact-icon">
                                        <img src="user_assets/img/brand.svg" alt="">
                                    </div>
                                    <div class="fact-text">
                                        <h2>Servicing</h2>
                                        <p>To Service your bike/Car please click here !!
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 mb-2">
                            <div class="icon-block yellow">
                                <div class="fact-icon">
                                    <img src="user_assets/img/support.svg" alt="">
                                </div>
                                <div class="fact-text">
                                    <h2>Washing</h2>
                                    <p>To wash or vehicle please click here </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-2">
                            <div class="icon-block blue">
                                <div class="fact-icon">
                                    <img src="user_assets/img/dealership.svg" alt="">
                                </div>
                                <div class="fact-text">
                                    <h2>DentPaint</h2>
                                    <p>To dent paint please click here </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-2">
                            <div class="icon-block yellow">
                                <div class="fact-icon">
                                    <img src="user_assets/img/affordable.svg" alt="">
                                </div>
                                <div class="fact-text">
                                    <h2>BlueBook Renewal </h2>
                                    <p>To renewal please click here</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-sm-12">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service-1.jpg" alt="Image">
                        </div>
                        <div class="service-text">
                            <div class="service-title">
                                <h3>Building Construction</h3>
                                <div class="time">
                                    <i class="fas fa-hourglass-half"></i>
                                    5 hours
                                </div>
                            </div>

                            <h5>Service List</h5>
                            <ul>
                                <li><i class="fas fa-angle-double-right"></i> Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit.</li>
                                <li><i class="fas fa-angle-double-right"></i> Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit.</li>
                                <li><i class="fas fa-angle-double-right"></i> Phasellus nec pretium mi. Curabitur facilisis
                                    ornare</li>
                                <li><i class="fas fa-angle-double-right"></i> Aliquam metus tortor, auctor id gravida
                                    condimentum, viverra quis sem</li>
                            </ul>
                            <a class="btn" href="img/service-1.jpg" data-lightbox="service">View More</a>
                        </div>
                    </div>
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service-1.jpg" alt="Image">
                        </div>
                        <div class="service-text">
                            <div class="service-title">
                                <h3>Building Construction</h3>
                                <div class="time">
                                    <i class="fas fa-hourglass-half"></i>
                                    5 hours
                                </div>
                            </div>

                            <h5>Service List</h5>
                            <ul>
                                <li><i class="fas fa-angle-double-right"></i> Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit.</li>
                                <li><i class="fas fa-angle-double-right"></i> Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit.</li>
                                <li><i class="fas fa-angle-double-right"></i> Phasellus nec pretium mi. Curabitur facilisis
                                    ornare</li>
                                <li><i class="fas fa-angle-double-right"></i> Aliquam metus tortor, auctor id gravida
                                    condimentum, viverra quis sem</li>
                            </ul>
                            <a class="btn" href="img/service-1.jpg" data-lightbox="service">View More</a>
                        </div>
                    </div>
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service-1.jpg" alt="Image">
                        </div>
                        <div class="service-text">
                            <div class="service-title">
                                <h3>Building Construction</h3>
                                <div class="time">
                                    <i class="fas fa-hourglass-half"></i>
                                    5 hours
                                </div>
                            </div>

                            <h5>Service List</h5>
                            <ul>
                                <li><i class="fas fa-angle-double-right"></i> Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit.</li>
                                <li><i class="fas fa-angle-double-right"></i> Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit.</li>
                                <li><i class="fas fa-angle-double-right"></i> Phasellus nec pretium mi. Curabitur facilisis
                                    ornare</li>
                                <li><i class="fas fa-angle-double-right"></i> Aliquam metus tortor, auctor id gravida
                                    condimentum, viverra quis sem</li>
                            </ul>
                            <a class="btn" href="img/service-1.jpg" data-lightbox="service">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->



    <!-- Modal -->
    <div class="modal custom fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="{{ route('booking.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('POST')
                    <div class="card shadow mb-5 bg-white rounded">
                        <!--Card-Body-->
                        <div class="card-body">
                            <!--Card-Title-->
                            <p class="card-title text-center shadow mb-5 rounded">Servicing Booking Form</p>
                            <div class="icons text-center">
                                <i class="fa fa-motorcycle fa-2x" aria-hidden="true"></i>
                                <i class="fa fa-taxi fa-2x" aria-hidden="true"></i>

                            </div>
                            <hr>
                            <p class="searchText"><strong>Please Select the Following </strong></p>

                            <div class="row">
                                <div class="col-sm-6">
                                    <select class="browser-default custom-select mb-4" name="workshop_id" id="select">
                                        <option value="" disabled="" selected="">Select WorkShop</option>
                                        <option value="1">New Delhi</option>
                                        <option value="2">Mumbai</option>
                                        <option value="3">Bangalore</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Enter Your Location">
                                </div>
                            </div>
                        </div>
                        <!--Third Row-->
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="date" class="form-label">Enter Date</label>

                                <input type="date" name="date" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label for="date" class="form-label">Enter Time</label>

                                <input type="time" name="time" class="form-control">
                            </div>
                        </div>
                        <!--Fourth Row-->
                        <div class="row mt-4">
                            <div class="col-sm-6">
                                <select class="browser-default custom-select mb-4" name="service_id" id="select">
                                    <option value="" disabled="" selected="">Service Type</option>
                                    <option value="1">Servicing</option>
                                    <option value="1">Maintainance</option>
                                    <option value="2">Washing</option>
                                    <option value="3">Dentpaint</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <select class="browser-default custom-select mb-4" name="vehicle_id" id="select">
                                    <option value="" disabled="" selected="">Select Vehicle</option>
                                    <option value="1">R15</option>
                                    <option value="2">Bullet 350</option>
                                    <option value="3">Ntorq-scooter</option>
                                </select>
                            </div>
                        </div>
                        <!--Fifth Row-->
                        <div class="row">

                        </div>
                        <button type="submit" class="btn btn-primary float-right mt-5">Book Now</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    </div>
@endsection
