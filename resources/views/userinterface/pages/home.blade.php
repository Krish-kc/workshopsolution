@extends('userinterface.master')
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

                <div class="col-lg-7 col-md-6">
                    <div class="about-wrap">
                        <div class="section-header text-left">
                            <p>Welcome to Builderz</p>
                            <h2>25 Years Experience</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                                Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id
                                gravida condimentum, viverra quis sem.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                                Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id
                                gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque
                                maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non
                                blandit.
                            </p>
                            <a class="btn" href="">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="about-img">
                        <img src="user_assets/img/car.png" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <div class="icon-part">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    <div class="icon-block blue">
                        <div class="fact-icon">
                            <img src="user_assets/img/brand.svg" alt="">
                        </div>
                        <div class="fact-text">
                            <h2>all brands</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="icon-block yellow">
                        <div class="fact-icon">
                            <img src="user_assets/img/support.svg" alt="">
                        </div>
                        <div class="fact-text">
                            <h2>Free Support</h2>
                            <p>Lorem ipsum dolor sit amet, conseenim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="icon-block blue">
                        <div class="fact-icon">
                            <img src="user_assets/img/dealership.svg" alt="">
                        </div>
                        <div class="fact-text">
                            <h2>dealership</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sna aliqminim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="icon-block yellow">
                        <div class="fact-icon">
                            <img src="user_assets/img/affordable.svg" alt="">
                        </div>
                        <div class="fact-text">
                            <h2>affordable</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elaad minim veniam nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Fact Start -->
    <!-- <div class="fact">
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
                                                                                                                                                                                                                                                        </div> -->
    <!-- Fact End -->


    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center">
                <p>Our Services</p>
                <h2>We Provide Services</h2>
            </div>
            <div class="row">
                <div class="owl-carousel owl-theme">
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
                                <li><i class="fas fa-angle-double-right"></i> Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit.</li>
                                <li><i class="fas fa-angle-double-right"></i> Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit.</li>
                                <li><i class="fas fa-angle-double-right"></i> Phasellus nec pretium mi. Curabitur
                                    facilisis ornare</li>
                                <li><i class="fas fa-angle-double-right"></i> Aliquam metus tortor, auctor id
                                    gravida condimentum, viverra quis sem</li>
                            </ul>
                            <a class="btn" href="img/service-1.jpg" data-lightbox="service">View
                                More</a>
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
                                <li><i class="fas fa-angle-double-right"></i> Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit.</li>
                                <li><i class="fas fa-angle-double-right"></i> Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit.</li>
                                <li><i class="fas fa-angle-double-right"></i> Phasellus nec pretium mi. Curabitur
                                    facilisis ornare</li>
                                <li><i class="fas fa-angle-double-right"></i> Aliquam metus tortor, auctor id
                                    gravida condimentum, viverra quis sem</li>
                            </ul>
                            <a class="btn" href="img/service-1.jpg" data-lightbox="service">View
                                More</a>
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
                                <li><i class="fas fa-angle-double-right"></i> Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit.</li>
                                <li><i class="fas fa-angle-double-right"></i> Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit.</li>
                                <li><i class="fas fa-angle-double-right"></i> Phasellus nec pretium mi. Curabitur
                                    facilisis ornare</li>
                                <li><i class="fas fa-angle-double-right"></i> Aliquam metus tortor, auctor id
                                    gravida condimentum, viverra quis sem</li>
                            </ul>
                            <a class="btn" href="img/service-1.jpg" data-lightbox="service">View
                                More</a>
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
                                <li><i class="fas fa-angle-double-right"></i> Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit.</li>
                                <li><i class="fas fa-angle-double-right"></i> Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit.</li>
                                <li><i class="fas fa-angle-double-right"></i> Phasellus nec pretium mi. Curabitur
                                    facilisis ornare</li>
                                <li><i class="fas fa-angle-double-right"></i> Aliquam metus tortor, auctor id
                                    gravida condimentum, viverra quis sem</li>
                            </ul>
                            <a class="btn" href="img/service-1.jpg" data-lightbox="service">View
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Video Start -->
    <div class="video wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <button type="button" class="btn-play" data-toggle="modal"
                data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                <span></span>
            </button>
        </div>
    </div>

    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video End -->


    <!-- Team Start -->
    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <p>Our Team</p>
                <h2>Meet Our Engineer</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-1.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Adam Phillips</h2>
                            <p>CEO & Founder</p>
                        </div>
                        <div class="team-social">
                            <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                            <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-2.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Dylan Adams</h2>
                            <p>Civil Engineer</p>
                        </div>
                        <div class="team-social">
                            <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                            <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-3.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Jhon Doe</h2>
                            <p>Interior Designer</p>
                        </div>
                        <div class="team-social">
                            <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                            <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-4.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Josh Dunn</h2>
                            <p>Painter</p>
                        </div>
                        <div class="team-social">
                            <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                            <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
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
    <div class="testimonial wow fadeIn" data-wow-delay="0.1s">
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
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="blog">
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
    </div>
    <!-- Blog End -->
@endsection
