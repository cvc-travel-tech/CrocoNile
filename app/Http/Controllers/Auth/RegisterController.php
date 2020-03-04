<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\verfiy;
use App\verify_users;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      

        $user= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'url' => $data['url'],
            'city' => $data['city'],
            'phone' => $data['phone'],

            'status' =>'user',

        ]);
    
$verfiy1=new verify_users();
$verfiy1->user_id=$user->id;
$verfiy1->token=Str_random(50);
$verfiy1->save();
    
        mail::to($user->email)->send(new verfiy($user));
        return   $user;
    }   protected function registered(Request $request, $user)
    {
        $this->guard()->logout();
        return redirect()->route('login')->with('success','please check account and verfiy');
    }
    public function verfiy($token)
    {
        $verify_user=verify_users::where('token',$token)->firstorfail();

        if($verify_user->user->email_verified_at){
                    return redirect()->route('login')->with('error','this email aready verfiy ');

        }else{
            $verify_user->user->email_verified_at=true;
              $verify_user->user->save();
            return redirect()->route('login')->with('success',' your account has been verfiy successful and can you login now ');
        } 
    }
}
