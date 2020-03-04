<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
    use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;



    protected function authenticated(Request $request, $user)
    {


       
        if($user->status == 'Admin'){

            return redirect('backend/');
        }
        else  
        {
            if(!$user->email_verified_at){
auth()->logout();
     return redirect()->route('login')->with('error','your account not verfiy and please check account ');

}
return redirect()->intended($this->redirectpath());

        

    } 
        
    }

        

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
        
}
