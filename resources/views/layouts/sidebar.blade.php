   <!--DIV QUE CONTIENE LA SIDEBAR--> 
   <div id="sideBarDIV">
        <div id="formDIV"> 
           <!--  <form>
               <h6>Become a Creator!</h6>
                <input class="INPtext" type="text" placeholder="username"><br>
               
                <input class="INPtext" type="text" placeholder="password"><br>

                <input id="btnSubmit" type="submit" value="JOIN!">
            </form> -->
            @include('auth.register')

        </div>
        <p>Already a creator?</p>
        <a href="">Log in</a>
    </div>