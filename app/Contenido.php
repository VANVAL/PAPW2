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

    public function subir(){
        return $this->belongsToMany('User', 'user_sube_contenido', 'ContSubido_id', 'UserSube_id');
    }

    public function likes(){
        return $this->belongsToMany('User', 'user_likes_contenido', 'ContLike_id', 'UserLike_id');
    }

    public function comentar(){
        return $this->belongsToMany('User', 'user_comenta_contenido', 'ContComenta_id', 'UserComenta_id');
    }

    public function  comprar(){
        return $this->belongsToMany('User', 'user_compra_contenido', 'ContCompra_id', 'UserCompra_id');
    }


//--------------------------------------------------------------------------------------------------
}
