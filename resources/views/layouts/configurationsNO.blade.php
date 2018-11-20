<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Creator</title>
        <link href="./css/options.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="sidebar">
            

            <a href="profile"><img id="fotoPerfil" src="img/avatarPlaceholder2.png" alt="profile picture"  /></a>

          
        </div>

         <img id="cerebrito" src="img/logocerebro.png">


        <div class="imageList">
            <h2 id="tituloReportes">User Information</h2>
            <hr>
            <br>
            <br>
            <br>
            <br>
            <br>

<<<<<<< HEAD:resources/views/layouts/configurations2.blade.php
           
            <!--<form id="datosUsuario" method="post">-->
           
    <br>
    <br>
    <label class="negritas">USERNAME</label><br>
    <input type="text" name="txtName1" value="{{$user->name}}">
    <br>
    <br>
    <LABEL class="negritas">GENRE</LABEL><br>
    <input type="radio" name="gender" value="male" > Male<br>
=======
            <img id="cerebrito" src="img/logocerebro.png">

            <form id="datosUsuario" method="post">
                <label class="negritas">TITLE PROFILE</label><br>
                <input type="text" name="txtTitle">
                <br>
                <br>
                <label class="negritas">FIRST NAME</label><br>
                <input type="text" name="txtName1">
                <br>
                <br>
                 <label class="negritas">LAST NAME</label><br>
                <input type="text" name="txtName2">
                <br>
                <br>
                <LABEL class="negritas">GENRE</LABEL><br>
                <input type="radio" name="gender" value="male" checked> Male<br>
>>>>>>> ea30eb7d9b963c96e4d5f9c0ba77d786734ea7c3:resources/views/layouts/configurationsNO.blade.php
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other" checked> Other
  <br>
  <br>
  <label class="negritas">DATE OF BIRTH</label>
  <br>
   <input type="date" name="bday" value="{{$user->FechNac}}">
   <br>
   <br>

  <br>
  <br>
  <label class="negritas">ABOUT ME</label><br>
  ​<textarea id="txtArea" rows="10" cols="70">{{$user->desc}}</textarea>
  <br>
  <br>
  <label class="negritas">SELECT AVATAR</label><br>
  <input type="file" name="myAvatar">
  <br>
  <br>
  <label class="negritas">SELECT LAYOUT</label><br>
  <input type="file" name="myLayout">
  <br>
  <br>
  <input type="submit" name="save">

            </form>
           </div>
    </body>
</html>
