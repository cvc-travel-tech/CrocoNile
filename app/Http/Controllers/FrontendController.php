<?php

namespace App\Http\Controllers;

use App\Booking;
use App\BookingPackageOption;
use App\BookingRoomType;
use App\Destination;
use App\Hotel;
use App\PackageOption;
use App\Repositories\BlogRepository;
use App\Repositories\PackageRepository;
use App\Images;
use App\PackagePrice;
use App\Package;
use App\Blog;
use App\booking_complimentary;
use App\booking_acom;
use App\booking_site_seeing;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;
use App\Mail\sendbooking;

use App\Transfers;



class FrontendController extends Controller
{
    private $Blog;
    private $Package;

    public function __construct(BlogRepository $Blog, PackageRepository $Package)
    {
        $this->Blog = $Blog;
        $this->Package = $Package;
        $this->middleware('auth', ['only' => ['Pack']]);

    }


   


 public function my_profile($id)
    {
        
         $user = auth()->user();
        $Booking = Booking::where('email',$user->email)->get();

         return view('my_profile',compact('Booking'));
      
    }
    
    
    
     public function booking_d($id)
    {
        $comp=booking_complimentary::all()->where('booking_id',$id);
        $booking_Trans=Transfers::all()->where('booking_id',$id);
        $data = Booking::where('id',$id)->with('package','booking_package_options','booking_room_types')->first();
        $packages = Package::all();
        $booking_acoms=booking_acom::all()->where('booking_id',$id);
        $Booking_D = Booking::find($id);
        
        $booking_site_seeing=booking_site_seeing::all()->where('booking_id',$id);

        $roomdata=BookingRoomType::all()->where('booking_id',$id);



        $roomdata=BookingRoomType::all()->where('booking_id',$id);
        
        

        return view('booking_history',compact('Booking_D','roomdata','booking_Trans','data','packages','comp','booking_acoms','booking_site_seeing'));
        
    }
    
    
    
    public function index()
    {

        $features = setting('site', 'features');       
        $destinations = Destination::orderBy('id','ASC')->latest()->limit(6)->withCount('Hotels')->with('tmpImg', 'Img')->get();
        $Package = Package::latest()->limit(5)->with('package_prices')->get();


         $hotels = Hotel::latest()->limit(8)->get();

         $titles = json_encode(collect(setting('site', 'titles'))->pluck('tital'));

         $about = setting('about', 'content');       

         return view('index', compact('features', 'titles', 'destinations', 'hotels', 'Package','about'));
    }


    public function about()
    {
        $titles = json_encode(collect(setting('site', 'titles'))->pluck('tital'));

        return view('about', compact('titles'));
    }







 public function booking(Request $request)
    {
    
        $id=$request->id;
        $date=$request->date;

        return view('booking',compact('id','date'));
    }








    public function invoice()
    {     
        


$preroomnight=0;
$postroomnight=0;
$d=0;
$e=0;


if(request('pre_acc_check') == 'on'){
    
$preroomnight=request('pre_acc_night') * request('pre_pax_night');

if(request('pre_pax_night') == 1){
$package_price_hotle =PackagePrice::where('package_id',request('id'))->first()->hotel_solo;
}else{

$package_price_hotle =PackagePrice::where('package_id',request('id'))->first()->hotel_p_p;
}

 $d =$package_price_hotle * $preroomnight;

}



if(request('post_acc_check')=='on'){

$postroomnight=request('post_acc_night') * request('post_pax_night');

if(request('post_pax_night') == 1){
$package_price_hotle =PackagePrice::where('package_id',request('id'))->first()->hotel_solo;
}else{

$package_price_hotle =PackagePrice::where('package_id',request('id'))->first()->hotel_p_p;
}
$e= $package_price_hotle * $postroomnight;
}






/////////////////////////////////////////////////////////////////////////////



    $h=request()->all();



 if(request('nrGame') == 1 && request('room_type')[0] == 'Solo'  ){
      $u=request('no_of_adult')[0];
      $package_price =PackagePrice::where('package_id',request('id'))->first()->solo;


 }
 
 
 else if(request('nrGame') == 1 && request('room_type')[0] == 'Single' ) {
     $u=request('no_of_adult')[0];
     $package_price =PackagePrice::where('package_id',request('id'))->first()->solo;
 }


 else if(request('nrGame') == 1 && request('room_type')[0] == 'double' ) {

     $u=request('no_of_adult')[0];
     $package_price =PackagePrice::where('package_id',request('id'))->first()->p_p;
     

 }
else if(request('nrGame') == 1 && request('room_type')[0] == 'double_chd' ) {

     $u=request('no_of_adult')[0];
     $package_price =PackagePrice::where('package_id',request('id'))->first()->p_p;
     

 }
 else if(request('nrGame') == 1 && request('room_type')[0] == 'twin' ) {

     $u=request('no_of_adult')[0];
     $package_price =PackagePrice::where('package_id',request('id'))->first()->p_p;
     

 }

  else if(request('nrGame') == 1 && request('room_type')[0] == 'twin_chd' ) {

     $u=request('no_of_adult')[0];
     $package_price =PackagePrice::where('package_id',request('id'))->first()->p_p;
     

 }
else if(request('nrGame') == 1 && request('room_type')[0] == 'Triple' ) {

     $u=request('no_of_adult')[0];
     $package_price =PackagePrice::where('package_id',request('id'))->first()->three_person;

 }


else if(request('nrGame') >1   ) {
//dd(request('room_type'));
     $u=request('no_of_adult')[0];
     $package_price =PackagePrice::where('package_id',request('id'))->first()->three_person;
$s ='';
     foreach (request('room_type' ) as $a){      
     }

 }


else {





 }


$Package=Package::find(request('id'));


 //dd($Package['name']);
     $packages = PackageOption::all()->where('package_id',request('id'));

     return view('invoice' ,compact('package_price','h','packages','u','d','e','Package'));

    }



public function travel_free()
    {
      //  $titles = json_encode(collect(setting('site', 'titles'))->pluck('tital'));

        return view('travel-free');
    }


public function family_package()
    {
      //  $titles = json_encode(collect(setting('site', 'titles'))->pluck('tital'));
        $Package = Package::latest()->limit(5)->with('package_prices')->get();

        return view('family-package',compact('Package'));
    }
    
public function input()
    {
      //  $titles = json_encode(collect(setting('site', 'titles'))->pluck('tital'));

        return view('input');
    }

        
public function luxor()
    {
     
        return view('luxor');
    }

