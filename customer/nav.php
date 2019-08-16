<section class="navbar main-menu">
<<<<<<< HEAD
				<div class="navbar-inner main-menu">				
					<a href="index.php" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
=======
				<div class="navbar-inner main-menu my_nav">	
					<div class="logo_block">		
						<a href="index.html" class="logo pull-left"><img src="../img/logo_shop.png" class="logo" alt=""></a>
						<span class="shop_name">Teddy Shop</span>
					</div>	
					<nav id="menu" class="pull-right menu_block">
>>>>>>> 5d6102a8a640420ad956086a1032d459883fb220
						<ul>
							<li><a href="./index.php">Home</a>
              <li><a href="./my_order.php">My Order</a>
							<li><a href="./history.php">History</a>
							<!-- <li><a href="#">55</a>
							<ul><a href="./logout.php">logout</a></ul> -->
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<?php
										session_start();
										echo $_SESSION["customer_username"];
									?>
								</a>
								<div class="dropdown-menu drop_menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="./logout.php">Logout</a>
								</div>
							</li>
							</ul>					
						</ul>
					</nav>
				</div>
</section>

<style>
	.my_nav {
		height: 70px !important;
	}
	.logo_block {
		display: inline-flex;
	}
	.logo {
		width: 70px;
	}
	.shop_name {
		color: tomato;
		font-weight: bold;
	}
	.menu_block {
		margin-top: 1%;
	}
	.drop_menu {
		padding-left: 20%;
	}
</style>
			