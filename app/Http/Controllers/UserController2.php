<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Image;
use Illuminate\Support\Facades\Auth;
use App\commentario;
use App\Contenido;
use App\User;
use DB;     

class UserController2 extends Controller
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
       /* User::create($request->all());
        return redirect()->route('profile2')->with('success','Information Updated');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //MOSTRAR PERFILES DE OTROS USUARIOS

         $user=Auth::user();
            $usuario = DB::table('contenidos')
        ->join('contenido_user','contenido_user.contenido_id','=','contenidos.id')
        ->join('users','users.id', '=', 'contenido_user.user_id')

        ->select('users.id as yes','users.avatar as avatar','users.cover as cover','users.name as usuarioquesubio','users.email as email','users.desc as descripcion','users.FechNac as Fecha','contenidos.id as IDContent','contenidos.multimedia as fotito','contenidos.Titulo as titulodecontenido', 'contenidos.Descripcion as desc','contenidos.hashtag1 as gatito', 'contenidos.updated_at as fechasubida')
         ->where('users.id', '=', $id)
        ->get();
        
        return view('layouts.ProfileOtroUsuario',compact('usuario', $usuario))->with('user', $user);
       // dd($usuario);

    }

    /**
     * Show the form for editing the specified resource.
     * @param \App\User $user
    *   @return \Illuminate\Http\Response
    *s
     */
    public function edit(User $user)
    {
        
        //
        /*$user = User::find($id);
        return view('layouts.edit', compact('user'));*/
        $users=\App\User::find($user->id);
        return view('layouts.edit',compact('user', 'id'));
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
        $user = User::find($id);
        $user->name=$request->get('UserName');
        $user->gender=$request->get('Gender');
        $user->FechNac=$request->get('Bday');
        $user->desc=$request->get('About');

        if ($request->hasFile('avatar')) {
    		$avatar = $request->file('avatar');
    		$filename=time().'.'.$avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/'.$filename ));

    		$user=Auth::user();
    		$user->avatar=$filename;
        }
        
        if ($request->hasFile('cover')) {
    		$cover = $request->file('cover');
    		$filename=time().'.'.$cover->getClientOriginalExtension();
    		Image::make($cover)->resize(600,600)->save(public_path('/uploads/covers/'.$filename ));

    		$user=Auth::user();
    		$user->avatar=$filename;
        }

        $user->save();
        return redirect('layouts.Profile2')->with('success', 'Jalo alv');
    
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
}
