<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Upload</title>
        <link rel="stylesheet" href="./css/upload.css">
    </head>
    <body>
        @include ('layouts.menu')
        <div id="leftContainer">
            <div id="formContent">
                <form action="/upload" enctype="multipart/form-data" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <label for="">Title</label>
                        <input type="text" name="Titulo" class="inputText" placeholder="Title here" required>
                      
                        <br>
                    <label for="">File</label>
                        <input id="btnFile" name="multimedia" type="file" accept="" required>  
                    <label for="">Description</label>
                        <textarea class="inputText" name="desc" id="" cols="30" rows="10" required></textarea>
                        <br>
                    <label for="">Category</label>
                        <select name="category" id="selectCategory">
                            <option value="fanart">Fan Art</option>
                            <option value="orig">Original Art</option>
                            <option value="model">3D Modeling</option>
                            <option value="2dAnim">2D Animation</option>
                            <option value="3dAnim">3D Animation</option>
                            <option value="StopAnim">Stopmotion Animation</option>
                        </select>
                        <br>
                    <label for="">For Sale?</label>
                    <div id= "radioBtnContainer">
                    <input class="radiobtn" type="radio" name="forSale" value="yes"> <p class="radiotext"> Yes </p>
                        <input class="radiobtn" type="radio" name="forSale" value="no" checked ="true"><p class="radiotext"> No </p>
                    </div>
                       
                        <br>
                    <label for="">Tags*</label>
                        <!--<textarea class="inputText" name="" id="" cols="30" rows="10"></textarea>-->
                         <label>Hashtag1</label>
                        <input type="text" value="#" name="h1" required>

                         <label>Hashtag2</label>
                        <input type="text" value="#" name="h2" required>

                         <label>Hashtag3</label>
                        <input type="text" value="#" name="h3" required>

                         <label>Hashtag4</label>
                        <input type="text" value="#" name="h4" required>
                        <p>*Please, begin each tag with "#" and write each tag in a new line. Example:"#fanart, #shipping, #cartoon"</p>
                        <br>
                        <div id="contieneBtn"> 
                           <!-- <input  id="btnDraft" type="submit" value="Save as Draft">-->
                            <input id="btnUpload"type="submit" value="Upload">
                        </div>
                   
                </form>
            </div>    
        </div>

        <div id="rightContainer">
            <div id="imageContainer">
            <img src=".\img\JustMonika.png" alt="IMG"></div>
        </div>
    </body>
</html>