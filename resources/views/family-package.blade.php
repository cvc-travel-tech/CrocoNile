@include('layouts.navbar')

    <!--====== BANNER ==========-->
    <section>
        <div class="rows inner_banner inner_banner_5">
            <div class="container">
                <!-- <h2 style="color: white;"><span>Family Package -</span> Top Family Packages In The World</h2><ul><li><a href="#inner-page-title">Home</a></li><li><i class="fa fa-angle-right" aria-hidden="true"></i> </li><li><a href="#inner-page-title" class="bread-acti">Family Package</a></li></ul> -->
                <p>Book travel packages and enjoy your holidays with distinctive experience</p>
            </div>
        </div>
    </section>
    <!--====== PLACES ==========-->
    <section>
        <div class="rows inn-page-bg com-colo">
            <div class="container inn-page-con-bg tb-space pad-bot-redu-5" id="inner-page-title">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title col-md-12">
                    <h1> Private Egypt Tour packages <span></span></h1>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>Croconile Travel offers many packages and customized tours. Visit Egypt's must see touristic
                        attractions and make sure your vacation is flawless
                    </p>
                </div>
                <div class="col-md-12 text-center">
                    <div class="col-md-12">
                        <div class="package-table ">
                            <table class="table table-striped table-bordered table-hover" style="
                                    width: 70%;
                                    margin: 0 auto;
                                ">
                                <thead>
                                    <tr>
                                        <th width="8%">Price</th>
                                        <th width="35%">Title</th>
                                        <th width="33%">Itenery</th>
                                        <th width="12%">To</th>
                                        <th width="12%">From</th>
                                    </tr>
                                </thead>
                                <tbody>



@foreach($Package as $pac)

                                    <tr>
                                        <th>
                                            <h4 class="package-content"
                                                style="text-align: center;  padding-top: 0px; font-size: 12px;">
                                               {{ $pac->package_prices()->first()->p_p }}
                                               </h4>
                                        </th>
                                        <th>
                                            <a href="{{ url('Package/'.$pac['slug']) }}">
                                                <h5>{{ $pac['name'] }}</h5>
                                            </a>
                                            <!-- <p class="package-content">Round trip airfare from NYC, 6 nights accommodation, all transfers, most meals and sightseeing</p> -->

                                        </th>

                                        <td class="package-content" style=" padding-top: 18px;">{{ $pac['brief'] }}</td>
                                        <td class="package-content" style=" padding-top: 18px;">Jan 2020</td>
                                        <td class="package-content" style=" padding-top: 18px;">Dec 2021</td>
                                    </tr>
@endforeach





                                  

                                </tbody>
                            </table>

                            <!-- <button > -->
                            <!-- <a class=" btn btn-default see-more text-center " href="all-package.html "> SEE MORE </a> -->
                            <!-- </button> -->

                            <!-- <div class="text-center ">
                            <a href="family-package.html " class="link-btn center-block ">SEE MORE</a>
                        </div> -->

                        </div>
                    </div>
                </div>
    </section>
  @include('layouts.footer')