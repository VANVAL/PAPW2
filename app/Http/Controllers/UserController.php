<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;


class UserController extends Controller
{
    //
    public function profile(){
    	return view('layouts.Profile', array('user'=> Auth::user()));
	}

	public function main(){
    	return view('layouts.main', array('user'=> Auth::user()));
	}

	public function navbar(){
    	return(array('user'=> Auth::user()));
	}

	public function configure(){
    	return view('layouts.configurations', array('user'=> Auth::user()));
    }

    public function update_avatar(Request $request){
    	
    	if ($request->hasFile('avatar')) {
      

    		$avatar = $request->file('avatar');
            $cover = $request->file('cover');
            
    		$filename=time().'.'.$avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/'.$filename ));

           /* $filename2=time().'.'.$cover->getClientOriginalExtension();
            Image::make($cover)->resize(851,315)->save(public_path('/uploads/covers/'.$filename2 ));*/

    		$user=Auth::user();
    		$user->avatar=$filename;
            //$user->cover=$filename2;
             $user->cover=$user->cover;
            $user->name = $request->get('UserName');
            $user->FechNac = $request->get('Bday');
            $user->desc = $request->get('About');
            $user->gender = $request->get('Gender');
            $user->save();  
    		
    	}

        if ($request->hasFile('cover')) {
      

            $avatar = $request->file('avatar');
            $cover = $request->file('cover');
            
            /*$filename=time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/'.$filename ));*/

            $filename2=time().'.'.$cover->getClientOriginalExtension();
            Image::make($cover)->resize(851,315)->save(public_path('/uploads/covers/'.$filename2 ));

            $user=Auth::user();
           // $user->avatar=$filename;
            $user->avatar=$user->avatar;
            $user->cover=$filename2;
             //$user->cover=$user->cover;
            $user->name = $request->get('UserName');
            $user->FechNac = $request->get('Bday');
            $user->desc = $request->get('About');
            $user->gender = $request->get('Gender');
            $user->save();  
            
        }
        else
            {
            $user=Auth::user();
            $user->name = $request->get('UserName');
            $user->FechNac = $request->get('Bday');
            $user->desc = $request->get('About');
            $user->gender = $request->get('Gender');
            $user->save();  
            }

    	return view('layouts.Profile', array('user'=> Auth::user()));
    	
    }
}
