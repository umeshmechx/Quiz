<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;

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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


       // ********************************************************************************
    public function redirectToProvider($service)
    {
       // return Socialite::driver('facebook')->redirect();
       // return  Socialite::driver($service)->redirect();
       return  Socialite::driver($service)->stateless()->user();
    }

   
    public function handleProviderCallback($service)
    {
       if($service == 'google')
       {
             $user = Socialite::driver($service)->stateless()->user();
        }
         elseif ($service == 'facebook') 
         {
            $user = Socialite::driver($service)->user();
        }

        $findUser = user::where('email',$user->getEmail())->first();
        
        if($findUser)
        {
            Auth::login($findUser);

        }
        else
        {
           
           $newUser = new user();
           $newUser->email = $user->getEmail();
           $newUser->name = $user->getName();
           $newUser->password = bcrypt(123456);
           $newUser->save();

           Auth::login($newUser);

        }

            return redirect('home');
    }
        
    
}
