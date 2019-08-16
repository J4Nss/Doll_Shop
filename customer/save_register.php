<?php

require("../connection.php");

if(trim($_POST["username"]) == "")

{

    echo "<script type='text/javascript'>";
    echo "alert('Please input Username!');";
    echo "window.location = 'register.html'; ";
    echo "</script>";

exit();

}

 

if(trim($_POST["password"]) == "")

{

    echo "<script type='text/javascript'>";
    echo "alert('Please input Password!');";
    echo "window.location = 'register.html'; ";
    echo "</script>";

exit();

}  

 

if($_POST["password"] != $_POST["confirm"])

{

    echo "<script type='text/javascript'>";
    echo "alert('your confirm password is in again!');";
    echo "window.location = 'register.html'; ";
    echo "</script>";

exit();

}

 

if(trim($_POST["firstname"]) == "")

{

echo "<script type='text/javascript'>";
echo "alert('Please input firstname!');";
echo "window.location = 'register.html'; ";
echo "</script>";

exit();

}  

if(trim($_POST["lastname"]) == "")

{

    echo "<script type='text/javascript'>";
    echo "alert('Please input lastname !');";
    echo "window.location = 'register.html'; ";
    echo "</script>";

exit();

}  

if(trim($_POST["tel"]) == "")

{

    echo "<script type='text/javascript'>";
    echo "alert('Please input tel!');";
    echo "window.location = 'register.html'; ";
    echo "</script>";

exit();

}  

if(trim($_POST["address"]) == "")

{

    echo "<script type='text/javascript'>";
    echo "alert('Please input address!');";
    echo "window.location = 'register.html'; ";
    echo "</script>";

exit();

}  


 

$strSQL = "SELECT * FROM customer WHERE username = '".trim($_POST['username'])."' ";

$objQuery = mysqli_query($conn,$strSQL);

$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

if($objResult)

{

echo "Username already exists!";

}

else

{  

$strSQL = "INSERT INTO customer (username,password,firstname,lastname,tel,address) VALUES ('".$_POST["username"]."',

'".$_POST["password"]."','".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["tel"]."','".$_POST["address"]."')";

$objQuery = mysqli_query($conn,$strSQL);

echo "<script type='text/javascript'>";
echo "alert('Register Complete!');";
echo "window.location = 'login.html'; ";
echo "</script>";

}

?>