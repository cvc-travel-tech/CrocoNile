<!DOCTYPE html>
<html lang="en" class="">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="w1XuYo8pQUNLhOdXlMegxKHODEb1l5wpFpKRtE2v">
    <link rel="icon" type="image/png" href="images/Najaf Logo (1).png"/>

    <meta name="google-site-verification" content="cXQuYnA8XdF73KGgCE2FnWcYKDIMB-Cgny1cP6M-QCw"/>

    <title>Checkout </title>
    <meta name="description" content=""/>
    <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/libs/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/libs/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/libs/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/libs/daterange/daterangepicker.css') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel='stylesheet' id='google-font-css-css'
          href='https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600&display=swap' type='text/css'
          media='all'/>
   

 

    <link href="{{ asset('frontend/module/booking/css/checkout.css') }}" rel="stylesheet">

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
            width: 166px !important;
        }

        .bravo_wrap .bravo_topbar {
            height: auto !important;
        }
        input[type=checkbox]
{
  -webkit-appearance:checkbox;
}
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
            font-weight: bolder;
            color: #d1d4da;
            font-size: 13px;
        }

        .label-acc {
            margin-left: 25px !important;
        }

        .rooms-select {
            margin-bottom: 15px;
        }

        .booking-review-content {
            position: fixed;
            z-index: 999;
            text-align: center;
            background-color: #fff;
            border-top: 5px solid #5191fa !important;
            border-bottom: 5px solid #5191fa !important;
            box-shadow: 5px 10px 9px #aaaaaa !important;
        }
    </style>
    @include('Frontend.nav')

    <div style="display: none" class="clone_div">
        <div class="row">
            <div class="col-md-6 field-country">
                <div class="form-group">
                    <label> Title </label>
                    <select name="gender[]" class="form-control" required>
                        <option value="">-- Select --</option>
                        <option value="Mr">Mr</option>
                        <option value="Mrs">Mrs</option>
                    </select>
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label>First Name <span class="required">*</span></label>
                    <input type="text" placeholder="First Name"
                           class="form-control" required
                           value="" name="first_name[]">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Last Name <span class="required">*</span></label>
                    <input type="text" placeholder="Last Name"
                           class="form-control" required
                           value=""
                           name="last_name[]">
                </div>
            </div>




            <div class="col-md-6">
                <div class="form-group">
                    <label> CellPhone <span class="required">*</span></label>
                    <input type="text" placeholder="Your Phone"
                           class="form-control" required
                           value="" name="phone[]">
                </div>
            </div>

   

            <div class="col-md-6 field-city">
                <div class="form-group">
                    <label>Natinality </label>



            <select name="nationality[]" class="form-control" required>
                                                        <option value="">-- Select --</option>
                                                        <option value="Afghanistan">Afghanistan</option>
                                                        <option value="Aland Islands">Aland Islands</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algeria">Algeria</option>
                                                        <option value="American Samoa">American Samoa</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Anguilla">Anguilla</option>
                                                        <option value="Antarctica">Antarctica</option>
                                                        <option value="Antigua And Barbuda">Antigua And Barbuda</option>
                                                        <option value="Argentina">Argentina</option>
                                                        <option value="Armenia">Armenia</option>
                                                        <option value="Aruba">Aruba</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Austria">Austria</option>
                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                        <option value="Bahamas">Bahamas</option>
                                                        <option value="Bahrain">Bahrain</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Barbados">Barbados</option>
                                                        <option value="Belarus">Belarus</option>
                                                        <option value="Belgium">Belgium</option>
                                                        <option value="Belize">Belize</option>
                                                        <option value="Benin">Benin</option>
                                                        <option value="Bermuda">Bermuda</option>
                                                        <option value="Bhutan">Bhutan</option>
                                                        <option value="Bolivia">Bolivia</option>
                                                        <option value="Bosnia And Herzegovina">Bosnia And Herzegovina</option>
                                                        <option value="Botswana">Botswana</option>
                                                        <option value="Bouvet Island">Bouvet Island</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                        <option value="Bulgaria">Bulgaria</option>
                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                        <option value="Burundi">Burundi</option>
                                                        <option value="Cambodia">Cambodia</option>
                                                        <option value="Cameroon">Cameroon</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Cape Verde">Cape Verde</option>
                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                        <option value="Central African Republic">Central African Republic</option>
                                                        <option value="Chad">Chad</option>
                                                        <option value="Chile">Chile</option>
                                                        <option value="China">China</option>
                                                        <option value="Christmas Island">Christmas Island</option>
                                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                        <option value="Colombia">Colombia</option>
                                                        <option value="Comoros">Comoros</option>
                                                        <option value="Congo">Congo</option>
                                                        <option value="ongo, Democratic Republic">Congo, Democratic Republic</option>
                                                        <option value="Cook Islands">Cook Islands</option>
                                                        <option value="Costa Rica">Costa Rica</option>
                                                        <option value="Cote ">Cote D&#039;Ivoire</option>
                                                        <option value="Croatia">Croatia</option>
                                                        <option value="Cuba">Cuba</option>
                                                        <option value="Cyprus">Cyprus</option>
                                                        <option value="Czech Republic">Czech Republic</option>
                                                        <option value="Denmark">Denmark</option>
                                                        <option value="Djibouti">Djibouti</option>
                                                        <option value="Dominica">Dominica</option>
                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                        <option value="Ecuador">Ecuador</option>
                                                        <option value="Egypt">Egypt</option>
                                                        <option value="El Salvador">El Salvador</option>
                                                        <option value="GQ">Equatorial Guinea</option>
                                                        <option value="Eritrea">Eritrea</option>
                                                        <option value="Estonia">Estonia</option>
                                                        <option value="ET">Ethiopia</option>
                                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                        <option value="Fiji">Fiji</option>
                                                        <option value="Finland">Finland</option>
                                                        <option value="France">France</option>
                                                        <option value="French Guiana">French Guiana</option>
                                                        <option value="French Polynesia">French Polynesia</option>
                                                        <option value="French Southern Territories">French Southern Territories</option>
                                                        <option value="Gabon">Gabon</option>
                                                        <option value="Gambia">Gambia</option>
                                                        <option value="Georgia">Georgia</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="Ghana">Ghana</option>
                                                        <option value="Gibraltar">Gibraltar</option>
                                                        <option value="Greece">Greece</option>
                                                        <option value="Greenland">Greenland</option>
                                                        <option value="Grenada">Grenada</option>
                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                        <option value="Guam">Guam</option>
                                                        <option value="Guatemala">Guatemala</option>
                                                        <option value="Guernsey">Guernsey</option>
                                                        <option value="Guinea">Guinea</option>
                                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                        <option value="Guyana">Guyana</option>
                                                        <option value="Haiti">Haiti</option>
                                                        <option value="Heard Island">Heard Island &amp; Mcdonald Islands</option>
                                                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                        <option value="Honduras">Honduras</option>
                                                        <option value="Hong Kong">Hong Kong</option>
                                                        <option value="Hungary">Hungary</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="India">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Iran, Islamic Republic Of">Iran, Islamic Republic Of</option>
                                                        <option value="Iraq">Iraq</option>
                                                        <option value="Ireland">Ireland</option>
                                                        <option value="Isle Of Man">Isle Of Man</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Jamaica">Jamaica</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Jersey">Jersey</option>
                                                        <option value="Jordan">Jordan</option>
                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="Kiribati">Kiribati</option>
                                                        <option value="Korea">Korea</option>
                                                        <option value="Kuwait">Kuwait</option>
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="Lao People&#039;s Democratic Republic">Lao People&#039;s Democratic Republic
                                                        </option>
                                                        <option value="Latvia">Latvia</option>
                                                        <option value="Lebanon">Lebanon</option>
                                                        <option value="Lesotho">Lesotho</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                        <option value="Lithuania">Lithuania</option>
                                                        <option value="Luxembourg">Luxembourg</option>
                                                        <option value="Macao">Macao</option>
                                                        <option value="Macedonia">Macedonia</option>
                                                        <option value="Madagascar">Madagascar</option>
                                                        <option value="Malawi">Malawi</option>
                                                        <option value="Malaysia">Malaysia</option>
                                                        <option value="Maldives">Maldives</option>
                                                        <option value="Mali">Mali</option>
                                                        <option value="Malta">Malta</option>
                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                        <option value="Martinique">Martinique</option>
                                                        <option value="Mauritania">Mauritania</option>
                                                        <option value="Mauritius">Mauritius</option>
                                                        <option value="Mayotte">Mayotte</option>
                                                        <option value="Mexico">Mexico</option>
                                                        <option value="Micronesia, Federated States Of">Micronesia, Federated States Of</option>
                                                        <option value="Moldova">Moldova</option>
                                                        <option value="Monaco">Monaco</option>
                                                        <option value="Mongolia">Mongolia</option>
                                                        <option value="Montenegro">Montenegro</option>
                                                        <option value="Montserrat">Montserrat</option>
                                                        <option value="Morocco">Morocco</option>
                                                        <option value="Mozambique">Mozambique</option>
                                                        <option value="Myanmar">Myanmar</option>
                                                        <option value="Namibia">Namibia</option>
                                                        <option value="Nauru">Nauru</option>
                                                        <option value="Nepal">Nepal</option>
                                                        <option value="Netherlands">Netherlands</option>
                                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                        <option value="New Caledonia">New Caledonia</option>
                                                        <option value="New Zealand">New Zealand</option>
                                                        <option value="Nicaragua">Nicaragua</option>
                                                        <option value="Niger">Niger</option>
                                                        <option value="Nigeria">Nigeria</option>
                                                        <option value="Niue">Niue</option>
                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                        <option value="Norway">Norway</option>
                                                        <option value="Oman">Oman</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Palau">Palau</option>
                                                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                        <option value="Panama">Panama</option>
                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                        <option value="Paraguay">Paraguay</option>
                                                        <option value="Peru">Peru</option>
                                                        <option value="Philippines">Philippines</option>
                                                        <option value="Pitcairn">Pitcairn</option>
                                                        <option value="Poland">Poland</option>
                                                        <option value="Portugal">Portugal</option>
                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                        <option value="Qatar">Qatar</option>
                                                        <option value="Reunion">Reunion</option>
                                                        <option value="Romania">Romania</option>
                                                        <option value="Russian Federation">Russian Federation</option>
                                                        <option value="Rwanda">Rwanda</option>
                                                        <option value="Saint Barthelemy">Saint Barthelemy</option>
                                                        <option value="Saint Helena">Saint Helena</option>
                                                        <option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option>
                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                        <option value="Saint Martin">Saint Martin</option>
                                                        <option value="Saint Pierre And Miquelon">Saint Pierre And Miquelon</option>
                                                        <option value="Saint Vincent And Grenadines">Saint Vincent And Grenadines</option>
                                                        <option value="Samoa">Samoa</option>
                                                        <option value="San Marino">San Marino</option>
                                                        <option value="Sao Tome And Principe">Sao Tome And Principe</option>
                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                        <option value="Senegal">Senegal</option>
                                                        <option value="Serbia">Serbia</option>
                                                        <option value="Seychelles">Seychelles</option>
                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                        <option value="Singapore">Singapore</option>
                                                        <option value="Slovakia">Slovakia</option>
                                                        <option value="Slovenia">Slovenia</option>
                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                        <option value="Somalia">Somalia</option>
                                                        <option value="South Africa">South Africa</option>
                                                        <option value="South Georgia And Sandwich Isl">South Georgia And Sandwich Isl.</option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="Sudan">Sudan</option>
                                                        <option value="Suriname">Suriname</option>
                                                        <option value="Svalbard And Jan Mayen">Svalbard And Jan Mayen</option>
                                                        <option value="Swaziland">Swaziland</option>
                                                        <option value="Sweden">Sweden</option>
                                                        <option value="Switzerland">Switzerland</option>
                                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                        <option value="Taiwan">Taiwan</option>
                                                        <option value="Tajikistan">Tajikistan</option>
                                                        <option value="Tanzania">Tanzania</option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Timor-Leste">Timor-Leste</option>
                                                        <option value="Togo">Togo</option>
                                                        <option value="Tokelau">Tokelau</option>
                                                        <option value="Tonga">Tonga</option>
                                                        <option value="Trinidad And Tobago">Trinidad And Tobago</option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                        <option value="Turks And Caicos Island">Turks And Caicos Islands</option>
                                                        <option value="Tuvalu">Tuvalu</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United States">United States</option>
                                                        <option value="United States Outlying Islands">United States Outlying Islands</option>
                                                        <option value="Uruguay">Uruguay</option>
                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Venezuela">Venezuela</option>
                                                        <option value="Viet Nam">Viet Nam</option>
                                                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                        <option value="Wallis And Futuna">Wallis And Futuna</option>
                                                        <option value="Western Sahara">Western Sahara</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                    </select>




                           
                </div>
            </div>

    
        </div>
    </div>

    <div class="bravo-booking-page padding-content">
        <div class="container">
            <div id="bravo-checkout-page">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="form-title">Booking Submission</h3>
                        <form method="POST" action="{{route('front.booking.save')}}">
                            @csrf

                            <input type="hidden" name="package_id" value="{{$package->id}}">

                            <div class="booking-form col-sm-12" >
                                <div class="form-checkout " id="form-checkout">
                                    <div class="form-section">
                                        <div class="row">
                                        <div class="col-md-6">
                                               <h6 style="margin-bottom:20px">pre/post Nights Details </h6>
                                                <hr>
                                        </div>
                                        </div>
                                         
   <div class="row">
    
                                            <div class="input-field col-lg-3" style="margin-left: -16px;">
                                                    <select class="browser-default form-control rooms-select"
                                                            id=""
                                                            name="chiled" style="margin-left: 13px;">
                                                        <option value="0" selected="" enable="enable">PreNight</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                         <option value="3">3</option>
                                                          <option value="4">4</option>
                                                           <option value="5">5</option>
                                    

                                                    </select>
                                        </div>
                                         <div class="input-field col-lg-3" style="margin-left: ;">
                                                    <select class="browser-default form-control rooms-select"
                                                            id=""
                                                            name="chiled" style="margin-left: 0px; width: 150px;">
                                                       <option value="0" selected="" enable="enable">Number of PAX</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                    

                                                    </select>
                                        </div>
                                      
                                            
                                        </div>
                                        <div class="row">
                                         <div class="input-field col-lg-3" style="margin-left: -16px;">
                                                    <select class="browser-default form-control rooms-select"
                                                            id=""
                                                            name="chiled" style="margin-left: 13px;    width: 154px;">
                                                       <option value="0" selected="" enable="enable">PostNight</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                    

                                                    </select>
                                        </div>
                                         <div class="input-field col-lg-3" style="margin-left: -19px;">
                                                    <select class="browser-default form-control rooms-select"
                                                            id=""
                                                            name="chiled" style="margin-left: 19px;
    width: 152px;">
                                                       <option value="0" selected="" enable="enable">Number of PAX</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                    

                                                    </select>
                                        </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-md-6">
                                                <h6>Accommodation Details</h6>
                                                <hr>


                                                <div class="input-field " >
                                                    <select class="browser-default form-control rooms-select"
                                                            id="nrGames"
                                                            name="no_of_rooms" required>
                                                        <option value="" disabled selected>No of Rooms</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>

                                                    </select>
                                                </div>

                                                <div class="input-field " id="games">


                                                </div>



                                            </div>

                                            <!--<div class="bedding col s6">-->
                                            <!--    <img src="images/bed1.jpg" width="300px" alt="">-->
                                            <!--</div>-->

                                        </div>
                                        <div class="input-field col-lg-6" style="margin-left: -16px;">
                                                    <select class="browser-default form-control rooms-select"
                                                            id=""
                                                            name="chiled" style="width: 336px;" >
                                                        <option value="" disabled selected>No of childern</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                    

                                                    </select>
                                        </div>
                                     


                                        <div class="col-sm-8" style="margin-left: -19px;">

                                            <h6>Optional Tours</h6>
                                            <div style="overflow-x:auto;">
                                                <table
                                                    class="table table-striped table-condensed dates-tabel table-bordered">

                                                    <tbody>
                                                    <tr style="background-color: #343a40;
    color: white;">
                                                        <td>Tour Name</td>
                                                        <td>Price</td>
                                                        <td>Number of PAX
                                                        </td>
                                                    </tr>





                                                    @foreach($package->package_options as $value)
                                                        <tr style="background-color: rgb(255, 255, 255);">

                                                            <td>

                                                     <input name="package_options[]" multiple
                                                                       value="{{$value->id}}" type="checkbox"
                                                                       data-price="{{ $value->price }}"
                                                                       class="form-check-input package_options_class"

                                                                       id="chkPasspo" style="margin-top:1px">
                                                                <p 
                                                                   style="margin-left:25px"> {{$value->name}}</p>

                                                            </td>
                                                            <td>${{$value->price}}</td>
                                                            <td>
                                                                <div class="input-field ">
                                                                    <select
                                                                        class="browser-default  form-control rooms-select no_of_pax"
                                                                        name="no_of_pax[]" >
                                                                        {{--<option value="" disabled selected>No of PAX--}}
                                                                        {{--</option>--}}
                                                                        <option selected value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                        <option value="6">6</option>
                                                                    </select>
                                                                </div>
                                                            </td>

                                                        </tr>
                                                    @endforeach












                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                        
                                        
                                        

                                        
                                        <h6 style="margin-top: 32px;">Domestic Flight</h6>
                                         <table class="table table-bordered"style="width: 62%; margin-bottom: 50px;
    margin-top: 11px;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">
          
           Domestic Flight
      </th>
      <th scope="col">Price</th>
      <th scope="col">No.of PAX</th>
      
    </tr>
    <tbody>
    <tr>
      <th scope="row">
          <div class="form-check">
    <input type="checkbox" name="one" class="form-check-input  domistic" id="exampleCheck1" style="margin-top: 1px;" data-price="250">
    <label class="form-check-label" for="exampleCheck1" style="margin-left: 21px;">Domestic Flight</label>
  </div>
      </th>
      <td>$ 250</td>
      <td>
          <select name="collo" required="required" class="form-control  dot"> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option> <option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option></select>
      </td>
     
    </tr>
    </tbody>
  </thead>
  </table>



                                        
                                        <div class="row">
            <div class="col-md-6 field-country">
                <div class="form-group">
                    <label>Tourguide Gender </label>
                    <select name="tourgander" class="form-control" required>
                        <option value="">-- Select --</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6 field-country">
                <div class="form-group">
                    <label>Tourguide Language </label>
                    <select name="tourlang" class="form-control" required>
                        <option value="">-- Select --</option>
                        <option value="1">English</option>
                        <option value="2">German</option>
                    </select>
                </div>
            </div>
    </div>
    <div class="row" >

 
    </div>
  <!--<hr>-->
  <center>
 <h4> Passenger information</h4>
 </center>
  <hr>

                                        <div class="row">


                                            <div class="room_1">
                                            
                                            </div>

                                            <div class="room_2">

                                            </div>

                                            <div class="room_3">

                                            </div>

                                            <div class="room_4">

                                            </div>


                                        </div>
                                    </div>


                                    <div class="col-md-12"><label>Special Requirements </label> 
                                    <textarea name="customer_notes" cols="30" rows="6" placeholder="Special Requirements" class="form-control">
                                    </textarea></div>
                                  
                                  
                                    <div class="form-section">
                                        <h4 class="form-section-title">Select Payment Method</h4>
                                        <div class="gateways-table accordion" id="accordionExample">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="mb-0">
                                                        <label class="" data-toggle="collapse"
                                                               data-target="#gateway_offline_payment">
                                                            <input type="radio" name="payment_method"
                                                                   value="1">
                                                            Payment upon Arrival
                                                        </label>
                                                    </h4>
                                                </div>
                                                <div id="gateway_offline_payment" class="collapse"
                                                     aria-labelledby="headingOne" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <div class="gateway_name">
                                                            Offline Payment
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

