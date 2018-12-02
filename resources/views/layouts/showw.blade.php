<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CREATOR</title>
        <link href="../css/contentView.css" rel="stylesheet"  type="text/css">
        <script type="text/javascript">
            // document.addEventListener('contextmenu', event => event.preventDefault());
        </script>
    </head>
    <body>
        <?php
        $Idfoto1vez=null;
        $Foto1vez=null;
        $Titulo1vez=null;
        $Descripcion1vez=null;
        $Subidafecha1vez=null;

        $Iduser1vez=null;
        $Avatar1vez=null;
        $Nombre1vez=null;

        ?>
        <div class="contentViewer">
            <div class="content">
                @isset($contents)
                @foreach($contents as $u)
                @if($Foto1vez!=$u->fotito)
               <img class="Image" src="/uploads/contents/{{$u->fotito}}" alt="PHOTO/VIDEO" />
               <?php $Foto1vez=$u->fotito ?>
               @endif
               @endforeach
            </div>
            @endisset

          
            <div id="rightSide">
                <div id="titleHere">
                 @isset($contents)
                     @foreach($contents as $u)
                @if($Titulo1vez!=$u->titulodecontenido)
                    <h2>{{$u->titulodecontenido}}
                  <?php $Titulo1vez=$u->titulodecontenido ?>
               @endif
               @endforeach
                @endisset
                </div>
                <div class="datosUsuario">
                     @isset($contents)
                         @foreach($contents as $u)
                        @if($Iduser1vez!=$u->yes)
                     <a href="profiles/{{$u->yes}}">
                        <?php $Iduser1vez=$u->yes ?>
                         @endif
                         @endforeach
                         @endisset



                     @isset($contents)
                         @foreach($contents as $u)
                        @if($Avatar1vez!=$u->avatar)
                    <img class="avatarUsuario" src="/uploads/avatars/{{$u->avatar}}" alt="USER" />
                     <?php $Avatar1vez=$u->avatar ?>
                         @endif
                         @endforeach
                         @endisset
                     </a>
                    <p class="nombreUsuario">
                         @isset($contents)
                         @foreach($contents as $u)
                        @if($Nombre1vez!=$u->usuarioquesubio)
                        {{$u->usuarioquesubio}}
                         <?php $Nombre1vez=$u->usuarioquesubio ?>
                         @endif
                         @endforeach
                         @endisset
                    </p>
                    
                    <p class="fecha">
                        @isset($contents)
                         @foreach($contents as $u)
                        @if($Subidafecha1vez!=$u->fechasubida)
                        

                       {{$u->fechasubida}}
                         <?php $Subidafecha1vez=$u->fechasubida ?>
                         @endif
                         @endforeach
                         @endisset

                    </p>
                    <p class="textoComentario">
                        @isset($contents)
                         @foreach($contents as $u)
                        @if($Descripcion1vez!=$u->desc)
                      {{$u->desc}}
                       <?php $Descripcion1vez=$u->desc ?>
                         @endif
                         @endforeach
                         @endisset
                    </p>
                </div>
               
                <hr >
                <div class="buttons">
                        <!--<button><img class="iLOVE" src="./img/heart.png" alt="LOVE" title="I love it!!!" /></button>-->
                        <input type="image" class="iLOVE" src="../img/heart.png" alt="LOVE" title="I love it!!!" />
                        <!--<img class="Reportar" src="./img/wrong.png" alt="REPORTAR" title="Not for sale" />-->
                        <input type="image" class="Reportar" src="../img/wrong.png" alt="BUY" title="Not For Sale" />

                </div>

<!-- Seccion comentarios----------------------------->
              
<!------------------------------------------------------------------------------------->
                <div class="makeComment">
                    @isset($user)
                        <img class="avatarUsuario3" src="/uploads/avatars/{{$user->avatar}}" alt="USER"/>
                        @endisset
                    <form class="commentForm" action="/comment" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input class="textbox" type="text" name="commentTextbox" value="">
                          @isset($contents)
                         @foreach($contents as $u)
                        @if($Idfoto1vez!=$u->IDContent)
                        <input type="hidden" name="ContID" value="{{$u->IDContent}}">
                         <?php $Idfoto1vez=$u->IDContent ?>
                         @endif
                         @endforeach
                         @endisset

                        <br>
                        <input id="MakeAComment" type="submit" name="" value="comment">
                    </form>

                </div>
            </div>

           
        </div>
    </body>
</html>
