<?php
   include('session.php');
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'webkul');
   define('DB_DATABASE', 'myDB');
   
   // Create connection
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
   // Check connection
   if ($db->connect_error) 
   {
       die("Connection failed: " . $db->connect_error);
   }

 error_reporting(E_ALL);
 ini_set('display_errors',true);

?>


 
     <?php //  echo '<b>'.$field1name." ".$field2name." ".$field3name." ".$field4name." ".$field5name.'</b><br />';?>
<!DOCTYPE html>
<html>
       <head>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
                   <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
                    <!--<link rel="stylesheet" type="text/css" href="style/stylelogin.css">-->
                  <style>
                    body
                    {
                      background-color:rgb(194, 239, 239);
                    }
                  .text
                  {
                    margin: auto;
                    margin-top:10%;
                    resize:none;
                  }
                  .bl
                  {
                    word-break:break-all;
                    width:100%;
                  }
                  </style>
        
        </head>
        
                <body>
        
                <!--NAVBAR-->
                <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
                    <a class="navbar-brand" href="index1.php">HOME</a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="true">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div id="navb" class="navbar-collapse collapse hide">
                      <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item">
                          <a class="nav-link" href="login.php"><span class="fas fa-user"></span><?php echo $_SESSION['login_user']?></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="signup.php"><span class="fas fa-user"></span> Sign Up</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="logout.php"><span class="fas fa-user"></span> Logout</a>
                        </li>
                      </ul>
                    </div>
                </nav>
        
        
        
                <!--user information-->

              <h3><u>USER BLOGS:</u></h3>
                
                      
                      <div class="content container-fluid">
                      
                      
                    <?php
                      $sql = "SELECT * FROM blog WHERE useriddb = '$_SESSION[login_id]'";

                      echo "<b> <center>Database Output</center> </b> <br> <br>";
                if ($result = $db->query($sql)) {
 
                  while ($row = $result->fetch_assoc()) {
                      $field1name = $row["blogno"];
                      $field2name = $row["useriddb"];
                      $field3name = $row["bdata"];
                      $field4name = $row["title"];
                      $field5name = $row["category"];
                      
                             echo '<div class="bl">
                              <p class="textlogin"> <b>BLOG NO:</b> &emsp; '.$field1name.' </p>
                              <p class="textlogin"> <b> USER ID:</b> &emsp; '.$field2name.' </p>
                               <P class="textlogin"> <b> BLOG DESCRIPTION:</b> &emsp; '.$field3name.' </p>
                               <p class="textlogin"> <b> TITLE: &emsp;</b> '.$field4name.' </p>
                               <p class="textlogin"> <b> CATEGORY:&emsp;</b> '.$field5name.' </p><br><br>
                               </div>';
                             
   
                      }
                }
                
                         ?>       
                                <br>
                               <div class="anchor">
                                <a href="logout.php">LOGOUT</a>
                                </div>
                </form> 
          </div>
        
        </div>        
             </body>
        </html> 

    
 
<?php
$result->free();

?>


