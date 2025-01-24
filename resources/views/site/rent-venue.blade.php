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
                    <span>Hey! The Show Is Starting In 5 Days.</span>
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
                            <li><a href="{{route('user.dashboard')}}">Home</a></li>
                            <li><a href="{{route('user.about')}}">About Us</a></li>
                            <li><a href="{{route('user.events')}}">Shows & Events</a></li> 
                            <li><a href="{{route('login')}}">Login/Register</a></li>
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

    <!--  About Us Page  -->
    <div class="page-heading-rent-venue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Are You Looking For A Venue?</h2>
                    <span>Check out our venues, pick your choice and fill the reservation application.</span>
                </div>
            </div>
        </div>
    </div>

    <div class="rent-venue-tabs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <ul>
                                          <li><a href='#tabs-1'>Nassau Coliseum</a></li>
                                          <li><a href='#tabs-2'>Adityaram Palace</a></a></li>
                                          <li><a href='#tabs-3'>The O2</a></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                          <div class="main-dark-button">
                                              <a href="/login">Purchase Tickets!</a>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <div class="right-content">
                                                <h4>Nassau Coliseum</h4>
                                                <p>EventSphere Event takes place in a total of 3 days with different day and night pass entries with different stages.The details that you would like to visit 
                                                    are <a href="{{route('user.dashboard')}}">Homepage</a>, <a href="{{route('user.about')}}">About</a>, 
                        <a href="/">Rent a venue</a>, <a href="{{route('user.events')}}">shows &amp; events</a>, 
                        <a href="event-details.html">event details</a>, <a href="/">tickets</a>, and <a href="ticket-details.html">ticket details</a>. 
                        
                                                <ul class="list">
                                                    <li>Nassau Coliseum</li>
                                                    <li>$1,000 per day</li>
                                                    <li>860 Guests</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div id="map">
                                                <h5>Any Question?</h5>
                                                <p>Tumeric air affogato sare torial waistcoat denim stumber.</p>
                                            <div class="text-button">
                                                <a href="ticket-details.html">Need Direction? <i class="fa fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>                            
                                <article id='tabs-2'>
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <div class="right-content">
                                                <h4>Adityaram Palace</h4>
                                                <p> The Margazhi Festival takes place in various venues across Chennai during the Tamil month of Margazhi, which corresponds to December and January in the Gregorian calendar. It is a significant cultural event, attracting artists and art enthusiasts from all over India and the world. The festival features a wide range of performances, including Carnatic music concerts, classical dance performances, and other cultural events, making it a vibrant celebration of South Indian classical arts.</p>
                                                <ul class="list">
                                                    <li>Adityaram Palace</li>
                                                    <li>₹50,000 per day</li>
                                                    <li>1,100 Guests</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div id="map">
                                                <h5>Any Question?</h5>
                                                <p>Tumeric air affogato sare torial waistcoat denim stumber.</p>
                                            <div class="text-button">
                                                <a href="ticket-details.html">Need Direction? <i class="fa fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>   
                                <article id='tabs-3'>
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <div class="right-content">
                                                <h4>The O2</h4>
                                                <p>A.R. Rahman, the renowned Indian music composer, and singer, has performed at The O2 Arena in London, England. These concerts are typically highly anticipated by his fans and are known for their grandeur and spectacular performances. </p>
                                                <ul class="list">
                                                    <li>Nassau Coliseum</li>
                                                    <li>$2,000 per day</li>
                                                    <li>1,250 Guests</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div id="map">
                                                <h5>Any Question?</h5>
                                                <p>Tumeric air affogato sare torial waistcoat denim stumber.</p>
                                            <div class="text-button">
                                                <a href="ticket-details.html">Need Direction? <i class="fa fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>    
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rent-venue-application">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="heading-text">
                        <h4>Reservation Application</h4>
                    </div>
                    <div class="contact-form">
                        <form action="{{ route('reservations.store', ['event' => $event->id]) }}" method="POST">
                            @csrf
                        <input type="hidden" name="event_id" value="{{ $event->id }}">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="phone" type="text" id="phone-number" placeholder="Phone Number*" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="event_details" rows="6" id="about-event-hosting" placeholder="About The Event You Are Hosting" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-dark-button">Submit Request</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
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

    <!--  Footer  -->
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
