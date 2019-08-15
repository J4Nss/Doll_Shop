<?php
  $user = $_REQUEST["username"];
  $pass = $_REQUEST["password"];
  if($user === "admin" and $pass === 123456){
    echo "sadasd";
  }else {
    echo "else";
    header( "location: login.php" );
    exit(0);
  }
?>