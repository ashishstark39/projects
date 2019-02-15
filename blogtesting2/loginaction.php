<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'webkul');
define('DB_DATABASE', 'myDB');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    
   if($_SERVER["REQUEST_METHOD"] == "POST") {
   
    
    $myusername = mysqli_real_escape_string($db,$_POST['userid']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password1']); 
    
    $sql = "SELECT namedb,emaildb,useriddb,imagedb  FROM signup WHERE useriddb = '$myusername' and passworddb = '$mypassword'";
    $result = mysqli_query($db,$sql);
   
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
    
    $count = mysqli_num_rows($result);
    
    
    
    if($count == 1) {
        $_SESSION['login_user'] = $row[namedb];
        $_SESSION['login_email'] = $row[emaildb];
        $_SESSION['login_id'] = $row[useriddb];
        $_SESSION['login_image'] = $row[imagedb];

        header("location: welcome2.php");
    }else {
       
       echo '<script>alert("Your Login Name or Password is invalid")</script>';
       echo '<script>window.location="login.php";</script>';
    }
 }




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
            <!--<link rel="stylesheet" type="text/css" href="style/stylelogin.css">-->
          <style>
            body
            {
              background-color:rgb(194, 239, 239);
            }
          .text
          {
            margin: auto;
            margin-top:10%;
            resize:none;
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
                  <a class="nav-link" href="#"><span class="fas fa-user"></span> Your blogs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="signup.php"><span class="fas fa-user"></span> Sign Up</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php"><span class="fas fa-user"></span> Logout</a>
                </li>
              </ul>
            </div>
        </nav>



        <!--user information-->
        <h3><u>USER BLOGS:</u></h3>
        
                        <div class="content">
                        <p class="textlogin"> BLOG NO: <?php echo $_SESSION['login_user']?> </p>
                        <p class="textlogin"> USER ID: <?php echo $_SESSION['login_email']?> </p>
                        <P class="textlogin"> BLOG DESCRIPTION: <?php echo $_SESSION['login_id']?> </p>
                        <P class="textlogin"> TITLE: <?php echo $_SESSION['login_id']?> </p>
                        <P class="textlogin"> CATEGORY: <?php echo $_SESSION['login_id']?> </p>
                        </div>
                        <br>
                        <div class="anchor">
                        <a href="logout.php">LOGOUT</a>
                        </div>
        </form> 
  </div>

</div>        









    
        </body>
</html> 