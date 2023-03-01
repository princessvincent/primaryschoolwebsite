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

    <title>Contact us</title>


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

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (session('status'))
        <script>
            swal("{{ session('status') }}");
        </script>
    @endif

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
                                    <input type="text" placeholder="Name">
                                </div>
                                <div>
                                    <input type="email" placeholder="Email">
                                </div>
                                <div>
                                    <input type="text" placeholder="Phone Number">
                                </div>
                                <div class="mt-5">
                                    <input type="text" placeholder="Message">
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