<textarea name="x"   style="display:none;" class="val total_label"  hidden>

</textarea>
<input type="hidden" name="date_du" value="{{ $x }}" >

                                    <div class="form-group">
                                        <label class="term-conditions-checkbox">
                                            <input type="checkbox" name="term_conditions"> I have read and accept the <a
                                                target="_blank" href="{{ url('/about') }}">terms and
                                                conditions</a>
                                        </label>
                                    </div>
                                  
                                    <div class="form-group">

                                    </div>
                                    <div class="html_before_actions"></div>

                                    <p class="alert-text mt10" v-show=" message.content" v-html="message.content"
                                       :class="{'danger':!message.type,'success':message.type}"></p>

                                    <div class="form-actions">
                                        <button class="btn btn-danger" @click="doCheckout">Submit
                                            <i class="fa fa-spin fa-spinner" v-show="onSubmit"></i>
                                        </button>
   
                                    </div>
                                </div>

                            </div>
                    </div>

                    
                    <div class="col-md-4">
                        <div class="booking-detail">
                            <div class="booking-review">
                                <h4 class="booking-review-title">Your Booking</h4>
                                <div class="booking-review-content">
                                    <div class="review-section">
                                        <div class="service-info">
                                            <div>
                                                <h3 class="service-name"><a href="#">{{$package->name}}</a></h3>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="review-section">
                                        <ul class="review-list">
                                            <li>
                                                <div class="label"> Date:</div>
                                                <div class="val">
                                                    &nbsp;{{ $x }}
                                                </div>
                                            </li>
                                            <li>
                                                <div class="label">Duration:</div>
                                                <div class="val">
                                                    {{$package->duration}}
                                                </div>
                                            </li>
                                            <!--   <li>
                                                  <div class="label">Guests:</div>
                                                  <div class="val">
                                                      1
                                                  </div>
                                              </li> -->

                                        </ul>
                                    </div>

                                    <div class="review-section total-review">
                                        <ul class="review-list">
                                         
                                            <li class="final-total">
                                                <div class="label">Total:</div>
                                                 <div class="val total_label">$0</div> 


                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>