    public function blog()
    {
        $blogs = $this->Blog->getQuery();
        $Blog=Blog::latest()->limit(8)->get();
                $titles = json_encode(collect(setting('site', 'titles'))->pluck('tital'));
        return view('blog', compact('blogs','titles','Blog'));
    }




    

    public function destinations()
    {
        $destinations = Destination::orderBy('id','ASC')->latest()->withCount('Hotels')->with('tmpImg', 'Img')->get();

        return view('destinations', compact('destinations'));
    }


    public function contact()
    {
        return view('contact');

    }
    public function profile()
    {
        return view('profile');

    }

 public function personal_info()
    {
        $h=request()->all();

        return view('personal-info',compact('h'));

    }

 
      public function blog_inner()
    {
        return view('blog-inner');

    }
       public function login()
    {
        return view('login');

    }

    
    public function contactt()
    {
        return view('index');

    }



 public function register()
 {
        return view('registerr');
 }



    public function khartoshaa()
    {
        return view('input');

    }



    public function travelforfree()
    {
        return view('contact');

    }
    

public function optional()
    {
        return view('optional');

    }



    public function logiin()
    {
        return view('loginn');

    }



    public function Packages_details($slug)
    {

        $package = $this->Package->findOrFail($slug);
        $packages = Package::latest()->limit(2)->get();

        $package['package_images'] = Images::whereIn('id', $package->images)->get();

        if (PackagePrice::where('package_id', $package->id)->count() > 0) {
            $apckage['prices'] = PackagePrice::where('package_id', $package->id)->first();
        }
    

     $package_price =PackagePrice::where('package_id',$package->id)->first();

        return view('tour-details', compact('package','apckage','package_price','packages'));
    }




    public function blog_details($id)
    {
        $Blog = Blog::find($id);
        return view('blog-details', compact('Blog'));
    }



  

   


public function saveBooking(Request $request){
        
        

        $dombefor=0;
        if(request()->input('one') == 'on'){
            $dombefor=request()->input('collo');
            
        }
$user = auth()->user();
$curTime = new \DateTime();
$created_at = $curTime->format("Y-m-d H:i:s");

        $verification_code = rand(pow(10, 3), pow(10, 4) - 1);

        $booking_id = DB::table('bookings')->insertGetId([
            'payment_method' => 1,
            'package_id' => request('package_id'),
            'email' => $user->email,
            'verification_code' => $verification_code,
            'phone' =>$user->phone,
            'special_requirements' => $request->input('customer_notes'),
            'num_dom' =>$dombefor,
            'gender' => $request->input('tourgander'),
            'language' => $request->input('tourlang'),
            'no_of_children' => $request->input('chiled'),
            'res_at' => $request->input('date_du'),
            'total_price' => $request->input('x'),
            'created_at' =>$created_at,

        
        ]);
        
           
           
        

        $index_loop = 0;

    foreach (request('room_type') as $key => $value) {

            for ($i = $index_loop; $i < $value + $index_loop; $i++) {
                DB::table('booking_room_types')->insert([
                    'booking_id' => $booking_id,
                    'room_type' => $value,
                    'room_smok'=>request('room_smoking.' . $key),
                    'gender' => request('gender.' . $i),
                    'first_name' => request('first_name.' . $i),
                    'last_name' => request('last_name.' . $i),
                    'phone' => request('phone.' . $i),
                    'nationality' => request('nationality.' . $i),
                ]);
            }

            $index_loop += $value;

    }




        foreach (request('package_options') as $key => $value) {
            $option_price = PackageOption::where('id', $value)->first()->price;
            BookingPackageOption::create([
                'booking_id' => $booking_id,
                'package_option_id' => $value,
                'no_of_pax' => request('no_of_pax')[$key],
                'price' => $option_price,
            ]);
        }





  $data['mainemail'] = 'info@cvc.vacations';
    $data ['level'] = 'success';
           
           
        $data['introLines'] = ['There are an resarvation'];
           
           
                  $data['outroLines'] = ['Please check the Admin panel!'];
    sendEmail($data);
    
    

         return   redirect('/')->with('success', 'Your request has been registered successfully. Please check Your Profile');
    }
    
    





    public function destinations_details($id)
    {
        $hotels = Hotel::all()->where('destination_id', $id);
        $destinations_details = Destination::find($id);
        return view('destinations_details', compact('destinations_details', 'hotels'));
    }





    public function hotel_ditails($id)
    {
        $hot = Hotel::find($id);
        return view('hotel_ditails', compact('hot'));
    }


    public function Pack()
    {
        $Package = Package::all();
        return view('Pack', compact('Package'));
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




}
