<?php
  require("../connection.php");
  
  $user = $_REQUEST["username"];
  $pass = $_REQUEST["password"];
  $sql = "SELECT 'username', 'password' from admin where username = '".$user."' and password = '".$pass."'";
  // echo $sql;
  $query = mysqli_query($conn, $sql);
  $result_all = mysqli_fetch_array($query, MYSQLI_ASSOC);
  // print_r($result_all);


  if($result_all){
    session_start();
    $_SESSION["user"] = $user;
    // print_r ($_SESSION["user"]);
    session_write_close(); 
    header( "location:product.php" );
    exit(0);
  }else {
    header( "location:login.html" );
    exit(0);
  }
?>