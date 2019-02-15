<?php
error_reporting(E_ALL);
ini_set('display_errors',false);
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


session_start(); 



//validation
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{ 

    if(empty(trim($_POST['blogtext']))) //Validating inputs using PHP code 
    { 
        echo '<script>alert("fill description")</script>';
        echo '<script>window.location="welcome2.php";</script>';
    } 
   else if(empty(trim($_POST['tite']))) //Validating inputs using PHP code 
    { 
        echo '<script>alert("fill title")</script>';
        echo '<script>window.location="welcome2.php";</script>';
    } 
    else if(empty(trim($_POST['cate']))) //Validating inputs using PHP code 
    { 
        echo '<script>alert("fill category")</script>';
        echo '<script>window.location="welcome2.php";</script>';
    } 
           
            
         else{   
            $category=$_POST['cate'];
          
            $sql="INSERT INTO blog (bdata,useriddb,title,category)VALUES('$_POST[blogtext]','$_SESSION[login_id]','$_POST[tite]','$category')";
        
            
           if (mysqli_query($db, $sql)) 
            {
                
                $_SESSION['blogtxt']=$_POST['blogtext'];
                
                echo '<script>alert("blog created")</script>';

              echo '<script>window.location="welcome2.php";</script>';
                

            } else 
            {
                echo "Error: " . $sql . "<br>" . mysqli_error($db);
            }
       
        }
   
    
}







mysqli_close($db);
?> 


 

 
