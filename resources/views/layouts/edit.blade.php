<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Creator</title>
        <link href="../../css/options.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="sidebar">
        
          
        </div>

         <img id="cerebrito" src="../../img/logocerebro.png">


        <div class="imageList">
            <h2 id="tituloReportes">User Information</h2>
            <hr>
            <br>
            <br>
            <br>
            <br>
            <br>

           
    
    
    <form id="datosUsuario"  method="POST" action="{{action('UserController2@update', $user->id)}}" enctype="multipart/form-data">       
    <br>
    <br>
    <label class="negritas">USERNAME</label><br>
    <input type="text" name="UserName" value="{{$users->name}}">
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
   <input type="date" name="Bday" value="{{$users->FechNac}}">
   <br>
   <br>

  <br>
  <br>
  <label class="negritas">ABOUT ME</label><br>
  ​<textarea id="txtArea" name="About"  rows="10" cols="70">{{$users->desc}}</textarea>
  <br>
  <br>
  <label class="negritas">SELECT AVATAR</label><br>
  <input type="file" name="avatar">
  <br>
  <br>
  <label class="negritas">SELECT COVER</label><br>
  <input type="file" name="cover">
  <br>
  <br>
  <input type="submit" name="save">
    </form>
           
           </div>
    </body>
</html>
