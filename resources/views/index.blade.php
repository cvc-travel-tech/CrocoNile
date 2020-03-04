@include('layouts.navbar')
<style>
.tourz-hom-ser {
    /* margin-left:97px; */
} 
.tourz-hom-ser ul li a{
    margin: 1px 0px 0px -106px;
}

</style>
<section>
    <div class="tourz-search" style="    background: url('{{ asset('storage/tmp/uploads/'.\App\Images::find($setting['site[mine-img]'])->file_path) }}' ) no-repeat;
    position: relative;
    background-size: cover;">

        <div class="container">
            <div class="row">
                <div class="tourz-search-1">

                    <h1><span>Explore</span> <span id="type-text"></span> </h1>
                    <p>Experience our exclusive vacation packages, ensure affordable deals, book your accommodation,
                        discover top events and more…</p>
                </div>
            </div>
        </div>
    </div>
</section>



<!--END HEADER SECTION-->

<section>
<div class="container">
<div class=" tourz-hom-ser" style="margin-left: 97px;">

    

             <ul>





                               @foreach($setting['site[features]'] as $value)


                 <li>
                    <a href="#" style="margin-bottom: 27px;"> <img src="{{ asset('storage/tmp/uploads/'.\App\Images::find($value['icon'])->file_path) }}" alt="">
                        <p>{{ $value['tital'] }}</p>
                    </a>
                </li>

                

                        @endforeach





           
             
              
                
            </ul> 
            
            



        </div>


    <div class="Khartosha text-center">
        <div class="container">
            <a href="{{ url('input') }}">

                <div class="spe-title">
                    <h2>Write <span>Your Name in Hieroglyphic</span></h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>Croconile Travel offers many packages and customized tours. Visit Egypt's must see touristic
                        attractions and make sure your vacation is flawless</p>
                </div>
            </a>
        </div>
    </div>

</div>
</section>


<section>
    <div class=" rows pad-bot-redu tb-space">
        <div class="container">
            <!-- TITLE & DESCRIPTION -->
            <div class="spe-title content-pack">
                <h2>Top <span> Private Egypt Tour Packages</span></h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <p>Croconile Travel offers many packages and customized tours. Visit Egypt's must see touristic
                    attractions and make sure your vacation is flawless</p>
            </div>
            <!-- TOUR PLACE 1 -->
            <div class="col-md-12 text-center">
                <div class="col-md-12">
                    <div class="package-table text-center">
                        <table class="table table-striped table-bordered table-hover" style="
                                    width: 70%;
                                    margin: 0 auto;
                                ">
                            <thead>
                                <tr>
                                    <th width="8%">Price</th>
                                    <th width="35%">Title</th>
                                    <th width="33%" class="itenary">Itenery</th>
                                    <th width="12%">To</th>
                                    <th width="12%">From</th>
                                </tr>
                            </thead>
                            <tbody>





@foreach($Package as $pac)



        <tr>
                                    <td>
                                        <h4 class="package-content"
                                            style="text-align: center;  padding-top: 0px; font-size: 12px;">
                                            ${{ $pac->package_prices()->first()->p_p }}
</h4>
                                    </td>
                                    <td>
                                        <a href="{{ url('Package/'.$pac['slug']) }}">
                                            <h5>{{ $pac['name'] }}</h5>
                                        </a>
                                        <!-- <p class="package-content">Round trip airfare from NYC, 6 nights accommodation, all transfers, most meals and sightseeing</p> -->

                                    </td>

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
        </div>
        <!-- <button > -->
        <!-- <a class="btn btn-default  see-more text-center" href="all-package.html"> SEE MORE </a> -->
        <!-- </button> -->

        <!-- <div class="text-center">
                        <a href="family-package.html" class="link-btn center-block">SEE MORE</a>
                    </div> -->

    </div>
</section>
<!--====== HOME HOTELS ==========-->

<!--====== SECTION: FREE CONSULTANT ==========-->
<section>
    <div class=" offer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="offer-l">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="offer-r">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')