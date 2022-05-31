<?php
    require "19015221017_db.php";
?>
<html>
    <head>
      <title>Amazon Sign-In</title>
      <script src="java.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
        <link rel="stylesheet" href="css.css">
        <link rel = "icon" href="images/logo3.png" > 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

     <style>   
        </style>
    </head>
            <body>
                
    <table class="tablo1">
                        
        <form action="giris.php" method="post">
                        <tr>
                            <td> 
                                <a href="index.php">
                                <img src="images/login.png" class="resim1">  
                            </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="loginekran">
                                <h2 style="font-size: 25px;"><b>Sign-In</b> </h2> <br>
                                <b>Email</b><br>
                                <input type="email" id="email" name="Email" class="textbox" ></input><br><br>
                                <b>Password</b><br>
                                <input type="password" id="parola" name="Parola" class="textbox" ></input><br><br>
                                <button class="button"> Login </button>  <br><br>                              
                            <p class="kucukyazi">    By continuing, you agree to Amazon's <a href="#" class="link">Conditions of <br> Use </a>  and <a href="#" class="link">Privacy Notice.</a></p>
                             <br><br>
                         <a href="#" style="font-size: 13px;">Need Help?</a>
                         <br>
                         <br>
                                <p class="kucukyazi" style="padding-left: 100px;">New to Amazon?</p>                         
                                <a href="kayit.php" style="color: black;"> <input type="button" value="Create your Amazon account" class="button2"/></a> <br><br>
                            </td>
                        </tr>
        </form>            
     </table>
                <table class="tablo2" align="center" >
                    <div style="padding-left: 41%;">                  
                        <span></span>
                        <a href="#" class="altyazi">
                            Conditions of Use
                          </a>
                          <span></span>
                          <a href="#" class="altyazi">
                            Privacy Notice
                            </a>
                            <span></span>
                            <a href="#" class="altyazi">
                                Help 
                              </a>
                              <br>
                              <p class="altyazi1">© 1996-2021, Amazon.com, Inc. or its affiliates</p>
                            </div>
                </table>
               
                
            </body>

</html>