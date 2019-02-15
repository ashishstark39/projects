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

echo $_POST['uname'];
//validation
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{ 


            if (empty($_POST['uname']) || empty($_POST['uemail'])) //Validating inputs
            { 
            echo "fill all fields ";
            } 
   
            else if (!preg_match("^[a-zA-Z ]+$^",$_POST['uname']))
            {
                echo "invalid name";
            }
            else if(!filter_var($_POST['uemail'], FILTER_VALIDATE_EMAIL) === true)
            {
                echo "invalid email";
            }
            
          
            
          
         
	
        else
        {
			
            $pimage= addslashes(file_get_contents($_FILES["pimage"]["tmp_name"]));
           // $sql_u = "SELECT * FROM signup WHERE useriddb='$_POST[fuserid]'";
            //$res_u = mysqli_query($db, $sql_u);
            /*if (mysqli_num_rows($res_u) > 0) 
            {
                echo '<script>alert("User id already exsist choose another")</script>';
                echo '<script>window.location="signup.php";</script>';
            }
            else*/
            //{

            $sql=" UPDATE signup SET namedb = '$_POST[uname]', emaildb= '$_POST[uemail]',imagedb= '$pimage' WHERE useriddb= '$i' "; 
            $result = mysqli_query($db,$sql);


$sql2 = "SELECT namedb,emaildb,useriddb,imagedb  FROM signup WHERE useriddb= '$i'";
$result2 = mysqli_query($db,$sql2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$count = mysqli_num_rows($result2);
       
        $_SESSION['login_user'] = $row['namedb'];
        $_SESSION['login_email'] = $row['emaildb'];
       // $_SESSION['login_id'] = $row['useriddb'];
        $_SESSION['login_image'] = $row['imagedb'];
        
       header("location: welcome2.php");
       
        }
   
    
}
mysqli_close($db);
?> 


 

 
