@extends('userinterface.master')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>About Us</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">About Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="about wow fadeInUp" data-wow-delay="0.1s">
        @foreach ($about as $item)
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="{{ asset('about_image/' . $item->image) }}" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="section-header text-left">
                            {{-- <p>{{$item->title}}</p> --}}
                            <h2>{{ $item->title }}</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                {{ $item->description }}
                            </p>

                            <a class="btn" href="">Learn More</a>
                        </div>
                    </div>
        @endforeach
    </div>
    </div>
    </div>
    <!-- About End -->


    <!-- Fact Start -->
    <div class="fact">
        <div class="container-fluid">
            <div class="row counters">
                <div class="col-md-6 fact-left wow slideInLeft">
                    <div class="row">
                        <div class="col-6">
                            <div class="fact-icon">
                                <i class="flaticon-worker"></i>
                            </div>
                            <div class="fact-text">
                                <h2 data-toggle="counter-up">109</h2>
                                <p>Expert Workers</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="fact-icon">
                                <i class="flaticon-building"></i>
                            </div>
                            <div class="fact-text">
                                <h2 data-toggle="counter-up">485</h2>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 fact-right wow slideInRight">
                    <div class="row">
                        <div class="col-6">
                            <div class="fact-icon">
                                <i class="flaticon-address"></i>
                            </div>
                            <div class="fact-text">
                                <h2 data-toggle="counter-up">789</h2>
                                <p>Completed Projects</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="fact-icon">
                                <i class="flaticon-crane"></i>
                            </div>
                            <div class="fact-text">
                                <h2 data-toggle="counter-up">890</h2>
                                <p>Running Projects</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->
    <!-- Team Start -->
    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <p>Our Team</p>
                <h2>Meet Our Team</h2>
            </div>
            <div class="row">
                @foreach ($team as $item)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('team_image/' . $item->image) }} " alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>{{ $item->name }}</h2>
                                <p>{{ $item->post }}</p>
                            </div>
                            <div class="team-social">
                                <a class="social-fb" href="{{ $item->facebook }}"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="social-li" href="{{ $item->linkedin }}"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="social-in" href="{{ $item->instagram }}"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
    </div>
    </div>
    <!-- Team End -->
@endsection
