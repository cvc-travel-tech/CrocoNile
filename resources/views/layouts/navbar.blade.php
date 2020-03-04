<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/travelz/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Dec 2019 10:11:54 GMT -->

<head>
    <title>Croconile</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description"
        content="Enjoy private tours in Egypt & visit the new Grand Egyptian Museum with Croconile starting from 899$, Egyptian pyramids & Nile Cruise in Luxor – Aswan, Cairo Citadel">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <!-- FAV ICON -->
    <link rel="shortcut icon" href="images/logo-04.png">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:400,500,700" rel="stylesheet">
    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="{{ asset ('croconile/css/font-awesome.min.css')}}
    
    
    
    
    
    ">
    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="{{ asset('croconile/css/materialize.css') }}">
    <link rel="stylesheet" href="{{ asset('croconile/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('croconile/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('croconile/css/mob.css') }}">
    <link rel="stylesheet" href="{{ asset('croconile/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('croconile/css/media.css') }}">

    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <img src="{{asset('croconile/images/mailbox-09.png')}}" alt="">
        <div id="status">&nbsp;</div>
    </div>

    <!-- MOBILE MENU -->
    <section>
        <div class="ed-mob-menu">
            <div class="ed-mob-menu-con">
                <div class="ed-mm-left">
                    <div class="wed-logo">
                                           

                        <a href="{{url('/')}}"> <img src="{{ asset('storage/tmp/uploads/'.\App\Images::find($setting['site[logo]'])->file_path) }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="ed-mm-right">
                    <div class="ed-mm-menu">
                        <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                        
                        <div class="ed-mm-inn">
                            <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                            <h4>Home </h4>
                            <ul>
                                <li><a href="{{url('/')}}" class="active">Home</a>
                                </li>
                                <li><a href="{{   url('about')}}">About us</a> </li>
                                <li><a href="{{url('family-package')}}">Packages</a> </li>
                               <li><a href="{{url('contact')}}">Contact Us</a> </li>
                                <li><a href="{{url('travel-free')}}">Travel for Free</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--HEADER SECTION-->
    <section>
        <div class="ed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ed-com-t1-left">
                            <ul>
                                <li><a href="#">11 Aladeeb Adham Ali , Sheraton, Cairo, Egypt</a>
                                </li>
                                <li><a href="#">USA/CANADA TOLL FREE: 1(866)822-2438</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-right">
                            <ul>
                                <li><a href="{{url('login')}}">Login</a>

                                </li>

                            </ul>
                        </div>
                        <div class="ed-com-t1-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                 <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i>
</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- LOGO AND MENU SECTION -->
        <div class="top-logo" data-spy="affix" data-offset-top="250">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wed-logo">
                            <a href="{{url('/')}}"> <img src="{{ asset('storage/tmp/uploads/'.\App\Images::find($setting['site[logo]'])->file_path) }}" alt="sandpad">
                            </a>
                        </div>
                        <div class="main-menu">
                            <ul>
                                <li><a href="{{url('/')}}" class="active">Home</a>
                                </li>
                                <li><a href="{{   url('about')}}">About us</a> </li>
                               <li><a href="{{url('family-package')}}">Packages</a> </li>
                                 <li><a href="{{url('contact')}}">Contact Us</a> </li>
                                
                                <li><a href="{{url('travel-free')}}">Travel for Free</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--END HEADER SECTION-->