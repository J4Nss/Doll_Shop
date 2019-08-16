<?php
  require "../connection.php";
  $sql = "SELECT * FROM doll WHERE Id_doll=".$_GET['id_doll'].";";
  $query = mysqli_query($conn, $sql);
  $doll = mysqli_fetch_array($query, MYSQLI_ASSOC);
  // print_r($doll);
?>