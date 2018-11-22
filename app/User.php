<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Foundation\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable 
{
    use Notifiable;
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function roles(){   
        return $this->belongsToMany(Role::class); 
    }

//Relaciones muchos a muchos de todas nuestras tablas de Usuario-----------------------------------
    //Con Usuario
    //Sigue
    public function users(){   
        return $this->belongsToMany('User', 'user_sigue_user', 'UsuarioQueSigue_id', 'UsuarioSeguido_id');
    }

    //Con Notificacion
    //Recibe
    public function notificacions(){   
        return $this->belongsToMany('Notificacion', 'user_recibe_notificacion', 'Usuario_id', 'Notificacion_id');
    }



    public function contents(){
        return $this->belongsToMany(Contenido::class);
    }

    public function likes(){
        return $this->belongsToMany('Contenido', 'user_likes_contenido', 'UserLike_id', 'ContLike_id');
    }

    public function comentacontenido(){
        return $this->belongsToMany(Contenido::class);
    }

    public function comprar(){
        return $this->belongsToMany('Contenido', 'user_compra_contenido', 'UserCompra_id', 'ContCompra_id');
    }




//--------------------------------------------------------------------------------------------------


    




    public function authorizeRoles($roles)
    {   
        if (is_array($roles)) 
            {     
                return $this->hasAnyRole($roles) || abort(401, 'Acceso no autorizado.');
                   }
            return $this->hasRole($roles) || abort(401, 'Acceso no autorizado.'); 
        }  

public function hasAnyRole($roles)
{
   return null !== $this->roles()
   ->whereIn('name', $roles)->first(); 
    }  

public function hasRole($role)
{   
    return null !== $this->roles()     
    ->where('name', $role)->first(); 
} 



}
