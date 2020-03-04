<?php

namespace App\Http\Controllers\Admin;

use App\Booking;
use App\Http\Controllers\Controller;
use App\Package;
use App\BookingPackageOption;
use PDF;
use App\Product;
use App\Transfers;
use App\Hotel;
use App\booking_complimentary;
use App\booking_site_seeing;
use App\booking_acom;
use Mail;
use App\Mail\sendbooking;

use App\User;


use App\BookingRoomType;
//use App\Booking;

class BookingController extends Controller
{

    public function index()
    {
        $data = Booking::with('package')->latest()->paginate();
        return view('admin.Booking.index', compact('data'));
    }

    public function store()
    {

    }

    public function show($id)
    {
    $Transfers = Transfers::all()->where('booking_id',$id);
    $booking_acom=booking_acom::all()->where('booking_id',$id);
    $data = Booking::where('id',$id)->with('package','booking_package_options','booking_room_types')->first();
    $packages = Package::all()->where('id',$id);
    $booking_site_seeing=booking_site_seeing::all()->where('booking_id',$id);
            $roomdata=BookingRoomType::all()->where('booking_id',$id);

    $booking_complimentary=booking_complimentary::all()->where('booking_id',$id);
    return  view ('admin.Booking.details',compact('data','packages','Transfers','booking_acom','booking_site_seeing','booking_complimentary','roomdata'));


    }



    public function edit($id)
    {
        $data = Booking::where('id',$id)->with('package','booking_package_options','booking_room_types')->first();
        $packages = Package::all();

        return view('admin.Booking.edit', compact('data','packages'));
    }

   
    public function destroy($id)
    {
        //
        Booking::findOrFail($id)->delete();
        return redirect()->back();
 
   }


   public function Trensfer($id)
   {
      
    $data = Booking::where('id',$id)->with('package','booking_package_options','booking_room_types')->first();
    $packages = Package::all();
    $Transfers = Transfers::all()->where('booking_id',$id);



    return view('admin.Booking.Transfers', compact('data','packages','Transfers'));
  }

  public function complimentry($id)
  {
     
   $data = Booking::where('id',$id)->with('package','booking_package_options','booking_room_types')->first();
   $packages = Package::all();
    $complimentry = booking_complimentary::all()->where('booking_id',$id);

   return view('admin.Booking.complimentry', compact('data','packages','complimentry'));
 }


 public function complimentryup($id)
 {

   // dd(request()->all());
 foreach (request('item_name') as $key => $value) {
    $add = new booking_complimentary();
    $add->name_c =request('item_name.'.$key);
    $add->description_c =request('description.'.$key);
    $add->booking_id =$id;
    $add->save();
    return back();
}


 }
  public function siteseeing($id)
  {
     
   $data = Booking::where('id',$id)->with('package','booking_package_options','booking_room_types')->first();
   $packages = Package::all();
   $booking_site_seeing = booking_site_seeing::all()->where('booking_id',$id);

   return view('admin.Booking.siteseeing', compact('data','packages','booking_site_seeing'));
 }

  
 public function siteseeingup($id)
 {

   // dd(request()->all());
 foreach (request('date_s') as $key => $value) {
    $add = new booking_site_seeing();

    $add->date_s =request('date_s.'.$key);
    $add->s_name =request('s_name.'.$key);
    $add->places =request('places.'.$key);
    $add->s_time =request('s_time.'.$key);
    $add->tour =request('tour.'.$key);

    $add->booking_id =$id;
    $add->save();
        return back();

}

 }

