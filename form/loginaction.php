<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'webkul');
define('DB_DATABASE', 'myDB');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    
    $myusername = mysqli_real_escape_string($db,$_POST['userid']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password1']); 
    
    $sql = "SELECT namedb,emaildb,useriddb FROM signup WHERE useriddb = '$myusername' and passworddb = '$mypassword'";
    $result = mysqli_query($db,$sql);
   
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
    
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
      
    if($count == 1) {
        $_SESSION['login_user'] = $row[namedb];
        $_SESSION['login_email'] = $row[emaildb];
        $_SESSION['login_id'] = $row[useriddb];
       

        

        header("location: welcome.php");
    }else {
       echo "Your Login Name or Password is invalid";
    }
 }




?>
