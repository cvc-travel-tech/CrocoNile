<!DOCTYPE html>
<html lang="en" class="">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="EE5rATYx5t2ANAMJBt1T04D2IRTIl2xEFIqwBLE6">
    <link rel="icon" type="image/png" href="images/Najaf Logo (1).png" />

    <meta name="google-site-verification" content="cXQuYnA8XdF73KGgCE2FnWcYKDIMB-Cgny1cP6M-QCw" />

    <title>{{ $hot['name'] }}</title>


    <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/libs/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/libs/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/libs/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/season.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/libs/daterange/daterangepicker.css') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel='stylesheet' id='google-font-css-css'
        href='https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600&display=swap' type='text/css'
        media='all' />
   
    <!-- Styles -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154435778-1"></script>
 

    <link href="{{ asset('frontend/module/tour/css/tour.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/libs/ion_rangeslider/css/ion.rangeSlider.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/libs/fotorama/fotorama.css') }}" />

    <style id="custom-css">
        body {
            /* font-family: ;
            color: ;
            font-size: ;
            line-height: ;
            font-weight: ; */
        }
        .bravo_topbar .topbar-left .slogin {
    display: inline-block;
    display: inline-block;
    font-weight: bolder;
   
    font-size: 13px;
}
.fotorama__wrap--css3 .fotorama__html, .fotorama__wrap--css3 .fotorama__stage .fotorama__img{
        width: 1000px !important;
            /*height: 600.876px !important;*/
             height: 687px !important;
           
           
}
.fotorama__nav fotorama__nav--thumbs{
    margin-top: -100px !important;
}

    </style>
    <link href="{{ asset('frontend/libs/carousel-2/owl.carousel.css') }}" rel="stylesheet">

</head>

<body class="">
    <div class="bravo_wrap">

        @include('Frontend.nav')

        <div class="bravo_detail_tour">
            <div class="bravo_content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="g-header">
                                <div class="left">
                                    <h2> {{ $hot['name'] }} </h2>
                                </div>





                            </div>
                            <div class="g-tour-feature">


                                <div class="row">
                                    <div class="col-xs-6 col-lg-3 col-md-6">
                                        <div class="item">
                                            <div class="icon">
                                                <i class="icofont-island-alt"></i>
                                            </div>
                                            <div class="info">
                                                <h4 class="name">Location</h4>
                                                <p class="value">
                                                    Egypt
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="g-overview">
                                <h3>Overview</h3>
                                <div class="description">
                                    <!DOCTYPE html>
                                    <html>

                                    <head>
                                    </head>

                                    <body>
                                        <p class="MsoNormal"
                                            style="text-align: left; direction: ltr; unicode-bidi: embed;">
                                            {!!  $hot['overview']   !!}
                                        </p>
                                    </body>

                                    </html>
                                </div>
                            </div>
                            
                            
                            <div class="g-gallery">
                                <div class="fotorama" data-width="100%" data-thumbwidth="135" data-thumbheight="135"
                                    data-thumbmargin="15" data-nav="thumbs" data-allowfullscreen="true">
@foreach($hot->images as $im)
<a href="#"><img  src="{{ asset('storage/tmp/uploads/'.\App\Images::find($im)->file_path) }}"></a>                   
@endforeach

                                </div>
                            </div>



                           



                        </div>
                    </div>

                </div>
            </div>
            <div class="bravo-more-book-mobile">
                <div class="container">
                    <div class="left">
                        <div class="g-price">
                            <div class="prefix">
                                <span class="fr_text">from</span>
                            </div>
                            <div class="price">
                                <span class="onsale"></span>
                                <span class="text-price"></span>
                            </div>
                        </div>

                    </div>
                    <div class="right">
                        <a class="btn btn-primary bravo-button-book-mobile">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        
 @include('Frontend.footer')
       




        





        <script src="{{ asset('frontend/libs/lazy-load/intersection-observer.js') }}"></script>
        <script async src="{{ asset('frontend/libs/lazy-load/lazyload.min.js') }}"></script>
        <script>
            // Set the options to make LazyLoad self-initialize
            window.lazyLoadOptions = {
                elements_selector: ".lazy",
                // ... more custom settings?
            };

            // Listen to the initialization event and get the instance of LazyLoad
            window.addEventListener('LazyLoad::Initialized', function (event) {
                window.lazyLoadInstance = event.detail.instance;
            }, false);


        </script>
        <script src="{{ asset('frontend/libs/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('frontend/libs/vue/vue.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('frontend/module/media/js/browser.js') }}"></script>
        <script src="{{ asset('frontend/libs/carousel-2/owl.carousel.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/libs/daterange/moment.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/libs/daterange/daterangepicker.min.js') }}"></script>
        <script src="{{ asset('frontend/js/functions.js') }}"></script>
        <script src="{{ asset('frontend/js/home.js') }}"></script>
        <script src="{{ asset('frontend/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <script src='https://maps.googleapis.com/maps/api/js?key='></script>
        <script src="{{ asset('frontend/libs/infobox.js') }}"></script>
        <script src='module/core/js/map-engine.js'></script>


        <script type="text/javascript" src="{{ asset('frontend/libs/ion_rangeslider/js/ion.rangeSlider.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/libs/fotorama/fotorama.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/libs/sticky/jquery.sticky.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/module/tour/js/single-tour.js') }}"></script>
    </div>
</body>

</html>