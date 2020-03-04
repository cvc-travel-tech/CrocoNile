<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.dates button{
    width:300px;
    margin-bottom: 8px;
}
</style>

@include('layouts.navbar')
    <!--====== BANNER ==========-->
    <section>
        <div class="rows inner_banner inner_banner_4">
            <div class="container">
                <!-- <h2><span>Brazil & Argentina -</span> Family Package</h2> -->
                <ul>
                    <li><a href="index.html">Home</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                    <li><a href="#inner-page-title" class="bread-acti">Egypt Package</a>
                    </li>
                </ul>
                <p>Book travel packages and enjoy your holidays with distinctive experience</p>
            </div>
        </div>
    </section>
    <!--====== TOUR DETAILS - BOOKING ==========-->
    <section>
        <div class="rows banner_book" id="inner-page-title">
            <div class="container">
                <div class="banner_book_1">
                    <ul>
                        <li class="dl1">Location :Egypt</li>
                        <li class="dl2">Price : $ {{ $package_price['p_p'] }}</li>
                        <li class="dl3">Duration :{!! $package->duration !!}</li>

                    </ul>
                </div>

            </div>
        </div>
    </section>
    <!--====== TOUR DETAILS ==========-->
    <section>
        <div class="rows inn-page-bg com-colo">
            <div class="container inn-page-con-bg tb-space">
                <div class="col-md-9">
                    <!--====== TOUR TITLE ==========-->
                    <div class="tour_head">
                        <div class="col-md-8" style="margin-top: -63px">
                            <h2>{{ $package->name }}<span class="tour_star"><i class="fa fa-star"
                                        aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i
                                        class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                                        aria-hidden="true"></i><i class="fa fa-star-half-o"
                                        aria-hidden="true"></i></span>
                                <span class="tour_rat">4.5</span>
                        </div>
                        </h2>

                    </div>
                    <div class="tour_head1 hotel-book-room">

                        <div id="myCarousel1" class="carousel slide" data-ride="carousel">

                            <ol class="carousel-indicators carousel-indicators-1">
                            
                               


                                
                                @foreach($package['package_images'] as $key => $value)


                                <li data-target="#myCarousel1" data-slide-to="{{$value->id}}"><img src="{{asset('storage/tmp/uploads/large').'/'.$value->file_path}}" alt="Chania">
                                </li>

                                @endforeach
                            </ol>




                            <div class="carousel-inner carousel-inner1" role="listbox">


                                <div class="item active"> <img src="{{asset('storage/tmp/uploads/large').'/'.$package['package_images'][0]->file_path}}" alt="Chania"> </div>

        @foreach($package['package_images'] as $key => $value)


                                 <div class="item"> <img src="{{asset('storage/tmp/uploads/large').'/'.$value->file_path}}" alt="Chania"> </div>

         @endforeach



                                <!-- <div class="item"> <img src="images/gallery/t9.jpg" alt="Chania" width="460" height="345"> </div> -->
                            </div>
                            <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
                                <span><i class="fa fa-angle-left hotel-gal-arr" aria-hidden="true"></i></span> </a>
                            <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
                                <span><i class="fa fa-angle-right hotel-gal-arr hotel-gal-arr1"
                                        aria-hidden="true"></i></span> </a>
                        </div>
                    </div>
                    <!-- Start tab -->
                    <div class="tab-items">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item active">
                                <a class=" " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Itinerary</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Trip Video</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="inclusion-tab" data-toggle="tab" href="#inclusion" role="tab" aria-controls="inclusion" aria-selected="false">Inclusion</a>
                            </li>
                            <li class="nav-item">
                               <a
          class="nav-item nav-link"
          id="map-tab"
          data-toggle="tab"
          href="#map"
          role="tab"
          aria-controls="map"
          aria-selected="false"
          >map</a
        >
                            </li>


 
      







                            <li class="nav-item">
                                <a class="nav-link" id="dates-tab" data-toggle="tab" href="#dates" role="tab" aria-controls="dates" aria-selected="false">Dates</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Client Reviews</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        
        
                        <div class="tab-pane fade  active in" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="overview">
 {!! $package->overview !!}
