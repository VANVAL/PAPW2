<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CREATOR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/main.css" />
</head>
<body>
    <!-- DIV QUE CONTIENE AL CONTENIDO :V-->
    @include('layouts.menu')
    <div id="mainBody">
        <h2> Featured Creations</h2>
        <div class="filaBody">
            @isset($contents)
             @foreach($contents as $objects)
            <div class="bodyElement">

                <!--<img src="./img/v_hart.png" alt="artwork">-->
                <a href="contents/{{$objects->id}}"><img src="/uploads/contents/{{$objects->multimedia}}" alt="artwork"></a>
                
                
            </div> <!--Cierra un elemento -->
            @endforeach
            @endisset
            
        </div><!--Cierra una fila -->   

        
    </div> <!--Cierra MAIN BODY-->
    @include('layouts.footer')
</body>
</html>