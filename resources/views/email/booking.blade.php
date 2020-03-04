<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet">
<style>
    body {
    margin: 0%;
    padding: 0%;
}

.outer-panel {
    width: 60%;
    padding: 1% 7%;
    background-color: rgb(0, 0, 0, 0.059);
}

.container {
    display: flex;
    justify-content: center;
}


/* .inner-panel .mt-3 
{
    text-align: center;
} */

.inner-panel p {
    text-align: center;
    font-size: 15px;
}

.inner-panel {
    background-color: rgb(255, 255, 255, 0.55);
    box-shadow: 1px 2px 10px rgb(0, 0, 0, 0.34);
}


/* .outer-panel h2{
    text-align: center;
} */

.content h5 {
    margin-top: 25px;
}

.complete-verfiy .btn-complete {
    color: yellow;
    border: 2px solid #4caf50;
}

.social i {
    /* color: rgb(54, 52, 102); */
    color: #007bff;
    padding: 10px;
    margin-top: 10px;
}

.list {
    text-align: center;
}

.list .order-list ul li {
    text-align: center;
    list-style: none;
}

.mobile {
    margin-top: 10px;
    padding-bottom: 5px;
}

.btn-outline {
    margin-bottom: 23px;
    background: #f18411;
    color: white;
    padding: 12px;
    border: none;
    font-size: 13px;
    font-weight: 700;
    cursor: pointer;
}
</style>

</head>
<body>
        <div class="container">
        <div class="outer-panel text-center rounded">
            <i class="far fa-bookmark p-2"></i>
            <div class="inner-panel rounded">
                <div class="row">
                    <div class=" col-lg-12">
                    </div>
                    <div class="col-lg-12 col-sm-12">
                        <img src="{{ asset('frontend/images/unnamed.png') }}" width="90%" height="80%">
                    </div>
                    <div class="col-lg-12" style="text-align:center;">
                        <h4>Booking Information</h4>
                        
                        <h5>File Number :  {{ $id }}</h5>
                        <h5>Program  Name :  {{ $booking->package->name }}</h5>
                        <p>{{$data}}</p>
                        
                        

          
          
          
          
          
          
                    
                    
    <div class="accomidation_details"  style="margin-top:20px;">
        <h6 style="color:#ec991f;">Room Types</h6>
        <ul>

        
        
        
                  Passinger information : 
        
        <br>
        
        @foreach($roomdata as $room)
        
 
              Name: {{$room->gender}}  {{$room->first_name}} {{$room->last_name}}   |    {{$room->nationality}}  |  
               @if($room->room_type ==1)
                single
              @elseif($room->room_type ==2)
                 double
                 @elseif($room->room_type ==3)
                 triple
              @endif
             | {{$room->room_smok}} 
    
              <br>
          
@endforeach
<hr>




        </ul>
        </div>

                    
                    
                    </div>
                </div>
                <div class="btn-visit">
    <!--                <button type="button" class="btn btn-outline btn-danger" style="margin-bottom: 23px;-->
    <!--color: white"> verify E.mail Address</button>-->
    
                </div>
            </div>
        </div>
    </div>
   
    
<!--<p>-->
<!--                            Hi Paul, you're almost ready to start enjoying hailo.-->
<!--                            <br> simply click the big orange button below to verify your-->
<!--                            <br> email address-->
<!--                            <br> Your Id #89522-->
<!--                        </p>-->

</body>
</html>