@include('Frontend.footer')

    <script src="{{ asset('frontend/module/booking/js/checkout.js') }}"></script>




    <script type="text/javascript">

var room_number = 0;
var total = 0;
var pax_total = 0;

var solo_price = '{{ $package_price->solo }}';
var p_p = '{{ $package_price->p_p }}';
var three_person = '{{ $package_price->three_person }}';
var sgl = '{{ $package_price->sgl }}';


var hotel_solo = '{{ $package_price->hotel_solo }}';
var hotel_p_p = '{{ $package_price->hotel_p_p }}';
var hotel_3_person = '{{ $package_price->hotel_3_person }}';
var hotel_sgl = '{{ $package_price->hotel_sgl }}';



$(document).delegate('#nrGames', 'change', function () {
    room_number = $(this).val();
    var value = +$(this).val();
    var nr = 0;
    var elem = $("#games").empty();
    while (nr < value) {
        $('.room_1').html('');
        $('.room_t_1').html('');
        
        $('.room_2').html('');
        $('.room_3').html('');
        $('.room_4').html('');

        elem.append(
            $(
                '<div class="row"  ><select data-number="' + parseInt(nr + 1) + '" name="room_type[]" style="margin:10px;" class=" col-md-5 browser-default form-control rooms-select room_type ff' + parseInt(nr + 1) + '"> <option value="" disabled selected>Room Type</option><option value="1">Single</option><option value="2">Double 1 bed </option><option value="2">Double 1 bed +   CHD</option><option value="2">Twin 2 bed +   CHD</option><option value="2">Twin 2 bed </option><option value="3">Triple</option> </select>       <select name="room_smoking[]" style="margin:10px;"  class="col-md-5 browser-default form-control"><option>--select--</option><option>smoking</option><option>Not Smoking</option></select></div>', {
                    name: "Team1Player" + nr
                }

            )

           
        );
        nr++;
    }
});

