<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contenido extends Model
{
    //

    //Relaciones muchos a muchos de todas nuestras tablas de Contenido-----------------------------------
    //Con Notificacion
    //Tiene
    public function notificacions(){   
        return $this->belongsToMany('Notificacion', 'contenido_tiene_notificacion', 'Cont_id', 'Noti_id');
    }


    //Con Usuario

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function likes(){
        return $this->belongsToMany('User', 'user_likes_contenido', 'ContLike_id', 'UserLike_id');
    }

    public function comentausuario(){
        return $this->belongsToMany(User::class);
    }

    public function  comprar(){
        return $this->belongsToMany('User', 'user_compra_contenido', 'ContCompra_id', 'UserCompra_id');
    }


//--------------------------------------------------------------------------------------------------
}
