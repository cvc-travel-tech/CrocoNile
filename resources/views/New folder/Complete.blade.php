<!DOCTYPE html>
<html lang="en" class="">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <link rel="icon" type="image/png" href="images/Najaf Logo (1).png" style="width: 166px;"/>

    <title>Cadence Vacations</title>

    <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/libs/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/libs/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/libs/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/app.css') }}" rel="stylesheet">
   <link href="{{ asset('frontend/css/jquery-ui.min.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel='stylesheet' id='google-font-css-css'
          href='https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600&display=swap' type='text/css'
          media='all'/>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

 
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154435778-1"></script>
     
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-154435778-1');
       
    </script>
       <script src="{{ asset('frontend/js/jquery-latest.min.js') }}"></script>

        <script src="{{ asset('frontend/js/jquery-ui.js') }}"></script>
    <link href="{{ asset('frontend/module/tour/css/tour.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('frontend/libs/ion_rangeslider/css/ion.rangeSlider.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/libs/fotorama/fotorama.css') }}"/>


    <style id="custom-css">
        body {
            font-family: ;
            color: ;
            font-size: ;
            line-height: ;
            font-weight: ;
        }

        a,
        .bravo-news .btn-readmore,
        .bravo_wrap .bravo_header .content .header-left .bravo-menu ul li:hover > a,
        .bravo_wrap .bravo_search_tour .bravo_form_search .bravo_form .field-icon,
        .bravo_wrap .bravo_search_tour .bravo_form_search .bravo_form .render,
        .bravo_wrap .bravo_search_tour .bravo_form_search .bravo_form .field-detination #dropdown-destination .form-control,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .btn-apply-price-range,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .btn-more-item,
        .input-number-group i,
        .bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .field-icon,
        .bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .field-detination #dropdown-destination .form-control,
        .bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .render {
            color: #5191fa
        }

        .bravo-pagination ul li.active a,
        .bravo-pagination ul li.active span {
            color: #5191fa !important;
        }

        .bravo-news .widget_category ul li span,
        .bravo_wrap .bravo_search_tour .bravo_form_search .bravo_form .g-button-submit button,
        .bravo_wrap .bravo_search_tour .bravo_filter .filter-title:before,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-bar,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-from,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-to,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-single,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-handle > i:first-child,
        .bravo-news .header .cate ul li,
        .bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .g-button-submit button,
        .bravo_wrap .page-template-content .bravo-list-locations .list-item .destination-item .image .content .desc {
            background: #5191fa;
        }

        .bravo-pagination ul li.active a,
        .bravo-pagination ul li.active span {
            border-color: #5191fa !important;
        }

        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-from:before,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-to:before,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-single:before,
        .bravo-reviews .review-form .form-wrapper,
        .bravo_wrap .bravo_detail_tour .bravo_content .bravo_tour_book {
            border-top-color: #5191fa;
        }

        .bravo_wrap .bravo_footer .main-footer .nav-footer .context .contact {
            border-left-color: #5191fa;
        }

        .bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .field-detination {
            padding: 0 0 10px 0;
        }

        .bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .form-date-search {
            padding: 0 0 10px 0;
        }

        .bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .g-button-submit {
            min-height: 62px;
        }

        .bravo_wrap .page-template-content .bravo-form-search-tour {
            padding: 230px 0 !important;
        }

        .bravo_wrap .bravo_header .content .header-left {
            width: 100% !important;
        }

        .bravo_wrap .bravo_header .content .header-right {
            width: 0% !important;
        }

        a.bravo-logo img {
            width: 80px !important;
        }

        .bravo_wrap .bravo_topbar {
            height: auto !important;
        }

        .btn.btn-primary {
            background: #5191fa;
        }

        .bravo_wrap .bravo_detail_tour .bravo_content .bravo_tour_book {
            border-top: 5px solid #f18411;
        }

        nav.tour_detailes > div a.nav-item.nav-link.active:after {
            border-top-color: #5191fa;
        }

        .tab-content-tour {
            background: #fdfdfd;
            line-height: 25px;
            border: 1px solid #ddd;
            border-top: 5px solid #1a2b48;
            border-bottom: 5px solid #1a2b48;
            padding: 30px 25px !important;
        }

        nav.tour_detailes > div a.nav-item.nav-link:hover,
        nav.tour_detailes > div a.nav-item.nav-link:focus {
            border: none;
            background: #f7f7f7;
            color: #00010c;
            border-radius: 0;
        }

        a.bravo-logo img {
            width: 124px !important;
        }
        
        
            /* = DATE PICKER 
/*-------------------------------------------------*/

        .ui-state-disabled {
            cursor: default !important;
            pointer-events: none;
        }

        .ui-datepicker-prev {
            background: url('../images/left-arrow.png') no-repeat center center;
            background-size: 12px;
        }

        .ui-datepicker-next {
            background: url('../images/right-arrow.png') no-repeat center center;
            background-size: 12px;
        }


        /* Icons ----------------------------------*/

        .ui-icon {
            display: inline-block;
            vertical-align: middle;
            margin-top: -.25em;
            position: relative;
            text-indent: -99999px;
            overflow: hidden;
            background-repeat: no-repeat;
        }

        .ui-widget-icon-block {
            left: 50%;
            margin-left: -8px;
            display: block;
        }


        /* Misc visuals ----------------------------------*/

        .ui-datepicker {
            padding: .2em .2em 0;
            display: none;
        }

        .ui-datepicker .ui-datepicker-header {
            position: relative;
            padding: .2em 0;
        }

        .ui-datepicker .ui-datepicker-prev,
        .ui-datepicker .ui-datepicker-next {
            position: absolute;
            top: -4px;
            width: 1.8em;
            height: 1.8em;
        }

        .ui-datepicker .ui-datepicker-prev-hover,
        .ui-datepicker .ui-datepicker-next-hover {
            top: 1px;
        }

        .ui-datepicker .ui-datepicker-prev {
            left: 2px;

        }

        .ui-datepicker .ui-datepicker-next {
            right: 2px;
        }

        .ui-datepicker .ui-datepicker-prev-hover {
            left: 1px;
        }

        .ui-state-hover {
            background-color: #002e63;
        }

        .ui-datepicker .ui-datepicker-next-hover {
            right: 1px;
        }

        .ui-datepicker .ui-datepicker-prev span,
        .ui-datepicker .ui-datepicker-next span {
            display: block;
            position: absolute;
            left: 50%;
            margin-left: -8px;
            top: 50%;
            margin-top: -8px;

        }

        .ui-datepicker .ui-datepicker-title {
            margin: 0 2.3em;
            line-height: 1.8em;
            text-align: center;
        }

        .ui-datepicker .ui-datepicker-title select {
            font-size: 1em;
            margin: 1px 0;
        }

        .ui-datepicker select.ui-datepicker-month,
        .ui-datepicker select.ui-datepicker-year {
            width: 45%;
        }

        .ui-datepicker table {
            width: 100%;
            font-size: .9em;
            border-collapse: collapse;
            margin: 0 0 .4em;
        }

        .ui-datepicker th {
            padding: .7em .3em;
            text-align: center;
            font-weight: 500;
            color: #aaaaaa;
            border: 0;
        }

        .ui-datepicker td {
            border: 0;
            padding: 1px;
        }

        .ui-datepicker td span,
        .ui-datepicker td a {
            display: block;
            padding: 1px;
            text-align: center;
            text-decoration: none;
            width: 35px;
            height: 40px;

        }

        .ui-datepicker .ui-datepicker-buttonpane {
            background-image: none;
            margin: .7em 0 0 0;
            padding: 0 .2em;
            border-left: 0;
            border-right: 0;
            border-bottom: 0;
        }

        .ui-datepicker .ui-datepicker-buttonpane button {
            float: right;
            margin: .5em .2em .4em;
            cursor: pointer;
            padding: .2em .6em .3em .6em;
            width: auto;
            overflow: visible;
        }

        .ui-datepicker .ui-datepicker-buttonpane button.ui-datepicker-current {
            float: left;
        }


        /* with multiple calendars */

        .ui-datepicker.ui-datepicker-multi {
            width: auto;
        }

        .ui-datepicker-multi .ui-datepicker-group {
            float: left;
        }

        .ui-datepicker-multi .ui-datepicker-group table {
            width: 95%;
            margin: 0 auto .4em;
        }

        .ui-datepicker-multi-2 .ui-datepicker-group {
            width: 50%;
        }

        .ui-datepicker-multi-3 .ui-datepicker-group {
            width: 33.3%;
        }

        .ui-datepicker-multi-4 .ui-datepicker-group {
            width: 25%;
        }

        .ui-datepicker-multi .ui-datepicker-group-last .ui-datepicker-header,
        .ui-datepicker-multi .ui-datepicker-group-middle .ui-datepicker-header {
            border-left-width: 0;
        }

        .ui-datepicker-multi .ui-datepicker-buttonpane {
            clear: left;
        }

        .ui-datepicker-row-break {
            clear: both;
            width: 100%;
            font-size: 0;
        }


        /* RTL support */

        .ui-datepicker-rtl {
            direction: rtl;
        }

        .ui-datepicker-rtl .ui-datepicker-prev {
            right: 2px;
            left: auto;
        }

        .ui-datepicker-rtl .ui-datepicker-next {
            left: 2px;
            right: auto;
        }

        .ui-datepicker-rtl .ui-datepicker-prev:hover {
            right: 1px;
            left: auto;
        }

        .ui-datepicker-rtl .ui-datepicker-next:hover {
            left: 1px;
            right: auto;
        }

        .ui-datepicker-rtl .ui-datepicker-buttonpane {
            clear: right;
        }

        .ui-datepicker-rtl .ui-datepicker-buttonpane button {
            float: left;
        }

        .ui-datepicker-rtl .ui-datepicker-buttonpane button.ui-datepicker-current,
        .ui-datepicker-rtl .ui-datepicker-group {
            float: right;
        }

        .ui-datepicker-rtl .ui-datepicker-group-last .ui-datepicker-header,
        .ui-datepicker-rtl .ui-datepicker-group-middle .ui-datepicker-header {
            border-right-width: 0;
            border-left-width: 1px;
        }


        /* Icons */

        .ui-datepicker .ui-icon {
            display: block;
            text-indent: -99999px;
            overflow: hidden;
            background-repeat: no-repeat;
            left: .5em;
            top: .3em;
        }


        /* Component containers ----------------------------------*/

        .ui-widget {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1em;
        }

        .ui-widget .ui-widget {
            font-size: 1em;
        }

        .ui-widget input,
        .ui-widget select,
        .ui-widget textarea,
        .ui-widget button {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1em;
        }

        .ui-widget.ui-widget-content {
            border: 0px solid #c5c5c5;
            box-shadow: 0px 0px 54px rgba(0, 0, 0, 0.31);
            padding: 20px;
            width:300px;
        }

        .ui-widget-content {
            border: 1px solid #dddddd;
            background: #ffffff;
            color: #333333;
        }

        .ui-widget-content a {
            color: #333333;
        }

        .ui-widget-header {
            /* border: 1px solid #dddddd;
     */
            /* background: #e9e9e9;
     */
            color: #333333;
            font-weight: bold;
        }

        .ui-widget-header a {
            color: #333333;
        }


        /* Interaction states ----------------------------------*/

        .ui-state-default,
        .ui-widget-content .ui-state-default,
        .ui-widget-header .ui-state-default,
        .ui-button,

        /* We use html here because we need a greater specificity to make sure disabled works properly when clicked or hovered */

        html .ui-button.ui-state-disabled:hover,
        html .ui-button.ui-state-disabled:active {
            border: 0px solid #b4b4b4;
            background: #f6f6f6;
            font-weight: normal;
            color: #4f4f4f;
        }

        .ui-state-default a,
        .ui-state-default a:link,
        .ui-state-default a:visited,
        a.ui-button,
        a:link.ui-button,
        a:visited.ui-button,
        .ui-button {
            color: #454545;
            text-decoration: none;
        }

        .ui-state-hover,
        .ui-widget-content .ui-state-hover,
        .ui-widget-header .ui-state-hover,
        .ui-state-focus,
        .ui-widget-content .ui-state-focus,
        .ui-widget-header .ui-state-focus,
        .ui-button:hover,
        .ui-button:focus {
            font-weight: normal;
            border: 0px solid #002e63;
            background: #002e63;
            color: #ffffff;
            border-radius: 27px;
        }

        .ui-state-hover a,
        .ui-state-hover a:hover,
        .ui-state-hover a:link,
        .ui-state-hover a:visited,
        .ui-state-focus a,
        .ui-state-focus a:hover,
        .ui-state-focus a:link,
        .ui-state-focus a:visited,
        a.ui-button:hover,
        a.ui-button:focus {
            color: #2b2b2b;
            text-decoration: none;
        }

        .ui-visual-focus {
            box-shadow: 0 0 3px 1px rgb(94, 158, 214);
        }

        .ui-state-active,
        .ui-widget-content .ui-state-active,
        .ui-widget-header .ui-state-active,
        a.ui-button:active,
        .ui-button:active,
        .ui-button.ui-state-active:hover {
            font-weight: normal;
            border: 0px solid #dad55e;
            background: #1692c0;
            color: #ffffff;
            border-radius: 27px;
        }

        .ui-icon-background,
        .ui-state-active .ui-icon-background {
            border: #003eff;
            background-color: #ffffff;
        }

        .ui-state-active a,
        .ui-state-active a:link,
        .ui-state-active a:visited {
            color: #ffffff;
            text-decoration: none;
        }


        /* Icons ----------------------------------*/


        /* states and images */

        .ui-icon {
            width: 16px;
            height: 16px;
        }

        .ui-state-disabled span {
            color: #aaaaaa !important;
        }


        /*-------------------------------------------------*/
    </style>
    

    <link href="{{ asset('frontend/libs/carousel-2/owl.carousel.css') }}" rel="stylesheet">

