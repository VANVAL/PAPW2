<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>User</title>
        <link href="./css/userProfile.css" rel="stylesheet"  type="text/css">
        <link rel="stylesheet" type="text/css" media="screen" href="./css/navBar.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="./css/main.css" />
    
    </head>

    <body>
    @include('layouts.menu')
        <div id="mainContainer">
            <div class="coverLayout">
                        <div class="coverImage">
                                <!--<img id="robin" src="img/SeHablaGamer.png" alt="COVER" />-->
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
                <!--<form enctype="multipart/form-data" action="/profile2" method="POST">
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" name="">
                </form>-->
                @isset($user) 
                    <div id="datosContacto">
                        <div class="seccion">
                            <h3>
                                {{$user->name}}
                            </h3>
                        </div>
                        <div class="seccion">
                            <p id="descUsuario">
                                {{$user->desc}}    
                            </p>
                        </div>
                    

                        <div class="seccion">
                            <p>{{$user->email}}</p>  
                        </div>

                        
                        <div class="seccion">   
                            <p>{{$user->FechNac}}</p>          
                        </div>
                @endisset
                    <div class="seccion">    
                        <div id="icons">
                            <div class="media-icon">
                                <img src="./img/facebook.png" alt="facebook">
                            </div>
                            <div class="media-icon">
                                <img src="./img/bird.png" alt="twitter">
                            </div>
                            <div class="media-icon">
                                <img src="./img/youtube.png" alt="youtube">
                            </div>
                        </div>
                    </div>

                <div class="seccion">
                    <div id="followUser"> 
                        <img src="./img/heart.png" alt="Follow">    
                    </div>        
                    </div>
                </div> 
                <div class="seccion">
                    <h3>
                            Give love!
                    </h3>     
                </div> 
                        
            </div><!--CIERRA InfoUsuario-->

            <div id="allContent">
                <div class="contenido">
                        <a href="content">
                            <img class="fotoPost" src="img/fredo.png" alt="Photo" />
                        </a>
                    
                        <div class="botones">  
                                <img class="iHeart" src="img/btn_heart1.png" alt="LOVE" />
                                
                                <a href=""><img class="wrong" src="img/wrong1.png" alt="REPORT" /></a>
                                <img class="icomment" src="img/comment.png" alt="comment" />
                                
                        </div> 
                        
                        <div> 
                            <p class="textoOpc">
                                Descripcion super chida de la foto :D
                                UEHUSHDIJNSIOASVAOIDJSAODJAOSIDJAOISDJOAISJOAIJOVIFVUFI
                                BSUIOAISODJAOSVHFUHOVABOAUSCASODDJOASIHVUODANSAOS
                                JSDSKJDNAKSIAJCIDOANCIODKLANCADIOALKMSKCLNDOPOGPOGE
                            </p> 
                        </div>
                    
                        <div id="hashtagContainer"> 
                            <label class="hashtag">#PrimeraObra #Hola #NoALaVenta #Chris</label>
                        </div>
                        
                </div>

                    
                <div class="contenido">
                        <a href="content">
                            <img class="fotoPost" src="img/fredo.png" alt="Photo" />
                        </a>
                    
                        <div class="botones">  
                                <img class="iHeart" src="img/btn_heart1.png" alt="LOVE" />
                            
                                <a href=""><img class="wrong" src="img/wrong1.png" alt="REPORT" /></a>
                                <img class="icomment" src="img/comment.png" alt="comment" />
                                
                        </div> 
                        
                        <div> 
                            <p class="textoOpc">
                                TRIPALOSKY! TRIPA-TRIPALOSKY! 
                                TRIPALOSKY! TRIPA-TRIPALOSKY!
                                TRIPALOSKY! TRIPA-TRIPALOSKY!
                                TRIPALOSKY! TRIPA-TRIPALOSKY!
                                TRIPALOSKY! TRIPA-TRIPALOSKY!
                                TRIPALOSKY! TRIPA-TRIPALOSKY! 
                                TRIPALOSKY! TRIPA-TRIPALOSKY!
                                TRIPALOSKY! TRIPA-TRIPALOSKY!
                                TRIPALOSKY! TRIPA-TRIPALOSKY!
                                TRIPALOSKY! TRIPA-TRIPALOSKY!
                                TRIPALOSKY! TRIPA-TRIPALOSKY! 
                                TRIPALOSKY! TRIPA-TRIPALOSKY!
                                TRIPALOSKY! TRIPA-TRIPALOSKY!
                                TRIPALOSKY! TRIPA-TRIPALOSKY!
                                TRIPALOSKY! TRIPA-TRIPALOSKY!
                                TRIPALOSKY! TRIPA-TRIPALOSKY! 
                                TRIPALOSKY! TRIPA-TRIPALOSKY!
                                TRIPALOSKY! TRIPA-TRIPALOSKY!
                                TRIPALOSKY! TRIPA-TRIPALOSKY!
                                TRIPALOSKY! TRIPA-TRIPALOSKY!
                                TRIPALOSKY! TRIPA-TRIPALOSKY! 
                                TRIPALOSKY! TRIPA-TRIPALOSKY!
                                TRIPALOSKY! TRIPA-TRIPALOSKY!
                                TRIPALOSKY! TRIPA-TRIPALOSKY!
                                TRIPALOSKY! TRIPA-TRIPALOSKY!
                            </p> 
                        </div>
                    
                        <div class="hashtagContainer"> 
                            <label class="hashtag">#Quiero #Pasar #El #Semestre #Plz</label>
                        </div>
                        
                </div>
            </div><!-- Cierra allcontent--> 
        </div>
            
           <!-- @include('layouts.footer')-->
    </body>