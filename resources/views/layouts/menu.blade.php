<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/menu.css" />
    <script src="main.js"></script>
</head>
<body>
    <div id="container">
        <div class="menuElement">
            <div id="LogoContainer">
                <a href=""><img id="logo" src="./img/logoAlt.png" alt="Logo"> <h4>CREATOR</h4></a>
            </div>
        </div>
        <div class="menuElement">
            <div id="symbol">
                <a href=""><img id="logo" src="./img/money.png" alt="For Sale"></a>
            </div>
        </div>
       
        <div class="menuElementB">
            <div id="busqueda"> 
                <form action="/search" method="get">
                <input class="barraBusqueda" type="text" name="txt_busca" placeholder="Search">
                <input type="image" id="img" src="./img/search.png" alt="Search">
                <!--<img src="./img/search.png" alt="Busc">-->
            </form>
            </div>
         </div>
   
        <div id="otherContainer"> 
            <div class="menuItem">
                <div id="user">
                    <!--<a href="profile2"><p>USER</p></a>-->
                    @isset($user)
                     <a href="/profile"><p>{{$user->name}}</p></a>
                    @endisset    
                </div> 
            </div>
            <div class="menuItem">
                <a href="profile">
                    @isset($user)
                    <img src="/uploads/avatars/{{$user->avatar}}" alt="User">
                    @endisset  
                </a> 
            </div>

            <div class="menuItem">
                <a href="upload">
                    <img src="./img/plus.png" alt="Upload">
                </a> 
            </div>

            <div class="menuItem">
                <a href="/configurations">        
                    <img  src="./img/Gear2.png" alt="Settings">
                </a>  
            </div>
        </div>     
    </div>
</body>
</html>