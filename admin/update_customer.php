<?php
require("../connection.php");

if($_POST["Id_customer"]==''){
	echo "<script type='text/javascript'>";  
	echo "alert('Error Contact !!');";
	echo "window.location = 'edit_customer.php'; "; 
	echo "</script>";
	}
	$Id_customer = $_POST["Id_customer"];
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$tel = $_POST["tel"];
	$address = $_POST["address"];	
	
	$sql = "UPDATE customer SET  
			firstname='$firstname' ,
			lastname='$lastname' , 
			tel=$tel ,
			address='$address'
			WHERE Id_customer=$Id_customer ";

 $result = mysqli_query($conn, $sql) or die ("Error in query : $sql ");
 
 mysqli_close($conn);
 if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Update Successfully');";
	echo "window.location = 'edit_customer.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
    echo "window.location = 'edit_customer.php'; ";
	echo "</script>";
}
?>

