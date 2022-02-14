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

    <div class="feature wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <div class="feature-form ">
                        <form>
                            <div class="feature-group-2">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Search Workshop</label>
                                    <input type="search" name="search" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Search Workshop via location" value="{{$search}}">
                                </div>
                                <button type="submit" class="btn btn-primary "><i class="fab fa-searchengin "></i>
                                    Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Service Start -->
    <div class="service">
        <div class="container">
   
        
            <div class="section-header text-center">
                <p>Our Service Center</p>
                <h2>Service Center List</h2>
            </div>
            
        @if($search)
                
            <div class="row">
                @foreach ($workshop as $item)
                    <div class="col-sm-12">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ asset('workshop/' . $item->image) }}" alt="Image">
                            </div>
                            <div class="service-text">
                                <div class="service-title">
                                    <h3>{{ $item->name }}</h3>
                                    <div class="time">
                                        <i class="fa fa-map-marker"></i>
                                        {{ $item->location }}
                                    </div>
                                </div>

                                <h5>Service List</h5>
                                @foreach ($item->services as $krish)
                                    <ul>


                                        <li><i class="fas fa-angle-double-right"> {{ $krish->title }}</i></li>

                                    </ul>
                                @endforeach
                                <a class="btn" href="img/service-1.jpg" data-lightbox="service">View More</a>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
         @else
            
            <h6>There is no service center in this location </h6>

     @endif
        </div>
    </div>
    <!-- Service End -->
 
    </div>
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
