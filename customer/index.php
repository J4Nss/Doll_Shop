<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Bootstrap E-commerce Templates</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.html" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="./logout.php">Logout</a>					
						</ul>
					</nav>
				</div>
			</section>
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
												<li class="span4" data-toggle="modal" data-taget="#exampleModalCenter" >
													<div class="product-box">
														<span class="sale_tag" ></span>
														<?php
														echo "<p><a data-target='#exampleModalCenter'><img src=../img/".$value['image']."></a></p>'";
														echo "<h3 class='price'>".$value['name']."</h3>";
														echo "<p class='price'> IN STOCK : ".$value['in_stock']."</p>";
														echo "<p class='price'> PRICE : ".$value['price']."</p>";
														echo "<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#exampleModalCenter'>Add</button>";
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
			<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Add Product</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
								</div>
								<div class="modal-body">
								<form action="add_product.php" method="post" enctype="multipart/form-data">
						
                    <label class="col-lg-3 col-md-3 col-sm-1">Name </label>
                    <input class="form-control col-lg-8 col-md-8 col-sm-1" type="text" name="name_product">
										<label class="col-lg-3 col-md-3 col-sm-1">Price: </label>
                    <input class="form-control col-lg-8 col-md-8 col-sm-1" type="number" name="price">
                    <label class="col-lg-3 col-md-3 col-sm-1">Stock: </label>
										<input class="form-control col-lg-8 col-md-8 col-sm-1" type="number" name="stock">
										<div class="modal-footer">
                  	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  	<button class="btn btn-primary" type="submit">Add</button>
                		</div>		
								</form>
                
              	</div>
            </div>
          </div>
        </div>
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
