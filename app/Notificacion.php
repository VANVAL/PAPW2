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
    public function contenido(){   
        return $this->belongsToMany('Contenido', 'contenido_tiene_notificacion', 'Noti_id', 'Cont_id');
    }

    //
    //$foreach ($notificacion->contenido[] as $contenidoIndividual)
    //{ $contenidoIndividual[1]->contenido->id}

    //$NOT=Notificacion::all;

    //Foreach anidado para revisar cada notificacion e individualmente  cada variable de cada notificacion individual
    //input hidden
    //dd() funcion de php que  detiene todo el proceso de compilado y muestra lo que este en la variables

    //aaron oviedo en facebook
	//-----------------------------------------------------------------------------------------
}
