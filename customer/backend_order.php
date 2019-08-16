<?php
  require("../connection.php");
  $id_product = $_REQUEST['id'];
  $sql = "SELECT * from doll where Id_doll = '".$id_product."'";
  $query = mysqli_query($conn, $sql);
  $result_all = mysqli_fetch_array($query, MYSQLI_ASSOC);
  // echo $result_all['name'];
  session_start();
  if(!empty($_SESSION["Order"])){
  foreach($_SESSION["Order"] as $id){
    echo "asd";
    if($id == $id_product){
      // $_SESSION["Order"][] = $id_product;
      header("location: index.php");
    } else {
      $_SESSION["Order"][] = $id_product;
    }
  }
} else {
  $_SESSION["Order"][] = $id_product;
}
  
  header("location: index.php");
?>