<?php
$serverName = "192.168.20.91";
$userName = "root";
$userPassword = "";
$dbName = "doll_db";

$conn = mysqli_connect(
    $serverName,
    $userName,
    $userPassword,
    $dbName
);
// if(@mysqli_connect_errno()){
//     echo "Database Connect Failed : " . @mysqli_connect_error();

// }else{
//     echo "Database Connected.";
// }

?>