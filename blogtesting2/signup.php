<!DOCTYPE html>
 <html>
 <head>
            
           <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
           <link rel="stylesheet" type="text/css" href="style/stylelogin.css">
            <link rel="stylesheet" type="text/css" href="style/style.css">
            <script src="js/signupscript.js"></script>
            <?php
            error_reporting(E_ALL);
            ini_set('display_errors',true);
            ?>
            <style>
            #form2
            {
                margin:10%;
            }
            </style>
</head>
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
          <a class="nav-link" href="login.php"><span class="fas fa-sign-in-alt"></span> Login</a>
        </li>
      </ul>
    </div>
  </nav>
    <div class="main">
    <form action="data.php" id="form2" name="form2" onsubmit="return validate();" method="post" enctype="multipart/form-data">
                Name: &nbsp;&nbsp;&emsp;&emsp;<input class="inp"  type="text" name="fname" id="fname" placeholder="name" required><p class="n">*name must be in alphabets only</p>
                <br><br>
                E-mail:&nbsp;&emsp;&emsp; <input  class="inp" type="email" id="femail" name="femail" placeholder="email" required><p class="e">*enter valid email format</p>
                <br><br>
                Userid:&nbsp; &emsp;&emsp;<input title="must contain alphabets only" class="inp" type="text" name="fuserid" id="fuserid" placeholder="userid" required ><p class="u">*userid must contain alphabets onlyy</p>
                <br><br>
                Password:&emsp;<input title="must contain atleast 1 lowercase, 1 uppercase alphabet,1 integer,1 special symbol  " class="inp" type="password" name="fpassword" id="fpassword" placeholder="password" required ><p class="p">*password length minimum 8 characters,must contain 1 lowercase,1 uppercase alphabet,1 special character and 1 integer</p>
                <br><br>
                <input type="file" name="pimage" id="pimage" > <p class="i">*select an image</p>
                <br><br><input class="but2" type="submit" name="submit" value="Submit"><button type="reset" class="but2 but3" style="margin-top:1%">Reset</button><br><br>
                <a href="login.php">Already a user?</a>
    </form>
    </div>
</body>
</html>