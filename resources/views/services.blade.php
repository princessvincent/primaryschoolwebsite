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

    <title>Services</title>

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

<body class="sub_page">
    <div class="top_container ">
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
    </div>
    <!-- end header section -->

    <div class="common_style">

        <!-- why section -->
        <section class="why_section">
            <div class="container">


                <div class="row">
                    <div class="col-md-6">
                        <div class="why_img-container">
                            <img src="images/why.png" alt="">
                        </div>
                        <hr>
                    </div>
                    <div class="col-md-4" style="text-align:left;">
                        <div class="why_detail-box">
                            <h3>
                                Our Services includes the following
                            </h3>
                           
                            <hr>
                            {{-- <div class="col-md-4"> --}}
                             <p>
                                We make your child happy day after day
                            </p>
                            <h2 class="mt-1"><strong>School Bus</strong></h2>
                            <p>
                                The school bus is the safest vehicle on the road—your child is much safer <br>
                                taking a bus to and from school than traveling by commercial vehicles. That’s <br>
                                because school buses are the most regulated vehicles on the road.
                            </p>

                            <h2><strong>GREAT FACILITIES</strong></h2>
                            <p>
                                We have a well-equipped range of facilities and resources for all pupils from <br>
                                Creche to Primary 6 to help them achieve a well-rounded education in a child- <br>
                                friendly atmosphere.
                            </p>

                            <h2><strong>FUN GAMES</strong></h2>
                            <p>
                                Encouraging physical activity, the school provides a safe and secure <br>
                                environment for fun filled activities for children. These fun games <br>
                                and activities are sure to lead to hours of fun and laughter
                            </p>

                            <h2><strong>ICT LAB</strong></h2>
                            <p>
                                Children are exposed to Information and Communication Technology <br>
                                from an early age. PowerPoint presentations and overhead projectors <br>
                                are used as teaching aids.
                            </p>
                        </div>
                        {{-- </div> --}}
                    </div>

                </div>
            </div>
        </section>


        <!-- end why section -->

    </div>


    <!-- info section -->
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
