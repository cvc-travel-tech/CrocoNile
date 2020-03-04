@include('layouts.navbar')


    <!--DASHBOARD-->
    <section>
        <div class="tr-register">
            <div class="tr-regi-form v2-search-form">
                <h4>Book <span>Now</span></h4>
                <p>It's free and always will be.</p>
                <form class="contact__form " method="POST" action="{{ url('invoice') }}">


<input type="hidden"  value="{{ csrf_token() }}"   name="_token" >

<input type="hidden"  value="{{ $id }}"     name="id" >

<input type="hidden"  value="{{ $date }}"   name="date" >




                    <div class="book-tab-tit">
                        <h3>Extend your <span> Stay </span> </h3>
                        <p></p>
                    </div>



                    <div class="row">
                        <div class="col-md-6">
                            <label for="chkPassport">
                                <input type="checkbox" class="form-check-input " id="chkPassport" name="pre_acc_check">
                                Add Pre-Accommodations?

                                <label class="form-check-label checkbox" for="chkPassport"></label>
                            </label>
                            <div class="input-field col s6" id="dvPassport" style="display: none">
                                <select class="browser-default nights-select"  name="pre_acc_night">
                                    <option value="" disabled selected  >Nights</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>

                            <div class="input-field col s4" id="dvPassport2" style="display: none">
                                <select class="browser-default nights-select"  name="pre_pax_night">
                                    <option value="" disabled selected  >pax</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>

                             
                        </div>
                        <div class="col-md-6">
                            <label for="chkPassport">
                                <input type="checkbox" class="form-check-input" id="chkPassport1" name="post_acc_check">
                                Add Post-Accommodations?

                                <label class="form-check-labe2 checkbox" for="chkPassport1"></label>
                            </label>
                            <div class="input-field col s6" id="dvPassport1" style="display: none">
                                <select class="browser-default nights-select"  name="post_acc_night">
                                    <option value="" disabled selected>Nights</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
 <div class="input-field col s4" id="dvPassport3" style="display: none">
                                <select class="browser-default nights-select"  name="post_pax_night">
                                    <option value="" disabled selected>pax</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>                            
                        </div>
                    </div>

                   
                    <div class="book-tab-tit">
                        <h3>Accommodation <span>Details</span> </h3>
                        <p></p>
                    </div>


                    <div class="row">


                        <div class="col s6">

                            <div class="input-field ">
                                <select class="browser-default" id="nrGames" name="nrGame" required>
                                    <option value="" disabled selected>No of Rooms</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>

                                </select>


                                
                            </div>

                            <div class="input-field " id="games">


                            </div>
                          


                            <div class="input-field ">
                                <select class="browser-default" name="noofchildrens" >
                                    <option value="" disabled selected>No of childrens</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>

                        </div>
                        <div class="bedding col s6">
                            <img src="images/bed1.jpg" width="300px" alt="">
                        </div>


                    </div>

                    <div class="book-tab-tit">
                        <h3>TourGuide <span>Informations</span></h3>

                        <div class="input-field col s6">
                            <select class="browser-default" name="tourguide" required>
                                <option value="" disabled selected>TourGuide Gender</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>

                            </select>
                        </div>
                        <div class="input-field col s6">
                            <select class="browser-default" name="language">
                                <option value="" disabled selected>Language</option>
                                <option value="1">English</option>
                                <option value="2">German</option>
                                <option value="3">Spanish</option>

                            </select>

                            <div class="row ">
                                <div class="input-field col s3 ">
                                </div>
                                <div class="input-field col s6 ">

                                        
                                <button class="waves-effect waves-light tourz-sear-btn v2-ser-btn">Continue</button>

                                </div>
                            </div>
                        </div>
                    </div>

            </div>




            </form>
        </div>
        </div>
    </section>
    <!--END DASHBOARD-->
     @include('layouts.footer')