   <!--DIV QUE CONTIENE LA SIDEBAR--> 
  
  <!DOCTYPE html>
  <html>
  <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="./public/js/jquery.js">
        $(document).ready(function(){
            $('#hp_login').on('click',function(){
                $('#formDIV').set('visibility','hidden');
                $('#hidden').set('visibility', 'visible');
            });
        });
      </script> 
  </head>
<body>
    <div id="sideBarDIV">

        <div id="formDIV">  
                @include('auth.register')
        </div>

        <div id="hidden">
            @include('auth.login');
        </div>

        <p>Already a creator?</p>
        <a ><p id="hp_login">Log in</p> </a>
    </div>
</body>
</html>