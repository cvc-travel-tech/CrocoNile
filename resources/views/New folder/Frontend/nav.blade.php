<style>
.dropdown {
      position: relative;
      display: inline-block;
      text-align: center;
  }

  .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 100px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
  }

  .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
  }

  .dropdown-content a:hover {
      background-color: #ddd;
  }

  .dropdown:hover .dropdown-content {
      display: block;
  }
  a.bravo-logo img {
    width: 100px !important;
}
</style>
<div class="bravo_topbar">
    <div class="container">
        <div class="content">
            <div class="topbar-left">

                <a href="{{ url('/') }}" class="bravo-logo">
                    <img src="{{ asset('storage/tmp/uploads/'.\App\Images::find($setting['site[logo]'])->file_path) }}" alt="sandpad">


                </a>


                <h6 class="slogin" style="    color: #9a9a9a;"> Your Luxury DMC in Egypt </h6>
            </div>

            <div>


            </div>
            <div class="topbar-right">

                <div>

                    <div class="st-list socials">
                        <a href="https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2Fgroups%2F530999374202702%2F%3Fref%3Dgroup_header" target="_blank">
                            <i class="fa fa-facebook fa-lg"></i>
                        </a>
                        <a href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQF1SGfC1N2W8wAAAXBOTNTY8OcbOtE30zDQOKFAGG9sKPjYxIIUw4znmn44h0bop23qpHo4uR2-0uTs3u1x2VXeCfe8Q36W0vXDZDLZYYCxieUlyZ2kyLm8haJyNCirw_h220k=&originalReferer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fin%2Fcadence-vacations-center-luxury-dmc-in-egypt-a0393a162%2F" target="_blank">
                            <i class="fa fa-linkedin fa-lg"></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UCBzqu3b2NwcwS07W0dY-rtw" target="_blank">
                            <i class="fa fa-youtube fa-lg" aria-hidden="true"></i>
                        </a>
                         <a href="https://api.whatsapp.com/send?phone=00201221232504" target="_blank">
                            <i class="fa fa-whatsapp fa-lg" aria-hidden="true"></i>
                        </a>
                        
                    </div>

                    <ul class="topbar-items">
                        <li class="hidden-xs hidden-sm"><a href="mailto:info@cvc.vacations" target="">info@cvc.vacations
                            </a>
                        </li>
                    </ul>
                    
                      
                        <ul class="topbar-items">

                                
@if(Auth::check())                                


<li class="login-item dropdown show">
<a href="#" data-toggle="dropdown" class="login" aria-expanded="true">Hi,  
<i class="fa fa-angle-down"></i>
</a>
<div class="dropdown-content">
    
    @if(Auth::user()->status  == 'Admin')
    <a href="{{ url('backend') }}">Profile </a>

    @else
    <a href="{{ url('my_profile/'. Auth::user()->id ) }}">Profile </a>

    @endif


    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    Logout
</a>
    </div>     
    


<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
</li>
   
@else

<ul class="topbar-items">
                                <li class="login-item">
                                <a href="{{ url('login') }}">Login</a>
                            </li>
                            <li>
                            <a href="{{ url('register') }}" > Sign up </a>
                            </li>

@endif                  
       
       
       
       
       
                        </ul>
                </div>

      
  


                    
            </div>
        </div>
    </div>
</div>




<div class="bravo_header">
    <div class="container">
        <div class="content">
            <div class="header-left">

                <div class="bravo-menu">
                    <ul class="main-menu menu-generated">
                        <li class=""><a target="" href="{{ url('/') }}">Home</a></li>
                        <li class="   "><a target="" href="{{ url('destinations') }}">Destinations </a>
                        </li>
                        <li class="    "><a target="" href="{{ url('Pack')  }}">Egypt Packages</a></li>
                        <li class="  "><a target="" href="{{ url('about') }}">About Us</a></li>
                        <li class=""><a target="" href="{{ url('contact')  }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="header-right">
                <button class="bravo-more-menu">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="bravo-menu-mobile">
        <div class="user-profile">
            <div class="b-close"><i class="icofont-scroll-left"></i></div>
            <div class="avatar">
                <i class="icofont-user-alt-2"></i>
            </div>
            <ul>
                <li>
                    <a href="">
                        <i class="icofont-user-suited"></i> Hi,
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="icon ion-md-construct"></i> My profile
                    </a>
                </li>
                <li>
                    <a href=""><i class="icon ion-ios-ribbon"></i> Dashboard</a>
                </li>
                <li>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out"></i> Logout
                    </a>
                    <form id="logout-form" action="" method="POST" style="display: none;">
                        <input type="hidden" name="_token" value="rpIsegRg9AWQquQ8f0S0UzRjdI51mdPWVAwziRyx">
                    </form>
                </li>
            </ul>
        </div>
        <div class="g-menu">
            <ul class="main-menu menu-generated"  style="color:#fff">
                <li class=""><a target="" href="{{ url('/') }}">Home</a></li>
                <li class="   "><a target="" href="{{ url('destinations') }}">Destinations <i class="fa fa-angle-down"></i></a>
                    <ul class="children-menu menu-dropdown">
                        <li class=" "><a target="" href="destinations-details.html">Cairo</a></li>
                        <li class="  "><a target="" href="destinations-details.html">Luxor</a></li>
                        <li class="  "><a target="" href="destinations-details.html">Aswan</a></li>
                        <li class=" "><a target="" href="destinations-details.html">Alexandria</a></li>
                        <li class=" "><a target="" href="destinations-details.html">Sharm
                                El-Sheikh</a></li>
                        <li class=" "><a target="" href="destinations-details.html">Sahl Hasheesh</a>
                        </li>
                    </ul>
                </li>
                <li class="    ">
                    <a target="" href="{{ url('Pack')  }}"></a>
                </li>
                <li class="  "><a target="" href="{{ url('about') }}">About Us</a></li>
                <li class=""><a target="" href="{{ url('contact')  }}">Contact Us</a></li>
            </ul>
        </div>
    </div>
</div>
@include('flash')