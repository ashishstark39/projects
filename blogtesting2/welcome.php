<?php
   include('session.php');
?>
 <?php
 error_reporting(E_ALL);
 ini_set('display_errors',true);
?>
<!DOCTYPE html>
<html>
<head>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
           <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
            <link rel="stylesheet" type="text/css" href="style/stylelogin.css">

<style>
.imgwrapper
{
width:50%;
}
</style>

</head>

            
             
   



        <body>

        <!--NAVBAR-->
        <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
            <a class="navbar-brand" href="../index1.php">HOME</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="true">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navb" class="navbar-collapse collapse hide">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="signup.php"><span class="fas fa-user"></span> Sign Up</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php"><span class="btn btn-link btn-logout"></span> logout</a>
                </li>
              </ul>
            </div>
        </nav>

<!--body-->
<div class="row">
<textarea
</div>        









        <div class="main">
       
                        <div class="pimage imgwrapper">
                        <?php  echo '<img class="img-responsive" src="data:imagedb/jpeg;base64,'.base64_encode( $_SESSION['login_image']).'"/>'; ?>
                        </div>
                        <div class="content">
                        <p class="textlogin"> USER NAME: <?php echo $_SESSION['login_user']?> </p>
                        <p class="textlogin"> USER EMAIL: <?php echo $_SESSION['login_email']?> </p>
                        <P class="textlogin"> USER ID: <?php echo $_SESSION['login_id']?> </p>
                        </div>
                        <br>
                        <div class="anchor">
                        <a href="logout.php">LOGOUT</a>
                        </div>
        
        </div>
        </body>
</html> 