<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CREATOR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/main.css" />
    <script src="main.js"></script>
</head>
<body>
@include('layouts.menu')
    <div id="mainBody">
        <h2> Followers</h2>
        <div class="filaBody">
        <?php /*
            @isset($contents)
             @foreach($contents as $objects)*/
        ?>
            <div class="bodyElement">

                <img class="followerImg" src="./img/avatarPlaceholder2.png" alt="artwork">
                <h2>Nombre Usuario</h2>
            </div> <!--Cierra un elemento -->
            <div class="bodyElement">

                <img class="followerImg" src="./img/avatarPlaceholder2.png" alt="artwork">
                <h2 class="followerName">Nombre Usuario</h2>
            </div> <!--Cierra un elemento -->
            <div class="bodyElement">

                <img  class="followerImg" src="./img/avatarPlaceholder2.png" alt="artwork">
                <h2>Nombre Usuario</h2>
            </div> <!--Cierra un elemento -->
            <div class="bodyElement">

                <img class="followerImg" src="./img/avatarPlaceholder2.png" alt="artwork">
                <h2>Nombre Usuario</h2>
            </div> <!--Cierra un elemento -->

            <?php /*
             @endforeach
             @endisset*/ 
             ?>
           
            
        </div><!--Cierra una fila -->   

        
    </div> <!--Cierra MAIN BODY-->
    @include('layouts.footer').
    
</body>
</html>