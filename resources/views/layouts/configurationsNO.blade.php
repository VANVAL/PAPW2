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


        <div class="imageList">
            <h2 id="tituloReportes">User Information</h2>
            <hr>
            <br>
            <br>
            <br>
            <br>
            <br>

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
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other
  <br>
  <br>
  <label class="negritas">DATE OF BIRTH</label>
  <br>
   <input type="date" name="bday">
   <br>
   <br>
   <label class="negritas">E-MAIL</label><br>
   <input type="email" name="email"><br><br>
   <label class="negritas">TYPE OF ARTIST/INTEREST</label><br><br>
   <input type="checkbox" name="tipo1" value="1"> Sketch<br>
  <input type="checkbox" name="tipo2" value="2"> Painting <br>
  <input type="checkbox" name="tipo3" value="3"> Cartoon<br>
  <input type="checkbox" name="tipo4" value="4"> Photographer <br>
  <input type="checkbox" name="tipo5" value="5"> Fan art<br>
  <input type="checkbox" name="tipo6" value="6"> Shipping <br>
  <br>
  <br>
  <label class="negritas">ABOUT ME</label><br>
  ​<textarea id="txtArea" rows="10" cols="70"></textarea>
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
