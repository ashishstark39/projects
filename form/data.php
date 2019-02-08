<?php
error_reporting(E_ALL);
ini_set('display_errors',true);
ini_set('error_log',true);
ini_set('error_log','err.log');


$servername = "localhost";
$username = "root";
$password = "webkul";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
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

            
              
            $sql="INSERT INTO signup (namedb,emaildb,useriddb,passworddb)VALUES('$_POST[fname]','$_POST[femail]','$_POST[fuserid]','$_POST[fpassword]')";
        
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        
        }
   
    
}







mysqli_close($conn);
?> 


 

 
