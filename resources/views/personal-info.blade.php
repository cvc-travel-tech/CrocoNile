
    @include('layouts.navbar')
    <!--END HEADER SECTION-->

    <!--DASHBOARD-->

    
    {{$h['id']}}
    {{$h['pre_acc_check']}}
    {{$h['pre_acc_night']}}
    {{$h['post_acc_check']}}
    {{$h['post_acc_night']}}
    {{$h['nrGame']}}
    {{$h['noofadults']}}
    {{$h['noofchildrens']}} 
    {{$h['tourguide']}}
    {{$h['language']}}
   
   
   
   
    <section>
        <div class="tr-register">
            <div class="tr-regi-form v2-search-form personal-form">

                <form class="contact__form " method="GET" action="invoice.html">

                    <div class="row">

                        <div class="book-tab-tit">
                            <h3>Personal <span>Informations</span></h3>

                        </div>
                        <form class="contact__form v2-search-form book-tab-form" method="post" action="http://rn53themes.net/themes/demo/travelz/mail/custombooking.php">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">

                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="text" class="validate" placeholder="Enter Your Name" name="name" required>

                                </div>
                                <div class="input-field col s6">
                                    <input type="text" class="validate" placeholder="Enter Your Nationality" name="name" required>

                                </div>
                                <!-- <div class="input-field col s6 ">
                                            <input type="text" class="datepicker" id="datepicker">
                                            <label style="margin-top: 10px;" for="to">Arrival Date</label>
                                        </div> -->
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="number" class="validate" placeholder="Enter Your CellPhone" name="phone" required>

                                </div>
                                <div class="input-field col s6">
                                    <input type="email" class="validate" placeholder="Enter Your Email" name="email" required>

                                </div>


                            </div>

                    </div>
                    <div class="done-btn">
                        <button type="button" id="b2">Done</button v>

                    </div>


            </div>



            </form>
        </div>
        </div>
    </section>
    <!--END DASHBOARD-->
    <!--====== TIPS BEFORE TRAVEL ==========-->
      @include('layouts.footer')