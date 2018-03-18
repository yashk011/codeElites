<?php
	require "header.php";
?>
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span> </span>KISSAN</h1>
									<h2>Online Agriculture Shop</h2>
									<p>We know having a nice, organized farm shop is incomparable in its value, so we've assembled a group of inspiring ideas for your place </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/farmer1.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span> </span>KISSAN</h1>
									<h2>Easy Shopping For Farmers</h2>
									<p>We know having a nice, organized farm shop is incomparable in its value, so we've assembled a group of inspiring ideas for your place </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/farmer2.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span></span>KISAAN</h1>
									<h2></h2>
									<p>We know having a nice, organized farm shop is incomparable in its value, so we've assembled a group of inspiring ideas for your place </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/farmer3.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="tools.php">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											<a href="tools.php" >Tools</a>
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Shovel </a></li>
											<li><a href="#">Grubbing Axe </a></li>
											<li><a href="#">Agricultural Plough </a></li>
											<li><a href="#">Seed Drills</a></li>
											<li><a href="#"></a></li>
										</ul>
									</div>
								</div>
							</div>
							
							

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="seeds.php">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											<a href="seeds.php">Seeds</a>
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Gymnosperms</a></li>
											<li><a href="#">Angiosperms</a></li>
											<li><a href="#"></a></li>
											<li><a href="#"></a></li>
											<li><a href="#"></a></li>
										</ul>
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="fertillizers.php">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											<a href="fertillizers.php">Fertillizers</a>
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">ammonium sulphate (AS)</a></li>
											<li><a href="#">urea</a></li>
											<li><a href="#">calcium ammonium nitrate (CAN)</a></li>
											<li><a href="#">ammonium chloride</a></li>
											<li><a href="#">single superphosphate (SSP)</a></li>
										</ul>
									</div>
								</div>
							</div>

						

					
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						

					
					</div>
				</div>
				
				
	
<?php

	require 'footer.php';
?>