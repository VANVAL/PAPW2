<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\commentario;
use App\Contenido;
use DB;

class ContentControllerResource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $contents = \App\Contenido::find($id);
        return view('layouts.show')->with('contents', $contents);
        //DB::table('contenidos')
      /*  $contents2 = DB::table('contenidos');
        $contents=$contents2
        ->join('contenido_user','contenido_user.contenido_id','=','contenidos.id')
        ->select('contenidos.id','contenidos.multimedia','contenidos.Titulo','contenido_user.user_id')
        ->get();
        return view('layouts.show')->with('contents', $contents);*/

        //dd($Todo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


     public function comentario(Request $request)
    {
        //
         $user=Auth::user();
        $NomUser=$user->name;

        $commentario=new commentario;
        $commentario->comentario=$request->get('commentTextbox');
        $commentario->NomUser=$NomUser;
        $commentario->idContenido=$request->get('ContID');
        $commentario->save();

        return back();
        
    
       }


        public function show_comentario(Contenido $contenido)
    {
        //
        $contenidos=\App\Contenido::find($contenido->id);
        $user=Auth::user();
        $comments=\APP\commentario::all();

        return view('layouts.show',compact('contents', 'id'))->with('user', $user)->with('comments', $comments);

        
    
       }
}
