<?php
error_reporting(E_ALL);
ini_set('display_errors',true);
ini_set('error_log',true);
ini_set('error_log','err.log');

 
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
echo "Connected successfully";

session_start(); 



//validation
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{ 


            if (empty($_POST['fname']) || empty($_POST['femail'])|| empty($_POST['fuserid'])|| empty($_POST['fpassword'])) //Validating inputs using PHP code 
            { 
            echo "fill all fields ";
            } 
   
            else if (!preg_match("^[a-zA-Z ]+$^",$_POST['fname']))
            {
                echo "invalid name";
            }
          else if(!filter_var($_POST['femail'], FILTER_VALIDATE_EMAIL) === true)
            {
                echo "invalid email";
            }
            
          else if (!preg_match("^[a-zA-Z ]+$^",$_POST['fuserid']))
            {
                echo "invalid userid";
            }
            
          
         else   if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/",$_POST['fpassword']))
            {
                echo "invalid password";
            }
	
        else
        {
			
            $pimage= addslashes(file_get_contents($_FILES["pimage"]["tmp_name"]));
            $sql="INSERT INTO signup (namedb,emaildb,useriddb,passworddb,imagedb)VALUES('$_POST[fname]','$_POST[femail]','$_POST[fuserid]','$_POST[fpassword]','$pimage')";
        
            if (mysqli_query($db, $sql)) {
                
               
                 
                echo '<script>alert("You have successfully registered")</script>';

                echo '<script>window.location="signup.php";</script>';
                

            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($db);
            }
        
        }
   
    
}







mysqli_close($db);
?> 


 

 
