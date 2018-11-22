<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use App\Http\Controllers\View;
use DB;
use App\User;




class ContentController extends Controller
{
    //
	public function ver_contenido(){
  /* $contents= \App\Contenido::all();
        return View::make('layouts.main')->with('contents',$contents);*/

		//Esta es la buena----------------------------
       $contents= \App\Contenido::all();
        return view('layouts.main')->with('contents',$contents);
        //----------------------------------------------------------
       /* $data=DB::table('users')->get();
        echo "<pre>";
        print_r($data);*/



        /*$contents = DB::select('select multimedia from contenidos');
		return view('layouts.main',['contents'=>$contents]);*/
	}

    public function search(Request $request){

        $search=$request->get('txt_busca');
        $contents=DB::table('contenidos')->where('hashtag1','like', '%'.$search.'%')->paginate(10);
        return view('layouts.main', ['contents' => $contents]);
    }

    

	public function ver_usuario(){
  		return view('layouts.upload', array('user'=> Auth::user()));
	}



    public function save_contenido(Request $request)
    {

        $user=Auth::user();
        $nombre="";
        
        if($request->hasfile('multimedia')){
            $file=$request->file('multimedia');
            //$nombre=$file->getClientOriginalName();
            $nombre=time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/uploads/contents/', $nombre);
           // $file->save(public_path('/uploads/contents/'.$nombre));
            }
        $contenido=new \App\Contenido;
        $contenido->Titulo=$request->get("Titulo");
        $contenido->multimedia=$nombre;
        $contenido->Descripcion=$request->get("desc");
        $contenido->Categoria=$request->get("category");
        $contenido->Descripcion=$request->get("desc");
        $contenido->ForSale=$request->get("forSale");
        $contenido->hashtag1=$request->get("h1");
        $contenido->hashtag2=$request->get("h2");
        $contenido->hashtag3=$request->get("h3");
        $contenido->hashtag4=$request->get("h4");

        $contenido->save(); 
        $contenido->users()->attach($user->id);

        return view('layouts.Profile', array('user'=> Auth::user()));

    }
}
