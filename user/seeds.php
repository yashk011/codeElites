<?php
include "header.php";
include "connection.php";
?>


	
	<section>
		<div class="container">
			<div class="row">
				
				<?php
					include "left.php";
				?>

			

			<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>

						<?php


							$res = mysqli_query($link ,"select * from product where product_type  = 'Seeds' " );
						
							while($row = mysqli_fetch_array($res))
							{
								?>

								<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="../admin/<?php echo $row["product_image"]  ; ?>"  width="264" height="270"/>
												<h2><?php echo $row["product_price"]." INR" ;?></h2>
												<p><?php echo $row["product_name"] ;?></p>
												<a href="product_details2.php?id=<?php echo $row['id'] ;?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>


											<div class="product-overlay">
												<div class="overlay-content">
													<img src="../admin/<?php echo $row["product_image"]  ; ?>"  width="264" height="270"/>
													<h2><?php echo $row["product_price"]." INR" ;?></h2>
													<p><?php echo $row["product_name"] ;?></p>
													<a href="product_details2.php?id=<?php echo $row['id'] ;?>" class="btn btn-default add-to-cart	"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
											</div>
										</div>
										<div class="choose">
											<ul class="nav nav-pills nav-justified">
												<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
												<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
											</ul>
										</div>
									</div>
								</div>

								<?php

								}
							?>
						
						
						
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
						


				</div>
			</div>
		</div>
	</section>
	<?php

			include "footer.php";

	?>