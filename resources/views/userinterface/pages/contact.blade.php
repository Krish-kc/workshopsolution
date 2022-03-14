@extends('userinterface.master')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Contact Us</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="contact wow fadeInUp">
        <div class="container">
            <div class="section-header text-center">
                <p>Get In Touch</p>
                <h2>For Any Query</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-info">
                        <div class="contact-item">
                            <i class="flaticon-address"></i>
                            <div class="contact-text">
                                <h2>Location</h2>
                                <p>Thapathali Street, Kathmandu, Nepal</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="flaticon-call"></i>
                            <div class="contact-text">
                                <h2>Contact Number</h2>
                                <p>+012 345 67890</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="flaticon-send-mail"></i>
                            <div class="contact-text">
                                <h2>Email Us</h2>
                                <p>eworkshop665@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form action="{{route('contact.store')}}" method="POST" name="sentMessage" id="contactForm" novalidate="novalidate">
                            @csrf
                            @if (Auth::user())
                            <div class="control-group">
                                <input type="text" name="name" class="form-control" id="name" value="{{Auth::user()->name}}" placeholder="Your Name"
                                    required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            @else
                            <div class="control-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>

                            @endif
                            @if (Auth::user())

                            <div class="control-group">
                                <input type="email" name="email" class="form-control" id="email" value="{{Auth::user()->email}}" placeholder="Your Email"
                                required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            @else
                            <div class="control-group">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Your Email"
                                required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>

                             @endif
                            <div class="control-group">
                                <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject"
                                    required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" name="message" id="message" placeholder="Message" required="required"
                                    data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


@endsection
