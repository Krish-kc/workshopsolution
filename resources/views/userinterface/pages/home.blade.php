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

        .card-titleE {
            margin: auto;
            padding: 15px;
            background-color: #030F27;
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
            margin: 8px 0;
            outline: 0 !important;
            border-width: 0 0 2px !important;
            border-color: #d1d1cf !important
        }

        input:focus {
            border-color: #030F27 !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important
        }

        textarea {
            margin: 8px 0;
            outline: 0 !important;
            border-width: 0 0 2px !important;
            border-color: #d1d1cf !important
        }

        textarea:focus {
            border-color: #030F27 !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important
        }

        select {
            outline: 0 !important;
            border-width: 0 0 2px !important;
            border-color: #d1d1cf !important
        }

        select:focus {
            border-color: #030F27 !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important
        }

        button {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .radiobtn {
            margin-left: 3.5%
        }

        /* .icons {


            .fa {
                /* border-radius: 25px; */
        width: 10%;
        margin-left: 5%;
        /* border: solid 2px #dbdad7; */
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
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($banner as $key => $item)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img src="{{ asset('banner_image/' . $item->image) }}" alt="Carousel Image">
                    <div class="carousel-caption">
                        <h1 class="animated fadeInLeft">{{ $item->title }}</h1>
                        <p class="animated fadeInRight">{{ $item->description }}</p>
                        <a class="btn animated fadeInUp"
                            href="https://htmlcodex.com/construction-company-website-template">Login</a>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"> </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>



    <!-- Feature Start-->
    {{-- <div class="feature wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <div class="feature-form">
                        <form>
                            <div class="feature-group">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Vehicle Status</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Vehicle Body</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Vehicle Style</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="feature-group-2">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Search Vehicle</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="name@example.com">
                                </div>
                                <button type="submit" class="btn btn-primary mb-2"><i class="fab fa-searchengin"></i>
                                    Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Feature End-->


    <!-- About Start -->
    <div class="about wow fadeInUp" data-wow-delay="0.1s">
        <div class="container-fluid">
            <div class="row align-items-center">
                @foreach ($about as $item)
                <div class="col-lg-7 col-md-6">
                    <div class="about-wrap">
                        <div class="section-header text-left">
                            <h2>{{$item->title}}</h2>
                        </div>
                        <div class="about-text">
                            <p>{{$item->description}}</p>
                            <a class="btn" href="{{route('aboutework')}}">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="about-img">
                        <img src="{{ asset('about_image/' . $item->image) }}" alt="Image">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- About End -->

    @if (\Session::has('success'))
    <div class="fact">
        <div class="container-fluid">
            <div class="row counters">
                <div class="col-md-4 fact-left wow slideInLeft"
                    style="visibility: visible; animation-name: slideInLeft;">
                    <div class="row">
                        <div class="col-6">

                            <div class="fact-text">

                                <h2>Thankyou</h2>
                            </div>
                        </div>
                        <div class="col-6">

                            <div class="fact-text">
                                <h2>{{ Auth::user()->name }} </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 fact-right wow slideInRight"
                    style="visibility: visible; animation-name: slideInRight;">
                    <div class="row">

                        <div class="col-12">

                            <div class="fact-text">
                                <h2>{!! \Session::get('success') !!}
                                </h2>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endif




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
                                <img src="user_assets/img/service.svg" alt="">
                            </div>
                            <div class="fact-text">
                                <h2>Servicing</h2>
                                <p>To Service your Vehicle please click here !! .</p>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 mb-2">
                    <a href="" data-toggle="modal" data-target="#EmergencyBreakdownModal">
                        <div class="icon-block yellow">
                            <div class="fact-icon">
                                <img src="user_assets/img/support.svg" alt="">
                            </div>
                            <div class="fact-text">
                                <h2>Emergency Breakdown</h2>
                                <p>If in Emergency breakdown of your vehicle Please Click here and give some information. We will look after it as soon as possible .</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 mb-2">
                    <div class="icon-block blue">
                        <div class="fact-icon">
                            <img src="user_assets/img/dealership.svg" alt="">
                        </div>
                        <div class="fact-text">
                            <h2>DentPaint</h2>
                            <p>To fix your vehicle or for dent paint of Vehicle please click here!  </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-2">
                    <div class="icon-block yellow">
                        <div class="fact-icon">
                            <img src="user_assets/img/bluebook.svg" alt="">
                        </div>
                        <div class="fact-text">
                            <h2>BlueBook Renewal </h2>
                            <p>For Renewal of your Registration certificate/BlueBook  please click here! </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--modal-service-body-->
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
                                    <select class="browser-default custom-select mb-4 " name="workshop_id"
                                        id="workshop_name">
                                        <option value="" disabled="" selected="">Select WorkShop</option>
                                        @foreach ($workshop as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach

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

                                <input type="date" name="date" class="form-control ">
                            </div>
                            <div class="col-sm-6">
                                <label for="time" class="form-label">Enter Time</label>

                                <input type="time" name="time" class="form-control">
                            </div>
                        </div>
                        <!--Fourth Row-->
                        <div class="row mt-4">
                            <div class="col-sm-6">
                                <select class="browser-default custom-select mb-4" name="service_id" id="services">

                                </select>
                            </div>
                            <div class="col-sm-6">
                                <select class="browser-default custom-select mb-4" name="vehicle_id">
                                    <option value="" disabled="" selected="">Select Vehicle</option>
                                    @foreach ($vehicle as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
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
    <!--modal-service-body-end-->
    <!--modal-emergency-breakdown-body-->
    <div class="modal custom fade" id="EmergencyBreakdownModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="{{ route('emergency.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('POST')
                    <div class="card shadow mb-5 bg-white rounded">
                        <!--Card-Body-->
                        <div class="card-body">
                            <!--Card-Title-->
                            <p class="card-titleE text-center shadow mb-5 rounded">Emergency Breakdown</p>
                            <div class="icons text-center">
                                <i class="fa fa-motorcycle fa-2x" aria-hidden="true"></i>
                                <i class="fa fa-taxi fa-2x" aria-hidden="true"></i>

                            </div>
                            <hr>
                            <p class="searchText"><strong>Please Select the Following </strong></p>

                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="text" name="name" class="form-control" placeholder="Enter Your Name">

                                </div>
                            </div>
                        </div>
                        <!--Third Row-->
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" name="location" placeholder=" Enter Your Location"
                                    class="form-control">
                            </div>
                            <div class="col-sm-6">

                                <input type="text" name="phone" placeholder="Enter Phone Number" class="form-control">
                            </div>
                        </div>
                        <!--Fourth Row-->
                        <div class="row mt-4">
                            <div class="col-sm-6">

                                <input type="text" name="vehicle_number" placeholder="Enter Vehicle Number"
                                    class="form-control">
                            </div>

                            <div class="col-sm-6">
                                <select class="browser-default custom-select mb-4" name="vehicle_type" id="select">
                                    <option value="" disabled="" selected="">Select Vehicle</option>
                                    <option value="Bike">Bike</option>
                                    <option value="Scooter">Scooter</option>
                                    <option value="Car">Car</option>
                                    <option value="others">Others</option>


                                </select>
                            </div>
                            <div class="col-sm-12">
                                <textarea class="form-control" name="description" rows="3" cols="55"
                                    placeholder="Enter Problem Description"></textarea>


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
    <!--modal-emergency-breakdown-body-end-->








    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center">
                <p>Our Service Centers</p>
                <h2>Our Service Center and their Services</h2>
            </div>
            <div class="row">
                <div class="owl-carousel owl-theme">
                    @foreach ($workshop as $item)
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service-1.jpg" alt="Image">
                        </div>
                        <div class="service-text">
                            <div class="service-title">
                                <h3>{{$item->name}}</h3>
                                <div class="time">
                                    <i class="fa fa-map-marker"></i>
                                    {{$item->location}}
                                </div>
                            </div>

                            <h5>Service List</h5>
                            @foreach ($item->services as $service)
                            <ul>
                                <li><i class="fas fa-angle-double-right"></i> {{ $service->title }} </li>

                            </ul>
                            <a class="btn" href="img/service-1.jpg" data-lightbox="service">View
                                More</a>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    <!-- Service End -->




    <!-- Team Start -->
    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <p>Our Team</p>
                <h2>Meet Our Team</h2>
            </div>
            @foreach ($team as $item)
            <div class="row">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('team_image/' . $item->image) }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>{{$item->name}}</h2>
                            <p>{{$item->post}}</p>
                        </div>
                        <div class="team-social">
                            <a class="social-fb" href="{{$item->facebook}}"><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href="{{$item->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href="{{$item->instagram}}"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Team End -->


    <!-- FAQs Start -->
    <div class="faqs">
        <div class="container">
            <div class="section-header text-center">
                <p>Frequently Asked Question</p>
                <h2>You May Ask</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div id="accordion-1">
                        <div class="card wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse" data-parent="#accordion-1">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium
                                    mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion-1">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium
                                    mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInLeft" data-wow-delay="0.3s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion-1">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium
                                    mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInLeft" data-wow-delay="0.4s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseFour">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseFour" class="collapse" data-parent="#accordion-1">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium
                                    mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInLeft" data-wow-delay="0.5s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseFive">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseFive" class="collapse" data-parent="#accordion-1">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium
                                    mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="accordion-2">
                        <div class="card wow fadeInRight" data-wow-delay="0.1s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseSix">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseSix" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium
                                    mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInRight" data-wow-delay="0.2s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseSeven">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseSeven" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium
                                    mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInRight" data-wow-delay="0.3s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseEight">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseEight" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium
                                    mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInRight" data-wow-delay="0.4s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseNine">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseNine" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium
                                    mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInRight" data-wow-delay="0.5s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseTen">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseTen" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium
                                    mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs End -->


    <!-- Testimonial Start -->
    {{-- <div class="testimonial wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-slider-nav">
                        <div class="slider-nav"><img src="img/testimonial-1.jpg" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="img/testimonial-2.jpg" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="img/testimonial-3.jpg" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="img/testimonial-4.jpg" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="img/testimonial-1.jpg" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="img/testimonial-2.jpg" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="img/testimonial-3.jpg" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="img/testimonial-4.jpg" alt="Testimonial"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-slider">
                        <div class="slider-item">
                            <h3>Customer Name</h3>
                            <h4>profession</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                                Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id
                                gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque
                                maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Customer Name</h3>
                            <h4>profession</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                                Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id
                                gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque
                                maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Customer Name</h3>
                            <h4>profession</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                                Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id
                                gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque
                                maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Customer Name</h3>
                            <h4>profession</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                                Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id
                                gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque
                                maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Customer Name</h3>
                            <h4>profession</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                                Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id
                                gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque
                                maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Customer Name</h3>
                            <h4>profession</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                                Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id
                                gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque
                                maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Customer Name</h3>
                            <h4>profession</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                                Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id
                                gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque
                                maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Customer Name</h3>
                            <h4>profession</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                                Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id
                                gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque
                                maximus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Testimonial End -->


    <!-- Blog Start -->
    {{-- <div class="blog">
        <div class="container">
            <div class="section-header text-center">
                <p>Latest Blog</p>
                <h2>Latest From Our Blog</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-1.jpg" alt="Image">
                        </div>
                        <div class="blog-title">
                            <h3>Lorem ipsum dolor sit</h3>
                            <a class="btn" href="">+</a>
                        </div>
                        <div class="blog-meta">
                            <p>By<a href="">Admin</a></p>
                            <p>In<a href="">Construction</a></p>
                        </div>
                        <div class="blog-text">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis
                                ornare velit non vulputate. Aliquam metus tortor
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-2.jpg" alt="Image">
                        </div>
                        <div class="blog-title">
                            <h3>Lorem ipsum dolor sit</h3>
                            <a class="btn" href="">+</a>
                        </div>
                        <div class="blog-meta">
                            <p>By<a href="">Admin</a></p>
                            <p>In<a href="">Construction</a></p>
                        </div>
                        <div class="blog-text">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis
                                ornare velit non vulputate. Aliquam metus tortor
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-3.jpg" alt="Image">
                        </div>
                        <div class="blog-title">
                            <h3>Lorem ipsum dolor sit</h3>
                            <a class="btn" href="">+</a>
                        </div>
                        <div class="blog-meta">
                            <p>By<a href="">Admin</a></p>
                            <p>In<a href="">Construction</a></p>
                        </div>
                        <div class="blog-text">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis
                                ornare velit non vulputate. Aliquam metus tortor
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Blog End -->
@endsection
@section('js')
<script>
    $(document).ready(function() {
        $('#workshop_name').on('change', function() {
            var workshopID = $(this).val();
            if (workshopID) {
                $.ajax({
                    url: '/serviceName/' + workshopID,
                    type: "GET",
                    data: {
                        "_token": "{{ csrf_token() }}"
                    },
                    dataType: "json",
                    success: function(data) {
                        if (data) {
                            $('#services').empty();
                            $('#services').append('<option hidden>Choose Service</option>');
                            $.each(data, function(index,
                                services) {
                                $('select[name="service_id"]').append(
                                    '<option value="' + services.id + '">' +
                                    services
                                    .title + '</option>');
                            });
                        } else {
                            $('#services').empty();
                        }
                    }
                });
            } else {
                $('#services').empty();
            }
        });
    });
    </script>
@endsection
