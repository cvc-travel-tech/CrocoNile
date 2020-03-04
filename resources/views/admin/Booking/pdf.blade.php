<html>
 <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet">


 </head>
 <body>
<div class="row" style="height:150px;">
    <div class="col-md-6">
        <img style="width:110px; " src="{{ asset('frontend/images/final logo-03 (1).png') }}" >
        </div>
        <div class="col-md-6">
           
              
                   <li style="margin-left:400px;list-style-type:none;" >  
                   <h5>Email :   {{$data->email}}</h5>
                   </li>
                   <li style="margin-left:400px;list-style-type:none;" >  
                   <h5>Phone :   {{$data->phone}}</h5>
                   </li>

                
            </div>
    </div>
    
<hr>
<h5 style="text-align:center;">Egypt Service Voucher</h5>
 <h5 style="text-align:left; text-align:center; margin-bottom:35px;">      File Number : {{$data->id}} </h5>
 <ul style="list-style:none;">
     <li>
        <h5>
    To Destination Company Email &nbsp; &nbsp; {{$data->email}}
</h5> 
     </li>
     <!--<li>-->
     <!--    <h5>Client Name &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;   Abdullah</h5>-->
     <!--</li>-->
     <li>
         <h5 style="text-align:left;">
    Package Name &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  {{$data->package->name}}
</h5>
     </li>
     <li>
          <h5 style="text-align:left"> Arrival Date &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->res_at}}</h5>
     </li>
     <li>
         <h5 style="text-align:left">Departure Date &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;{{$data->created_at}}</h5>
     </li>
     <li>
         <h5>Accommodation Type &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 1 Room</h5>
     </li>
     <li>
         <h5 style="text-align:left"> Tour Guide Gender &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;
                                  
                                  @if($data->gender==1)
                                  female
                                  @elseif($data->gender==2)
                                 male
                                  @endif
                           </h5>
     </li>
     <li>
         <h5 style="text-align:left"> Language &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
                               
    @if($data->language==1)
                                  german
                                  @else if($data->Language==2)
                                 english
                                  @endif    
</h5>
     </li>
     
 </ul>
<!--<div class="row">-->
<!--    <div class="col-md-6">-->
<!--        <h5 style="text-align:center;">-->
<!--    To Destination Company Email : {{$data->email}}-->
<!--</h5>-->
        
<!--    </div>-->
    
<!--</div>-->
<!--<div class="row">-->
<!--    <div class="col-md-6">-->
<!--        <h5 style="text-align:center;">Client Name:Abdullah</h5>-->
        
<!--    </div>-->
   
    
<!--</div>-->
<center>
    <div>
<ul>
                          <!--<h5 style="text-align:left">      File Number : {{$data->id}} </h5>-->
<!--<h5 style="text-align:left">-->
<!--    To Destination Company Email : {{$data->email}}-->
<!--</h5>-->


<!--<h5 style="text-align:left;">-->
<!--    Package Name : {{$data->package->name}}-->
<!--</h5>-->



        <!--<h4 style="text-align:left"> Tour Guide Gender :-->
                                  
        <!--                          @if($data->gender==1)-->
        <!--                          female-->
        <!--                          @elseif($data->gender==2)-->
        <!--                         male-->
        <!--                          @endif-->
        <!--                   </h4>-->

<!--                         <h4 style="text-align:left"> Language :-->
                               
<!--    @if($data->language==1)-->
<!--                                  german-->
<!--                                  @else if($data->Language==2)-->
<!--                                 english-->
<!--                                  @endif    -->
<!--</h4>-->

  <!--<h4 style="text-align:left"> Reservation Date : {{$data->res_at}}</h4>-->
<!--<h4 style="text-align:left">created At:  {{$data->created_at}}</h4>-->

</div>
 </center>
 <h5 style="text-align:center; margin-bottom:35px;">Please Provide The Following Services</h5>

 <h5 style="margin-left:30px;">Accommodation(1 Room): </h5>
 
 <div>
 {!! $data->Accommodation !!}
  @foreach($booking_acom as $acoms)
