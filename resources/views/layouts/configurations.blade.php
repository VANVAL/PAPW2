<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Creator</title>
        <link href="./css/options.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="sidebar">
            <a href="profile"><img id="fotoPerfil" src="/uploads/avatars/{{$user->avatar}}" alt="profile picture"  /></a>    
        </div>


        <div class="infoContainer">
            <h2 id="tituloReportes">User Information</h2>
            <img id="cerebrito" src="./img/logocerebro.png">

            <form id="datosUsuario" method="post" action="/configurations" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                
                <label class="negritas">USERNAME</label>
                <input class="inputInfo" type="text" name="UserName" value="{{$user->name}}" required>
            
                <label class="negritas">GENRE</label>
                <div class="inputInfo" style="color: white;" >
                    <input class="radio" type="radio" name="Gender" value="male" > Male<br>
                    <input class="radio" type="radio" name="Gender" value="female"> Female<br>
                    <input class="radio"type="radio" name="Gender" value="other" checked> Other
                </div>
            
                <label class="negritas">DATE OF BIRTH</label>
                <input class="inputInfo" type="date" name="Bday" value="{{$user->FechNac}}">
                
                
                <label class="negritas">ABOUT ME</label><br>
                ​<textarea  class="inputInfo" id="txtArea" name="About"  rows="10" cols="70">{{$user->desc}}</textarea>
                
                
                <label class="negritas">SELECT AVATAR</label><br>
                <div class="inputInfo">
                    <img src="/uploads/avatars/{{$user->avatar}}"><br>
                    <input type="file" name="avatar" style="left: 25%;top: -95px;position: relative;">>
                </div>
                
                
                <label class="negritas">SELECT COVER</label><br>
                <div class="inputInfo">
                    <img src="/uploads/covers/{{$user->cover}}"><br>
                    <input type="file" name="cover">
                </div>
                
                <input id="btnSave" type="submit" name="save" value="Save Changes">
            </form>
        </div>
    </body>
</html>
