<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;


class UserController extends Controller
{
    //
    public function profile(){
    	return view('layouts.Profile2', array('user'=> Auth::user()));
	}

	public function main(){
    	return view('layouts.main', array('user'=> Auth::user()));
	}

	public function navbar(){
    	return(array('user'=> Auth::user()));
	}

	public function configure(){
    	return view('layouts.edit', array('user'=> Auth::user()));
    }

    public function update_avatar(Request $request){
    	
    	if ($request->hasFile('avatar')) {
    		$avatar = $request->file('avatar');
    		$filename=time().'.'.$avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/'.$filename ));

    		$user=Auth::user();
    		$user->avatar=$filename;
    		$user->save();	
    		
    	}
    	return view('layouts.Profile2', array('user'=> Auth::user()));
    	
    }
}
