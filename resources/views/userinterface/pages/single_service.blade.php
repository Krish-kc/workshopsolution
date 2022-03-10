@extends('userinterface.master')
@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css" rel="stylesheet" />
    <style>
        .rating-css div {
            color: #ffe400;
            font-size: 30px;
            font-family: sans-serif;
            font-weight: 800;
            text-align: center;
            text-transform: uppercase;
            padding: 20px 0;
        }

        .rating-css input {
            display: none;
        }

        .rating-css input+label {
            font-size: 60px;
            text-shadow: 1px 1px 0 #8f8420;
            cursor: pointer;
        }

        .rating-css input:checked+label~label {
            color: #b4afaf;
        }

        .rating-css label:active {
            transform: scale(0.8);
            transition: 0.3s ease;
        }

        .checked {
            color: #ffe600
        }

        button.color {
            position: relative;
            margin-top: 15px;
            padding: 15px 35px;
            font-size: 16px;
            font-weight: 500;
            letter-spacing: 1px;
            color: #030f27;
            border-radius: 0;
            background: #fdbe33;
            transition: 0.3s;
        }

        button.color:hover {
            color: #fdbe33;
            background: #030f27;
        }

        .modalbutton {
            color: #030f27;
            background: #fdbe33;
            padding: 4px 20px;
            border-radius: 5px;
        }

        .modal-title {
            font-weight: bold;
        }

    </style>
