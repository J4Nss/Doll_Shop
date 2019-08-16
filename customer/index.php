<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Bootstrap E-commerce Templates</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		
	</head>
    <body>		
		<!-- <div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
				</div>
			</div>
		</div> -->
		<div id="wrapper" class="container">
			<?php require "nav.php" ?>
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="themes/images/carousel/banner-1.jpg" alt="" />
						</li>
						<li>
							<img src="themes/images/carousel/banner-2.jpg" alt="" />
							<div class="intro">
								<h1>Mid season sale</h1>
								<p><span>Up to 50% Off</span></p>
								<p><span>On selected items online and in stores</span></p>
							</div>
						</li>
					</ul>
				</div>			
			</section>
			<section class="header_text">
				We stand for top quality templates. Our genuine developers always optimized bootstrap commercial templates. 
				<br/>Don't miss to use our cheap abd best bootstrap templates.
			</section>
			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">
											<?php require("../connection.php");
											$sql = "SELECT * from doll ;";
											$query = mysqli_query($conn, $sql);
											$result_all = mysqli_fetch_all($query, MYSQLI_ASSOC);
											// print_r($result_all);
											foreach($result_all as $key => $value){
											 ?>
												<li class="span4">
													<div class="product-box">
														<span class="sale_tag" ></span>
														<?php
														echo "<p><a href='detail_product.php?index=".$value['Id_doll']."'><img src=../img/".$value['image']."></a></p>'";
														echo "<h3 class='price'>".$value['name']."</h3>";
														echo "<p class='price'> IN STOCK : ".$value['in_stock']."</p>";
														echo "<p class='price'> PRICE : ".$value['price']."</p>";
														?>
													</div>
												</li>
										<?php } ?>				
											</ul>
										</div>

									</div>							
								</div>
							</div>						
						</div>
						<br/>						
						</div>		
					</div>				
				</div>
			</section>
		
			<section id="copyright">
				<span>Copyright 2013 bootstrappage template  All right reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script src="themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>
