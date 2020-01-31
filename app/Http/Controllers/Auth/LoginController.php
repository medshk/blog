<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Auth;
use Illuminate\Http\Request;
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
        $this->middleware('guest:candidate')->except('logout');
        $this->middleware('guest', ['except' => ['logout', 'logout']]);
    }

    public function candidate_login(Request $request)
    {
       $this->validate($request ,[
        'email' => 'required|email',
        'password' => 'required'
         ] );

    
       
  

         if(auth::guard('candidate')->attempt(['email' => $request->email,'password'=> $request->password],$request->get('remember')))
         {
            // dd($request->get('remember'));
            return redirect('guest');
        }
            else return "failure";
    }

    public function recruteur_login(Request $request)
    {
        
        $this->validate($request ,[
        'email' => 'required|email',
        'password' => 'required'
         ] );


         if(auth::guard('recruteur')->attempt(['email' => $request->email,'password'=> $request->password],$request->get('remember')))
         {
            
            return redirect('/recruteur');
        }
            else return "failure";

    }



    // logout the user whether it is candidate or recruteur

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();
    
        return $this->loggedOut($request) ?: redirect('guest');
    }
}
