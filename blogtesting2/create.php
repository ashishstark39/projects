
<!DOCTYPE html>

<?php
   include('session.php');

   session_start();
 
 error_reporting(E_ALL);
 ini_set('display_errors',true);
?>

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
            max-width:600px;
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
                  <a class="nav-link" href="welcome2.php"><span class="fas fa-user"></span>Your Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php"><span class="fas fa-user"></span> Logout</a>
                </li>
              </ul>
            </div>
        </nav>

<!--body-->
<div class="container-fluid col-lg-6">
        <div class="text">
        <form name="formafterlogin" method="post" action="blogsave.php">
              <div class="form-group">
                  <label for="usr">TITLE:</label>
                  <input type="text" name="tite" class="form-control" id="usr" placeholder="Your blog title" maxlength="50" required >
                  <label for="usr">CATEGORY:</label>
                        <input type="text" maxlength="50" class="form-control" name="cate" placeholder="Your blog category" required>
            
              <label for="usr">DESCRIPTION:</label>
              <textarea class="blogtext form-control" name="blogtext" cols="69" placeholder="write your new blog here" required></textarea>
              <button type="submit" class="btn btn-primary" style="margin-top:1%">Submit</button>
              <button type="reset" class="btn btn-danger" style="margin-top:1%">Reset</button>
              </div>
        
        <!--user information-->
        

</div>        








    
        </body>
</html> 