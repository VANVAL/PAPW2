<?php

namespace App\Http\Controllers\Auth;

use App\User;
<<<<<<< HEAD
=======
use App\Role; 
>>>>>>> 1fcba7726d7bf3c66bf90416c2f335c6932542c5
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

<<<<<<< HEAD
=======

>>>>>>> 1fcba7726d7bf3c66bf90416c2f335c6932542c5
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
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
<<<<<<< HEAD
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
=======
        
         $user = User::create([
              'name'     => $data['name'],     
              'email'    => $data['email'],     
              'password' => Hash::make($data['password']),   
          ]);   
         $user->roles()     
         ->attach(Role::where('name', 'cliente')->first());   

         return $user;



      
>>>>>>> 1fcba7726d7bf3c66bf90416c2f335c6932542c5
    }
}
