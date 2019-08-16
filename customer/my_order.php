<?php
  session_start();
  // echo "<pre>";
  // print_r ($_SESSION['Order']);
  // session_destroy();
  // header("location: index.php");
  require("../connection.php");
  $sql = "SELECT * from doll";
  $query = mysqli_query($conn, $sql);
  $result_all = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<html>
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
    <?php
    require "nav.php";
    print_r($_SESSION['Order']);
        if($_SESSION['Order']){
          foreach($_SESSION['Order'] as $key => $value){
            foreach($result_all as $number => $item){
              if($value == $result_all[$number]['Id_doll']){
        ?>
         <li class="span4">
           <div class="product-box">
             <span class="sale_tag" ></span>
             <?php
             echo "<p><img src=../img/".$result_all[$number]['image']."></p>'";
             echo "<h3 class='price'>".$result_all[$number]['name']."</h3>";
             echo "<p class='price'> IN STOCK : ".$result_all[$number]['in_stock']."</p>";
             echo "<p class='price'> PRICE : ".$result_all[$number]['price']."</p>";
             echo "<input type='text' name='Qty'></input>";
             echo "<b>"
             ?>
           </div>
         </li>
     <?php }}}} ?>
  </body>
</html>