</div>   
                </div>
                
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="content-itenarry">
                                            {!! $package->itinerary !!}

                               
                            </div>
                        </div>

                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">


                            <iframe width="450" height="350" ; src="https://www.youtube.com/embed/Dtw2vfKihXA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">.
                            ..</div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                        <div class="tab-pane fade" id="inclusion" role="tabpanel" aria-labelledby="inclusion-tab">

                            <div class="inclusion">


                                <h4>Packages Includes :</h4>
                                                                           {!! $package->inclusion !!}

                            </div>
                        </div>
                        

                                         <div
        class="tab-pane fade"
        id="map"
        role="tabpanel"
        aria-labelledby="map-tab"
      >
        <img src="{{ asset('croconile/images/Project.gif') }}">
      </div>
                        <!-- start table date -->

                        <div class="tab-pane fade" id="dates" role="tabpanel" aria-labelledby="dates-tab">
                            <div class="dates">
                                <div class="container">
                                    <div class="col-sm-4">

                                        <h4  >2020 Dates & price Dimond</h4>
                                       <div class="row">
  <button type="button" class="btn btn-info dates" data-toggle="collapse" data-target="#demo">January<i style="margin-left:135px;" class="fa fa-angle-down" aria-hidden="true"></i>
</button>
  <div id="demo" class="collapse">
     <table class="table table-striped table-condensed dates-tabel">
                                                <thead>

                                                    <tr>
                                                        <th>Dates</th>
                                                        <th>Land Only</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="{{url('booking/'.$package->id . '/'.'25-3-2020')}}"> Jan 1</a> <span> (Sold Out)</span></td>
                                                        <td>$ 655</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 8</a></td>
                                                        <td>$ 655</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 15</a></td>
                                                        <td>$ 655</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 22</a></td>
                                                        <td>$ 655</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 29</a></td>
                                                        <td>$ 655</td>

                                                    </tr>
                                                </tbody>
                                            </table>
  </div>
  </div> 
   <div class="row">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo1">february</button>
  <div id="demo1" class="collapse">
     <table class="table table-striped table-condensed dates-tabel">
                                                <thead>

                                                    <tr>
                                                        <th>Dates</th>
                                                        <th>Land Only</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="#"> Feb 5</a> <span> (Sold Out)</span></td>
                                                        <td>$ 655*</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Feb 12</a></td>
                                                        <td>$ 655</td>

                                                    </tr>
                                                  
                                                    <tr>
                                                        <td><a href="#"> Feb 19</a></td>
                                                        <td>$ 655</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Feb 26</a></td>
                                                        <td>$ 655</td>

                                                    </tr>
                                                </tbody>
                                            </table>
  </div>
  </div> 
   <div class="row">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo3">March</button>
  <div id="demo3" class="collapse">
     <table class="table table-striped table-condensed dates-tabel">
                                                <thead>

                                                    <tr>
                                                        <th>Dates</th>
                                                        <th>Land Only</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="#"> Mar 4</a> <span> (Sold Out)</span></td>
                                                        <td>$ 655*</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Mar 11</a></td>
                                                        <td>$ 655</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Mar 18</a></td>
                                                        <td>$ 655</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Mar 25</a></td>
                                                        <td>$ 655</td>

                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
  </div>
  </div> 
   <div class="row">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo4">April</button>
  <div id="demo4" class="collapse">
     <table class="table table-striped table-condensed dates-tabel">
                                                <thead>

                                                    <tr>
                                                        <th>Dates</th>
                                                        <th>Land Only</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="#"> Apr 1</a> <span> (Sold Out)</span></td>
                                                        <td>$ 655*</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Apr 8</a></td>
                                                        <td>$ 917</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Apr 15</a></td>
                                                        <td>$ 917</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Apr 22</a></td>
                                                        <td>$ 655</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Apr 29</a></td>
                                                        <td>$ 655</td>

                                                    </tr>
                                                </tbody>
                                            </table>
  </div>
  </div> 
   <div class="row">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo5">May</button>
  <div id="demo5" class="collapse">
     <table class="table table-striped table-condensed dates-tabel">
                                                <thead>

                                                    <tr>
                                                        <th>Dates</th>
                                                        <th>Land Only</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="#"> May 6</a> <span> (Sold Out)</span></td>
                                                        <td>$ 655*</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> May 13</a></td>
                                                        <td>$ 655</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> May 20</a></td>
                                                        <td>$ 655</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> May 27</a></td>
                                                        <td>$ 655</td>

                                                    </tr>
                                                   
                                                </tbody>
                                            </table>
  </div>
  </div> 
   <div class="row">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo6">June</button>
  <div id="demo6" class="collapse">
     <table class="table table-striped table-condensed dates-tabel">
                                                <thead>

                                                    <tr>
                                                        <th>Dates</th>
                                                        <th>Land Only</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="#"> Jun 3</a> <span> (Sold Out)</span></td>
                                                        <td>$ 655*</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jun 10</a></td>
                                                        <td>$ 655</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jun 17</a></td>
                                                        <td>$ 655</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jun 24</a></td>
                                                        <td>$ 655</td>

                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
  </div>
  </div> 
   <div class="row">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo7">July</button>
  <div id="demo7" class="collapse">
     <table class="table table-striped table-condensed dates-tabel">
                                                <thead>

                                                    <tr>
                                                        <th>Dates</th>
                                                        <th>Land Only</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="#"> Jul 1</a> <span> (Sold Out)</span></td>
                                                        <td>$ 655*</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jul 8</a></td>
                                                        <td>$ 655</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jul 15</a></td>
                                                        <td>$ 655</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jul 22</a></td>
                                                        <td>$ 655</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jul 29</a></td>
                                                        <td>$ 655</td>

                                                    </tr>
                                                </tbody>
                                            </table>
  </div>
  </div> 
   <div class="row">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo8">August</button>
  <div id="demo8" class="collapse">
     <table class="table table-striped table-condensed dates-tabel">
                                                <thead>

                                                    <tr>
                                                        <th>Dates</th>
                                                        <th>Land Only</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="#"> Aug 5</a> <span> (Sold Out)</span></td>
                                                        <td>$ 655*</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Aug 12</a></td>
                                                        <td>$ 655</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Aug 19</a></td>
                                                        <td>$ 655</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Aug 26</a></td>
                                                        <td>$ 655</td>

                                                    </tr>
                                                  
                                                </tbody>
                                            </table>
  </div>
  </div> 
   <div class="row">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo9">September</button>
  <div id="demo9" class="collapse">
     <table class="table table-striped table-condensed dates-tabel">
                                                <thead>

                                                    <tr>
                                                        <th>Dates</th>
                                                        <th>Land Only</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="#"> Sep 2</a> <span> (Sold Out)</span></td>
                                                        <td>$ 655*</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Sep 9</a></td>
                                                        <td>$ 655</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Sep 16</a></td>
                                                        <td>$ 655</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Sep 23</a></td>
                                                        <td>$ 655</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Sep 30</a></td>
                                                        <td>$ 655</td>

                                                    </tr>
                                                </tbody>
                                            </table>
  </div>
  </div> 
   <div class="row">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo10">October</button>
  <div id="demo10" class="collapse">
     <table class="table table-striped table-condensed dates-tabel">
                                                <thead>

                                                    <tr>
                                                        <th>Dates</th>
                                                        <th>Land Only</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="#"> Jan 7</a> <span> (Sold Out)</span></td>
                                                        <td>$ 655*</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 14</a></td>
                                                        <td>$ 655</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 21</a></td>
                                                        <td>$ 655</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 28</a></td>
                                                        <td>$ 655</td>

                                                    </tr>
                                                   
                                                </tbody>
                                            </table>
  </div>
  </div> 
   <div class="row">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo11">November</button>
  <div id="demo11" class="collapse">
     <table class="table table-striped table-condensed dates-tabel">
                                                <thead>

                                                    <tr>
                                                        <th>Dates</th>
                                                        <th>Land Only</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="#"> Nov 4</a> <span> (Sold Out)</span></td>
                                                        <td>$ 655*</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Nov 11</a></td>
                                                        <td>$ 655</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Nov 18</a></td>
                                                        <td>$ 655</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Nov 25</a></td>
                                                        <td>$ 655</td>

                                                    </tr>
                                                   
                                                </tbody>
                                            </table>
  </div>
  </div> 
   <div class="row">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo12">December</button>
  <div id="demo12" class="collapse">
     <table class="table table-striped table-condensed dates-tabel">
                                                <thead>

                                                    <tr>
                                                        <th>Dates</th>
                                                        <th>Land Only</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="#"> Dec 2</a> <span> (Sold Out)</span></td>
                                                        <td>$ 655*</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Dec 9</a></td>
                                                        <td>$ 655</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Dec 16</a></td>
                                                        <td>$ 655</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Dec 23</a></td>
                                                        <td>$ 917</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Dec 30</a></td>
                                                        <td>$ 917</td>

                                                    </tr>
                                                </tbody>
                                            </table>
  </div>
  </div> 


                                    </div>
                                    <div class="col-sm-4">

                                        <h4>2020 Dates & price Gold</h4>
                                         <div class="row">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo2">January</button>
  <div id="demo2" class="collapse">
     <table class="table table-striped table-condensed dates-tabel">
                                                <thead>

                                                    <tr>
                                                        <th>Dates</th>
                                                        <th>Land Only</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a> <span> (Sold Out)</span></td>
                                                        <td>$2289*</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                </tbody>
                                            </table>
  </div>
  </div> 
   <div class="row">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo13">February</button>
  <div id="demo13" class="collapse">
     <table class="table table-striped table-condensed dates-tabel">
                                                <thead>

                                                    <tr>
                                                        <th>Dates</th>
                                                        <th>Land Only</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a> <span> (Sold Out)</span></td>
                                                        <td>$2289*</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                </tbody>
                                            </table>
  </div>
  </div> 
   <div class="row">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo14">March</button>
  <div id="demo14" class="collapse">
     <table class="table table-striped table-condensed dates-tabel">
                                                <thead>

                                                    <tr>
                                                        <th>Dates</th>
                                                        <th>Land Only</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a> <span> (Sold Out)</span></td>
                                                        <td>$2289*</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                </tbody>
                                            </table>
  </div>
  </div> 
   <div class="row">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo15">April</button>
  <div id="demo15" class="collapse">
     <table class="table table-striped table-condensed dates-tabel">
                                                <thead>

                                                    <tr>
                                                        <th>Dates</th>
                                                        <th>Land Only</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a> <span> (Sold Out)</span></td>
                                                        <td>$2289*</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                </tbody>
                                            </table>
  </div>
  </div> 
   <div class="row">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo16">May</button>
  <div id="demo16" class="collapse">
     <table class="table table-striped table-condensed dates-tabel">
                                                <thead>

                                                    <tr>
                                                        <th>Dates</th>
                                                        <th>Land Only</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a> <span> (Sold Out)</span></td>
                                                        <td>$2289*</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                </tbody>
                                            </table>
  </div>
  </div> 
   <div class="row">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo17">June</button>
  <div id="demo17" class="collapse">
     <table class="table table-striped table-condensed dates-tabel">
                                                <thead>

                                                    <tr>
                                                        <th>Dates</th>
                                                        <th>Land Only</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a> <span> (Sold Out)</span></td>
                                                        <td>$2289*</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                </tbody>
                                            </table>
  </div>
  </div> 
   <div class="row">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo18">July</button>
  <div id="demo18" class="collapse">
     <table class="table table-striped table-condensed dates-tabel">
                                                <thead>

                                                    <tr>
                                                        <th>Dates</th>
                                                        <th>Land Only</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a> <span> (Sold Out)</span></td>
                                                        <td>$2289*</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                </tbody>
                                            </table>
  </div>
  </div> 
   <div class="row">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo19">August</button>
  <div id="demo19" class="collapse">
     <table class="table table-striped table-condensed dates-tabel">
                                                <thead>

                                                    <tr>
                                                        <th>Dates</th>
                                                        <th>Land Only</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a> <span> (Sold Out)</span></td>
                                                        <td>$2289*</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                </tbody>
                                            </table>
  </div>
  </div> 
   <div class="row">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo20">September</button>
  <div id="demo20" class="collapse">
     <table class="table table-striped table-condensed dates-tabel">
                                                <thead>

                                                    <tr>
                                                        <th>Dates</th>
                                                        <th>Land Only</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a> <span> (Sold Out)</span></td>
                                                        <td>$2289*</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                </tbody>
                                            </table>
  </div>
  </div> 
   <div class="row">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo21">October</button>
  <div id="demo21" class="collapse">
     <table class="table table-striped table-condensed dates-tabel">
                                                <thead>

                                                    <tr>
                                                        <th>Dates</th>
                                                        <th>Land Only</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a> <span> (Sold Out)</span></td>
                                                        <td>$2289*</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                </tbody>
                                            </table>
  </div>
  </div> 
   <div class="row">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo22">November</button>
  <div id="demo22" class="collapse">
     <table class="table table-striped table-condensed dates-tabel">
                                                <thead>

                                                    <tr>
                                                        <th>Dates</th>
                                                        <th>Land Only</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a> <span> (Sold Out)</span></td>
                                                        <td>$2289*</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                </tbody>
                                            </table>
  </div>
  </div> 
   <div class="row">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo23">December</button>
  <div id="demo23" class="collapse">
     <table class="table table-striped table-condensed dates-tabel">
                                                <thead>

                                                    <tr>
                                                        <th>Dates</th>
                                                        <th>Land Only</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a> <span> (Sold Out)</span></td>
                                                        <td>$2289*</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                </tbody>
                                            </table>
  </div>
  </div> 

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                        </div>
                    </div>
                   
                       



                    <div>
                        <div class="dir-rat">
                            <div class="dir-rat-inn dir-rat-title">
                                <h3>Write Your Rating Here</h3>
                                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                                <fieldset class="rating">
                                    <input type="radio" id="star5" name="rating" value="5" />
                                    <label class="full" for="star5" title="Awesome - 5 stars"></label>
                                    <input type="radio" id="star4half" name="rating" value="4 and a half" />
                                    <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                    <input type="radio" id="star4" name="rating" value="4" />
                                    <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                    <input type="radio" id="star3half" name="rating" value="3 and a half" />
                                    <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                    <input type="radio" id="star3" name="rating" value="3" />
                                    <label class="full" for="star3" title="Meh - 3 stars"></label>
                                    <input type="radio" id="star2half" name="rating" value="2 and a half" />
                                    <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                    <input type="radio" id="star2" name="rating" value="2" />
                                    <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                    <input type="radio" id="star1half" name="rating" value="1 and a half" />
                                    <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                    <input type="radio" id="star1" name="rating" value="1" />
                                    <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                    <input type="radio" id="starhalf" name="rating" value="half" />
                                    <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                </fieldset>
                            </div>
                            <div class="dir-rat-inn">
                                <form class="dir-rat-form">
                                    <div class="form-group col-md-6 pad-left-o">
                                        <input type="text" class="form-control" id="email11" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group col-md-6 pad-left-o">
                                        <input type="number" class="form-control" id="email12" placeholder="Enter Mobile"> </div>
                                    <div class="form-group col-md-6 pad-left-o">
                                        <input type="email" class="form-control" id="email13" placeholder="Enter Email id"> </div>
                                    <div class="form-group col-md-6 pad-left-o">
                                        <input type="text" class="form-control" id="email14" placeholder="Enter your City"> </div>
                                       <div class="form-group col-md-6 pad-left-o">
                                        <input type="file" class="form-control" id="" > </div>
                                    <div class="form-group col-md-12 pad-left-o">
                                        <textarea placeholder="Write your message"></textarea>
                                    </div>
                                    <div class="form-group col-md-12 pad-left-o">
                                        <input type="submit" value="SUBMIT" class="link-btn"> </div>
                                </form>
                            </div>
                       
                        </div>
                    </div>
                </div>
                <div class="col-md-3 tour_r">

                </div>
              
                


                <div class="example">
                    <button>Book Now</button>

                </div>

                <div class="tour_right tour_incl tour-ri-com" style="margin-top:93px">



                    <h3>Trip Information</h3>
                    <ul>
                        <li>Location : Egypt</li>

                        <li> Sightseeing & Hotel</li>
                    </ul>
                </div>
                <!--====== PACKAGE SHARE ==========-->
                <div class="tour_right head_right tour_social tour-ri-com">
                    <h3>Share This Package</h3>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                        <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
                    </ul>
                </div>
                <!--====== HELP PACKAGE ==========-->
                <div class="tour_right head_right tour_help tour-ri-com">
                    <h3>Help & Support</h3>
                    <div class="tour_help_1">
                        <h4 class="tour_help_1_call">Call Us Now</h4>
                        <h4><i class="fa fa-phone" aria-hidden="true"></i>+02 22682428</h4>
                    </div>
                </div>
                <!--====== PUPULAR TOUR PACKAGES ==========-->
                <div class="tour_right tour_rela tour-ri-com">
                    <h3>Popular Packages</h3>


@foreach($packages as $pack)
        

                    <div class="tour_rela_1"> 
               <img src="{{asset('storage/tmp/uploads/large').'/'.$package['package_images'][0]->file_path}}" alt="" />
                        <h4>{!! $pack['name'] !!}</h4>
                        <p> {!! str_limit($package->inclusion ,100 )!!}</p>
                        <p> <a href="family-package.html" class="link-btn">View All package</a></p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        </div>
    </section>

    <script>
        $("#b1").click(function () {
    Swal.fire(
        'Download Our Mobile Application And Get 10% Discount',
        'Do You Want To install Our Application',
        'question'
    )
});

    </script>
  @include('layouts.footer')