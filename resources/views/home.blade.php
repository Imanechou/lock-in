<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="{{ asset('fronts/images/favicon.png') }}" type="">

    <title> Lock-In </title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('fronts/css/bootstrap.css') }}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- font awesome style -->
    <link href="{{ asset('fronts/css/font-awesome.min.css ') }}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('fronts/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('fronts/css/responsive.css') }}" rel="stylesheet" />
    @vite('resources/css/app.css')

</head>

<body>

    <div class="hero_area">

        <!--<div class="hero_bg_box">
            <div class="bg_img_box">
                <img src="{{ asset('fronts/images/hero-bg.png') }}" alt="">
            </div>
        </div> -->

        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                        <span>
                            Lock-In
                        </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>



                    <ul class="navbar-nav  ">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html"> About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="service.html">Services</a>
                        </li>

                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                <li class="nav-item">
                                    <a href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Dashboard
                                    </a>
                                </li>
                                @else
                                <li class="nav-item">
                                    <a href="{{ route('login') }}"
                                    class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-lg px-6 py-1.5 text-center ms-3 me-2 ">
                                        Log in
                                    </a>
                                </li>
                                    @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a href="{{ route('register') }}"
                                            class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-lg px-3 py-1.5 text-center ms-3 me-2 ">
                                            Register
                                        </a>
                                    </li>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </ul>

                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section ">
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            Manage Your <br>
                                            Time
                                        </h1>
                                        <p>
                                            Track your work and optimize your productivity
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn1">
                                                Get Started
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="{{ asset('fronts/images/image.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            Stay Organized, <br>
                                            Stay Productive
                                        </h1>
                                        <p>
                                            Simplify your workflow with our intuitive tools
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn1">
                                                Join Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="{{ asset('fronts/images/image2.webp') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            Achieve Your <br>
                                            Goals with Ease
                                        </h1>
                                        <p>
                                            Set priorities and track progress effortlessly
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn1">
                                                Sign Up Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="{{ asset('fronts/images/image5.webp') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                    <li data-target="#customCarousel1" data-slide-to="1"></li>
                    <li data-target="#customCarousel1" data-slide-to="2"></li>
                </ol>
            </div>

        </section>
        <!-- end slider section -->
    </div>


    <!-- service section -->

    <section class="service_section layout_padding">
        <div class="service_container">
            <div class="container ">
                <div class="heading_container heading_center">
                    <h2>
                        Our <span>Services</span>
                    </h2>
                    <p>
                        Discover tools to organize your workday, track productivity, and stay on top of your schedule. 
                        Our platform is designed to enhance your efficiency and help you achieve your goals.
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('fronts/images/s5.png') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Time Management
                                </h5>
                                <p>
                                    Easily manage your work schedule with visual timelines and drag-and-drop features. 
                                    Log tasks, set priorities, and allocate time slots to stay on track.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('fronts/images/s4.png') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Weekly Reports
                                </h5>
                                <p>
                                    Receive detailed weekly reports on your productivity, highlighting work patterns and areas for improvement. 
                                    enhance efficiency and achieve your goals.
                                </p>
                        
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('fronts/images/s6.png') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Custom Alerts
                                </h5>
                                <p>
                                    Set up personalized notifications to receive timely reminders for important tasks and deadlines. 
                                    Stay proactive and organized with our customizable alert system.
                                </p>
                            
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- end service section -->


    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="container  ">
            <div class="heading_container2 heading_center">
                <h2>
                    About <span>Us</span>
                </h2>
                <p>
                
                </p>
            </div>
            <div class="row">
                <div class="col-md-6 ">
                    <div class="img-box">
                        <img src="{{ asset('fronts/images/image6.webp') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <h3 class="text-lg">
                            We Are Lock-In
                        </h3>
                        <p>
                            At our core, we are dedicated to creating a seamless experience for users to manage their daily tasks and long-term projects. 
                            Our platform is designed with flexibility in mind, allowing you to tailor your time management strategies to fit your unique needs.
                             Whether you're a student balancing coursework, a professional juggling multiple projects, or anyone striving to improve their productivity, our tools are here to support you every step of the way.
                        </p>
                        <p>
                            Our commitment to excellence ensures that you have access to the latest and most effective strategies for staying organized and productive. 
                            Join our community of motivated individuals and take the first step towards transforming your approach to time management.
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->


    <!-- client section -->

    <section class="client_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center psudo_white_primary mb_45">
                <h2>
                    What says our <span>Customers</span>
                </h2>
            </div>
            <div class="carousel-wrap ">
                <div class="owl-carousel client_owl-carousel">
                    <div class="item">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('fronts/images/client1.jpg') }}" alt="" class="box-img">
                            </div>
                            <div class="detail-box">
                                <div class="client_id">
                                    <div class="client_info">
                                        <h6>
                                            LusDen
                                        </h6>
                                        <p>
                                            magna aliqua. Ut
                                        </p>
                                    </div>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('fronts/images/client2.jpg') }}" alt="" class="box-img">
                            </div>
                            <div class="detail-box">
                                <div class="client_id">
                                    <div class="client_info">
                                        <h6>
                                            Zen Court
                                        </h6>
                                        <p>
                                            magna aliqua. Ut
                                        </p>
                                    </div>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('fronts/images/client1.jpg') }}" alt="" class="box-img">
                            </div>
                            <div class="detail-box">
                                <div class="client_id">
                                    <div class="client_info">
                                        <h6>
                                            LusDen
                                        </h6>
                                        <p>
                                            magna aliqua. Ut
                                        </p>
                                    </div>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('fronts/images/client2.jpg') }}" alt="" class="box-img">
                            </div>
                            <div class="detail-box">
                                <div class="client_id">
                                    <div class="client_info">
                                        <h6>
                                            Zen Court
                                        </h6>
                                        <p>
                                            magna aliqua. Ut
                                        </p>
                                    </div>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end client section -->


    <!-- info section -->

    <section class="info_section layout_padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 info_col">
                    <div class="info_contact">
                        <h4>
                            Address
                        </h4>
                        <div class="contact_link_box">
                            <a href="">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                    Location
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    Call +01 1234567890
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>
                                    demo@gmail.com
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="info_social">
                        <a href="">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 info_col">
                    <div class="info_detail">
                        <h4>
                            Info
                        </h4>
                        <p>
                            necessary, making this the first true generator on the Internet. It uses a dictionary of
                            over 200 Latin words, combined with a handful
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 mx-auto info_col">
                    <div class="info_link_box">
                        <h4>
                            Links
                        </h4>
                        <div class="info_links">
                            <a class="active" href="index.html">
                                Home
                            </a>
                            <a class="" href="about.html">
                                About
                            </a>
                            <a class="" href="service.html">
                                Services
                            </a>
                            <a class="" href="why.html">
                                Why Us
                            </a>
                            <a class="" href="team.html">
                                Team
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 info_col ">
                    <h4>
                        Subscribe
                    </h4>
                    <form action="#">
                        <input type="text" placeholder="Enter email" />
                        <button type="submit">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="container footer_section">
            <p>
                &copy; <span id="displayYear"></span> All Rights Reserved By
                <a href="https://html.design/">Free Html Templates</a>
            </p>
        </div>
    </section>

    <!-- end info section -->

    <!-- jQery -->
    <script type="text/javascript" src="{{ asset('fronts/js/jquery-3.4.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="{{ asset('fronts/js/bootstrap.js') }}"></script>
    <!-- owl slider -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!-- custom js -->
    <script type="text/javascript" src="{{ asset('fronts/js/custom.js') }}"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->
    @vite('resources/js/app.js')

</body>

</html>
