<?php
  require "../connection.php";
  require "get_product_by_id.php";
  // echo $_GET["id_doll"];
  // print_r($doll);
  $sql = "DELETE FROM doll WHERE Id_doll = '".$_GET["id_doll"]."' ";
  $query = mysqli_query($conn,$sql);
  $target_dir = "../img/";
  if($query) {
    unlink($target_dir . $doll["image"]); //delete image
    header ("location:product.php");
  }
?>