$(document).delegate('.room_type', 'change', function () {
    $('.room_' + $(this).data('number')).html('');
    for (var i = 0; i < $(this).val(); i++) {
        $('.room_' + $(this).data('number')).append($('.clone_div').html());
    }
    calculate();
});

function calculate() {
    total = 0;

    if (room_number == 1 && $('.ff1').val() == 1) {
        total = solo_price;
    } else {
        for (var i = 1; i < 5; i++) {
            f($('.ff' + i).val());
        }
    }

    $('.total_label').text('$ ' + (parseInt(total) + parseInt(pax_total)));
}

function f(val) {

    if (val > 0) {

        if (val == 1) {
            total = parseInt(sgl) + parseInt(total);
        } else if (val == 2) {
            total = parseInt(p_p) * 2 + parseInt(total);
        }
         else if (val == 4) {
            total = parseInt(p_p) * 2 + parseInt(total);
        }
         else if (val == 5) {
            total = parseInt(p_p) * 2 + parseInt(total);
        }

        else if (val == 6) {
            total = parseInt(p_p) * 2 + parseInt(total);
        }
        
        else {
            total = parseInt(three_person) * 3 + parseInt(total);
        }

    }
}








$('.package_options_class').change(function () {

    if (this.checked) {
        // pax_total = 0;
        // console.log($(this).closest('tr').find('.no_of_pax').val()[0])
        pax_total = parseInt(pax_total) + (parseInt($(this).data('price')) * parseInt($(this).closest('tr').find('.no_of_pax').val()[0]));
        $('.total_label').text('$ ' + (parseInt(total) + parseInt(pax_total)+ parseInt(dot_total)));

    } else {
        pax_total = parseInt(pax_total) - (parseInt($(this).data('price')) * parseInt($(this).closest('tr').find('.no_of_pax').val()[0]));
        $('.total_label').text('$ ' + (parseInt(total) + parseInt(pax_total)));

    }

});