  public function update($id){
 //   dd(request()->all());


      foreach (request('item_name') as $key => $value) {
      $add = new Transfers();
      $add->date_t =request('item_name.'.$key);
      $add->type =request('type.'.$key);
      $add->city =request('city.'.$key);

      
      
      $add->from_t =request('from.'.$key);
      $add->to_t =request('to.'.$key);
      $add->arrive_via =request('arrive_via.'.$key);
      $add->arrive_at =request('arrive_at.'.$key);
      $add->receiver_name =request('receiver_name.'.$key);
      $add->phone =request('phone.'.$key);
      $add->booking_id =$id;
      $add->save();

return back();
}


  }
public function update_tr($id){
 $da=Transfers::find($id);   

$da->date_t= request()->input('date');
$da->type=request()->input('sele');
$da->city =request('city');

$da->from_t=request()->input('form');
$da->to_t=request()->input('to');
$da->arrive_via=request()->input('arrive_via');
$da->arrive_at=request()->input('arrive_at');
$da->receiver_name=request()->input('receiver_name');
$da->phone=request()->input('phone');


$da->save();
return back();
}




public function update_Acc($id){
 $da=booking_acom::find($id);   

$da->d_from= request()->input('date');
$da->d_to=request()->input('date1');
$da->hotel=request()->input('hotel');
$da->location=request()->input('location');
$da->notes=request()->input('notes');
$da->save();
return back();


}
public function update_site($id){
 $da=booking_site_seeing::find($id);   

$da->date_s= request()->input('date');
$da->s_name=request()->input('s_name');
$da->places=request()->input('places');
$da->s_time=request()->input('s_time');
$da->tour=request()->input('tour');
$da->save();
return back();
}

public function update_comp($id){
 $da=booking_complimentary::find($id);   

$da->name_c= request()->input('name_c');
$da->description_c=request()->input('description_c');

$da->save();
return back();
}




   public function pdf($id)
   {
       $booking_acom=booking_acom::all()->where('booking_id',$id);
       $roomdata=BookingRoomType::all()->where('booking_id',$id);
       $booking_Trans=Transfers::all()->where('booking_id',$id);
       $BookingPackageOption=BookingPackageOption::all()->where('booking_id',$id);

       $booking_site_seeing=booking_site_seeing::all()->where('booking_id',$id);
       $booking_complimentary=booking_complimentary::all()->where('booking_id',$id);

       $data = Booking::find($id);
       $user=User::all()->where('email',$data['email']);

       $filename=$data->id;
       $pdf = PDF::loadView('admin.Booking.pdf',compact('data','roomdata','booking_Trans','booking_site_seeing','booking_complimentary','booking_acom','BookingPackageOption','user'))->setPaper('a4', 'portrait');
       return $pdf->stream( $filename,'.pdf');

   }





 public function accomup($id)
 {

 $roomdata=BookingRoomType::all()->where('booking_id',$id);
 $booking= Booking::find($id); 

 foreach (request('date_f') as $key => $value) {
    $add = new booking_acom();

    $add->d_from =request('date_f.'.$key);
    $add->d_to =request('date_t.'.$key);
    $add->hotel =request('hotel.'.$key);
    $add->location =request('location.'.$key);
    $add->notes =request('notes.'.$key);
    $add->meals=request('meals.'.$key);
    $add->booking_id =$id;
    $add->save();

    $hotels=request('hotel.'.$key);
    $hotel_id = Hotel::where('name' , '=', $hotels)->first();
    $name=$hotel_id->name;
    $email=$hotel_id->email;
    $data= 'Hello '.  $name. ' There  are  a new Booking in Your Property From cadence Vacations Center Details : | start from  : '.request('date_f.'.$key)  .' | End in  : ' .request('date_t.'.$key) ." | Meals : ".request('meals.'.$key). " | Notes : ".request('notes.'.$key);

 Mail::send(new sendbooking($email,$data,$roomdata,$id, $booking) ) ;
    
    return back();

}

 }

   
  public function siteing($id)
  {
  
   $data = Booking::where('id',$id)->with('package','booking_package_options','booking_room_types')->first();
   $packages = Package::all();
   $booking_acom = booking_acom::all()->where('booking_id',$id);

   return view('admin.Booking.acces', compact('booking_acom','data'));

 }
 
 


}
