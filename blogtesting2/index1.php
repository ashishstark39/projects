<?php
   include('./form/session.php');
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
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>BLOG</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <script src="./js/social.js"> </script>
  <link rel="stylesheet" type="text/css" href="./style/social.css">	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  






  <style>
    .colu
    {
      border:3px solid red;
      padding: 2%;
      border-radius:10px;
      color:white;
      margin-bottom: 2%;
      margin-left:1%;
      text-align:justify;
      word-break:break-all;
    }
    .container-fluid
    {
      margin-top: 2%;
      padding-right: 6%;
    }
    h2
    {
      width:100%;
      color:#d22d2d;
      
    }
    .textlogin
    {
      
    }
    .bn
    {
      float:left;
      
    }
    .ui
    {
      float:right;
    }
    .t
    {
      font-size:200%;
      text-align:center;
    }
    .pagination
    {
      margin-left:43%;
    }
  </style>
</head>
<body background="bg.jpg">
  <!--NAVBAR-->
  
  <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
      <nav class="navbar navbar-light ">
          <a class="navbar-brand" href="index1.php">
            <img src="logo-white.png" width="30" height="30" class="d-inline-block align-top" alt="">
            MY BLOG
          </a>
        </nav>
        <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="true">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navb" class="navbar-collapse collapse hide">
      <ul class="nav navbar-nav ml-auto">
          <?php
               $sql="SELECT DISTINCT category FROM blog";
               $option = '';
               if ($result = $db->query($sql)) {
 
               while($row = $result->fetch_assoc())
              { 
                $option .= '<option value = "'.$row['category'].'">'.$row['category'].'</option>';
              }
             
              ?>
            
              <form action="index1.php" method=post>
              <select name="sel" id="sel"> 
                   <!-- <option value="" selected="true" disabled>Select Category</option>-->
                    <option value="all" selected="true" >All</option>
                    <?php echo $option; ?>
              </select>
              <button type=submit>sub</button>
              </form>
             
           
              
            <?php } ?>
          

        <li class="nav-item">
          <a class="nav-link" href="signup.php"> Signup</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php"><span class="fas fa-sign-in-alt"></span> 
                  <?php 
                          if(isset($_SESSION['login_user']))
                          {
                           
                            echo "Your Profile";
                          }
                          else
                          {
                            echo "Login";
                          }
                            

                   ?> 
      
      </a>
        </li>
      </ul>
    </div>
  </nav>
<!--body-->
  <div class="container-fluid">
     
        <h2><center><u>ALL BLOGS</u></center></h2>

        <div class="row">





        <?php


$limit = 5;  
if (isset($_GET["page"]))
 { 
   $page  = $_GET["page"];
} else
 { 
   $page=1;
};  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM blog LIMIT $start_from, $limit";  
$rs_result = mysqli_query($db, $sql); 
                      
    
                
 
while ($row = $rs_result->fetch_assoc())  {
                      $field1name = $row["blogno"];
                      $field2name = $row["useriddb"];
                      $field3name = $row["bdata"];
                      $field4name = $row["title"];
                      $field5name = $row["category"];
                      
                             
                             echo '<div class="col-lg-12 col-sm-5 colu"> 
                             
                                         <p class="textlogin t"><b>'.$field4name.'</b></p> 
                                         <P class="textlogin"> <b> BLOG DESCRIPTION:</b> &emsp; '.$field3name.' </p>
                                        <p class=" ui"> <i><b> by</b> &emsp; '.$field2name.'</i> </p> 
                                        
                              
                               </div>';
                             
   
                      }
                
                
  ?>
      </div>
  </div>


<!--pagination-->
  <?php  
$sql = "SELECT COUNT(*) FROM blog";  
$rs_result = mysqli_query($db, $sql);  
$row = mysqli_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<ul class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<li class='page-item'><a class='page-link' href='index1.php?page=".$i."'>".$i."</a></li>";  
};  
echo $pagLink . "</ul>";  
?>




<!--social icons  -->
  <div class="icon-bar">
      <a  class="facebook"><i class="fa fa-facebook"></i></a> 
      <a class="twitter"><i class="fa fa-twitter"></i></a> 
      <a class="google"><i class="fa fa-google"></i></a> 
      <a  class="linkedin"><i class="fa fa-linkedin"></i></a>
      <a class="youtube"><i class="fa fa-youtube"></i></a> 
</div>
<div class="ffix"><a class="r1" href="http://www.facebook.com"> click here to redirect to facebook</a></div>
<div class="tfix"><a class="r1" href="http://www.twitter.com"> click here to redirect to twitter</a></div>
<div class="gfix"><a class="r1" href="http://www.google.com"> click here to redirect to google</a></div>
<div class="lfix"><a class="r1" href="http://www.linkedin.com"> click here to redirect to linkedin</a></div>
<div class="yfix"><a class="r1" href="http://www.youtube.com"> click here to redirect to youtube</a></div>  
<!--FOOTER-->





    <!-- Footer -->
<footer class="page-footer font-small blue" style="background-color:black">

    <!-- Copyright -->
    <div class="footer footer-copyright text-center py-3">© 2019  Copyright:
      <a href="https://www.webkul.com"> www.webkul.com</a>
      <p></p>
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->


</body>
</html>
