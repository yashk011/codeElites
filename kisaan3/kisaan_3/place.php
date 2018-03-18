 <?php 
  $con= mysqli_connect("localhost","root","" ,"survey")or die(mysqli_error($con));
  session_start();
   $state= $_POST['state'];
  $district=mysqli_real_escape_string($con,$_POST['district']);
  $s_q="select id, state,soil from states where state  = '$state'";
  $s_q_r= mysqli_query($con, $s_q)or die(mysqli_error($con));
  echo " soil of your area is"." ";
 while($row= mysqli_fetch_array($s_q_r))
        
         {
  
          echo $row[2].",";
     
       
         }
  ?>