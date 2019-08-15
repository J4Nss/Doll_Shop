<?php
  require("../connection.php");
  session_start();
  $user = $_REQUEST["username"];
  $pass = $_REQUEST["password"];
  $sql = "SELECT 'username', 'password' from admin where username = '".$user."' and password = '".$pass."'";
  // echo $sql;
  $query = mysqli_query($conn, $sql);
  $result_all = mysqli_fetch_array($query, MYSQLI_ASSOC);
  // print_r($result_all);


  if($result_all){
    $_SESSION["user"] = $user;
    // print_r ($_SESSION["user"]);
    session_write_close();
  }else {
    header( "location: " );
    exit(0);
  }
?>