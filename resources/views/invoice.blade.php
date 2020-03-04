@include('layouts.navbar')
    <!--END HEADER SECTION-->

    <!--====== BANNER ==========-->

    <!--====== PLACES ==========-->
    <section>
        <div class="rows inn-page-bg com-colo">
            <div class="container inn-page-con-bg tb-space pad-bot-redu-5" id="inner-page-title">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title col-md-12">
                    <h1>Reservation <span></span></h1>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>Croconile Travel offers many packages and customized tours. Visit Egypt's must see touristic attractions and make sure your vacation is flawless
                    </p>
                </div>
                <div class="col-md-12">
                    <div class="package-table" style="text-align: center;">
                    </div>
                    <h2></h2>
                    <form method="post" action="{{ url('personal-info') }}">


<input type="hidden"  value="{{ csrf_token() }}"   name="_token" >
<input type="hidden"  value="{{ $h['id'] }}"     name="id" >
<input type="hidden"  value="{{ $h['date'] }}"   name="date" >
<input type="hidden"  value="{{ $h['pre_acc_check'] }}"   name="pre_acc_check" >
<input type="hidden"  value="{{ $h['pre_acc_night'] }}"   name="pre_acc_night" >
<input type="hidden"  value="{{ $h['post_acc_check'] }}"   name="post_acc_check" >
<input type="hidden"  value="{{ $h['post_acc_night'] }}"   name="post_acc_night" >


<input type="hidden"  value="{{ $h['nrGame'] }}"   name="nrGame" >
<input type="hidden"  value="{{ $h['noofchildrens'] }}"   name="noofchildrens" >
<input type="hidden"  value="{{ $h['tourguide'] }}"   name="tourguide" >
<input type="hidden"  value="{{ $h['language'] }}"   name="language" >



                                              


  <td>

                                                     <input name="package_options[]" multiple
                                                                       value="" type="checkbox"
                                                                       data-price=""
                                                                       class="form-check-input package_options_class"

                                                                       id="chkPasspo" style="margin-top:1px">
                                                                <p 
                                                                   style="margin-left:25px"> {{$Package['name']}}</p>

                                                            </td>

                                                            <td>{{$package_price}}</td>
     </tr>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>

                                <th  style="width: 1%;">Number Of Room</th>
                                <th>Opptional</th>
                                <th>Number Of PAX</th>
                                <th style="width: 10%;">Total per PAX</th>
                                
                            </tr>
                        </thead>
                          <tr>

                                <td style="width: 10px; text-align: center;">
                                    2
                                </td>
                                
                                <td style="width: 20%;">
                                

                                    <img src="{{asset('croconile/images/blue-check.png')}}" style="    width: 20px;">
                                    <a href="tour-details.html">

                                        <h5 class="content">{{$Package['name']}}</h5>

                                    </a>
                                    <p>Round trip airfare from NYC, 6 nights accommodation, all transfers, most meals and sightseeing</p>

                                </td>

                                <td style="width: 7%; text-align:center;    padding-top: 41px;
    font-size: 20px;">{{$package_price}}</td>
                                 <td>
                                 <select class="browser-default" name="tourguide" required="" style="margin-top: 33px;">
                                <option value="" disabled="" selected="">No.Of.PAX</option>
                                <option value="1">1</option>
                                <option value="2">2</option>

                            </select>
                                 </td>

                            </tr>     
                        @foreach($packages as $value)
                        <tbody>
                      
                            <tr>

                                <td style="width: 10px; text-align: center;">
                                    2
                                </td>
                                
                                <td style="width: 20%;">
                                

                                     <label for="chkPassport3">


                                     

                                     
                                                     <input name="package_options[]" multiple
                                                                       value="{{$value->id}}" type="checkbox"
                                                                       data-price="{{ $value->price }}"
                                                                       class="form-check-input package_options_class"

                                                    id="chkPassport3" style="margin-top:1px">



                                        <input   name="package_options[]" multiple type="checkbox" class="form-check-input" id="chkPassport3">





                                        
                                        <label class="form-check-label" for="chkPassport3"></label>
                                    </label>
                                    <a href="tour-details.html">

                                        <h5 class="content">{{$value->name}}</h5>

                                    </a>
                                    <p>Round trip airfare from NYC, 6 nights accommodation, all transfers, most meals and sightseeing</p>

                                </td>

                                <td style="width: 7%; text-align:center;    padding-top: 41px;
    font-size: 20px;">${{$value->price}}</td>
                                 <td>
                                 <select class="browser-default" name="tourguide" required="" style="margin-top: 33px;">
                                <option value="" disabled="" selected="">No.Of.PAX</option>
                                <option value="1">1</option>
                                <option value="2">2</option>

                            </select>
                                 </td>

                            </tr>          

<input  id="tot_price"  type="hidden"  value=""   name="tot_price" >


                             

          @endforeach
                            

                        </tbody>
                    </table>
                    
               
                    <div class="row ">
                        <div class="input-field col s3 ">
                        </div>


                        <div class="input-field col s6 ">


                        <button  class="waves-effect waves-light tourz-sear-btn v2-ser-btn"> Continue</button>
                     
                        </div>
                    </div>
                    <h5 style="float:right;">Total:$ {{($package_price * $u )+$d+$e}}</h5>

                       </form>
                </div>
    </section>
    <script>
        $(function () {
    $("#chkPassport3").click(function () {
        if ($(this).is(":checked")) {
            $("#dvPassport").show();
            $("#AddPassport").hide();


        } else {
            $("#dvPassport").hide();
            $("#AddPassport").show();
           
        }
    });
});
    </script>
    <!--====== TIPS BEFORE TRAVEL ==========-->
    @include('layouts.footer')