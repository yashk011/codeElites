<?php
	include 'connection.php';
	include 'header.php';
	?>

	<?php

		$link=mysqli_connect("localhost","root","");
		mysqli_select_db($link,"scart2");
		$order_id = $_SESSION["order_id"];
		//this is for getting record from temp table to permanent table
		$res=mysqli_query($link,"select * from confirm_order_address where id2=$order_id");
		while($row=mysqli_fetch_array($res))
		{
		    $fname=$row["firstname"];
		    $lname=$row["lastname"];
		    $email=$row["email"];
		    $address=$row["address"];
		    $city=$row["city"];
		    $pincode=$row["pincode"];
		    $contactno=$row["contactno"];
		}

		?>

	<div class="col-sm-6 col-sm-offset-3">
			<div class="spacer">   		

       		<h4>Your Details</h4>

				<form role="form" name="form1" method="post">
					<div class="form-group">	
						<label for="name">Your Name : </label> <?php  echo "$fname"  ?> <br>
 					</div>

 					<div class="form-group">	
						<label for="name">Your Name : </label> <?php  echo "$fname"  ?> <br>
 					</div>

 					<div class="form-group">	
						<label for="email">Your email : </label> <?php  echo "$femail"  ?> <br>
 					</div>

 					<div class="form-group">	
						<label for="address">Your Address : </label> <?php  echo "$address"  ?> <br>
 					</div>

 					<div class="form-group">	
						<label for="city">Your City : </label> <?php  echo "$city"  ?> <br>
 					</div>

 					<div class="form-group">	
						<label for="contactno">Your Contact No. : </label> <?php  echo "$contactno"  ?> <br>
 					</div>

			
					
			</form>
			</div>



       	</div>


       	<?php



	include 'footer.php';
?>
