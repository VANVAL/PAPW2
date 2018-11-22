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
        <div class="contentViewer">
            <div class="content">
                <img class="Image" src="/uploads/contents/{{$contents->multimedia}}" alt="PHOTO/VIDEO" />
            </div>

           
            <div id="rightSide">
                <div id="titleHere">
                    <h2>{{$contents->Titulo}}</h2>
                </div>
                <div class="datosUsuario">
                    <img class="avatarUsuario" src="../img/cerebrito.png" alt="USER" />
                    <p class="nombreUsuario">
                        Username
                    </p>
                    <p class="fecha">
                        {{$contents->updated_at}}
                    </p>
                    <p class="textoComentario">
                       {{$contents->Descripcion}}
                    </p>
                </div>
                <hr >
                <div class="buttons">
                        <!--<button><img class="iLOVE" src="./img/heart.png" alt="LOVE" title="I love it!!!" /></button>-->
                        <input type="image" class="iLOVE" src="../img/heart.png" alt="LOVE" title="I love it!!!" />
                        <!--<img class="Reportar" src="./img/wrong.png" alt="REPORTAR" title="Not for sale" />-->
                        <input type="image" class="Reportar" src="../img/wrong.png" alt="BUY" title="Not For Sale" />

                </div>

                 <div class="commentList">
                    <ul>
                        @isset($user)
                        @foreach($user as $users)
                        <li>
                            <div class="commentContainer">
                                <img class="avatarUsuario2" src="../img/logocerebro.png" alt="avatarUsuario" />

                            <p class="nombreUsuario2">{{$users->name}}</p>
                            <p class="fecha2">Fecha y hora</p>
                            <p class="textoComentario2">Bien!</p>
                            </div>
                        </li>
                        @endforeach
                        @endisset
                       <!-- <li>
                            <div class="commentContainer">
                                <img class="avatarUsuario2" src="../img/logocerebro.png" alt="avatarUsuario" />

                            <p class="nombreUsuario2">Fulano2</p>
                            <p class="fecha2">Fecha y hora</p>
                            <p class="textoComentario2">Chafaaaaaa! :P</p>
                            </div>
                        </li>-->

                    </ul>

                </div>  

                <div class="makeComment">
                        <img class="avatarUsuario3" src="../img/avatarPlaceholder2.png" alt="USER"/>
                    <form class="commentForm" action="/comment" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input class="textbox" type="text" name="commentTextbox" value="">
                        <input type="hidden" name="ContID" value="{{$contents->id}}">

                        <br>
                        <input id="MakeAComment" type="submit" name="" value="comment">
                    </form>

                </div>
            </div>

           
        </div>
    </body>
</html>
