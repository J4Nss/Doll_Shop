
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
		
		
		<link href="themes/css/main.css" rel="stylesheet"/>
		<link href="themes/css/jquery.fancybox.css" rel="stylesheet"/>
				
		
		<script src="/themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<script src="themes/js/jquery.fancybox.js"></script>
	
	</head>
    <body>	
		<div id="wrapper" class="container">
		<?php require "nav.php"; 
		require("../connection.php");
		$index = $_GET["index"];
		$sql = "SELECT * from doll where Id_doll = '$index';";
		$query = mysqli_query($conn, $sql);
		$result_all = mysqli_fetch_array($query, MYSQLI_ASSOC);?>
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
				<h4><span>Product Detail</span></h4>
      </section>
      
			<section class="main-content">				
				<div class="row">						
					<div class="span12">
						<div class="row">
						<?php 
							echo "<div class='span9'>";
							echo	"<a href='./img/".$result_all['image']."' class='thumbnail' data-fancybox-group='group1' title='Description 1'><img src='../img/".$result_all['image']."'></a>";
							echo "</div>";
							echo "<div class='span3'>";
              
								echo "<address>";
								echo	"<strong>Name: </strong> <span>".$result_all['name']."</span><br>";
								echo	"<strong>In_Stock: </strong><span>".$result_all['in_stock']."</span><br>";							
								echo "</address>";
                echo "<h4><strong>Price: ".$result_all['price']."</strong></h4>";
                ?>
							</div>
							<div class="span3">
								<form class="form-inline">
									<label>Qty:</label>
									<input type="text" class="span1" placeholder="1">
									<button class="btn btn-inverse" type="submit">Add to order</button>
								</form>
							</div>							
						</div>
						
					</div>
					
				</div>
			</section>		
			
		</div>
		</div>
		<script src="themes/js/common.js"></script>
		<script type="text/javascript">
			$(function () {
				$('#myTab a:first').tab('show');
				$('#myTab a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				})
			})
			$(document).ready(function() {
				$('.thumbnail').fancybox({
					openEffect  : 'none',
					closeEffect : 'none'
				});
				
				$('#myCarousel-2').carousel({
                    interval: 2500
                });								
			});
			
		</script>
    </body>
</html>