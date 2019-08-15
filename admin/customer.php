<html>
    <body>
<?php
session_start();
if(empty($_SESSION["user"])){
  header( "location:login.html" );
  exit(0);
}else {
require("../connection.php");
require("nav.php");
}
?>   
   
    </body>
</html>