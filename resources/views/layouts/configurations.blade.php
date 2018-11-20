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


        <div class="imageList">
            <h2 id="tituloReportes">User Information</h2>
            <hr>
            <br>
            <br>
            <br>
            <br>
            <br>

            <img id="cerebrito" src="img/logocerebro.png">

            <form id="datosUsuario" method="post" action="/configurations" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <br>
    <br>
    <label class="negritas">USERNAME</label><br>
    <input type="text" name="UserName" value="{{$user->name}}" required>
    <br>
    <br>
    <LABEL class="negritas">GENRE</LABEL><br>
    <input type="radio" name="Gender" value="male" > Male<br>
  <input type="radio" name="Gender" value="female"> Female<br>
  <input type="radio" name="Gender" value="other" checked> Other
  <br>
  <br>
  <label class="negritas">DATE OF BIRTH</label>
  <br>
   <input type="date" name="Bday" value="{{$user->FechNac}}">
   <br>
   <br>

  <br>
  <br>
  <label class="negritas">ABOUT ME</label><br>
  ​<textarea id="txtArea" name="About"  rows="10" cols="70">{{$user->desc}}</textarea>
  <br>
  <br>
  <label class="negritas">SELECT AVATAR</label><br>
  <img src="/uploads/avatars/{{$user->avatar}}"><br>
  <input type="file" name="avatar">
  <br>
  <br>
  <label class="negritas">SELECT COVER</label><br>
  <img src="/uploads/covers/{{$user->cover}}"><br>
  <input type="file" name="cover">
  <br>
  <br>
  <input type="submit" name="save">
            </form>
           </div>
    </body>
</html>
