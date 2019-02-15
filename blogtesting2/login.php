
<!DOCTYPE html>
                <?php
                error_reporting(E_ALL);
                ini_set('display_errors',true);
                ?>
<html>
  <head>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
           <link rel="stylesheet" type="text/css" href="style/stylelogin.css">
            
                
    </head>

    <?php
session_start();
if(isset($_SESSION['login_user']))
      {
       
        header('Location: welcome2.php');
      }
    
?>

        <body background="bg.jpg">
        <!--NAVBAR-->
              
  <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
      <nav class="navbar navbar-light ">
          <a class="navbar-brand" href="index1.php">
            <img src="logo-white.png" href="index1.php" width="30" height="30" class="d-inline-block align-top" alt="">
            HOME
          </a>
        </nav>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="true">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navb" class="navbar-collapse collapse hide">
      <ul class="nav navbar-nav ml-auto">
         

        <li class="nav-item">
        <a class="nav-link" href="signup.php"><span class="fas fa-user"></span> Sign Up</a>
        </li>
        
      </ul>
    </div>
  </nav>
<!--body-->
        <div class="main">
        <form name="form1" action="loginaction.php" method="post" onsubmit="return validateForm();">
        User id: &nbsp; &nbsp; &nbsp; <input class="inp" type="text" name="userid" placeholder="userid" required><br><br><br>
        Password: &nbsp;&nbsp;<input class="inp" type="password" name="password1" placeholder="password" required><br><br>
        <button class="button button1" id="but1" type="submit" target="_blank" onclick="validateForm()">Login</button><br><br>
        <a href="signup.php">New User?</a>
        </form>
        </div>
        </body>
</html> 