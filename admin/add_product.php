<?php
	session_start();
	if(($_SESSION["admin"])=="")
	{

		?>

		<script type="text/javascript"> 
			window.location = "admin_login.php";
		</script>

	<?php	

	}

?>


<?php
    include "header.php";
    include "menu.php";
?>

<?php

$link =mysqli_connect("localhost" , "root" , "");
mysqli_select_db($link , "scart2");

?>

        <div class="grid_10">
            <div class="box round first">
                <h2>
                    Product Sales</h2>
                <div class="block">
                    
                    <form name = "form1" method="post" action="" enctype="multipart/form-data">

                    	<table class="table table-bordered">
                    		<tr>
                    			<td> Product Name : </td>
                    			<td><input type="text" name="pnm" ></td>
                    		</tr>

							<tr>
                    			<td> Product Price : </td>
                    			<td><input type="text" name="pprice" ></td>
                    		</tr>

							<tr>
                    			<td> Product Quantity : </td>
                    			<td><input type="text" name="pqty" ></td>
                    		</tr>

                    		<tr>
                    			<td>Product Image : </td>
                    			<td><input type="file" name="pimage" ></td>
                    		</tr>

							<tr>
                    			<td>Product Category : </td>
                    		
                            	<td>

                    				<select name = "pcategory">
                    					
                                        <option value="Tools">Tools</option>
                    					<option value="Seeds">Seeds</option>
                    					<option value="Fertillizers">Fertillizers </option>
                    					
                    					
                    				</select>


                    			</td>

                    		</tr>

                    		<tr>
                    			<td>Product Description : </td>
                    			<td><textarea cols ="15" rows="10" name="pdesc"></textarea></td>

                    		</tr>


							<tr>
                    			
                    			<td colspan="2" align="center"> <input type="submit" name="submit1" value="Submit"> </td>

                    		</tr>


                    	</table>


                    </form>

<?php
if(isset($_POST["submit1"]))
{
	$v1=rand(1111,9999);
	$v2=rand(1111,9999);

	$v3 = $v1.$v2;

	$v3 = md5($v3);

	$fnm = $_FILES["pimage"]["name"];
    
	$dst="./product_image2/".$v3.$fnm;
	$dst1="/product_image2/".$v3.$fnm;

	move_uploaded_file($_FILES["pimage"]["tmp_name"] , $dst);


	mysqli_query($link , "insert into product values('' ,'$dst1',  '$_POST[pprice]' ,'$_POST[pnm]'  , '$_POST[pcategory]', '$_POST[pqty]'  , '$_POST[pdesc]' )");

}
?>


                </div>
            </div>
            
<?php
    include "footer.php";
?>
      