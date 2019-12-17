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
    }

    public function candidate_login(Request $request)
    {
       /* $this->validate($request ,[
        'email' => 'required|email',
        'password' => 'required'
         ] );*/

        
         $dataAttempt = array(
            'email' => $request->input('email'),
            'password' => $request->input('password')
        );
       
  

         if(auth::guard('candidate')->attempt(['email' => $request->email,'password'=> $request->password],$request->get('remember')))
         {
             //dd(auth::guard('candidate')->check());
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


         if(auth::guard('recruteur')->attempt(['email' => $request->email, 'password' => $request->password ]))
         {
            return redirect('guest');}
            else return "failure";

    }
}
