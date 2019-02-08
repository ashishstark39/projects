<!DOCTYPE html>
 <html>
 <head>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <link rel="stylesheet" type="text/css" href="style/style.css">
            <script src="js/signupscript.js"></script>
            <?php
            error_reporting(E_ALL);
            ini_set('display_errors',true);
            ?>
</head>
<body>
    <div class="head">SIGN-UP</div>
    <div class="main">
    <form action="data.php" id="form2" name="form2" onsubmit="return validate();" method="post">
                Name: &nbsp&nbsp&emsp;&emsp;<input class="inp"  type="text" name="fname" required><p class="n">*enter valid name</p>
                <br><br>
                E-mail:&nbsp&emsp;&emsp; <input  class="inp" type="email" id="femail" name="femail" required><p class="e">*enter valid email</p>
                <br><br>
                Userid:&nbsp &emsp;&emsp;<input  class="inp" type="text" name="fuserid" required ><p class="u">*enter valid userid</p>
                <br><br>
                Password:&emsp;<input  class="inp" type="password" name="fpassword" required ><p class="p">*enter valid password</p>
                <br><br>
                <input class="but1" type="file" name="imagetoupload" id="profile-img" >
                <br><input class="but2" type="submit" name="submit" value="Submit">  
    </form>
    </div>
</body>
</html>