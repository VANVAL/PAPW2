<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>User</title>
        <link href="./css/userProfile.css" rel="stylesheet"  type="text/css">
        <link rel="stylesheet" type="text/css" media="screen" href="./css/navBar.css" />
    
    </head>

    <body>
    <!--@include('layouts.navBar')-->
     <div id="NavBarContainer">
            <div class="NavBarElement">
            <a href="profile">
                <img class="navBarItem" src="/uploads/avatars/{{$user->avatar}}" alt="User">
            </a> 
            </div>
            <div class="NavBarElement">
            <a href="upload">
                <img class="navBarItem" src="./img/plus.png" alt="Upload">
            </a> 
            </div>
            <div class="NavBarElement">
            <a href="configurations">
                <img class="navBarItem" src="./img/Gear2.png" alt="Settings">
            </a> 
            </div>        
        </div>



        <div class="coverLayout">
            <div class="coverImage">
                    <img id="robin" src="/uploads/covers/{{$user->cover}}" alt="COVER" />
            </div>

            <div class="Avatar">
                    <!--<img src="img/avatarPlaceholder2.png" alt="AVATAR" />-->
                    @isset($user)
                    <img src="/uploads/avatars/{{$user->avatar}}" alt="AVATAR" />
                    @endisset
            </div>
        </div>

        <div class="infoUsuario">
            <!--<form enctype="multipart/form-data" action="/profile" method="POST">
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" name="">
            </form>-->
            @isset($user)
            <h3>
                {{$user->name}}
            </h3>
             @endisset
            <p id="descUsuario">
                @isset($user)
                {{$user->desc}}
                 @endisset
        
            </p>
            <div id="datosContacto">
                <div id="mail">
                    CONTACTO:
                    @isset($user)
                {{$user->email}}
                 @endisset
                </div>
                <br/>
                <div id="RedesSociales">
                    Fecha de Nacimiento
                    <br/>
                    @isset($user)
                {{$user->FechNac}}
                 @endisset
                </div>
                <div id="followUser"> 
               <img src="./img/heart.png" alt="Follow"> 
                 <br/>
                 <br/>
                
                    <h3>Give love!</h3>

                </div>
            </div> 
            
        </div><!--CIERRA InfoUsuario-->

        <div id="allContent">
            <div class="contenido">
                    <a href="content">
                        <img class="fotoPost" src="img/fredo.png" alt="Photo" />
                    </a>
                   
                       <!--   <div class="botones">  
                            <img class="iHeart" src="img/heart.png" alt="LOVE" />
                            <label class="likes">3</label>
                            <a href=""><img class="wrong" src="img/wrong.png" alt="REPORT" /></a>
                            <img class="icomment" src="img/comment.png" alt="comment" />
                            <label class="comentaritos">2</label>
                        </div> -->
                        <br>
                       <p class="textoOpc">
                            Descripcion super chida de la foto :D
                            UEHUSHDIJNSIOASVAOIDJSAODJAOSIDJAOISDJOAISJOAIJOVIFVUFI
                            BSUIOAISODJAOSVHFUHOVABOAUSCASODDJOASIHVUODANSAOS
                            JSDSKJDNAKSIAJCIDOANCIODKLANCADIOALKMSKCLNDOPOGPOGE
                        </p> 
                        <label class="hashtag">#PrimeraObra #Hola #NoALaVenta #Chris</label>
            </div>

        
            <!-- <div class="contenido">
                            <a href="content"><img class="fotoPost" src="img/placeholder-square.jpg" alt="Photo" /></a>
                        <div class="botones">
                            <label class="hashtag">#YoMerengues #Nope #INeedHealing</label>
                            <img class="iHeart" src="img/heart.png" alt="LOVE" />
                            <label class="likes">5</label>
                            <a href=""><img class="wrong" src="img/dollar.png" alt="REPORT" /></a>
                            <img class="icomment" src="img/comment.png" alt="comment" />
                            <label class="comentaritos">6</label>
                        </div>
                        <br>
                        <p class="textoOpc">
                            Lololoolololololol!!!!
                        </p>

            </div> -->
        </div><!-- Cierra allcontent-->
      

    </body>
</html>
