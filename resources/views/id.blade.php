@include('layouts.navbar')

    <section class="input" style="height: 800px; background:url(../images/Abu-al-Haggag-Mosque-in-Luxor-Temple)">
        
        <div class="container">
            
                <div class="tr-regi-form v2-search-form" style="margin-top: 203px;">
                <h1>Enter Your ID</h1>
                <p>It's free and always will be.</p>
                <form class="contact__form" method="post" action="http://rn53themes.net/themes/demo/travelz/mail/tourbooking.php">
                    <div class="alert alert-success contact__msg" style="display: none" role="alert">
                        Thank you for arranging a wonderful trip for us! Our team will contact you shortly!
                    </div>
                    <div class="contact-input">


                        <div class="row">
                            <div class="input-field col-sm-12 contact-input">

                               <div class="form-group" style="margin-left: 130px;">
                        <input type="text" id="fname" class="form-control input-khatosha" name="name"
                            placeholder="Your name.." maxlength="10" style="margin-left: -36px;
   
    margin-top: 0px;">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>

                            </div>

                           
                        </div>
                    




                   
                </form>
            </div>
            </div>

        </div>

        </div>
    </section>

   @include('layouts.footer')