</head>

<body class="">

<div class="bravo_wrap">

    <style>
        .bravo_wrap .bravo_header {
            background: #1a2b48;
            height: 34px;
        }

        .bravo_wrap .bravo_topbar {
            padding: 15px 0;
            color: #333;
            padding-left: 10px;
        }

        .bravo_wrap .bravo_topbar .content .topbar-right {
            font-size: 12px;
            margin-left: 10px;
            padding: 20px;
        }

        .bravo_wrap .bravo_header .content .header-left .bravo-menu {
            padding-left: 90px;
            /* color: #fff; */
        }

        .bravo_wrap .bravo_header .content {
            background: #1a2b48;
            display: flex;
            align-items: center;
            height: 32px;
            font-size: 12px;
            font-weight: 300;
            text-align: center;
            margin-left: 222px;
            color: #fff;
        }

        .bravo_wrap .bravo_topbar {
            background-color: #fff;
        }

        .bravo_wrap .bravo_topbar {
            padding: 15px 0;
            color: #333;
            padding-left: 10px;
            /* margin-left: 10px; */
            height: 78px;
        }

        .bravo_wrap .bravo_topbar .content .socials {
            display: inline-block;
            /* border-right: 1px solid #374969; */
        }

        .bravo_wrap .bravo_topbar .content .topbar-items li a {
            color: #666;
            font-weight: 400;
            font-size: 12px;
            text-decoration: none;
        }

        .bravo_wrap .bravo_header .content .header-left .bravo-menu ul li a {
            padding: 35px 13px;
            display: inline-block;
            font-size: 12px;
            font-weight: 200;
            text-transform: uppercase;
            color: #fff;
            transition: all .3s;
        }

        .bravo_wrap .bravo_topbar .content .topbar-right {
            font-size: 12px;
            padding: 10px;
        }

        .bravo_wrap .bravo_header .content .header-left .bravo-menu ul li > .menu-dropdown li a {
            padding: 15px 0;
            display: block;
            font-size: 14px;
            color: #888;
        }

        .bravo_topbar .topbar-left .slogin {
            display: inline-block;
            color: #d1d4da;
            font-size: 13px;
                font-weight: bolder;
            
        }

        .bravo_wrap .bravo_footer .mailchimp .subcribe-form .btn-submit {
            background: #f18411;
        }
    </style>
   



     @include('Frontend.nav')

    <div class="bravo_detail_tour">

        <div class="bravo_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-9">
                        <div class="g-header">
                            <div class="left">
                                <h2>{{$package->name}}</h2>
                            </div>


                            <div class="right">
                      
                            </div>


                        </div>
                        <!-- <div class="g-tour-feature">


                            <div class="row">
                            </div>
                        </div> -->
                        <div class="g-gallery">
                            <div class="fotorama" data-width="100%" data-thumbwidth="135" data-thumbheight="135"
                                 data-thumbmargin="15" data-nav="thumbs" data-allowfullscreen="true">
                                @foreach($package['package_images'] as $key => $value)
                                    <a href="">
                                        <img src="{{asset('storage/tmp/uploads/large').'/'.$value->file_path}}">
                                    </a>
                                @endforeach
                            </div>
                        </div>





 @if(\Session::has('success'))
        <script>
        toastr.success("{{ Session::get('success') }}");
        toastr.options.closeDuration = 500;
        toastr.options.closeEasing = 'swing';
        </script>
    @endif
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 ">
                                    <nav class="tour_detailes">
                                        <div class="nav nav-tabs nav-fill " id="nav-tab" role="tablist">


                                            <a class="nav-item nav-link active" id="nav-overview-tab" data-toggle="tab"
                                               href="#nav-overview" role="tab" aria-controls="nav-overview"
                                               aria-selected="true" padding-left: 21px;>Overview</a>



                                            <a class="nav-item nav-link" id="nav-Itinerary-tab" data-toggle="tab"
                                               href="#nav-Itinerary" role="tab" aria-controls="nav-Itinerary"
                                               aria-selected="true">Itinerary</a>


                                         

                                               
                                            <a class="nav-item nav-link" id="nav-package_includes-tab" data-toggle="tab"
                                               href="#nav-package_includes" role="tab"
                                               aria-controls="nav-package_includes" aria-selected="true">Package
                                               Inclusion</a>


                                 
                                        </div>

                                    </nav>
                                    <div class="tab-content-tour py-3 px-3 px-sm-0" id="nav-tabContent">



                                        <div class="tab-pane fade show active" id="nav-overview" role="tabpanel"
                                             aria-labelledby="nav-overview-tab">
                                            <!DOCTYPE html>
                                            <html>

                                            <head>
                                            </head>

                                            <body>
                                            {!! $package->overview !!}
                                            </body>

                                            </html>
                                        </div>



                                        <div class="tab-pane fade" id="nav-Itinerary" role="tabpanel"
                                             aria-labelledby="nav-Itinerary-tab">
                                            {!! $package->itinerary !!}

                                        </div>
                                            <div class="tab-pane fade" id="nav-Itinerary" role="tabpanel"
                                             aria-labelledby="nav-Itinerary-tab">
                                            {!! $package->itinerary !!}

                                        </div>

                                        <div class="tab-pane fade" id="nav-package_includes" role="tabpanel"
                                             aria-labelledby="nav-package_includes-tab">
                                            <!DOCTYPE html>
                                            {!! $package->inclusion !!}

                                        </div>


                                  

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>


                