@endsection
@section('content')
    <!-- single page Start -->
    <div class="single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-content wow fadeInUp">

                        <div id="myCarousel" class="carousel mycarousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($workshop->Images as $key => $item)
                                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                        <img src="{{ asset('workshop/' . $item->name) }}" alt="Carousel Image">
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



                        <h2>{{ $workshop->name }}</h2>
                        <p>
                            {{ $workshop->short_description }}
                        </p>
                        <h3>Description</h3>
                        <p>
                            {{ $workshop->long_description }}
                        </p>
                        <h4>Time Shedule</h4>
                        <div class="col-12">
                            <div id="calendar"></div>
                        </div>
                    </div>


                    {{-- rating  section start --}}


                    <div class="single-bio wow fadeInUp">
                        <div class="single-bio-text">
                            <h3>Average User Rating of {{ $workshop->name }}</h3>
                        </div>

                        <div class="single-bio-text">
                            @php
                                $rate = number_format($rating_value);
                            @endphp
                            <div class="rating ">
                                {{-- {{$rating->count()}} --}}

                                @for ($i = 1; $i <= $rate; $i++)
                                    <i class="fa fa-star checked"></i>
                                @endfor
                                @for ($j = $rate + 1; $j <= 5; $j++)
                                    <i class="fa fa-star"></i>
                                @endfor

                            </div>
                        </div>
                    </div>
                    <button type="button" class="color" data-toggle="modal" data-target="#exampleModalCenter">
                        Rate Workshop
                    </button>





























                    <br>
                    <br>
                    <div class="single-related wow fadeInUp">
                        <h2>Related Post</h2>
                        <div class="owl-carousel related-slider">
                            <div class="post-item">
                                <div class="post-img">
                                    <img src="img/post-1.jpg" />
                                </div>
                                <div class="post-text">
                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                    <div class="post-meta">
                                        <p>By<a href="">Admin</a></p>
                                        <p>In<a href="">Design</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="post-item">
                                <div class="post-img">
                                    <img src="img/post-2.jpg" />
                                </div>
                                <div class="post-text">
                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                    <div class="post-meta">
                                        <p>By<a href="">Admin</a></p>
                                        <p>In<a href="">Design</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="post-item">
                                <div class="post-img">
                                    <img src="img/post-3.jpg" />
                                </div>
                                <div class="post-text">
                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                    <div class="post-meta">
                                        <p>By<a href="">Admin</a></p>
                                        <p>In<a href="">Design</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="post-item">
                                <div class="post-img">
                                    <img src="img/post-4.jpg" />
                                </div>
                                <div class="post-text">
                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                    <div class="post-meta">
                                        <p>By<a href="">Admin</a></p>
                                        <p>In<a href="">Design</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if ($comment->count() < 1)
                        <div class="alert alert-warning">No comments yet</div>
                    @else
                        <div class="single-comment wow fadeInUp">
                            <h3>{{ $comment->count() }} Comments</h3>
                        </div>
                    @endif


                    @comments(['model' => $workshop])
                </div>

                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-widget wow fadeInUp">
                            <div class="search-widget">
                                <form>
                                    <input class="form-control" type="text" placeholder="Search Keyword">
                                    <button class="btn"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>



                        <div class="sidebar-widget wow fadeInUp">
                            <div class="image-widget">

                                <a href="#"><img src="{{ asset('workshop/' . $workshop->singleImage->name) }}" alt="Image"
                                        style="max-height: 200px; width:250px;   "></a>
                            </div>
                        </div>

                        <div class="sidebar-widget wow fadeInUp">
                            <div class="tab-post">
                                <ul class="nav nav-pills nav-justified">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="pill" href="#featured">Featured</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#popular">Popular</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#latest">Latest</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div id="featured" class="container tab-pane active">
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="img/post-1.jpg" />
                                            </div>
                                            <div class="post-text">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                <div class="post-meta">
                                                    <p>By<a href="">Admin</a></p>
                                                    <p>In<a href="">Design</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="img/post-2.jpg" />
                                            </div>
                                            <div class="post-text">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                <div class="post-meta">
                                                    <p>By<a href="">Admin</a></p>
                                                    <p>In<a href="">Design</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="img/post-3.jpg" />
                                            </div>
                                            <div class="post-text">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                <div class="post-meta">
                                                    <p>By<a href="">Admin</a></p>
                                                    <p>In<a href="">Design</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="img/post-4.jpg" />
                                            </div>
                                            <div class="post-text">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                <div class="post-meta">
                                                    <p>By<a href="">Admin</a></p>
                                                    <p>In<a href="">Design</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="img/post-5.jpg" />
                                            </div>
                                            <div class="post-text">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                <div class="post-meta">
                                                    <p>By<a href="">Admin</a></p>
                                                    <p>In<a href="">Design</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="popular" class="container tab-pane fade">
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="img/post-1.jpg" />
                                            </div>
                                            <div class="post-text">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                <div class="post-meta">
                                                    <p>By<a href="">Admin</a></p>
                                                    <p>In<a href="">Design</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="latest" class="container tab-pane fade">
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="img/post-1.jpg" />
                                            </div>
                                            <div class="post-text">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                <div class="post-meta">
                                                    <p>By<a href="">Admin</a></p>
                                                    <p>In<a href="">Design</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="img/post-2.jpg" />
                                            </div>
                                            <div class="post-text">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                <div class="post-meta">
                                                    <p>By<a href="">Admin</a></p>
                                                    <p>In<a href="">Design</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="img/post-3.jpg" />
                                            </div>
                                            <div class="post-text">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                <div class="post-meta">
                                                    <p>By<a href="">Admin</a></p>
                                                    <p>In<a href="">Design</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="img/post-4.jpg" />
                                            </div>
                                            <div class="post-text">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                <div class="post-meta">
                                                    <p>By<a href="">Admin</a></p>
                                                    <p>In<a href="">Design</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="img/post-5.jpg" />
                                            </div>
                                            <div class="post-text">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                <div class="post-meta">
                                                    <p>By<a href="">Admin</a></p>
                                                    <p>In<a href="">Design</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-widget wow fadeInUp">
                            <div class="image-widget">
                                <a href="#"><img src="img/blog-2.jpg" alt="Image"></a>
                            </div>
                        </div>


                        <div class="sidebar-widget wow fadeInUp">
                            <div class="image-widget">
                                <a href="#"><img src="img/blog-3.jpg" alt="Image"></a>
                            </div>
                        </div>



                        <div class="sidebar-widget wow fadeInUp">
                            <h2 class="widget-title">Text Widget</h2>
                            <div class="text-widget">
                                <p>
                                    Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis sapien, non eros
                                    leo
                                    in nunc. Donec a nulla vel turpis tempor ac vel justo. In hac platea nec eros. Nunc
                                    eu
                                    enim non turpis id augue.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <form action="{{ route('rating.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="workshop_id" value="{{ $workshop->id }}">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Rate {{ $workshop->name }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="rating-css">
                            <div class="star-icon">

                                @if ($user_rating)
                                    @for ($i = 1; $i <= $user_rating->stars_rated; $i++)
                                        <input type="radio" value="{{ $i }}" name="workshop_rating" checked
                                            id="rating{{ $i }}">
                                        <label for="rating{{ $i }}" class="fa fa-star"></label>
                                    @endfor
                                    @for ($j = $user_rating->stars_rated + 1; $j <= 5; $j++)
                                        <input type="radio" value="{{ $j }}" name="workshop_rating"
                                            id="rating{{ $j }}">
                                        <label for="rating{{ $j }}" class="fa fa-star"></label>
                                    @endfor
                                @else
                                    <input type="radio" value="1" name="workshop_rating" checked id="rating1">
                                    <label for="rating1" class="fa fa-star"></label>
                                    <input type="radio" value="2" name="workshop_rating" id="rating2">
                                    <label for="rating2" class="fa fa-star"></label>
                                    <input type="radio" value="3" name="workshop_rating" id="rating3">
                                    <label for="rating3" class="fa fa-star"></label>
                                    <input type="radio" value="4" name="workshop_rating" id="rating4">
                                    <label for="rating4" class="fa fa-star"></label>
                                    <input type="radio" value="5" name="workshop_rating" id="rating5">
                                    <label for="rating5" class="fa fa-star"></label>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="modalbutton">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- rate modal end here --}}



    <!-- single page End -->

