<?php
error_reporting(E_ALL);
ini_set('display_errors',true);
ini_set('error_log',true);
ini_set('error_log','err.log');
session_start();
 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'webkul');
define('DB_DATABASE', 'myDB');

// Create connection
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

else
{
    echo "connected";
}


$i= $_SESSION['login_id'];
session_destroy();
echo $i;
//validation


            
          
            
          
         
	
			
           // $pimage= addslashes(file_get_contents($_FILES["pimage"]["tmp_name"]));
           // $sql_u = "SELECT * FROM signup WHERE useriddb='$_POST[fuserid]'";
            //$res_u = mysqli_query($db, $sql_u);
            /*if (mysqli_num_rows($res_u) > 0) 
            {
                echo '<script>alert("User id already exsist choose another")</script>';
                echo '<script>window.location="signup.php";</script>';
            }
            else*/
            //{

         $sql=" DELETE FROM signup WHERE useriddb= 'btwo' "; 
            $result = mysqli_query($db,$sql);
          //  session_destroy();
                echo "deleted";
     //  header("location: login.php");
       
        
   
    

mysqli_close($db);
?> 


 

 
