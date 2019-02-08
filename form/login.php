<!DOCTYPE html>
    <head>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
            <link rel="stylesheet" type="text/css" href="style/stylelogin.css">
            
                <?php
                error_reporting(E_ALL);
                ini_set('display_errors',true);
                ?>
    </head>


<html>
        <body>
        <div class="head">LOGIN</div>
        <div class="main">
        <form name="form1" action="loginaction.php" method="post" onsubmit="return validateForm();">
        User id: &nbsp &nbsp &nbsp <input class="inp" type="text" name="userid" required><br><br><br>
        Password: &nbsp&nbsp<input class="inp" type="password" name="password1" required><br><br>
        <button class="button button1" id="but1" type="submit" target="_blank" onclick="validateForm()">Login</button><br><br>
        <a href="signup.php">New User?</a>
        </form>
        </div>
        </body>
</html> 