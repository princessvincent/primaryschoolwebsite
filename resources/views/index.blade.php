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

    <title>Welcome</title>



    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!-- progress barstle -->
    <link rel="stylesheet" href="css/css-circular-prog-bar.css">
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,600&display=swap" rel="stylesheet">
    <!-- font wesome stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />




    <link rel="stylesheet" href="css/css-circular-prog-bar.css">


</head>

<body>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (session('status'))
        <script>
            swal("{{ session('status') }}");
        </script>
    @endif
    <div class="top_container">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                        <span>
                            Banner of Grace
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  ">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ url('/') }}"> Home <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ url('about') }}"> About </a>
                                </li>

                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ url('admission') }}"> Admission </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('service') }}"> Our Services </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('contact') }}">Contact Us</a>
                                </li>

                            </ul>
                        </div>
                </nav>
            </div>
        </header>
        <section class="hero_section ">
            <div class="hero-container container">
                <div class="hero_detail-box">
                    <h4>
                        Welcome to Banner of Grace Primary school
                    </h4>
                    <p>
                        We offer both Nigerian and British Curriculum. Banner of Grace Primary School is a registered
                        <br>
                        British Council attached center for University of Cambridge International <br>
                        Examinations: for Checkpoint, IGCSE, GCE, O/A Levels. The school is also certified <br>
                        by the United States College Board for SAT and PSAT.
                    </p>
                    {{-- <div class="hero_btn-continer">
                        <a href="" class="call_to-btn btn_white-border">
                            Read More
                        </a>
                    </div> --}}
                </div>
                <div class="hero_img-container">
                    <div>
                        <img src="images/hero.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end header section -->

    <div class="common_style">

        <!-- about section -->
        <section class="about_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about_img-container">
                            <img src="images/about.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about_detail-box">
                            <h3>
                                Discover our School
                            </h3>
                            <p>
                                Banner of Grace Primary School was set up with an overall objective
                                to provide holistic education for the development of the whole child ,
                                {{-- academically, intellectually, physically, spiritually, socially and emotionally --}}
                            </p>
                            <div class="">
                                <a href="{{ url('about') }}" class="call_to-btn btn_white-border">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- end about section -->

        <!-- admission section -->
        <section class="admission_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="admission_detail-box">
                            <h1>
                                Admission
                            </h1>
                            <p>
                                Dear All, <br><br>

                                The Board of Management is the admitting authority.
                            </p>
                            <ul>
                                <li>Admission shall be strictly on merit and any other criteria laid down by the Board
                                    of Management.</li>
                                <li>An application fee of N10,000 (a bank draft made payable to: St Saviour’s School
                                    Ebute Metta).</li>
                                <li>A print out of the application form.</li>
                                <li>A copy of the birth certificate.</li>
                                <li>One passport photograph,</li>

                            </ul>
                            <div class="">
                                <a href="{{ url('admission') }}" class="call_to-btn btn_white-border">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="admission_img-container">
                            <img src="images/admission.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- end admission section -->

        <!-- why section -->
        <section class="why_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="why_img-container">
                            <img src="images/why.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="why_detail-box">
                            <h3 style="text-align:left;">
                                Our Services includes the following
                            </h3>
                            <ul style="text-align:left;">
                                <li>School Bus</li>
                                <li>Greate Facilities e.t.c</li>
                            </ul>
                            <div class="">
                                <a href="{{ url('service') }}" class="call_to-btn btn_white-border">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- end why section -->

    </div>


    <!-- client section -->
    <section class="client_section layout_padding">
        <h2 class="">
            Testimonial
        </h2>
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="client_img-box">
                                    <img src="images/client.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="client_detail-box">
                                    <h5>
                                        Alex Du
                                    </h5>
                                    <p>
                                        Before we found Banner of Grace, I had many restless nights wondering if i <br>
                                        would ever find a good school for my child. Your faculty and good facility
                                        played a big <br>
                                        role in his life and he has improved so much in his academics
                                    </p>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="client_img-box">
                                    <img src="images/client.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="client_detail-box">
                                    <h5>
                                        Samuel Smith
                                    </h5>
                                    <p>
                                        Banner of Grace, provide me with opportunities that drastically improved <br>
                                        life and gave me the skill to be happy with where i am now
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="client_img-box">
                                <img src="images/client.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="client_detail-box">
                                <h5>
                                    Daniel
                                </h5>
                                <p>
                                    Every teacher at Cambridge has been a positive influence for Sophia . As you know
                                    the play <br>
                                    has been such an important part of Sophia’s life, and we couldn’t have hand picked a
                                    better <br>
                                    director than Cari. Her kindness, patiences and talent are above and beyond! Her
                                    experiences <br>
                                    with Cari have driven her to pursue her love for acting in high school.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>


    <!-- end client section -->


    <!-- contact section -->

    <section class="contact_section ">

        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex justify-content-center d-md-block">
                        <h2>
                            Contact Us
                        </h2>
                    </div>
                    <form action="{{ route('send') }}" method="post">
                        @csrf
                        <div class="contact_form-container">
                            <div>
                                <div>
                                    <input type="text" placeholder="Name" name="name" required>
                                </div>
                                <div>
                                    <input type="email" placeholder="Email" name="email" required>
                                </div>
                                <div>
                                    <input type="text" placeholder="Subject" name="subject" required>
                                </div>
                                <div class="mt-5">
                                    <input type="text" placeholder="Message" name="message" required>
                                </div>
                                <div class="mt-5">
                                    <button type="submit">
                                        send
                                    </button>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>
                <div class="col-md-6">
                    <div class="contact_img-box">
                        <img src="images/students.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->
    <section class="info_section layout_padding-top">
        <div class="info_logo-box">
            <h2>
                Banner of Grace Primary school
            </h2>
        </div>
        <div class="container layout_padding2">
            <div class="row">
                <div class="col-md-3">
                    <h5>
                        About Us
                    </h5>
                    <p>
                    We ofer your children the best education and experience
                    </p>
                </div>
                <div class="col-md-3">
                    <h5>
                        Contact Us
                    </h5>
                    <p>
                       You can easily reach out to us via the following method
                    </p>
                    <ul>
                    <li>Email: bannerofgrace@gmail.com</li>
                    <li>Phone: 08121326225</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="social_container">

                <div class="social-box">
                    <a href="">
                        <img src="images/fb.png" alt="">
                    </a>

                    <a href="">
                        <img src="images/twitter.png" alt="">
                    </a>
                    <a href="">
                        <img src="images/linkedin.png" alt="">
                    </a>
                    <a href="">
                        <img src="images/instagram.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section -->
    <section class="container-fluid footer_section">
        <p>
            Copyright &copy; 2019 All Rights Reserved By PriscaTeam
        </p>
    </section>
    <!-- footer section -->

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>


</body>

</html>
