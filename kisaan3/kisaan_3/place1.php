<?php 
include 'header.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>kisaan.org</title>
       
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet"type="text/css" href="style3.css">
        <style>
            #ff{
                float:left;width:400px;
                height:300px;
            }
            #place1{
                float:right;
                background-color:#660033;
                width:400px;
                height:300px;
                text-align: center;
                 margin:10%;
            }
        </style>
    </head>
    <body>
        <div style="background-image:url(soil.jpg);background-color: yellow;">
            <h1 style="text-align: center;color:#660033">soil information</h1>
             <div style="color:#660033;background-color: #660033;border-radius: 10%; margin:10%" id="ff">
                 <center>
                <form  method="post"action="#place1">
                    country name:<br>
                 <input type="text" name="country" placeholder="country"><br>
                 state name: <br>
                 <input type="text" name="state" placeholder="state"><br>
                 district name:<br>
                 <input type="text" name="district" placeholder="district"><br>
               <input type="submit" name ="submit1" style="margin-top: 15px" class= "btn btn-primary">
           
                
                </form>
                 </center>
                
            </div>
            
        <div id="place1">
            <?php 
  $con= mysqli_connect("localhost","root","" ,"scart")or die(mysqli_error($con));
 
 if(isset($_POST['submit1'])){
      $r="select soil from states where state = '$_POST[state]'";
  $res = mysqli_query( $con ,$r);
     
     while($row = mysqli_fetch_array($res))
             {
               ?>  <h1 style="color:white; text-align: center">result:</h1><h1 style="color:white;"><?php echo"Soil of ur area is"." " ;
                  echo $row['soil'];?></h1><?php
                }
    }
  
  
  
  
  ?>
        </div>
            </div>
             <?php
include'contact5.php'
?>
    </body>
</html>
