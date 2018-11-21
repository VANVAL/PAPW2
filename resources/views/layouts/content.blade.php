<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CREATOR</title>
        <link href="./css/contentView.css" rel="stylesheet"  type="text/css">
        <script type="text/javascript">
            // document.addEventListener('contextmenu', event => event.preventDefault());
        </script>
    </head>
    <body>
        <div class="contentViewer">
            <div class="content">
                <img class="Image" src="./img/fredo.png" alt="PHOTO/VIDEO" />
            </div>

           
            <div id="rightSide">
                <div id="titleHere">
                    <h2>Titulo</h2>
                </div>
                <div class="datosUsuario">
                    <img class="avatarUsuario" src="./img/cerebrito.png" alt="USER" />
                    <p class="nombreUsuario">
                        Username
                    </p>
                    <p class="fecha">
                        Fecha y hora
                    </p>
                    <p class="textoComentario">
                        Mi primer dibujo..!!!
                        Espero les guste, los envidiosos dirán que es photoshop :V
                    </p>
                </div>
                <hr >
                <div class="buttons">
                        <!--<button><img class="iLOVE" src="./img/heart.png" alt="LOVE" title="I love it!!!" /></button>-->
                        <input type="image" class="iLOVE" src="./img/heart.png" alt="LOVE" title="I love it!!!" />
                        <!--<img class="Reportar" src="./img/wrong.png" alt="REPORTAR" title="Not for sale" />-->
                        <input type="image" class="Reportar" src="./img/wrong.png" alt="BUY" title="Not For Sale" />

                </div>

                 <div class="commentList">
                    <ul>
                        <li>
                            <div class="commentContainer">
                                <img class="avatarUsuario2" src="./img/logocerebro.png" alt="avatarUsuario" />

                            <p class="nombreUsuario2">Fulano</p>
                            <p class="fecha2">Fecha y hora</p>
                            <p class="textoComentario2">Bien!</p>
                            </div>
                        </li>

                        <li>
                            <div class="commentContainer">
                                <img class="avatarUsuario2" src="./img/logocerebro.png" alt="avatarUsuario" />

                            <p class="nombreUsuario2">Fulano2</p>
                            <p class="fecha2">Fecha y hora</p>
                            <p class="textoComentario2">Chafaaaaaa! :P</p>
                            </div>
                        </li>

                    </ul>

                </div>  

                <div class="makeComment">
                        <img class="avatarUsuario3" src="./img/avatarPlaceholder2.png" alt="USER"/>
                    <form class="commentForm" action="" method="post">
                        <input class="textbox" type="text" name="commentTextbox" value="">
                        <br>
                        <input id="MakeAComment" type="button" name="" value="comment">
                    </form>

                </div>
            </div>

           
        </div>
    </body>
</html>
