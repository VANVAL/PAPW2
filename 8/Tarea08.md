# Dillinger

[![N|Solid](https://cldup.com/dTxpPi9lDf.thumb.png)](https://nodesource.com/products/nsolid)


# Respuestas Correctas
-  1.- Facilidad para implementar cambios en el proyecto sin comprometer el proyecto entero.  Pero a la vez, los cambios que uno haga en el proyecto, pueden entrar en conflicto con los que hace nuestro compañero de equipo, así que puede ser un arma de doble filo.
-  2.- Para crear un repositorio vacío, primero nos aseguramos que estamos en la carpeta donde está nuestro archivo de texto. Usamos el comando "git init" que nos inicializa nuestro repositorio. Para preparar nuestro archivo de texto para el commit. Primero hay que agregarlo con "git add *" y  ahora sí podemos hacer el commit "git commit -m 'InserteMensajeAqui' "
-  3.- Es como un repositorio en línea. Al menos así lo entiendo. Yo uso Github por el ser el primero que aprendí a usar, justo en clase. ¿Cómo se hace push? "git push <nombredeRemoto> <nombreDeRama>"
-  4.- Contiene variables de ambiente de nuestra aplicación, por ejemplo para conectarnos a la base de datos o demás servicios.
-  5.- Blade padre Blade hijo
-  6.-31,29
-  7.- 120
-  8.-a)c=4 b)c=5 c)c=17 d)c=1024
-  9.- 10
-  10.-a=0, b=1, c=5

### Función PHP

~~~
    @php

    $msg = "Gracias por ser un buen profe";
    $trash = "Gracias por no ser Samaniego";
    $s = ' ';
    $i=0;
    for($i=0; $i < 10; $i++)
    {
        if( $i!==0 && ($i % 1 ==0) && ($i % $i ==0) && ($i % 2 !==0) && ($i % 3 !==0) && ($i % 5 !==0) && ($i % 7 !==0) )
        {
            echo $msg, $s;
        }else{
            echo $trash, $s;
        }
        
    }
    @endphp

~~~

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)


   [dill]: <https://github.com/joemccann/dillinger>
   [git-repo-url]: <https://github.com/joemccann/dillinger.git>
   [john gruber]: <http://daringfireball.net>
   [df1]: <http://daringfireball.net/projects/markdown/>
   [markdown-it]: <https://github.com/markdown-it/markdown-it>
   [Ace Editor]: <http://ace.ajax.org>
   [node.js]: <http://nodejs.org>
   [Twitter Bootstrap]: <http://twitter.github.com/bootstrap/>
   [jQuery]: <http://jquery.com>
   [@tjholowaychuk]: <http://twitter.com/tjholowaychuk>
   [express]: <http://expressjs.com>
   [AngularJS]: <http://angularjs.org>
   [Gulp]: <http://gulpjs.com>

   [PlDb]: <https://github.com/joemccann/dillinger/tree/master/plugins/dropbox/README.md>
   [PlGh]: <https://github.com/joemccann/dillinger/tree/master/plugins/github/README.md>
   [PlGd]: <https://github.com/joemccann/dillinger/tree/master/plugins/googledrive/README.md>
   [PlOd]: <https://github.com/joemccann/dillinger/tree/master/plugins/onedrive/README.md>
   [PlMe]: <https://github.com/joemccann/dillinger/tree/master/plugins/medium/README.md>
   [PlGa]: <https://github.com/RahulHP/dillinger/blob/master/plugins/googleanalytics/README.md>