<div class="col-lg-3  new  bravo_tour_book_wrap"  style="
    margin-top: 57px;
    text-align: center;
    background-color: #fff;
    height: 250px;
        border-top: 5px solid #5191fa;
            box-shadow: 5px 10px 9px #aaaaaa;

">
<div>
<p class="price"  style="
    font-size: 20px;
    margin-top: 20px;
"></p>
<label style="font-size: 20px; font-weight: 500;">
@if(auth()->user() == true)
From $ 
{{ $package_price['p_p'] }}
@endif
</label>
<hr>
</div>


<form method="GET" action="{{  route('booking', $package->id ) }}" >

 <input name="dbook" type="text" id="datepicker" placeholder="Choose your Date" style="width: 208px;padding: 5px;    margin-top: 10px;
">


<input class="btn btn-large  btn-primary" type="submit" value="BOOK NOW"  style="margin-top: 22px;">
</form>
    

</div>
 <script>
         $("#datepicker").datepicker({
                autoSize: true,         // automatically resize the input field 
    dateFormat: 'yy-mm-dd',
                firstDay: 1, // Start with Monday
                beforeShowDay: function (date) {
                    return [date.getDay() == '{{ $package->ave_days}}', ''];
                }
            });
             $(document).ready(function(){

    $("#datepicker").datepicker({ numberOfMonths:[2,3] });

})
    </script>
   
    <!--  <script>-->

    <!--    $(document).ready(function () {-->

    <!--        $("#datepicker").datepicker({-->
                <!--autoSize: true,         // automatically resize the input field -->
                <!--altFormat: 'yy-mm-dd',  // Date Format used-->
                <!--firstDay: 1, // Start with Monday-->
    <!--            beforeShowDay: function (date) {-->
    <!--                return [date.getDay() === 0, ''];-->
    <!--            }-->
    <!--        });-->
    <!--    });-->
    <!--</script>-->




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
        
          
<script src="{{ asset('frontend/js/jquery-3.4.1.min.js') }}"></script>
         <script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('frontend/libs/jquery-3.3.1.min.js') }}">
        </script>
        <script src="{{ asset('frontend/libs/vue/vue.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('frontend/module/media/js/browser.js') }}"></script>
        <script src="{{ asset('frontend/libs/carousel-2/owl.carousel.min.js') }}"></script>
        <script type="{{ asset('frontend/text/javascript" src="libs/daterange/moment.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/libs/daterange/daterangepicker.min.js') }}"></script>
        <script src="{{ asset('frontend/js/functions.js') }}"></script>
        <script src="{{ asset('frontend/js/home.js') }}"></script>
         
        <script src="{{ asset('frontend/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <script src='https://maps.googleapis.com/maps/api/js?key='></script>
        <script src="{{ asset('frontend/llibs/infobox.js') }}"></script>
        <script src="{{ asset('frontend/module/core/js/map-engine.js') }}"></script>
       
        <script type="text/javascript"
                src="{{ asset('frontend/libs/ion_rangeslider/js/ion.rangeSlider.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/libs/fotorama/fotorama.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/libs/sticky/jquery.sticky.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/module/tour/js/single-tour.js') }}"></script>
       
        
        
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
   
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        
    </div>
    
       
</body>

</html>
