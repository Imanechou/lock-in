<!DOCTYPE html>
<html lang="en">

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

    <title>Lock-In</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('fronts/css/bootstrap.css') }}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- font awesome style -->
    <link href="{{ asset('fronts/css/font-awesome.min.css') }}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('fronts/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('fronts/css/responsive.css') }}" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    @vite('resources/css/app.css')
</head>

<body>
    <!-- Navbar section-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #355070">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <span>
                    Lock-In
                </span>
            </a>
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header text-white">
                    <a class="navbar-brand" href="index.html">
                        <span>
                            Lock-In
                        </span>
                    </a>
                    <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
                    <ul
                        class="navbar-nav justify-content-center justify-content-lg-end align-items-center fs-5 flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>

                    </ul>
                    <div class="butn d-flex flex-lg-row justify-content-center align-items-center gap-3">
                        @if (Route::has('login'))
                            
                                @auth
                                        <a href="{{ url('/dashboard') }}"
                                            class="butn1">
                                            Dashboard
                                        </a>
                                @else
                                        <a href="{{ route('login') }}"
                                            class="butn1 ">
                                            Log in
                                        </a>
                                    
                                    @if (Route::has('register'))
                                        
                                            <a href="{{ route('register') }}"
                                                class="butn1">
                                                Register
                                            </a>
                                        
                                    @endif
                                @endauth
                            
                        @endif
                        
                    </div>


                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar section-->

    <div class="hero_area">
        <div class="hero_bg_box">
            <div class="bg_img_box">
                <img src="images/hero-bg.png" alt="" />
            </div>
        </div>

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
                                                Sign Up
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
                                    Receive detailed weekly reports on your productivity, highlighting work patterns and
                                    areas for improvement.
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
                                    Set up personalized notifications to receive timely reminders for important tasks
                                    and deadlines.
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
            <div class="heading_container heading_center">
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
                            At our core, we are dedicated to creating a seamless experience for users to manage their
                            daily tasks and long-term projects.
                            Our platform is designed with flexibility in mind, allowing you to tailor your time
                            management strategies to fit your unique needs.
                            Whether you're a student balancing coursework, a professional juggling multiple projects, or
                            anyone striving to improve their productivity, our tools are here to support you every step
                            of the way.
                        </p>
                        <p>
                            Our commitment to excellence ensures that you have access to the latest and most effective
                            strategies for staying organized and productive.
                            Join our community of motivated individuals and take the first step towards transforming
                            your approach to time management.
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

    <section class="testimonials">
        <div class="container">
            <div class="heading_container heading_center psudo_white_primary mb_45">
                <h2>
                    What says our <span>Customers</span>
                </h2>
            </div>
            <div class="owl-carousel owl-theme testi">
                <!-- Single Starts -->
                <div class="item">
                    <div class="profile">
                        <img src="{{ asset('fronts/images/team-2.jpg') }}" alt="">
                        <div class="information">
                            <div class="stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"s></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Imane Chourouki</p>

                        </div>
                    </div>
                    <p>The weekly reports give me great insights into my productivity. I can see where I need to improve
                        and adjust my schedule accordingly.</p>
                    <div class="icon">
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </div>
                </div>
                <!-- Single Ends -->
                <div class="item">
                    <div class="profile">
                        <img src="{{ asset('fronts/images/team-3.jpg') }}" alt="">
                        <div class="information">
                            <div class="stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Abdurahmane Bah</p>

                        </div>
                    </div>
                    <p>This is the best tool I've found for staying on top of my work. It’s simple to use and has made a
                        big difference in how I manage my time.</p>
                    <div class="icon">
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="item">
                    <div class="profile">
                        <img src="{{ asset('fronts/images/client2.jpg') }}" alt="">
                        <div class="information">
                            <div class="stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Martha</p>

                        </div>
                    </div>
                    <p>This platform has completely transformed the way I manage my time. The intuitive tools and
                        detailed reports have made me much more productive.</p>
                    <div class="icon">
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
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
                    <div class="info_detail">
                        <h4>
                            Lock-In
                        </h4>
                        <p>
                            Lock-In helps you manage your time effectively and track your productivity. Join us to streamline your tasks and achieve your goals
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
                &copy; <span id="displayYear"></span> All Rights Reserved By Lock-In
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
