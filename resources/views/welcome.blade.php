<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CREATOR</title>
   <!-- <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <link rel="stylesheet" type="text/css" media="screen" href="./css/index.css" />
    <!-- <script src="index.js"></script>-->
   
    
</head>
<body>
   <!--DIV QUE CONTIENE EL LOGO--> 
   <div id="logoDIV">
        <div id="logo">
            <img src="./img/Logo_Template.png" alt="Creator">
        </div>
        <div class="slogan">
            <div id="parrafo1">
               <h3>From your mind</h3>
            </div>
            <div id="parrafo2">
                <h3>To the client...</h3>
            </div>
        </div>
    </div>


    <!--DIV QUE CONTIENE LA SIDEBAR--> 
    <div id="sideBarDIV">
        <div id="formDIV"> 
            <h6>Become a Creator!</h6>
         
            @include('auth.login')
            @include('auth.register')
           
            @yield('content')
           
        </div>
        <p>Already a creator?</p>
        <a href="">Log in</a>
    </div>
   
</body>
</html>