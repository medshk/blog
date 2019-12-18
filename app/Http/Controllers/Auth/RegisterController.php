<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Candidate;
use App\Recruteur;

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
    protected $redirectTo = '/home';

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
       
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
      
    }

    public function create_candidate(Request $request)
    {
        $this->validate($request ,[
            'nom' => ['required', 'string', 'max:15'],
            'prenom' => ['required', 'string', 'max:15'],
            'email' => ['required', 'string', 'email', 'max:30'],
            'password' => ['required', 'string', 'min:8'],
            'civilite' => 'required',
             ] );
            
         Candidate::create([
            'civilite' => "Mr",
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' =>$request->input('email'),
            'password' => Hash::make($request->password),
        ]);
        return redirect('success');
    }
    public function create_recruteur(Request $request)
    {

        $this->validate($request ,[
            'nom' => ['required', 'string', 'max:15'],
            'num_tel' => ['required', 'alphanum', 'max:10'],
            'email' => ['required', 'string', 'email', 'max:30'],
            'password' => ['required', 'string', 'min:8'],
            'type' => 'required',
             ] );

      Recruteur::create([
            'nom' => $request['nom'],
            'type' => $request['type'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'num_tel' => $request['num_tel'],
        ]);
        return redirect('success');
    }


   

}
