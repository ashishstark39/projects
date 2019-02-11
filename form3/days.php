


<!DOCTYPE html>
    <head>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
            <link rel="stylesheet" type="text/css" href="style/stylelogin.css">
            
                <?php
                error_reporting(E_ALL);
                
                ?>
    </head>


<html>
        <body>
        <div class="head">Current date: <?php echo date("d/m/y") ?> </div>
        <div class="main">
        <form name="form"  method="post">
        <label>Enter Date &emsp;</label><input type="date" class="form-control" id="date1" name="date" required><br>
        <button type="submit" class="button button1" >Submit</button>
        </form>
        <?php
        $date1=date_create(date($_POST["date"]));
        $date2=date_create(date("y-m-d"));
        $diff=date_diff($date1,$date2);
        echo "<h4> Total days between these dates are:" .$diff->format('%a days')." </h4>";
        ?>
        </div>
        
        
        </body>
</html> 