$('.no_of_pax').change(function () {
    pax_total = 0;

    $('.package_options_class').each(function () {
        if (this.checked) {
            // pax_total = 0;
            // console.log($(this).closest('tr').find('.no_of_pax').val()[0])
            pax_total = parseInt(pax_total) + (parseInt($(this).data('price')) * parseInt($(this).closest('tr').find('.no_of_pax').val()[0]));
            $('.total_label').text('$ ' + (parseInt(total) + parseInt(pax_total)));

        }
    })
    

});







$('.domistic').change(function () {

if (this.checked) {
    // pax_total = 0;
    // console.log($(this).closest('tr').find('.no_of_pax').val()[0])
    dot_total = parseInt(dot_total) + (parseInt($(this).data('price')) * parseInt($(this).closest('tr').find('.dot').val()[0]));
    $('.total_label').text('$ ' + (parseInt(total) + parseInt(dot_total)+parseInt(pax_total)));

} 


else {
    dot_total = parseInt(dot_total) -parseInt(pax_total)- (parseInt($(this).data('price')) * parseInt($(this).closest('tr').find('.dot').val()[0]));
    $('.total_label').text('$ ' + (parseInt(total) + parseInt(package_options_class)));

}

});




$('.dot').change(function () {
    dot_total = 0;

    $('.domistic').each(function () {
        if (this.checked) {
            // pax_total = 0;
            // console.log($(this).closest('tr').find('.no_of_pax').val()[0])
            dot_total = parseInt(dot_total) + (parseInt($(this).data('price')) * parseInt($(this).closest('tr').find('.dot').val()[0]));
            $('.total_label').text('$ ' + (parseInt(total) + parseInt(dot_total)+parseInt(pax_total)));

        }
    })
    

});






</script>

</div>
</body>

</html>
