<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    //

   //Relaciones muchos a muchos de todas nuestras tablas de Notificaciones--------------------------

	 //Con Usuario
    //Recibe
    public function users(){   
        return $this->belongsToMany('User', 'user_recibe_notificacion', 'Notificacion_id', 'Usuario_id');
    }

    //Con Contenido
    //Tiene
    public function contenidos(){   
        return $this->belongsToMany('Contenido', 'contenido_tiene_notificacion', 'Noti_id', 'Cont_id');
    }

	//-----------------------------------------------------------------------------------------
}
