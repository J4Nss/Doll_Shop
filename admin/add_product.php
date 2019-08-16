<?php
  require "../connection.php";
  $name_product = $_REQUEST["name_product"];
  $price = $_REQUEST["price"];
  $stock = $_REQUEST["stock"];
  $target_dir = "../img/";
  $img_name = basename($_FILES["fileToUpload"]["name"]);
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
  $sql = "INSERT INTO doll( name, price, in_stock, image) VALUES ('" . $name_product . "','" . $price . "','" . $stock . "','".$img_name."')";
  $query = mysqli_query($conn, $sql);
  if ($query) {
    header ("location:product.php");
  }
?>