@endsection

@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js"></script>

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var calendar = $('#calendar').fullCalendar({
                // timeZone: 'Asia/Kathmandu',
                // minTime: "08:00",
                // maxTime: "20:00",
                // scrollTime: moment().format('H:m'),


                initialView: 'timeGridWeek',

                header: {
                    left: 'prev,next,today',
                    center: 'title',
                    right: 'agendaDay,listMonth'

                },

                events: "{{ route('show.calender') }}",
                displayEventTime: true,
                eventRender: function(event, element, view) {
                    if (event.allDay === 'true') {
                        event.allDay = true;
                    } else {
                        event.allDay = false;
                    }
                },







            });

        });
    </script>
    <script>
        $(document).ready(function() {
            var SITEURL = "{{ url('/') }}";
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var calendar = $('#full_calendar_events').fullCalendar({
                editable: true,
                editable: true,
                events: SITEURL + "/calendar-event",
                displayEventTime: true,
                eventRender: function(event, element, view) {
                    if (event.allDay === 'true') {
                        event.allDay = true;
                    } else {
                        event.allDay = false;
                    }
                },
                selectable: true,
                selectHelper: true,
                select: function(event_start, event_end, allDay) {
                    var event_name = prompt('Event Name:');
                    if (event_name) {
                        var event_start = $.fullCalendar.formatDate(event_start, "Y-MM-DD HH:mm:ss");
                        var event_end = $.fullCalendar.formatDate(event_end, "Y-MM-DD HH:mm:ss");
                        $.ajax({
                            url: SITEURL + "/calendar-crud-ajax",
                            data: {
                                event_name: event_name,
                                event_start: event_start,
                                event_end: event_end,
                                type: 'create'
                            },
                            type: "POST",
                            success: function(data) {
                                displayMessage("Event created.");
                                calendar.fullCalendar('renderEvent', {
                                    id: data.id,
                                    title: event_name,
                                    start: event_start,
                                    end: event_end,
                                    allDay: allDay
                                }, true);
                                calendar.fullCalendar('unselect');
                            }
                        });
                    }
                },
                eventDrop: function(event, delta) {
                    var event_start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                    var event_end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
                    $.ajax({
                        url: SITEURL + '/calendar-crud-ajax',
                        data: {
                            title: event.event_name,
                            start: event_start,
                            end: event_end,
                            id: event.id,
                            type: 'edit'
                        },
                        type: "POST",
                        success: function(response) {
                            displayMessage("Event updated");
                        }
                    });
                },
                eventClick: function(event) {
                    var eventDelete = confirm("Are you sure?");
                    if (eventDelete) {
                        $.ajax({
                            type: "POST",
                            url: SITEURL + '/calendar-crud-ajax',
                            data: {
                                id: event.id,
                                type: 'delete'
                            },
                            success: function(response) {
                                calendar.fullCalendar('removeEvents', event.id);
                                displayMessage("Event removed");
                            }
                        });
                    }
                }
            });
        });

        function displayMessage(message) {
            toastr.success(message, 'Event');
        }



        function handeldelete() {
            var form = document.getElementById('showorkshop')
            $('#popmodal').modal('show')


        }
    </script>
    <script>
        $(document).ready(function() {

            getGroceryData();

            function getGroceryData() {
                $.ajax({
                    method: 'GET',
                    url: '/popularworkshop',
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            }

        });
    </script>
@endsection
