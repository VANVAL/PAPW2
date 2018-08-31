<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    /*public function index()
    {
       // $users=User::all();
        //return view::make('home')->with('users', $users);
       // return view('home');
    }*/

    public function index()
    {
<<<<<<< HEAD
       /* $users=User::all();
        return view::make('home')->with('users', $users);*/
        //return view('home');

        $users=User::all()->toArray();
        return view('home', compact('users'));
=======
        return view('home');
>>>>>>> Se añadieron los archivos modificados por el profe uwu
    }
}
//siraj raval  weas de progra en youtube