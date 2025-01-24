<!------------------------- Coded by Nayansai --------------------------->

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Trek">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>EventSphere</title>
    <link rel="icon" href="./assets/images/logo.png">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl-carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.12.2/lottie.min.js"></script>

        </head>
    
    <body>
    
    <!--  Preloader Start  -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!--  Preloader End  -->
    
    <!--  Pre HEader  -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <span>Hey! The Show is Starting in 15 Days.</span>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="text-button">
                        <a href="/">Contact Us Now! <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--  Header Area Start  -->
 <!--  Header Area Start  -->
<!--  Header Area Start  -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!--  Logo Start  -->
                    <a class="logo"><img src="./assets/images/logo.png" alt=""></a>
                    <!--  Logo End  -->
                    <!--  Menu Start  -->
                    <ul class="nav">
                        <li><a href="{{route('user.dashboard')}}" class="active">Home</a></li>
                        <li><a href="{{route('user.about')}}">About Us</a></li>
                        <li><a href="{{route('user.events')}}">Shows & Events</a></li>
                        @guest
                            <li><a href="{{route('login')}}">Login/Register</a></li>
                        @endguest
                        @auth
                            <!-- Show Logout Link when user is logged in -->
                            <li>
                                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                    @csrf
                                    <button type="submit" style="border: none; background: none; color: inherit; cursor: pointer;">
                                        Logout
                                    </button>
                                </form>
                            </li>
                        @endauth
                    </ul>        
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!--  Menu End  -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!--  Header Area End  -->
<!--  Header Area End  -->
    <!--  Header Area End  -->

    <!--  Main Banner Area Start  -->
    <div class="main-banner">
        <div class="counter-content">
            <ul>
                <li>Days<span id="days"></span></li>
                <li>Hours<span id="hours"></span></li>
                <li>Minutes<span id="minutes"></span></li>
                <li>Seconds<span id="seconds"></span></li>
            </ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-content">
                        <div class="next-show">
                            <i class="fa fa-arrow-up"></i>
                            <span>Next Show</span>
                        </div>
                        <h6>Opening on Newday, Month-Date</h6>
                        <h2>A. R. Rahman Festival 2023</h2>
                        <div class="main-white-button">
                            <a href="/login">Purchase Tickets!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Main Banner Area End  -->

    <!--  Owl Carousel Items  -->
    <div class="show-events-carousel">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-show-events owl-carousel">
                        <div class="item">
                            <a href="/"><img src="assets/images/show-events-01.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="/"><img src="assets/images/show-events-02.jpg" alt=""></a> 
                        </div>
                        <div class="item">
                            <a href="/"><img src="assets/images/show-events-03.jpg" alt=""></a> 
                        </div>
                        <div class="item">
                            <a href="/"><img src="assets/images/show-events-04.jpg" alt=""></a> 
                        </div>
                        <div class="item">
                            <a href="/"><img src="assets/images/show-events-01.jpg" alt=""></a> 
                        </div>
                        <div class="item">
                            <a href="/"><img src="assets/images/show-events-02.jpg" alt=""></a> 
                        </div>
                        <div class="item">
                            <a href="/"><img src="assets/images/show-events-03.jpg" alt=""></a> 
                        </div>
                        <div class="item">
                            <a href="/"><img src="assets/images/show-events-04.jpg" alt=""></a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!--  Amazing Venus  -->
    <div class="amazing-venues">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="left-content">
                        <h4>Three Amazing Venues for events</h4>
                        <p>EventSphere Event takes place in a total of 3 days with different day and night pass entries with different stages.The details that you would like to visit 
                         are <a href="{{route('user.dashboard')}}">Homepage</a>, <a href="{{route('user.about')}}">About</a>, 
                        <a href="/">Rent a venue</a>, <a href="{{route('user.events')}}">shows &amp; events</a>, 
                        <a href="event-details.html">event details</a>, <a href="/">tickets</a>, and <a href="ticket-details.html">ticket details</a>. 
                        You can feel free to modify any page as you like. If you have any question, please visit our <a href=" " target="_blank">Contact page</a>.</p>
                        <br>
                        <p>The proper location to create the illusion that you are in an entertainment area</a> A realm where the extraordinary and captivating distribution of special events and entertainment elements takes center stage..</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="right-content">
                        <h5><i class="fa fa-map-marker"></i> Visit Us</h5>
                        <span>5RFF+CMJ, Rruga Dëshmorët e 4 Shkurtit<br> Sheshi "Nënë Tereza" <br> Tiranë, Shqipëri.</span>
                        <div class="text-button"><a href="https://maps.app.goo.gl/QMAq6sRTcq2K3e8b9">Need Directions? <i class="fa fa-arrow-right"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Venues & Tickets -->
    <div class="venue-tickets">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Our Venues & Tickets</h2>
                </div>
            </div>

            @foreach($events as $event)
            <div class="col-lg-4">
                <div class="venue-item">
                    <div class="thumb">
                        <img src="assets/images/venue-01.jpg" alt="">
                    </div>
                    <div class="down-content">
                      
                        <div class="up-content">
                            <h4>{{ $event->name }}</h4>
                            <p>{{ $event->description }}</p>

                            <!-- Loop through tickets for this event -->
                            <ul>
                                @foreach($event->tickets as $ticket)
                                    <li><i class="fa fa-ticket"></i>{{ $ticket->ticket_type }} - ${{ $ticket->price }} ({{ $ticket->available_qty }} available)</li>
                                @endforeach
                            </ul>

                            <div class="price">
                                <!-- Assuming the first ticket is the base ticket -->
                                <span>From <em>${{ $event->tickets->first()->price ?? 'N/A' }}</em></span>
                            </div>
                        </div>
                        <div class="down-button">
                            <!-- Dynamic route to ticket purchase page -->
                            <div class="main-white-button">
                                <a href="{{ route('ticket.purchase', $event->id) }}">Purchase Tickets!</a>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>



    <!--  Coming Events -->
    <div class="coming-events">
    <div class="left-button">
        <div class="main-white-button">
            <a href="/events">Discover More</a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($events as $event)
            <div class="col-lg-4">
                <div class="event-item">
                    <div class="thumb">
                        <!-- Assuming you want to show each event's image -->
                        <a href="{{ route('event.details', $event->id) }}"><img src="{{ asset('storage/' . $event->image) }}" alt=""></a>
                    </div>
                    <div class="down-content">
                        <a href="{{ route('event.details', $event->id) }}"><h4>{{ $event->name }}</h4></a>
                        <ul>
                            <!-- Assuming you have event schedules stored in your Event model -->
                            <li><i class="fa fa-clock-o"></i> {{ $event->event_date }}</li>
                            <li><i class="fa fa-map-marker"></i>{{ $event->location }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>



    <!--  Subscribe  -->
    <div class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h4>Subscribe Our Newsletter:</h4>
                </div>
                <div class="col-lg-8">
                    <form id="subscribe" action="" method="get">
                        <div class="row">
                          <div class="col-lg-9">
                            <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-3">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-dark-button">Submit</button>
                            </fieldset>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- 
        
        
        
        Footer  -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="address">
                        <h4>Address</h4>
                        <span>5RFF+CMJ, Rruga Dëshmorët e 4 Shkurtit<br> Sheshi "Nënë Tereza" <br> Tiranë, Shqipëri.</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#">Info</a></li>
                            <li><a href="#">Venues</a></li>
                            <li><a href="#">Guides</a></li>
                            <li><a href="#">Videos</a></li>
                            <li><a href="#">Outreach</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="hours">
                        <h4>Open Hours</h4>
                        <ul>
                            <li>Mon to Fri: 10:00 AM to 8:00 PM</li>
                            <li>Sat - Sun: 11:00 AM to 4:00 PM</li>
                            <li>Holidays: Closed</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="sub-footer">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="logo"><span><img src="./assets/images/logo.png" alt=""></span></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu">
                                    <ul>
                                        <li><a href="{{route('user.dashboard')}}" class="active">Home</a></li>
                                        <li><a href="{{route('user.about')}}">About Us</a></li>
                                        <li><a href="{{route('user.events')}}">Shows & Events</a></li> 
                                        <li><a href="{{route('login')}}">Login/Register</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/imgfix.min.js') }}"></script> 
    <script src="{{ asset('assets/js/mixitup.js') }}"></script> 
    <script src="{{ asset('assets/js/accordions.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    
    <!-- Global Init -->
    <!-- a{color:#ffffff;text-decoration:none;background-color:transparent} -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

  </body>
</html>