<ul>
    <li>{{$acoms->d_from}} / {{$acoms->d_to}} /{{$acoms->hotel}} /{{$acoms->location}} / {{$acoms->notes}}</li>
 
</ul>@endforeach	
 </div>


 <h5 style="margin-left:35px;">Transfers : </h5>
 

@if($booking_Trans != '')
 @foreach($booking_Trans as $value)



<li style="margin-left:35px; margin-bottom:20px;">{{$value['date_t'] ." " ." ". $value['type'] ." from " .  $value['from_t']  ." " . " to " . $value['to_t'] .", via " . $value['arrive_via'] . " at " . $value['arrive_at']  ." | receiver name". $value['receiver_name'] 
." | phone ". $value['phone']   }}</li>

@endforeach

@else

<p>No Transfers is added</p>

@endif
<h5 style="margin-left:35px">Sightseeing: </h5>
<li style="margin-left:35px"> 

@if($booking_site_seeing != '')
 @foreach($booking_site_seeing as $seeing)


<li style="margin-left:35px">{{$seeing['date_s'] ."  " ." | ". $seeing['s_time'] ." | ".$seeing['s_name'] ." | ".$seeing['places'] ." | "."Tour Gauid :" .$seeing['tour']   }}</li>

@endforeach

@else

<p>No Transfers is added</p>

@endif
</li>
<h5 style="margin-left:35px"> Domestic Flight Passanger Number :  {{$data->num_dom }}</h5>
 </ul>
 </div>
<div>
        <h5 style="margin-left:35px">Optional Tours</h5>
    <ul>
     @foreach($BookingPackageOption as $key => $value)
         <li>{{$value->package_option->name}} / {{$value->no_of_pax}}  /  {{$value->price}}</li>
  
                                @endforeach
        </ul>
        
            <h5 style="margin-left:35px">Complimentary Items</h5>
            <li style="margin-left:35px">
            @if($booking_complimentary != '')
 @foreach($booking_complimentary as $comp)



<li style="margin-left:35px">{{$comp['name_c'] ." " ." | ". $comp['description_c']    }}</li>

@endforeach

@else

<p>No Complimentary is added</p>

@endif
            
        </li>
        
        </div>
        







 <h5 style="margin-left:35px">Itenary</h5>
    <ul>

         <li>{!! $data->package->itinerary!!} </li>
         
        </ul>
        </div>
        
        
        

 <!--<h3>Included Sightseeing: </h3>-->
 <!--<div>-->

 
<!-- <ul>-->

<!--@if($booking_site_seeing != '')-->
<!-- @foreach($booking_site_seeing as $seeing)-->


<!--<li>{{$seeing['date_s'] ."  " ." | ". $seeing['s_time'] ." | ".$seeing['s_name'] ." | ".$seeing['places'] ." | "."Tour Gauid :" .$seeing['tour']   }}</li>-->

<!--@endforeach-->

<!--@else-->

<!--<p>No Transfers is added</p>-->

<!--@endif-->
<!-- </ul>-->


<!-- </div>-->




 
 

<h5 style="margin-left:35px">Special Requirements:</h5>

<ul>
    <li>{{$data->special_requirements}}</li>
</ul> 




<!--<h2> Domestic Flight Passanger Number : {{$data->num_dom }} </h2>-->



 <h5 style="margin-left:20px">Passenger information </h5>
<br>
 <div>
 <table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">F.Name</th>
      <th scope="col">L.Name</th>
      <th scope="col">Gander</th>
      <th scope="col">Phone</th>
      <th scope="col">Nationality</th>
    </tr>
  </thead>


  <tbody>

@foreach($roomdata  as $value)



    <tr>
      <td>{{ $value['first_name'] }}</td>
      <td>{{ $value['last_name'] }}</td>
      <td>{{ $value['gender'] }}</td>
      <td>{{ $value['phone'] }}</td>
      <td>{{ $value['nationality'] }}</td>

    </tr>
 
@endforeach


  </tbody>
</table>
 
 </div>


 </body>
</html>