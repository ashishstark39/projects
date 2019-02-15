
<!DOCTYPE html>

<?php

//include('session.php');

session_start();

error_reporting(E_ALL);
ini_set('display_errors',true);
?>





<html>
<head>
           <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
            <!--<link rel="stylesheet" type="text/css" href="style/stylelogin.css">-->
          <style>
            
          .text
          {
            margin: auto;
            margin-top:10%;
            resize:none;
            color:white;
          }
          .textlogin
          {
            color:white;
            font-size:150%;
          }
          h2
          {
            color:white;
          }
          .a1
          {
            background-color:#1764a5;
            padding:2%;
            color:white;
          }
         
          img
          {
            width:100%;
            max-width:300px;
          }
          </style>

</head>

        <body background="bg.jpg">

        <!--NAVBAR-->
        <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
            <a class="navbar-brand" href="index1.php">HOME</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="true">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navb" class="navbar-collapse collapse hide">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="showblog.php"><span class="fas fa-user"></span> Your blogs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="create.php"><span class="fas fa-user"></span> Create blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php"><span class="fas fa-user"></span> Logout</a>
                </li>
              </ul>
            </div>
        </nav>

<!--body-->
<div class="container-fluid col-lg-6">

        
        <!--user information-->
        <h2><u>USER PROFILE:</u></h2>
        <div class="imgwrapper">
                        <?php  echo '<img class="img-responsive" src="data:imagedb/jpeg;base64,'.base64_encode( $_SESSION['login_image']).'"/>'; ?>
                        </div>
                        <div class="content">
                        <p class="textlogin"> USER NAME: <?php echo $_SESSION['login_user']?> </p>
                        <p class="textlogin"> USER EMAIL: <?php echo $_SESSION['login_email']?> </p>
                        <P class="textlogin"> USER ID: <?php echo $_SESSION['login_id']?> </p>
                        </div>
                        <form method="POST" action="update.php" style="display:inline">
                        <button type="submit" class="btn btn-info">Update</button>
                        
                        </form>
                        <form method="POST" action="delete.php" style="display:inline">
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <br><br>
                        <div class="anchor">
                        <a class="a1" href="logout.php">LOGOUT</a>
                        </div>

        </form> 
  </div>

</div>        

        </body>
</html> 