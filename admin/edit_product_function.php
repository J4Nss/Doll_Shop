<?php
  require "../connection.php";
  $target_dir = "../img/";
  echo $_FILES["fileToUpload"]["name"];
  // echo $_REQUEST["id_product"];
  echo $_REQUEST["old_image"];

  if(!empty($_FILES["fileToUpload"]["name"])) {
    // echo "has file";
    unlink($target_dir . $_REQUEST["old_image"]); //delete image
    $img_name = basename($_FILES["fileToUpload"]["name"]);
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file); //upload image
    $sql = "UPDATE doll SET name = '" . $_REQUEST["name_product"]."', price='".$_REQUEST["price"]."', in_stock='".$_REQUEST["stock"]."', image='".$img_name. "' WHERE Id_doll = '" . $_REQUEST["id_product"] . "' ";
    $query = mysqli_query($conn, $sql);
  } else {
    // echo "no file";
    $sql = "UPDATE doll SET name = '" . $_REQUEST["name_product"]."', price='".$_REQUEST["price"]."', in_stock='".$_REQUEST["stock"]."' WHERE Id_doll = '" . $_REQUEST["id_product"] . "' ";
    $query = mysqli_query($conn, $sql);
  }

  if ($query) {
    header ("location:product.php");
  }
?>