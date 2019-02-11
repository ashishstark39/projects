<?php
   include('session.php');
?>
 <?php
 error_reporting(E_ALL);
 ini_set('display_errors',true);
?>
<!DOCTYPE html>
    <head>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
            <link rel="stylesheet" type="text/css" href="style/stylelogin.css">
            <style>
                  .textlogin
           {
            color: rgb(0, 110, 255);
            font-size:120%;
            display: block;
           }
           .pimage
           {
                

                   
           }
           .content {
    text-align: center;
}
.anchor {
    text-align: center;
}
.pimage {
    text-align: center;
}
            </style>
             
    </head>


<html>
        <body>
        <div class="head">LOGIN</div>
        <div class="main">
       
                        <div class=pimage>
                        <?php  echo '<img src="data:imagedb/jpeg;base64,'.base64_encode( $_SESSION['login_image']).'"/>'; ?>
                        </div>
                        <div class="content">
                        <p class="textlogin"> USER NAME: <?php echo $_SESSION['login_user']?> </p><br>
                        <p class="textlogin"> USER EMAIL: <?php echo $_SESSION['login_email']?> </p><br>
                        <P class="textlogin"> USER ID: <?php echo $_SESSION['login_id']?> </p><br>
                        </div>
                        <br>
                        <div class="anchor">
                        <a href="logout.php">LOGOUT</a>
                        </div>
        </form>
        
        </div>
        </body>
</html> 