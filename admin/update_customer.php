<html>
<head>
 <meta http-equiv="content-type" content="text/html; charset=utf-8">
</head>
<body>
<?php
require("../connection.php");
 $db = "doll_db";
 $result = mysql_select_db($db);
 if(!$result){
 die('Could not find database called register: '. mysql_error());
 }
 $Id_customer = $_POST["Id_customer"];
 $firstname = $_POST["firstname"];
 $lastname = $_POST["lastname"];
 $tel = $_POST["tel"];
 $address = $_POST["address"];
 $sql = "update 'doll_db'.'customer' set 'firstname'='".$firstname."' ,'lastname' = '".$lastname."', 'tel'='".$tel."', 'address'='".$address."' where Id_customer='".$Id_customer."'";
 $result = mysql_query($sql);
 if(!$result){
 die('Insert not success !!!: '. mysql_error());
 }
?>
<script>
location="edit_customer.php";
</script>
</body>
</html>