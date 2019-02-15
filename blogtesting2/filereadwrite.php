<!DOCTYPE html>
    <head>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <link rel="stylesheet" type="text/css" href="stylelogin.css">
            <script src="loginscript.js"></script>
          
    </head>


<html>
        <body>
        <div class="head">LOGIN</div>
        <div class="main">
        <form name="form1" action="" onsubmit="return validateForm()" method="get">
        User id: &nbsp &nbsp &nbsp <input class="inp" type="text" name="name" required><br><br><br>
        Password: &nbsp&nbsp<input class="inp" type="password" name="password1" required><p class="p">*enter valid password</p><br><br>
        <button class="button button1" id="but1" type="submit" target="_blank" onclick="validateForm()">Login</button><br><br>
        <a href="signup.html">New User?</a>
        </form>
        </div>

                 <?php
                $file = fopen("saveddata.txt", "a");
                $txt = $_GET["name"]."\n";
                fwrite($file, $txt);
                $txt = $_GET["password1"]."\n";
                fwrite($file, $txt);
                
                ?> 
        <div class="show">
        <?php
        $file= fopen("saveddata.txt", "r");
        echo fread($file,filesize("saveddata.txt"));
        fclose($file);
        ?>
        </div>


        </body>
</html> 